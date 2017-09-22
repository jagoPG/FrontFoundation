<?php

/* node_modules/querystring-es3/test/tap-index.js */
class __TwigTemplate_873c7a2a585001f325f1bf428d1d982b9e73b60fcb7a05be9d5bb4ddc90d3070 extends Twig_Template
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
        $__internal_008ef6d29149014488902e773201fa7e839fcf3a3d9a2e3fae1056ccf833bce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008ef6d29149014488902e773201fa7e839fcf3a3d9a2e3fae1056ccf833bce9->enter($__internal_008ef6d29149014488902e773201fa7e839fcf3a3d9a2e3fae1056ccf833bce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/querystring-es3/test/tap-index.js"));

        // line 1
        echo "\"use strict\";

require(\"retape\")(require(\"./index\"))";
        
        $__internal_008ef6d29149014488902e773201fa7e839fcf3a3d9a2e3fae1056ccf833bce9->leave($__internal_008ef6d29149014488902e773201fa7e839fcf3a3d9a2e3fae1056ccf833bce9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/querystring-es3/test/tap-index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

require(\"retape\")(require(\"./index\"))", "node_modules/querystring-es3/test/tap-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/querystring-es3/test/tap-index.js");
    }
}
