<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
  protected $guarded = [];

  public function customer(){
    return $this->belongsTo(CustomerInformation::class, 'customer_info_id');
  }
}