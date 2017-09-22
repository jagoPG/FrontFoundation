<?php

/* node_modules/request/lib/querystring.js */
class __TwigTemplate_401656d58bdb593e5ac6ed9da4194c95f442fa11ee28d10fe3c6a5e3e3005e41 extends Twig_Template
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
        $__internal_19c961f4e73f7c7b84b14b79838704beefeda8ab911501d07f79fe2f45907fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c961f4e73f7c7b84b14b79838704beefeda8ab911501d07f79fe2f45907fc9->enter($__internal_19c961f4e73f7c7b84b14b79838704beefeda8ab911501d07f79fe2f45907fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/request/lib/querystring.js"));

        // line 1
        echo "'use strict'

var qs = require('qs')
  , querystring = require('querystring')


function Querystring (request) {
  this.request = request
  this.lib = null
  this.useQuerystring = null
  this.parseOptions = null
  this.stringifyOptions = null
}

Querystring.prototype.init = function (options) {
  if (this.lib) {return}

  this.useQuerystring = options.useQuerystring
  this.lib = (this.useQuerystring ? querystring : qs)

  this.parseOptions = options.qsParseOptions || {}
  this.stringifyOptions = options.qsStringifyOptions || {}
}

Querystring.prototype.stringify = function (obj) {
  return (this.useQuerystring)
    ? this.rfc3986(this.lib.stringify(obj,
      this.stringifyOptions.sep || null,
      this.stringifyOptions.eq || null,
      this.stringifyOptions))
    : this.lib.stringify(obj, this.stringifyOptions)
}

Querystring.prototype.parse = function (str) {
  return (this.useQuerystring)
    ? this.lib.parse(str,
      this.parseOptions.sep || null,
      this.parseOptions.eq || null,
      this.parseOptions)
    : this.lib.parse(str, this.parseOptions)
}

Querystring.prototype.rfc3986 = function (str) {
  return str.replace(/[!'()*]/g, function (c) {
    return '%' + c.charCodeAt(0).toString(16).toUpperCase()
  })
}

Querystring.prototype.unescape = querystring.unescape

exports.Querystring = Querystring
";
        
        $__internal_19c961f4e73f7c7b84b14b79838704beefeda8ab911501d07f79fe2f45907fc9->leave($__internal_19c961f4e73f7c7b84b14b79838704beefeda8ab911501d07f79fe2f45907fc9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/request/lib/querystring.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

var qs = require('qs')
  , querystring = require('querystring')


function Querystring (request) {
  this.request = request
  this.lib = null
  this.useQuerystring = null
  this.parseOptions = null
  this.stringifyOptions = null
}

Querystring.prototype.init = function (options) {
  if (this.lib) {return}

  this.useQuerystring = options.useQuerystring
  this.lib = (this.useQuerystring ? querystring : qs)

  this.parseOptions = options.qsParseOptions || {}
  this.stringifyOptions = options.qsStringifyOptions || {}
}

Querystring.prototype.stringify = function (obj) {
  return (this.useQuerystring)
    ? this.rfc3986(this.lib.stringify(obj,
      this.stringifyOptions.sep || null,
      this.stringifyOptions.eq || null,
      this.stringifyOptions))
    : this.lib.stringify(obj, this.stringifyOptions)
}

Querystring.prototype.parse = function (str) {
  return (this.useQuerystring)
    ? this.lib.parse(str,
      this.parseOptions.sep || null,
      this.parseOptions.eq || null,
      this.parseOptions)
    : this.lib.parse(str, this.parseOptions)
}

Querystring.prototype.rfc3986 = function (str) {
  return str.replace(/[!'()*]/g, function (c) {
    return '%' + c.charCodeAt(0).toString(16).toUpperCase()
  })
}

Querystring.prototype.unescape = querystring.unescape

exports.Querystring = Querystring
", "node_modules/request/lib/querystring.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/request/lib/querystring.js");
    }
}
