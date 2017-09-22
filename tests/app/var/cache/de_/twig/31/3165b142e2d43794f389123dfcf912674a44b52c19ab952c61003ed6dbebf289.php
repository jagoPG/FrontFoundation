<?php

/* node_modules/core-js/modules/_is-array-iter.js */
class __TwigTemplate_e2eccdb1ea40d7f7fd3401ddafd6a17a3f476bd8d6b2451a240f3d9ab2a5dfb9 extends Twig_Template
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
        $__internal_4744605bdabfa7a1bb5f89f3cf1d2cb0dead2d0d7ff44e2f3b9c4f4022209ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4744605bdabfa7a1bb5f89f3cf1d2cb0dead2d0d7ff44e2f3b9c4f4022209ee6->enter($__internal_4744605bdabfa7a1bb5f89f3cf1d2cb0dead2d0d7ff44e2f3b9c4f4022209ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_is-array-iter.js"));

        // line 1
        echo "// check on default Array iterator
var Iterators = require('./_iterators');
var ITERATOR = require('./_wks')('iterator');
var ArrayProto = Array.prototype;

module.exports = function (it) {
  return it !== undefined && (Iterators.Array === it || ArrayProto[ITERATOR] === it);
};
";
        
        $__internal_4744605bdabfa7a1bb5f89f3cf1d2cb0dead2d0d7ff44e2f3b9c4f4022209ee6->leave($__internal_4744605bdabfa7a1bb5f89f3cf1d2cb0dead2d0d7ff44e2f3b9c4f4022209ee6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_is-array-iter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// check on default Array iterator
var Iterators = require('./_iterators');
var ITERATOR = require('./_wks')('iterator');
var ArrayProto = Array.prototype;

module.exports = function (it) {
  return it !== undefined && (Iterators.Array === it || ArrayProto[ITERATOR] === it);
};
", "node_modules/core-js/modules/_is-array-iter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_is-array-iter.js");
    }
}
