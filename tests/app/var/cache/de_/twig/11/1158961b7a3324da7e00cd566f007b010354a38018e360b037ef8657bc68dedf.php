<?php

/* node_modules/core-js/library/modules/_is-array-iter.js */
class __TwigTemplate_674955e36f8672e30d8a9a78b3e302748b91af7e4e4785d5995a4e94d63f9502 extends Twig_Template
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
        $__internal_e7cafdf027d12aad71fe8dba81af8f5f6eed6dc6f2dac9721ca391d377266091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cafdf027d12aad71fe8dba81af8f5f6eed6dc6f2dac9721ca391d377266091->enter($__internal_e7cafdf027d12aad71fe8dba81af8f5f6eed6dc6f2dac9721ca391d377266091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_is-array-iter.js"));

        // line 1
        echo "// check on default Array iterator
var Iterators = require('./_iterators');
var ITERATOR = require('./_wks')('iterator');
var ArrayProto = Array.prototype;

module.exports = function (it) {
  return it !== undefined && (Iterators.Array === it || ArrayProto[ITERATOR] === it);
};
";
        
        $__internal_e7cafdf027d12aad71fe8dba81af8f5f6eed6dc6f2dac9721ca391d377266091->leave($__internal_e7cafdf027d12aad71fe8dba81af8f5f6eed6dc6f2dac9721ca391d377266091_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_is-array-iter.js";
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
", "node_modules/core-js/library/modules/_is-array-iter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_is-array-iter.js");
    }
}
