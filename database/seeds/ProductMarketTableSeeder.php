<?php

use Illuminate\Database\Seeder;

class ProductMarketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aiproduct = new \App\Productmarket([
          'imageone' => 'http://netutec.com/MBP/custom-assets/img/indexmarket/featured-motorbike-products/motorbike-clothing-sale-1.jpg',
          'imagetwo' => 'addpathhere',
          'imagethree' => 'addpathhere',
          'imagefour' => 'addpathhere',
          'title' => 'Suicide Machine Tee',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
          'priceone' => 29.99,
          'pricetwo' => 15.99,
          'stocklevel' => 10,
          'retailername' => 'Suicide Machine Company',
          'salecategory' => 'Clearance Item',
          'productcategory' => 'Apparel',
          'brand' => 'Suicide Machine Company',
          'vendorid' => 14,
          'size' => 'Small',
          'color' => 'Black',

        ]);
        $aiproduct->save();

        $aiproduct = new \App\Productmarket([
          'imageone' => 'http://netutec.com/MBP/custom-assets/img/indexmarket/featured-motorbike-products/motorbike-clothing-sale-2.jpg',
          'imagetwo' => 'addpathhere',
          'imagethree' => 'addpathhere',
          'imagefour' => 'addpathhere',
          'title' => 'SS Cap',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'priceone' => 59.99,
          'pricetwo' => 35.99,
          'stocklevel' => 100,
          'retailername' => 'SS Gear',
          'salecategory' => 'Clearance Item',
          'productcategory' => 'Apparel',
          'brand' => 'SS Gear',
          'vendorid' => 15,
          'size' => 'Medium',
          'color' => 'Grey',

        ]);
        $aiproduct->save();

        $aiproduct = new \App\Productmarket([
          'imageone' => 'http://netutec.com/MBP/custom-assets/img/indexmarket/featured-motorbike-products/motorbike-clothing-sale-3.jpg',
          'imagetwo' => 'addpathhere',
          'imagethree' => 'addpathhere',
          'imagefour' => 'addpathhere',
          'title' => 'Grifter Pro Gloves',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'priceone' => 84.99,
          'pricetwo' => 69.99,
          'stocklevel' => 15,
          'retailername' => 'Grifter',
          'salecategory' => 'Clearance Item',
          'productcategory' => 'Apparel',
          'brand' => 'Grifter',
          'vendorid' => 16,
          'size' => 'Small',
          'color' => 'Brown',

        ]);
        $aiproduct->save();

        $aiproduct = new \App\Productmarket([
          'imageone' => 'http://netutec.com/MBP/custom-assets/img/indexmarket/featured-motorbike-products/motorbike-clothing-sale-1.jpg',
          'imagetwo' => 'addpathhere',
          'imagethree' => 'addpathhere',
          'imagefour' => 'addpathhere',
          'title' => 'Suicide Machine Tee',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua',
          'priceone' => 29.99,
          'pricetwo' => 15.99,
          'stocklevel' => 10,
          'retailername' => 'Suicide Machine Company',
          'salecategory' => 'Clearance Item',
          'productcategory' => 'Apparel',
          'brand' => 'Suicide Machine Company',
          'vendorid' => 17,
          'size' => 'Small',
          'color' => 'Black',

        ]);
        $aiproduct->save();

        $aiproduct = new \App\Productmarket([
          'imageone' => 'http://netutec.com/MBP/custom-assets/img/indexmarket/featured-motorbike-products/motorbike-clothing-sale-2.jpg',
          'imagetwo' => 'addpathhere',
          'imagethree' => 'addpathhere',
          'imagefour' => 'addpathhere',
          'title' => 'SS Cap',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'priceone' => 59.99,
          'pricetwo' => 35.99,
          'stocklevel' => 100,
          'retailername' => 'SS Gear',
          'salecategory' => 'Clearance Item',
          'productcategory' => 'Apparel',
          'brand' => 'SS Gear',
          'vendorid' => 18,
          'size' => 'Medium',
          'color' => 'Grey',

        ]);
        $aiproduct->save();

        $aiproduct = new \App\Productmarket([
          'imageone' => 'http://netutec.com/MBP/custom-assets/img/indexmarket/featured-motorbike-products/motorbike-clothing-sale-3.jpg',
          'imagetwo' => 'addpathhere',
          'imagethree' => 'addpathhere',
          'imagefour' => 'addpathhere',
          'title' => 'Grifter Pro Gloves',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          'priceone' => 84.99,
          'pricetwo' => 69.99,
          'stocklevel' => 15,
          'retailername' => 'Grifter',
          'salecategory' => 'Clearance Item',
          'productcategory' => 'Apparel',
          'brand' => 'Grifter',
          'vendorid' => 19,
          'size' => 'Small',
          'color' => 'Brown',

        ]);
        $aiproduct->save();
    }
}
