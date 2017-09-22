<?php

/* node_modules/graceful-fs/fs.js */
class __TwigTemplate_f3fc13bf9e7daac08853b57fc40bee94c84e5ad3fa83384a025cfdb00151827e extends Twig_Template
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
        $__internal_ff8c0d3d969a0fcc8f64afc0188aaf3c6ff60bab947360d1ebf7b57b8c4603f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8c0d3d969a0fcc8f64afc0188aaf3c6ff60bab947360d1ebf7b57b8c4603f4->enter($__internal_ff8c0d3d969a0fcc8f64afc0188aaf3c6ff60bab947360d1ebf7b57b8c4603f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/graceful-fs/fs.js"));

        // line 1
        echo "'use strict'

var fs = require('fs')

module.exports = clone(fs)

function clone (obj) {
  if (obj === null || typeof obj !== 'object')
    return obj

  if (obj instanceof Object)
    var copy = { __proto__: obj.__proto__ }
  else
    var copy = Object.create(null)

  Object.getOwnPropertyNames(obj).forEach(function (key) {
    Object.defineProperty(copy, key, Object.getOwnPropertyDescriptor(obj, key))
  })

  return copy
}
";
        
        $__internal_ff8c0d3d969a0fcc8f64afc0188aaf3c6ff60bab947360d1ebf7b57b8c4603f4->leave($__internal_ff8c0d3d969a0fcc8f64afc0188aaf3c6ff60bab947360d1ebf7b57b8c4603f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/graceful-fs/fs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

var fs = require('fs')

module.exports = clone(fs)

function clone (obj) {
  if (obj === null || typeof obj !== 'object')
    return obj

  if (obj instanceof Object)
    var copy = { __proto__: obj.__proto__ }
  else
    var copy = Object.create(null)

  Object.getOwnPropertyNames(obj).forEach(function (key) {
    Object.defineProperty(copy, key, Object.getOwnPropertyDescriptor(obj, key))
  })

  return copy
}
", "node_modules/graceful-fs/fs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/graceful-fs/fs.js");
    }
}
