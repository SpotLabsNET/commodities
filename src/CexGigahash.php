<?php

namespace Commodity;

use \Openclerk\Currencies\CommodityCurrency;

/**
 * Represents the CEX.io GHS commodity currency.
 */
class CexGigahash extends CommodityCurrency {

  function getCode() {
    return "ghs";
  }

  function getName() {
    return "CEX.io GHash";
  }

  function getURL() {
    return "https://cex.io/cloud-mining";
  }

}
