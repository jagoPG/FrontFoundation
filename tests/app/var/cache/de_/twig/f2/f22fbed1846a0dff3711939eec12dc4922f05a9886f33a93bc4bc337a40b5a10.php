<?php

/* node_modules/es5-ext/number/max-safe-integer/index.js */
class __TwigTemplate_5f73c2b173eb093fdcfea44151703bea509aad5aac3317cc8c1514c1f374a79e extends Twig_Template
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
        $__internal_ba0c98b9da750a9681d11746bb0ef64f11802e5de36c294a0939532f3f7346b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0c98b9da750a9681d11746bb0ef64f11802e5de36c294a0939532f3f7346b6->enter($__internal_ba0c98b9da750a9681d11746bb0ef64f11802e5de36c294a0939532f3f7346b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/max-safe-integer/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = Math.pow(2, 53) - 1;
";
        
        $__internal_ba0c98b9da750a9681d11746bb0ef64f11802e5de36c294a0939532f3f7346b6->leave($__internal_ba0c98b9da750a9681d11746bb0ef64f11802e5de36c294a0939532f3f7346b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/max-safe-integer/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = Math.pow(2, 53) - 1;
", "node_modules/es5-ext/number/max-safe-integer/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/max-safe-integer/index.js");
    }
}
