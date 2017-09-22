<?php

/* node_modules/es5-ext/iterable/validate.js */
class __TwigTemplate_b551258c5c037eab2fb1b2a1b1284d5e587fe8c71c328d544f6e9efedb5544a0 extends Twig_Template
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
        $__internal_f2a9a0b3b8672f4185dcdddd16b293dba205e48c02a866cde3ff22f30600e336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a9a0b3b8672f4185dcdddd16b293dba205e48c02a866cde3ff22f30600e336->enter($__internal_f2a9a0b3b8672f4185dcdddd16b293dba205e48c02a866cde3ff22f30600e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/iterable/validate.js"));

        // line 1
        echo "\"use strict\";

var is = require(\"./is\");

module.exports = function (value) {
\tif (is(value)) return value;
\tthrow new TypeError(value + \" is not an iterable or array-like\");
};
";
        
        $__internal_f2a9a0b3b8672f4185dcdddd16b293dba205e48c02a866cde3ff22f30600e336->leave($__internal_f2a9a0b3b8672f4185dcdddd16b293dba205e48c02a866cde3ff22f30600e336_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/iterable/validate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var is = require(\"./is\");

module.exports = function (value) {
\tif (is(value)) return value;
\tthrow new TypeError(value + \" is not an iterable or array-like\");
};
", "node_modules/es5-ext/iterable/validate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/iterable/validate.js");
    }
}
