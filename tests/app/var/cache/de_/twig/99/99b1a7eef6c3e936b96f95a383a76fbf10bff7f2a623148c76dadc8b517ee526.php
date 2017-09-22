<?php

/* node_modules/fresh/index.js */
class __TwigTemplate_9037d3e88efa0a255e9651f8a6c36ce4ffef4a237133d51a4a937ca1bf99fb5a extends Twig_Template
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
        $__internal_51d00e5913e033b282bf4bbb0831d5db7c6a892f1310bef014e48b60cb26db6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d00e5913e033b282bf4bbb0831d5db7c6a892f1310bef014e48b60cb26db6f->enter($__internal_51d00e5913e033b282bf4bbb0831d5db7c6a892f1310bef014e48b60cb26db6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fresh/index.js"));

        // line 1
        echo "/*!
 * fresh
 * Copyright(c) 2012 TJ Holowaychuk
 * Copyright(c) 2016-2017 Douglas Christopher Wilson
 * MIT Licensed
 */

'use strict'

/**
 * RegExp to check for no-cache token in Cache-Control.
 * @private
 */

var CACHE_CONTROL_NO_CACHE_REGEXP = /(?:^|,)\\s*?no-cache\\s*?(?:,|\$)/

/**
 * Simple expression to split token list.
 * @private
 */

var TOKEN_LIST_REGEXP = / *, */

/**
 * Module exports.
 * @public
 */

module.exports = fresh

/**
 * Check freshness of the response using request and response headers.
 *
 * @param {Object} reqHeaders
 * @param {Object} resHeaders
 * @return {Boolean}
 * @public
 */

function fresh (reqHeaders, resHeaders) {
  // fields
  var modifiedSince = reqHeaders['if-modified-since']
  var noneMatch = reqHeaders['if-none-match']

  // unconditional request
  if (!modifiedSince && !noneMatch) {
    return false
  }

  // Always return stale when Cache-Control: no-cache
  // to support end-to-end reload requests
  // https://tools.ietf.org/html/rfc2616#section-14.9.4
  var cacheControl = reqHeaders['cache-control']
  if (cacheControl && CACHE_CONTROL_NO_CACHE_REGEXP.test(cacheControl)) {
    return false
  }

  // if-none-match
  if (noneMatch && noneMatch !== '*') {
    var etag = resHeaders['etag']
    var etagStale = !etag || noneMatch.split(TOKEN_LIST_REGEXP).every(function (match) {
      return match !== etag && match !== 'W/' + etag && 'W/' + match !== etag
    })

    if (etagStale) {
      return false
    }
  }

  // if-modified-since
  if (modifiedSince) {
    var lastModified = resHeaders['last-modified']
    var modifiedStale = !lastModified || Date.parse(lastModified) > Date.parse(modifiedSince)

    if (modifiedStale) {
      return false
    }
  }

  return true
}
";
        
        $__internal_51d00e5913e033b282bf4bbb0831d5db7c6a892f1310bef014e48b60cb26db6f->leave($__internal_51d00e5913e033b282bf4bbb0831d5db7c6a892f1310bef014e48b60cb26db6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fresh/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * fresh
 * Copyright(c) 2012 TJ Holowaychuk
 * Copyright(c) 2016-2017 Douglas Christopher Wilson
 * MIT Licensed
 */

'use strict'

/**
 * RegExp to check for no-cache token in Cache-Control.
 * @private
 */

var CACHE_CONTROL_NO_CACHE_REGEXP = /(?:^|,)\\s*?no-cache\\s*?(?:,|\$)/

/**
 * Simple expression to split token list.
 * @private
 */

var TOKEN_LIST_REGEXP = / *, */

/**
 * Module exports.
 * @public
 */

module.exports = fresh

/**
 * Check freshness of the response using request and response headers.
 *
 * @param {Object} reqHeaders
 * @param {Object} resHeaders
 * @return {Boolean}
 * @public
 */

function fresh (reqHeaders, resHeaders) {
  // fields
  var modifiedSince = reqHeaders['if-modified-since']
  var noneMatch = reqHeaders['if-none-match']

  // unconditional request
  if (!modifiedSince && !noneMatch) {
    return false
  }

  // Always return stale when Cache-Control: no-cache
  // to support end-to-end reload requests
  // https://tools.ietf.org/html/rfc2616#section-14.9.4
  var cacheControl = reqHeaders['cache-control']
  if (cacheControl && CACHE_CONTROL_NO_CACHE_REGEXP.test(cacheControl)) {
    return false
  }

  // if-none-match
  if (noneMatch && noneMatch !== '*') {
    var etag = resHeaders['etag']
    var etagStale = !etag || noneMatch.split(TOKEN_LIST_REGEXP).every(function (match) {
      return match !== etag && match !== 'W/' + etag && 'W/' + match !== etag
    })

    if (etagStale) {
      return false
    }
  }

  // if-modified-since
  if (modifiedSince) {
    var lastModified = resHeaders['last-modified']
    var modifiedStale = !lastModified || Date.parse(lastModified) > Date.parse(modifiedSince)

    if (modifiedStale) {
      return false
    }
  }

  return true
}
", "node_modules/fresh/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fresh/index.js");
    }
}
