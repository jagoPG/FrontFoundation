<?php

/* node_modules/core-js/modules/core.is-iterable.js */
class __TwigTemplate_369429aa49ab605e6d0df0c62f08db7bedd8f81cb4a9f8bfc8fb393f664df6c5 extends Twig_Template
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
        $__internal_db94020212d79e931fa84551919eaa4a7e1dbfbbb052dd42c5196d0e09e7b2dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db94020212d79e931fa84551919eaa4a7e1dbfbbb052dd42c5196d0e09e7b2dd->enter($__internal_db94020212d79e931fa84551919eaa4a7e1dbfbbb052dd42c5196d0e09e7b2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/core.is-iterable.js"));

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
        
        $__internal_db94020212d79e931fa84551919eaa4a7e1dbfbbb052dd42c5196d0e09e7b2dd->leave($__internal_db94020212d79e931fa84551919eaa4a7e1dbfbbb052dd42c5196d0e09e7b2dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/core.is-iterable.js";
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
", "node_modules/core-js/modules/core.is-iterable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/core.is-iterable.js");
    }
}
