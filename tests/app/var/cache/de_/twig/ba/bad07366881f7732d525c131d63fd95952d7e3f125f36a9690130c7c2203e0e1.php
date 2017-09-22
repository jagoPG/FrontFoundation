<?php

/* node_modules/es5-ext/function/constant.js */
class __TwigTemplate_00d1cb2e31dcc5cec5d1ee51c5f5f53dcc88a353ef94f10fdf1103f1a915e7cb extends Twig_Template
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
        $__internal_d54890c681f0bf11dd82eb93f5581d3a3d37866d93c855993d3705769afb1450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54890c681f0bf11dd82eb93f5581d3a3d37866d93c855993d3705769afb1450->enter($__internal_d54890c681f0bf11dd82eb93f5581d3a3d37866d93c855993d3705769afb1450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/constant.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (value) {
\treturn function () {
\t\treturn value;
\t};
};
";
        
        $__internal_d54890c681f0bf11dd82eb93f5581d3a3d37866d93c855993d3705769afb1450->leave($__internal_d54890c681f0bf11dd82eb93f5581d3a3d37866d93c855993d3705769afb1450_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/constant.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (value) {
\treturn function () {
\t\treturn value;
\t};
};
", "node_modules/es5-ext/function/constant.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/constant.js");
    }
}
