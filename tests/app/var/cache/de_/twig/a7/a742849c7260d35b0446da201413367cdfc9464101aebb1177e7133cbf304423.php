<?php

/* node_modules/core-js/modules/_date-to-primitive.js */
class __TwigTemplate_abd8bee45190d4c138906459f400f3881841951d5bfb6a1ee031a842531a046c extends Twig_Template
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
        $__internal_21d818751efc70b54f2e492414343bfcda21bfb17453155c464f3cb0202da6d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d818751efc70b54f2e492414343bfcda21bfb17453155c464f3cb0202da6d1->enter($__internal_21d818751efc70b54f2e492414343bfcda21bfb17453155c464f3cb0202da6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_date-to-primitive.js"));

        // line 1
        echo "'use strict';
var anObject = require('./_an-object');
var toPrimitive = require('./_to-primitive');
var NUMBER = 'number';

module.exports = function (hint) {
  if (hint !== 'string' && hint !== NUMBER && hint !== 'default') throw TypeError('Incorrect hint');
  return toPrimitive(anObject(this), hint != NUMBER);
};
";
        
        $__internal_21d818751efc70b54f2e492414343bfcda21bfb17453155c464f3cb0202da6d1->leave($__internal_21d818751efc70b54f2e492414343bfcda21bfb17453155c464f3cb0202da6d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_date-to-primitive.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var anObject = require('./_an-object');
var toPrimitive = require('./_to-primitive');
var NUMBER = 'number';

module.exports = function (hint) {
  if (hint !== 'string' && hint !== NUMBER && hint !== 'default') throw TypeError('Incorrect hint');
  return toPrimitive(anObject(this), hint != NUMBER);
};
", "node_modules/core-js/modules/_date-to-primitive.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_date-to-primitive.js");
    }
}
