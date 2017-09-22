<?php

/* node_modules/gauge/error.js */
class __TwigTemplate_5a93d39773f2bd52752e6da0f84409e253e6c9f5e82ae3483ea05ed074a3b9f4 extends Twig_Template
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
        $__internal_af3729e26fdae5d28d781903fcb2deb2bf15a04c3712d5d78e3221e69ee838d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3729e26fdae5d28d781903fcb2deb2bf15a04c3712d5d78e3221e69ee838d6->enter($__internal_af3729e26fdae5d28d781903fcb2deb2bf15a04c3712d5d78e3221e69ee838d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gauge/error.js"));

        // line 1
        echo "'use strict'
var util = require('util')

var User = exports.User = function User (msg) {
  var err = new Error(msg)
  Error.captureStackTrace(err, User)
  err.code = 'EGAUGE'
  return err
}

exports.MissingTemplateValue = function MissingTemplateValue (item, values) {
  var err = new User(util.format('Missing template value \"%s\"', item.type))
  Error.captureStackTrace(err, MissingTemplateValue)
  err.template = item
  err.values = values
  return err
}

exports.Internal = function Internal (msg) {
  var err = new Error(msg)
  Error.captureStackTrace(err, Internal)
  err.code = 'EGAUGEINTERNAL'
  return err
}
";
        
        $__internal_af3729e26fdae5d28d781903fcb2deb2bf15a04c3712d5d78e3221e69ee838d6->leave($__internal_af3729e26fdae5d28d781903fcb2deb2bf15a04c3712d5d78e3221e69ee838d6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gauge/error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var util = require('util')

var User = exports.User = function User (msg) {
  var err = new Error(msg)
  Error.captureStackTrace(err, User)
  err.code = 'EGAUGE'
  return err
}

exports.MissingTemplateValue = function MissingTemplateValue (item, values) {
  var err = new User(util.format('Missing template value \"%s\"', item.type))
  Error.captureStackTrace(err, MissingTemplateValue)
  err.template = item
  err.values = values
  return err
}

exports.Internal = function Internal (msg) {
  var err = new Error(msg)
  Error.captureStackTrace(err, Internal)
  err.code = 'EGAUGEINTERNAL'
  return err
}
", "node_modules/gauge/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gauge/error.js");
    }
}
