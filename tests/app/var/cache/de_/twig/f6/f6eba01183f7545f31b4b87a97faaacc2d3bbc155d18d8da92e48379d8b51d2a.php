<?php

/* node_modules/core-js/library/modules/core.is-iterable.js */
class __TwigTemplate_bb8d3957eebd483bfa30c9c878abac7b0686f3f6c9c1db201c97d629362fb2d7 extends Twig_Template
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
        $__internal_c4611b2aedee434da17ef532b100e034324690db6751774852d18a3ebe498429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4611b2aedee434da17ef532b100e034324690db6751774852d18a3ebe498429->enter($__internal_c4611b2aedee434da17ef532b100e034324690db6751774852d18a3ebe498429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/core.is-iterable.js"));

        // line 1
        echo "var classof = require('./_classof');
var ITERATOR = require('./_wks')('iterator');
var Iterators = require('./_iterators');
module.exports = require('./_core').isIterable = function (it) {
  var O = Object(it);
  return O[ITERATOR] !== undefined
    || '@@iterator' in O
    // eslint-disable-next-line no-prototype-builtins
    || Iterators.hasOwnProperty(classof(O));
};
";
        
        $__internal_c4611b2aedee434da17ef532b100e034324690db6751774852d18a3ebe498429->leave($__internal_c4611b2aedee434da17ef532b100e034324690db6751774852d18a3ebe498429_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/core.is-iterable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var classof = require('./_classof');
var ITERATOR = require('./_wks')('iterator');
var Iterators = require('./_iterators');
module.exports = require('./_core').isIterable = function (it) {
  var O = Object(it);
  return O[ITERATOR] !== undefined
    || '@@iterator' in O
    // eslint-disable-next-line no-prototype-builtins
    || Iterators.hasOwnProperty(classof(O));
};
", "node_modules/core-js/library/modules/core.is-iterable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/core.is-iterable.js");
    }
}
