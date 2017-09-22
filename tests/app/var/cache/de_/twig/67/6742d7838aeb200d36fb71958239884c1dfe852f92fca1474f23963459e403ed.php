<?php

/* node_modules/core-js/es7/asap.js */
class __TwigTemplate_7e6debf170d583040ac8dc8562a8e9ad31838144aa3add42a82cd01a7aae91b0 extends Twig_Template
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
        $__internal_ad70602a1d976111d264c9cb1109c0e906069fcbdb000cc7c381dcfe66b4db98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad70602a1d976111d264c9cb1109c0e906069fcbdb000cc7c381dcfe66b4db98->enter($__internal_ad70602a1d976111d264c9cb1109c0e906069fcbdb000cc7c381dcfe66b4db98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/asap.js"));

        // line 1
        echo "require('../modules/es7.asap');
module.exports = require('../modules/_core').asap;
";
        
        $__internal_ad70602a1d976111d264c9cb1109c0e906069fcbdb000cc7c381dcfe66b4db98->leave($__internal_ad70602a1d976111d264c9cb1109c0e906069fcbdb000cc7c381dcfe66b4db98_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/asap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.asap');
module.exports = require('../modules/_core').asap;
", "node_modules/core-js/es7/asap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/asap.js");
    }
}
