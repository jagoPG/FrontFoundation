<?php

/* node_modules/fsevents/node_modules/graceful-fs/fs.js */
class __TwigTemplate_9fa6b46594b1b4c0e696fa751e23a50d46427b16fc6521597a211169e70e5db9 extends Twig_Template
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
        $__internal_3110b4ff7ee6555514357390ca1d646c79fa0baec37aa2090b688dbdf851402c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3110b4ff7ee6555514357390ca1d646c79fa0baec37aa2090b688dbdf851402c->enter($__internal_3110b4ff7ee6555514357390ca1d646c79fa0baec37aa2090b688dbdf851402c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/graceful-fs/fs.js"));

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
        
        $__internal_3110b4ff7ee6555514357390ca1d646c79fa0baec37aa2090b688dbdf851402c->leave($__internal_3110b4ff7ee6555514357390ca1d646c79fa0baec37aa2090b688dbdf851402c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/graceful-fs/fs.js";
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
", "node_modules/fsevents/node_modules/graceful-fs/fs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/graceful-fs/fs.js");
    }
}
