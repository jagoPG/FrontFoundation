<?php

/* node_modules/defined/index.js */
class __TwigTemplate_5aa4722a0d4febfb23a97b831a1377f724697f2f899e0696414a32e32af40053 extends Twig_Template
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
        $__internal_3f09307e8a07b86745c543a4795cab07d3a1ca89d4813fc65fd25e62591adbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f09307e8a07b86745c543a4795cab07d3a1ca89d4813fc65fd25e62591adbdc->enter($__internal_3f09307e8a07b86745c543a4795cab07d3a1ca89d4813fc65fd25e62591adbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/defined/index.js"));

        // line 1
        echo "module.exports = function () {
    for (var i = 0; i < arguments.length; i++) {
        if (arguments[i] !== undefined) return arguments[i];
    }
};
";
        
        $__internal_3f09307e8a07b86745c543a4795cab07d3a1ca89d4813fc65fd25e62591adbdc->leave($__internal_3f09307e8a07b86745c543a4795cab07d3a1ca89d4813fc65fd25e62591adbdc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/defined/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function () {
    for (var i = 0; i < arguments.length; i++) {
        if (arguments[i] !== undefined) return arguments[i];
    }
};
", "node_modules/defined/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/defined/index.js");
    }
}
