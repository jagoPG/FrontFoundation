<?php

/* node_modules/core-js/library/modules/_property-desc.js */
class __TwigTemplate_a9d62bf267b3ca5646342aa08e8a67e61f5761f7fe80780b1d52378e19efc3f5 extends Twig_Template
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
        $__internal_d8833efc02f0542975a2048720a9654cb964897123f87c47c16637ae9bdc8589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8833efc02f0542975a2048720a9654cb964897123f87c47c16637ae9bdc8589->enter($__internal_d8833efc02f0542975a2048720a9654cb964897123f87c47c16637ae9bdc8589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_property-desc.js"));

        // line 1
        echo "module.exports = function (bitmap, value) {
  return {
    enumerable: !(bitmap & 1),
    configurable: !(bitmap & 2),
    writable: !(bitmap & 4),
    value: value
  };
};
";
        
        $__internal_d8833efc02f0542975a2048720a9654cb964897123f87c47c16637ae9bdc8589->leave($__internal_d8833efc02f0542975a2048720a9654cb964897123f87c47c16637ae9bdc8589_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_property-desc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (bitmap, value) {
  return {
    enumerable: !(bitmap & 1),
    configurable: !(bitmap & 2),
    writable: !(bitmap & 4),
    value: value
  };
};
", "node_modules/core-js/library/modules/_property-desc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_property-desc.js");
    }
}
