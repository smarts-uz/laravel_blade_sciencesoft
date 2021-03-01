<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
  public $fillable=[
    'lang',
    'lang_key',
    'lang_value',
  ];
}
