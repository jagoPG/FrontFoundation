<?php

/* node_modules/cookie-signature/index.js */
class __TwigTemplate_422bbb6d210a54d7a103846862a0dd5e763f029740baa373c7271d53345595f8 extends Twig_Template
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
        $__internal_e809e28f46eb4f73d97e36739d1bb071322474cd8b3de9f5ec706ae45cfb3510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e809e28f46eb4f73d97e36739d1bb071322474cd8b3de9f5ec706ae45cfb3510->enter($__internal_e809e28f46eb4f73d97e36739d1bb071322474cd8b3de9f5ec706ae45cfb3510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cookie-signature/index.js"));

        // line 1
        echo "/**
 * Module dependencies.
 */

var crypto = require('crypto');

/**
 * Sign the given `val` with `secret`.
 *
 * @param {String} val
 * @param {String} secret
 * @return {String}
 * @api private
 */

exports.sign = function(val, secret){
  if ('string' != typeof val) throw new TypeError(\"Cookie value must be provided as a string.\");
  if ('string' != typeof secret) throw new TypeError(\"Secret string must be provided.\");
  return val + '.' + crypto
    .createHmac('sha256', secret)
    .update(val)
    .digest('base64')
    .replace(/\\=+\$/, '');
};

/**
 * Unsign and decode the given `val` with `secret`,
 * returning `false` if the signature is invalid.
 *
 * @param {String} val
 * @param {String} secret
 * @return {String|Boolean}
 * @api private
 */

exports.unsign = function(val, secret){
  if ('string' != typeof val) throw new TypeError(\"Signed cookie string must be provided.\");
  if ('string' != typeof secret) throw new TypeError(\"Secret string must be provided.\");
  var str = val.slice(0, val.lastIndexOf('.'))
    , mac = exports.sign(str, secret);
  
  return sha1(mac) == sha1(val) ? str : false;
};

/**
 * Private
 */

function sha1(str){
  return crypto.createHash('sha1').update(str).digest('hex');
}
";
        
        $__internal_e809e28f46eb4f73d97e36739d1bb071322474cd8b3de9f5ec706ae45cfb3510->leave($__internal_e809e28f46eb4f73d97e36739d1bb071322474cd8b3de9f5ec706ae45cfb3510_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cookie-signature/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Module dependencies.
 */

var crypto = require('crypto');

/**
 * Sign the given `val` with `secret`.
 *
 * @param {String} val
 * @param {String} secret
 * @return {String}
 * @api private
 */

exports.sign = function(val, secret){
  if ('string' != typeof val) throw new TypeError(\"Cookie value must be provided as a string.\");
  if ('string' != typeof secret) throw new TypeError(\"Secret string must be provided.\");
  return val + '.' + crypto
    .createHmac('sha256', secret)
    .update(val)
    .digest('base64')
    .replace(/\\=+\$/, '');
};

/**
 * Unsign and decode the given `val` with `secret`,
 * returning `false` if the signature is invalid.
 *
 * @param {String} val
 * @param {String} secret
 * @return {String|Boolean}
 * @api private
 */

exports.unsign = function(val, secret){
  if ('string' != typeof val) throw new TypeError(\"Signed cookie string must be provided.\");
  if ('string' != typeof secret) throw new TypeError(\"Secret string must be provided.\");
  var str = val.slice(0, val.lastIndexOf('.'))
    , mac = exports.sign(str, secret);
  
  return sha1(mac) == sha1(val) ? str : false;
};

/**
 * Private
 */

function sha1(str){
  return crypto.createHash('sha1').update(str).digest('hex');
}
", "node_modules/cookie-signature/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cookie-signature/index.js");
    }
}
