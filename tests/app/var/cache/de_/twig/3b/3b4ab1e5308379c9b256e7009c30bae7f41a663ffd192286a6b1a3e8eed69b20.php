<?php

/* node_modules/jquery/src/var/getProto.js */
class __TwigTemplate_e1506dfa9b64ed0811efdce29361b6a9f6ec200540d87c02fddd1cfaa1de6ba7 extends Twig_Template
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
        $__internal_cb927ad227961408e5cac50ee22b902e084199ab3cdd02c8936acf38ab1c9253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb927ad227961408e5cac50ee22b902e084199ab3cdd02c8936acf38ab1c9253->enter($__internal_cb927ad227961408e5cac50ee22b902e084199ab3cdd02c8936acf38ab1c9253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/src/var/getProto.js"));

        // line 1
        echo "define( function() {
\t\"use strict\";

\treturn Object.getPrototypeOf;
} );
";
        
        $__internal_cb927ad227961408e5cac50ee22b902e084199ab3cdd02c8936acf38ab1c9253->leave($__internal_cb927ad227961408e5cac50ee22b902e084199ab3cdd02c8936acf38ab1c9253_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/src/var/getProto.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("define( function() {
\t\"use strict\";

\treturn Object.getPrototypeOf;
} );
", "node_modules/jquery/src/var/getProto.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/src/var/getProto.js");
    }
}
