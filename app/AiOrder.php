<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AiOrder extends Model
{
    public function user() {
      return $this->belongsTo('App\User');
    }
}
