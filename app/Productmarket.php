<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productmarket extends Model
{
    protected $fillable =['id', 'imageone', 'imagetwo', 'imagethree', 'imagefour', 'title', 'description', 'priceone', 'pricetwo', 'stocklevel', 'retailername', 'salecategory', 'productcategory', 'brand', 'vendorid', 'size', 'color'];
}
