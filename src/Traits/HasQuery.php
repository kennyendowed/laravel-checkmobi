<?php
namespace Myckhel\CheckMobi\Traits;

use Illuminate\Support\Facades\Http;

/**
 * Default Check Mobi Requests
 */
trait HasQuery
{
  public static function requestValidation($params)
  {
    return self::post("validation/request", $params)->json();
  }

  public static function verifyValidation($params)
  {
    return self::post("validation/verify", $params)->json();
  }
}