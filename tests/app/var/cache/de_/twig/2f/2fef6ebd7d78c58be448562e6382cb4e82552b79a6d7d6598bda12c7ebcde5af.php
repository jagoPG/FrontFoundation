<?php

/* node_modules/fsevents/node_modules/request/lib/cookies.js */
class __TwigTemplate_5004149aaff9c82e4ae8d8436d2125873bad7ec38a692c00f1e0c52a8d12b4f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d349eda0f4544831f9c17de909d0daf6b83a2dc299c495d45c0bd6d9fb836223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d349eda0f4544831f9c17de909d0daf6b83a2dc299c495d45c0bd6d9fb836223->enter($__internal_d349eda0f4544831f9c17de909d0daf6b83a2dc299c495d45c0bd6d9fb836223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/request/lib/cookies.js"));

        // line 1
        echo "'use strict'

var tough = require('tough-cookie')

var Cookie = tough.Cookie
  , CookieJar = tough.CookieJar


exports.parse = function(str) {
  if (str && str.uri) {
    str = str.uri
  }
  if (typeof str !== 'string') {
    throw new Error('The cookie function only accepts STRING as param')
  }
  return Cookie.parse(str, {loose: true})
}

// Adapt the sometimes-Async api of tough.CookieJar to our requirements
function RequestJar(store) {
  var self = this
  self._jar = new CookieJar(store, {looseMode: true})
}
RequestJar.prototype.setCookie = function(cookieOrStr, uri, options) {
  var self = this
  return self._jar.setCookieSync(cookieOrStr, uri, options || {})
}
RequestJar.prototype.getCookieString = function(uri) {
  var self = this
  return self._jar.getCookieStringSync(uri)
}
RequestJar.prototype.getCookies = function(uri) {
  var self = this
  return self._jar.getCookiesSync(uri)
}

exports.jar = function(store) {
  return new RequestJar(store)
}
";
        
        $__internal_d349eda0f4544831f9c17de909d0daf6b83a2dc299c495d45c0bd6d9fb836223->leave($__internal_d349eda0f4544831f9c17de909d0daf6b83a2dc299c495d45c0bd6d9fb836223_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/request/lib/cookies.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

var tough = require('tough-cookie')

var Cookie = tough.Cookie
  , CookieJar = tough.CookieJar


exports.parse = function(str) {
  if (str && str.uri) {
    str = str.uri
  }
  if (typeof str !== 'string') {
    throw new Error('The cookie function only accepts STRING as param')
  }
  return Cookie.parse(str, {loose: true})
}

// Adapt the sometimes-Async api of tough.CookieJar to our requirements
function RequestJar(store) {
  var self = this
  self._jar = new CookieJar(store, {looseMode: true})
}
RequestJar.prototype.setCookie = function(cookieOrStr, uri, options) {
  var self = this
  return self._jar.setCookieSync(cookieOrStr, uri, options || {})
}
RequestJar.prototype.getCookieString = function(uri) {
  var self = this
  return self._jar.getCookieStringSync(uri)
}
RequestJar.prototype.getCookies = function(uri) {
  var self = this
  return self._jar.getCookiesSync(uri)
}

exports.jar = function(store) {
  return new RequestJar(store)
}
", "node_modules/fsevents/node_modules/request/lib/cookies.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/request/lib/cookies.js");
    }
}
