<?php

/* node_modules/core-js/modules/_cof.js */
class __TwigTemplate_0ffc3dc7c39b1734f97606cb1dab032d5f74b601e1841d6a7277e09a8fffe0ff extends Twig_Template
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
        $__internal_dc5811842e2c1a7678e22d96a5963feb6969461c56d5e7ab855c277bae79895d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5811842e2c1a7678e22d96a5963feb6969461c56d5e7ab855c277bae79895d->enter($__internal_dc5811842e2c1a7678e22d96a5963feb6969461c56d5e7ab855c277bae79895d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_cof.js"));

        // line 1
        echo "var toString = {}.toString;

module.exports = function (it) {
  return toString.call(it).slice(8, -1);
};
";
        
        $__internal_dc5811842e2c1a7678e22d96a5963feb6969461c56d5e7ab855c277bae79895d->leave($__internal_dc5811842e2c1a7678e22d96a5963feb6969461c56d5e7ab855c277bae79895d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_cof.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toString = {}.toString;

module.exports = function (it) {
  return toString.call(it).slice(8, -1);
};
", "node_modules/core-js/modules/_cof.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_cof.js");
    }
}
