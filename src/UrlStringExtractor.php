<?php

namespace Cmaxhm\UrlStringExtractor;

class UrlStringExtractor {
  /**
   * @param string $url The URL to search in
   * @param string $startReference The string that acts as starting point to delimit the extracted string
   * @param string $endReference The string that acts as ending point to delimit the extracted string
   *
   * @return string The extracted string
   */
  static function getString($url = null, $startReference = null, $endReference = null) {
    if ($url === null || $startReference === null || $endReference === null) return false;
    
    $urlContent = file_get_contents($url);
    $offset = strlen($startReference);
    $startPosition = strpos($urlContent, $startReference) + $offset;
    $endPosition = strpos($urlContent, $endReference, $startPosition) - $startPosition;
    $result = substr($urlContent, $startPosition, $endPosition);
    $result = trim($result);
    
    return $result;
  }
}
