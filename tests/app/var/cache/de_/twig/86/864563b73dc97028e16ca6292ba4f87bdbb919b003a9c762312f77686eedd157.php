<?php

/* node_modules/es5-ext/array/#/indexes-of.js */
class __TwigTemplate_02c5d757aefc96e39828c937da2f2b1d12461b63a40638b3c56358acbc6b544c extends Twig_Template
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
        $__internal_4756c247e583e7dce795aff755c7a97d137155378ddf5ed7c45d9a396d5fbc57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4756c247e583e7dce795aff755c7a97d137155378ddf5ed7c45d9a396d5fbc57->enter($__internal_4756c247e583e7dce795aff755c7a97d137155378ddf5ed7c45d9a396d5fbc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/indexes-of.js"));

        // line 1
        echo "\"use strict\";

var indexOf = require(\"./e-index-of\");

module.exports = function (value /*, fromIndex*/) {
\tvar result = [], i, fromIndex = arguments[1];
\twhile ((i = indexOf.call(this, value, fromIndex)) !== -1) {
\t\tresult.push(i);
\t\tfromIndex = i + 1;
\t}
\treturn result;
};
";
        
        $__internal_4756c247e583e7dce795aff755c7a97d137155378ddf5ed7c45d9a396d5fbc57->leave($__internal_4756c247e583e7dce795aff755c7a97d137155378ddf5ed7c45d9a396d5fbc57_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/indexes-of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var indexOf = require(\"./e-index-of\");

module.exports = function (value /*, fromIndex*/) {
\tvar result = [], i, fromIndex = arguments[1];
\twhile ((i = indexOf.call(this, value, fromIndex)) !== -1) {
\t\tresult.push(i);
\t\tfromIndex = i + 1;
\t}
\treturn result;
};
", "node_modules/es5-ext/array/#/indexes-of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/indexes-of.js");
    }
}
