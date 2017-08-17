<?php

namespace App\Http\Controllers;

use App\AiCart;
use App\Productmarket;
use App\AiOrder;
use App\AiVendorOrder;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;

class ProductMarketController extends Controller
{
    public function getMarket() {
      $aiproducts = Productmarket::all();
      return view('market.index', ['allproducts' => $aiproducts]);
    }

    public function getAddToCart(Request $request, $id) {
      $aicartitem = Productmarket::find($id);
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $aicart = new AiCart($oldCart);
      $aicart->add($aicartitem, $aicartitem->id);

      $request->session()->put('cart', $aicart);
      return redirect()->route('marketindex');
    }

    public function getReduceCartOne($id) {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $aicart = new AiCart($oldCart);
      $aicart->reduceAiCartOne($id);

      if (count($aicart->items) > 0) {
        Session::put('cart', $aicart);
      } else {
        Session::forget('cart');
      }
      return redirect()->route('aimarketcart');
    }

    public function getAiDeleteItem($id) {
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $aicart = new AiCart($oldCart);
      $aicart->deleteAiItem($id);

      if (count($aicart->items) > 0) {
        Session::put('cart', $aicart);
      } else {
        Session::forget('cart');
      }

      return redirect()->route('aimarketcart');
    }

    public function getCart() {
      if (!Session::has('cart')) {
        return view('market.aimarket-cart');
      }
      $oldCart = Session::get('cart');
      $aicart = new AiCart($oldCart);
      return view('market.aimarket-cart', ['cartitems' => $aicart->items, 'totalPrice' => $aicart->totalPrice]);
    }

    public function getCheckout() {
      if (!Session::has('cart')) {
        return view('market.aimarket-cart');
      }
      $oldCart = Session::get('cart');
      $aicart = new AiCart($oldCart);
      $aitotal = $aicart->totalPrice;
      return view('market.aicheckout', ['aitotal' => $aitotal] );
    }

    public function postCheckout(Request $request) {
      if (!Session::has('cart')) {
        return redirect()->route('aimarketcart');
      }
      $oldCart = Session::get('cart');
      $aicart = new AiCart($oldCart);

      Stripe::setApiKey('sk_test_123456789123456789');
      try {
        $aicharge = Charge::create(array(
          "amount" => $aicart->totalPrice * 100,
          "currency" => "usd",
          "source" => $request->input('stripeToken'), // obtained with Stripe.js
          "description" => "Test Charge Add User Data Here Later"
        ));

        $aiorder = new AiOrder();
        $aiorder->aicart = serialize($aicart);
        $aiorder->name = $request->input('name');
        $aiorder->address = $request->input('address');
        $aiorder->payment_id = $aicharge->id;

        Auth::user()->orders()->save($aiorder);

        /*
        $aivendorsale = new AiVendorOrder();
        $saleitems = $aicart->items;
        foreach($saleitems as $saleitem) {
          $aivendorsale->imageone = $saleitem['item'] ['imageone'];
          $aivendorsale->itemtitle = $saleitem['item'] ['title'];
          $aivendorsale->vendorid = $saleitem['item'] ['vendorid'];
        }
        $aivendorsale->save();
        */

      } catch (\Exception $e) {
        return redirect()->route('aicheckout')->with('error', $e->getMessage());
      }
      Session::forget('cart');
      return redirect()->route('marketindex')->with('success', 'Successfully Purchased Products!');
    }

}
