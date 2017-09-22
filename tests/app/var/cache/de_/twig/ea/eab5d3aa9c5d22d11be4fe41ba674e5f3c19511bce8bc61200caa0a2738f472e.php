<?php

/* node_modules/core-js/modules/_array-from-iterable.js */
class __TwigTemplate_8d0df45fe3bc838aa5aa482bd5e3c43fed7bb2a52b688632a63b3dfae8c51929 extends Twig_Template
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
        $__internal_9cb4c26c4bedb780241540390ea8844942e225d4b45832155c0cec4ebf9d2454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb4c26c4bedb780241540390ea8844942e225d4b45832155c0cec4ebf9d2454->enter($__internal_9cb4c26c4bedb780241540390ea8844942e225d4b45832155c0cec4ebf9d2454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_array-from-iterable.js"));

        // line 1
        echo "var forOf = require('./_for-of');

module.exports = function (iter, ITERATOR) {
  var result = [];
  forOf(iter, false, result.push, result, ITERATOR);
  return result;
};
";
        
        $__internal_9cb4c26c4bedb780241540390ea8844942e225d4b45832155c0cec4ebf9d2454->leave($__internal_9cb4c26c4bedb780241540390ea8844942e225d4b45832155c0cec4ebf9d2454_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_array-from-iterable.js";
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
", "node_modules/core-js/modules/_array-from-iterable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_array-from-iterable.js");
    }
}
