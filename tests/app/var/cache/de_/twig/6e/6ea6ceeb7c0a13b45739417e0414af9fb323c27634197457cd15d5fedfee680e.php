<?php

/* node_modules/constants-browserify/test.js */
class __TwigTemplate_8e5fe23e8a85dd0ad3b4f52a9094e7d814127b8db99b81a07e37f8355205ea03 extends Twig_Template
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
        $__internal_9468be8bc028c48d77470b27e8af24a5360b67a58def14f1eb08b22b74635043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9468be8bc028c48d77470b27e8af24a5360b67a58def14f1eb08b22b74635043->enter($__internal_9468be8bc028c48d77470b27e8af24a5360b67a58def14f1eb08b22b74635043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/constants-browserify/test.js"));

        // line 1
        echo "'use strict';

var Assert = require('assert')
var Constants = require('./')

try {
  var nodeConstants = require('constants')

  Assert.deepEqual(nodeConstants, Constants, 'The constants file was not equal')
}

catch (e) {
  console.error(e)
  console.error('\\nTests failed!')
  process.exit(1)
}

console.info('Tests passed!')
";
        
        $__internal_9468be8bc028c48d77470b27e8af24a5360b67a58def14f1eb08b22b74635043->leave($__internal_9468be8bc028c48d77470b27e8af24a5360b67a58def14f1eb08b22b74635043_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/constants-browserify/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var Assert = require('assert')
var Constants = require('./')

try {
  var nodeConstants = require('constants')

  Assert.deepEqual(nodeConstants, Constants, 'The constants file was not equal')
}

catch (e) {
  console.error(e)
  console.error('\\nTests failed!')
  process.exit(1)
}

console.info('Tests passed!')
", "node_modules/constants-browserify/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/constants-browserify/test.js");
    }
}
