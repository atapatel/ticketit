<?php

namespace Kordy\Ticketit\Models;

use Auth;
use Jenssegers\Mongodb\Model as Model;
use Kordy\Ticketit\Models\Configuration;

class Configuration extends Model
{

  protected $collection = 'ticketit_settings';


  public $fillable = [
    'lang',
    'slug',
    'value',
    'default',
  ];

  // Null lang column if no value is being stored.
  public function setLangAttribute($lang)
  {
    $this->attributes['lang'] = trim($lang) !== '' ? $lang : null;
  }

  /**
   * The attributes that should be casted to native types.
   *
   * @var array
   */
  protected $casts = [
    'id'         =>    'integer',
    'lang'       =>    'string',
    'slug'       =>    'string',
    'value'      =>    'string',
    'default'    =>    'string'
  ];

  public static $rules = [

  ];

}
