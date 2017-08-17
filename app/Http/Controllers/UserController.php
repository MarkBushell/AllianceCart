<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Session;

class UserController extends Controller
{
    public function getSignup() {
      return view('user.signup');
    }

    public function postSignup(Request $request) {
      $this->validate($request, [
        'email' => 'email|required|unique:aiusers',
        'password' => 'required|min:4'
      ]);

      $aiuser = new User([
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
        'firstname' => ucfirst($request->input('firstname')),
        'lastname' => ucfirst($request->input('lastname'))
      ]);
      $aiuser->save();
      Auth::login($aiuser);

      if (Session::has('aiLastUrl')) {
        $aiOldURL = Session::get('aiLastUrl');
        Session::forget('aiLastUrl');
        return redirect()->to($aiOldURL);
      }

      return redirect()->route('aicentern');
    }

    public function getSignin() {
      return view('user.signin');
    }

    public function postSignin(Request $request) {
      $this->validate($request, [
        'email' => 'email|required',
        'password' => 'required|min:4'
      ]);

      if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password') ])) {
        if (Session::has('aiLastUrl')) {
          $aiOldURL = Session::get('aiLastUrl');
          Session::forget('aiLastUrl');
          return redirect()->to($aiOldURL);
        }
        return redirect()->route('aicentern');
      }
      return redirect()->back();
    }

    public function getDashboard() {
      $aiorders = Auth::user()->orders;
      $aiorders->transform(function($order, $key) {
        $order->aicart = unserialize($order->aicart);
        return $order;
      });
      return view('user.aicenter', ['userorders' => $aiorders]);
    }

    public function aiLogout() {
      Auth::logout();
      return redirect()->route('aisignin');
    }
}
