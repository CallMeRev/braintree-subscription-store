<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'braintree_plan',
        'slug',
        'category_id',
        'name',
        'cpu',
        'ram',
        'disk',
        'line',
        'price',
        'premium'

    ];

    public function owner() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function getExcerpt() {
        return str_limit($this->content, 40);
    }

    public function getRouteKeyName()
  {
      return 'slug';
  }
}
