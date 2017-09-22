<?php

/* node_modules/fsevents/node_modules/gauge/error.js */
class __TwigTemplate_5e90c1ef079cf880a41e9758e893226ca852ddac9c75ef462b5bfeeca680822d extends Twig_Template
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
        $__internal_f54ac44da07b591ccaadfb9e63103dc18582d10ef47ff1ea6addd4b7fd2db015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54ac44da07b591ccaadfb9e63103dc18582d10ef47ff1ea6addd4b7fd2db015->enter($__internal_f54ac44da07b591ccaadfb9e63103dc18582d10ef47ff1ea6addd4b7fd2db015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/gauge/error.js"));

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
        
        $__internal_f54ac44da07b591ccaadfb9e63103dc18582d10ef47ff1ea6addd4b7fd2db015->leave($__internal_f54ac44da07b591ccaadfb9e63103dc18582d10ef47ff1ea6addd4b7fd2db015_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/gauge/error.js";
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
", "node_modules/fsevents/node_modules/gauge/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/gauge/error.js");
    }
}
