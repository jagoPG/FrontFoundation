<?php

/* node_modules/core-js/modules/es6.date.now.js */
class __TwigTemplate_36c65af7adf5f1c6454557db90bc1b8ffc2e0e2fb32bb33753b30239b6ecdc08 extends Twig_Template
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
        $__internal_6f97367528d070b0ab5784964b65341f43869aa56856307195d02a1aecefaec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f97367528d070b0ab5784964b65341f43869aa56856307195d02a1aecefaec3->enter($__internal_6f97367528d070b0ab5784964b65341f43869aa56856307195d02a1aecefaec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.date.now.js"));

        // line 1
        echo "// 20.3.3.1 / 15.9.4.4 Date.now()
var \$export = require('./_export');

\$export(\$export.S, 'Date', { now: function () { return new Date().getTime(); } });
";
        
        $__internal_6f97367528d070b0ab5784964b65341f43869aa56856307195d02a1aecefaec3->leave($__internal_6f97367528d070b0ab5784964b65341f43869aa56856307195d02a1aecefaec3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.date.now.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.3.3.1 / 15.9.4.4 Date.now()
var \$export = require('./_export');

\$export(\$export.S, 'Date', { now: function () { return new Date().getTime(); } });
", "node_modules/core-js/modules/es6.date.now.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.date.now.js");
    }
}
