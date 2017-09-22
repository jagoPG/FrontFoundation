<?php

/* node_modules/core-js/library/modules/_array-from-iterable.js */
class __TwigTemplate_e5be587d727c53cc77bce82ad0fbab840f125de7867b48973b688eb3560ea2fc extends Twig_Template
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
        $__internal_e3498d0a219e0fe9bb470c896bdc48c0271fc54f9a4db5497be2f3284e416082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3498d0a219e0fe9bb470c896bdc48c0271fc54f9a4db5497be2f3284e416082->enter($__internal_e3498d0a219e0fe9bb470c896bdc48c0271fc54f9a4db5497be2f3284e416082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_array-from-iterable.js"));

        // line 1
        echo "var forOf = require('./_for-of');

module.exports = function (iter, ITERATOR) {
  var result = [];
  forOf(iter, false, result.push, result, ITERATOR);
  return result;
};
";
        
        $__internal_e3498d0a219e0fe9bb470c896bdc48c0271fc54f9a4db5497be2f3284e416082->leave($__internal_e3498d0a219e0fe9bb470c896bdc48c0271fc54f9a4db5497be2f3284e416082_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_array-from-iterable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var forOf = require('./_for-of');

module.exports = function (iter, ITERATOR) {
  var result = [];
  forOf(iter, false, result.push, result, ITERATOR);
  return result;
};
", "node_modules/core-js/library/modules/_array-from-iterable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_array-from-iterable.js");
    }
}
