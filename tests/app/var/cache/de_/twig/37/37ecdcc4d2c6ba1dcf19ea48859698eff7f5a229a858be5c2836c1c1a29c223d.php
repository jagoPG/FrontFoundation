<?php

/* node_modules/core-js/library/es7/promise.js */
class __TwigTemplate_e40ead8e97d6948173f17f18ecf94ae0c66b9354cc9b345a0eeef840370679be extends Twig_Template
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
        $__internal_dab9612b32df41efa21a8c9c3db24ba31db7ed8321871449ebb92b10922eb632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab9612b32df41efa21a8c9c3db24ba31db7ed8321871449ebb92b10922eb632->enter($__internal_dab9612b32df41efa21a8c9c3db24ba31db7ed8321871449ebb92b10922eb632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/promise.js"));

        // line 1
        echo "require('../modules/es7.promise.finally');
require('../modules/es7.promise.try');
module.exports = require('../modules/_core').Promise;
";
        
        $__internal_dab9612b32df41efa21a8c9c3db24ba31db7ed8321871449ebb92b10922eb632->leave($__internal_dab9612b32df41efa21a8c9c3db24ba31db7ed8321871449ebb92b10922eb632_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/promise.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.promise.finally');
require('../modules/es7.promise.try');
module.exports = require('../modules/_core').Promise;
", "node_modules/core-js/library/es7/promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/promise.js");
    }
}
