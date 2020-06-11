"use strict";

(function ($) {
  // Function here
  const $devRoot = function () {
    return "projsk";
  };

  const $url = function () {
    return window.location;
  };

  const $base = function () {
    var protocol = $url().protocol;
    var host = $url().host;
    var pathName = $url().pathname;
    var split = pathName.split("/", 2);
    var base_url = "";

    if (split[1] == $devRoot()) {
      base_url = `${protocol}//${host}/${$devRoot()}/`;
    } else {
      base_url = `${protocol}//${host}/`;
    }

    return base_url;
  };

  $.url = function () {
    return $base();
  };
})(jQuery);
