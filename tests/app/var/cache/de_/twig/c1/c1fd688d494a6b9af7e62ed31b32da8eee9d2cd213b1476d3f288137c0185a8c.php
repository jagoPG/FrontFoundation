<?php

/* node_modules/express/lib/middleware/init.js */
class __TwigTemplate_c40c601ec3580cdd52b5f4d168c9f3aed00adb5b8a089e177d7941acb7baab65 extends Twig_Template
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
        $__internal_a70ac3b4ce9687fbad8fa4047b189ad9f12422472b22c6ca53962e1b25cc5125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70ac3b4ce9687fbad8fa4047b189ad9f12422472b22c6ca53962e1b25cc5125->enter($__internal_a70ac3b4ce9687fbad8fa4047b189ad9f12422472b22c6ca53962e1b25cc5125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/express/lib/middleware/init.js"));

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
 * @private
 */

var setPrototypeOf = require('setprototypeof')

/**
 * Initialization middleware, exposing the
 * request and response to each other, as well
 * as defaulting the X-Powered-By header field.
 *
 * @param {Function} app
 * @return {Function}
 * @api private
 */

exports.init = function(app){
  return function expressInit(req, res, next){
    if (app.enabled('x-powered-by')) res.setHeader('X-Powered-By', 'Express');
    req.res = res;
    res.req = req;
    req.next = next;

    setPrototypeOf(req, app.request)
    setPrototypeOf(res, app.response)

    res.locals = res.locals || Object.create(null);

    next();
  };
};

";
        
        $__internal_a70ac3b4ce9687fbad8fa4047b189ad9f12422472b22c6ca53962e1b25cc5125->leave($__internal_a70ac3b4ce9687fbad8fa4047b189ad9f12422472b22c6ca53962e1b25cc5125_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/express/lib/middleware/init.js";
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
 * @private
 */

var setPrototypeOf = require('setprototypeof')

/**
 * Initialization middleware, exposing the
 * request and response to each other, as well
 * as defaulting the X-Powered-By header field.
 *
 * @param {Function} app
 * @return {Function}
 * @api private
 */

exports.init = function(app){
  return function expressInit(req, res, next){
    if (app.enabled('x-powered-by')) res.setHeader('X-Powered-By', 'Express');
    req.res = res;
    res.req = req;
    req.next = next;

    setPrototypeOf(req, app.request)
    setPrototypeOf(res, app.response)

    res.locals = res.locals || Object.create(null);

    next();
  };
};

", "node_modules/express/lib/middleware/init.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/express/lib/middleware/init.js");
    }
}
