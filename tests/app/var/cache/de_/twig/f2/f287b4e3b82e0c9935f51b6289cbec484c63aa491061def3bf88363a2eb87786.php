<?php

/* node_modules/es5-ext/array/#/map/index.js */
class __TwigTemplate_8227447572a1e4a318fb32d1ed4c2ec7b8fd89bb12bd5a7ef30de684f6b2b98a extends Twig_Template
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
        $__internal_3aa4098157e2abbc44f4b8ee1a4a8552ffe4a2faa866a840978c76506b79339a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa4098157e2abbc44f4b8ee1a4a8552ffe4a2faa866a840978c76506b79339a->enter($__internal_3aa4098157e2abbc44f4b8ee1a4a8552ffe4a2faa866a840978c76506b79339a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/map/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.map : require(\"./shim\");
";
        
        $__internal_3aa4098157e2abbc44f4b8ee1a4a8552ffe4a2faa866a840978c76506b79339a->leave($__internal_3aa4098157e2abbc44f4b8ee1a4a8552ffe4a2faa866a840978c76506b79339a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/map/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t\t? Array.prototype.map : require(\"./shim\");
", "node_modules/es5-ext/array/#/map/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/map/index.js");
    }
}
