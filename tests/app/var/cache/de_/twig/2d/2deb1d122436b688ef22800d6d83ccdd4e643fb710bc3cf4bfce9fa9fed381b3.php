<?php

/* node_modules/express/lib/middleware/query.js */
class __TwigTemplate_369589fc022a3f1cd079fb661b74e583a7d274fe8dffadf82cfc3270bcae9c53 extends Twig_Template
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
        $__internal_f22aaa978d0ad6ba8471bf898b00c9dc7e8b505b23be22dbb5f10de99f2963ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22aaa978d0ad6ba8471bf898b00c9dc7e8b505b23be22dbb5f10de99f2963ae->enter($__internal_f22aaa978d0ad6ba8471bf898b00c9dc7e8b505b23be22dbb5f10de99f2963ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/express/lib/middleware/query.js"));

        // line 1
        echo "/*!
 * express
 * Copyright(c) 2009-2013 TJ Holowaychuk
 * Copyright(c) 2013 Roman Shtylman
 * Copyright(c) 2014-2015 Douglas Christopher Wilson
 * MIT Licensed
 */

'use strict';

/**
 * Module dependencies.
 */

var merge = require('utils-merge')
var parseUrl = require('parseurl');
var qs = require('qs');

/**
 * @param {Object} options
 * @return {Function}
 * @api public
 */

module.exports = function query(options) {
  var opts = merge({}, options)
  var queryparse = qs.parse;

  if (typeof options === 'function') {
    queryparse = options;
    opts = undefined;
  }

  if (opts !== undefined && opts.allowPrototypes === undefined) {
    // back-compat for qs module
    opts.allowPrototypes = true;
  }

  return function query(req, res, next){
    if (!req.query) {
      var val = parseUrl(req).query;
      req.query = queryparse(val, opts);
    }

    next();
  };
};
";
        
        $__internal_f22aaa978d0ad6ba8471bf898b00c9dc7e8b505b23be22dbb5f10de99f2963ae->leave($__internal_f22aaa978d0ad6ba8471bf898b00c9dc7e8b505b23be22dbb5f10de99f2963ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/express/lib/middleware/query.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*!
 * express
 * Copyright(c) 2009-2013 TJ Holowaychuk
 * Copyright(c) 2013 Roman Shtylman
 * Copyright(c) 2014-2015 Douglas Christopher Wilson
 * MIT Licensed
 */

'use strict';

/**
 * Module dependencies.
 */

var merge = require('utils-merge')
var parseUrl = require('parseurl');
var qs = require('qs');

/**
 * @param {Object} options
 * @return {Function}
 * @api public
 */

module.exports = function query(options) {
  var opts = merge({}, options)
  var queryparse = qs.parse;

  if (typeof options === 'function') {
    queryparse = options;
    opts = undefined;
  }

  if (opts !== undefined && opts.allowPrototypes === undefined) {
    // back-compat for qs module
    opts.allowPrototypes = true;
  }

  return function query(req, res, next){
    if (!req.query) {
      var val = parseUrl(req).query;
      req.query = queryparse(val, opts);
    }

    next();
  };
};
", "node_modules/express/lib/middleware/query.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/express/lib/middleware/query.js");
    }
}
