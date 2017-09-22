<?php

/* node_modules/es5-ext/array/#/find-index/index.js */
class __TwigTemplate_d47b98b19a1967b4a9f074c939b1a24086533b1f06a59f31676b5c26cda43029 extends Twig_Template
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
        $__internal_f9e588976adfd86909ab80e4d294531edc8f74673de0b27777db3e0e815c75f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e588976adfd86909ab80e4d294531edc8f74673de0b27777db3e0e815c75f7->enter($__internal_f9e588976adfd86909ab80e4d294531edc8f74673de0b27777db3e0e815c75f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/find-index/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.findIndex : require(\"./shim\");
";
        
        $__internal_f9e588976adfd86909ab80e4d294531edc8f74673de0b27777db3e0e815c75f7->leave($__internal_f9e588976adfd86909ab80e4d294531edc8f74673de0b27777db3e0e815c75f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/find-index/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.findIndex : require(\"./shim\");
", "node_modules/es5-ext/array/#/find-index/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/find-index/index.js");
    }
}
