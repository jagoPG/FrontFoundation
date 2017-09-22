<?php

/* node_modules/forwarded/index.js */
class __TwigTemplate_269f07d9a1b8618e9b4d0a9a368856200efa5e11f9bf3c024424c45d98279fc3 extends Twig_Template
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
        $__internal_752eaf7d46416754b9a2571a8f4636043b1264ec9841548ba1695a7e151810f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752eaf7d46416754b9a2571a8f4636043b1264ec9841548ba1695a7e151810f1->enter($__internal_752eaf7d46416754b9a2571a8f4636043b1264ec9841548ba1695a7e151810f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/forwarded/index.js"));

        // line 1
        echo "/*!
 * forwarded
 * Copyright(c) 2014 Douglas Christopher Wilson
 * MIT Licensed
 */

'use strict'

/**
 * Simple expression to split token list.
 * @private
 */

var TOKEN_LIST_REGEXP = / *, */

/**
 * Module exports.
 * @public
 */

module.exports = forwarded

/**
 * Get all addresses in the request, using the `X-Forwarded-For` header.
 *
 * @param {object} req
 * @return {array}
 * @public
 */

function forwarded (req) {
  if (!req) {
    throw new TypeError('argument req is required')
  }

  // simple header parsing
  var proxyAddrs = (req.headers['x-forwarded-for'] || '')
    .trim()
    .split(TOKEN_LIST_REGEXP)
    .filter(Boolean)
    .reverse()
  var socketAddr = req.connection.remoteAddress
  var addrs = [socketAddr].concat(proxyAddrs)

  // return all addresses
  return addrs
}
";
        
        $__internal_752eaf7d46416754b9a2571a8f4636043b1264ec9841548ba1695a7e151810f1->leave($__internal_752eaf7d46416754b9a2571a8f4636043b1264ec9841548ba1695a7e151810f1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/forwarded/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * forwarded
 * Copyright(c) 2014 Douglas Christopher Wilson
 * MIT Licensed
 */

'use strict'

/**
 * Simple expression to split token list.
 * @private
 */

var TOKEN_LIST_REGEXP = / *, */

/**
 * Module exports.
 * @public
 */

module.exports = forwarded

/**
 * Get all addresses in the request, using the `X-Forwarded-For` header.
 *
 * @param {object} req
 * @return {array}
 * @public
 */

function forwarded (req) {
  if (!req) {
    throw new TypeError('argument req is required')
  }

  // simple header parsing
  var proxyAddrs = (req.headers['x-forwarded-for'] || '')
    .trim()
    .split(TOKEN_LIST_REGEXP)
    .filter(Boolean)
    .reverse()
  var socketAddr = req.connection.remoteAddress
  var addrs = [socketAddr].concat(proxyAddrs)

  // return all addresses
  return addrs
}
", "node_modules/forwarded/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/forwarded/index.js");
    }
}
