<?php

/* node_modules/jquery/src/var/document.js */
class __TwigTemplate_aeb74c6852de5096ee28a100babaac7cbd0a7f0d40db64bb69943071ce657e35 extends Twig_Template
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
        $__internal_75d58020030c05515b79816dc66c4073c8e38335308b268961e950973243e3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d58020030c05515b79816dc66c4073c8e38335308b268961e950973243e3a1->enter($__internal_75d58020030c05515b79816dc66c4073c8e38335308b268961e950973243e3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/var/document.js"));

        // line 1
        echo "define( function() {
\t\"use strict\";

\treturn window.document;
} );
";
        
        $__internal_75d58020030c05515b79816dc66c4073c8e38335308b268961e950973243e3a1->leave($__internal_75d58020030c05515b79816dc66c4073c8e38335308b268961e950973243e3a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/var/document.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {
\t\"use strict\";

\treturn window.document;
} );
", "node_modules/jquery/src/var/document.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/var/document.js");
    }
}
