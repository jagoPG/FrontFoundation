<?php

/* node_modules/es5-ext/array/#/splice/index.js */
class __TwigTemplate_59f9489d0737413c17bb55eb3cd195081dfcfe2f12bb9a0bdf94acfa17d94537 extends Twig_Template
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
        $__internal_d41dd27967d796b72c5afcab7ea43beb9d4d770a772936d9a8d0de798b7ffd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41dd27967d796b72c5afcab7ea43beb9d4d770a772936d9a8d0de798b7ffd4f->enter($__internal_d41dd27967d796b72c5afcab7ea43beb9d4d770a772936d9a8d0de798b7ffd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/splice/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Array.prototype.splice : require(\"./shim\");
";
        
        $__internal_d41dd27967d796b72c5afcab7ea43beb9d4d770a772936d9a8d0de798b7ffd4f->leave($__internal_d41dd27967d796b72c5afcab7ea43beb9d4d770a772936d9a8d0de798b7ffd4f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/splice/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Array.prototype.splice : require(\"./shim\");
", "node_modules/es5-ext/array/#/splice/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/splice/index.js");
    }
}
