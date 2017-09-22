<?php

/* node_modules/core-js/library/modules/_fails.js */
class __TwigTemplate_095ca3400890c5d8c130493669852c6fbd18d2114b186aab16c8bf86bda8cb8e extends Twig_Template
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
        $__internal_c62d7b682dd9d53b34f064b20196161fb77fdd283f75fdd57975501218b23a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62d7b682dd9d53b34f064b20196161fb77fdd283f75fdd57975501218b23a4c->enter($__internal_c62d7b682dd9d53b34f064b20196161fb77fdd283f75fdd57975501218b23a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_fails.js"));

        // line 1
        echo "module.exports = function (exec) {
  try {
    return !!exec();
  } catch (e) {
    return true;
  }
};
";
        
        $__internal_c62d7b682dd9d53b34f064b20196161fb77fdd283f75fdd57975501218b23a4c->leave($__internal_c62d7b682dd9d53b34f064b20196161fb77fdd283f75fdd57975501218b23a4c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_fails.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (exec) {
  try {
    return !!exec();
  } catch (e) {
    return true;
  }
};
", "node_modules/core-js/library/modules/_fails.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_fails.js");
    }
}
