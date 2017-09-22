<?php

/* node_modules/request/lib/cookies.js */
class __TwigTemplate_82df161cb6661dec6dea8fe8b4221437a2bea84eda3700524ed2abf5e61b4572 extends Twig_Template
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
        $__internal_cc93e725c9fbda2c78e4dbd0da2d2617f6c6bb64bb8ffd4076c9ae64ae5acea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc93e725c9fbda2c78e4dbd0da2d2617f6c6bb64bb8ffd4076c9ae64ae5acea2->enter($__internal_cc93e725c9fbda2c78e4dbd0da2d2617f6c6bb64bb8ffd4076c9ae64ae5acea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/request/lib/cookies.js"));

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
        
        $__internal_cc93e725c9fbda2c78e4dbd0da2d2617f6c6bb64bb8ffd4076c9ae64ae5acea2->leave($__internal_cc93e725c9fbda2c78e4dbd0da2d2617f6c6bb64bb8ffd4076c9ae64ae5acea2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/request/lib/cookies.js";
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
", "node_modules/request/lib/cookies.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/request/lib/cookies.js");
    }
}
