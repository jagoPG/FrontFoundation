<?php

/* node_modules/core-js/library/modules/_a-function.js */
class __TwigTemplate_111ff479756d89b1dc66eb69c64e625304c0188e839ce5c023acfb4273a91c13 extends Twig_Template
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
        $__internal_def29a628e2ad056fa6aa81cd51629f64eee311ed0f0114253e348b4673b043a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def29a628e2ad056fa6aa81cd51629f64eee311ed0f0114253e348b4673b043a->enter($__internal_def29a628e2ad056fa6aa81cd51629f64eee311ed0f0114253e348b4673b043a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_a-function.js"));

        // line 1
        echo "module.exports = function (it) {
  if (typeof it != 'function') throw TypeError(it + ' is not a function!');
  return it;
};
";
        
        $__internal_def29a628e2ad056fa6aa81cd51629f64eee311ed0f0114253e348b4673b043a->leave($__internal_def29a628e2ad056fa6aa81cd51629f64eee311ed0f0114253e348b4673b043a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_a-function.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (it) {
  if (typeof it != 'function') throw TypeError(it + ' is not a function!');
  return it;
};
", "node_modules/core-js/library/modules/_a-function.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_a-function.js");
    }
}
