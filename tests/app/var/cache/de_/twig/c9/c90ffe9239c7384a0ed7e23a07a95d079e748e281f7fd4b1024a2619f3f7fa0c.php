<?php

/* node_modules/es5-ext/reg-exp/#/replace/shim.js */
class __TwigTemplate_2fbb2fe385e03e8e0d821b34d22679865c92531f045ad05953e6e8cc2d563d97 extends Twig_Template
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
        $__internal_5aa9e5c55a2af5fb8ded9e804ab6d3e116a15a07f451b55de9b77d293d3536d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa9e5c55a2af5fb8ded9e804ab6d3e116a15a07f451b55de9b77d293d3536d5->enter($__internal_5aa9e5c55a2af5fb8ded9e804ab6d3e116a15a07f451b55de9b77d293d3536d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/reg-exp/#/replace/shim.js"));

        // line 1
        echo "\"use strict\";

var validRegExp = require(\"../../valid-reg-exp\");

module.exports = function (string, replaceValue) {
\tvalidRegExp(this);
\treturn String(string).replace(this, replaceValue);
};
";
        
        $__internal_5aa9e5c55a2af5fb8ded9e804ab6d3e116a15a07f451b55de9b77d293d3536d5->leave($__internal_5aa9e5c55a2af5fb8ded9e804ab6d3e116a15a07f451b55de9b77d293d3536d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/reg-exp/#/replace/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var validRegExp = require(\"../../valid-reg-exp\");

module.exports = function (string, replaceValue) {
\tvalidRegExp(this);
\treturn String(string).replace(this, replaceValue);
};
", "node_modules/es5-ext/reg-exp/#/replace/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/reg-exp/#/replace/shim.js");
    }
}
