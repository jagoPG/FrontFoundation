<?php

/* node_modules/es5-ext/array/#/first.js */
class __TwigTemplate_e9e80a8f6985a6094f47c5150fcd437b6ef710d61a562f50e87ba016a853d24f extends Twig_Template
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
        $__internal_a483ad9fefbb7e29bec24d62b7162a2db7eb40e0cc2eb1ea0383dea939a0a433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a483ad9fefbb7e29bec24d62b7162a2db7eb40e0cc2eb1ea0383dea939a0a433->enter($__internal_a483ad9fefbb7e29bec24d62b7162a2db7eb40e0cc2eb1ea0383dea939a0a433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/first.js"));

        // line 1
        echo "\"use strict\";

var firstIndex = require(\"./first-index\");

module.exports = function () {
\tvar i;
\tif ((i = firstIndex.call(this)) !== null) return this[i];
\treturn undefined;
};
";
        
        $__internal_a483ad9fefbb7e29bec24d62b7162a2db7eb40e0cc2eb1ea0383dea939a0a433->leave($__internal_a483ad9fefbb7e29bec24d62b7162a2db7eb40e0cc2eb1ea0383dea939a0a433_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/first.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var firstIndex = require(\"./first-index\");

module.exports = function () {
\tvar i;
\tif ((i = firstIndex.call(this)) !== null) return this[i];
\treturn undefined;
};
", "node_modules/es5-ext/array/#/first.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/first.js");
    }
}
