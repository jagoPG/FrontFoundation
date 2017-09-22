<?php

/* node_modules/es5-ext/function/pluck.js */
class __TwigTemplate_bdb912c673c815c66576f199e4efe4212f225f42fbe305d46e131e1831a20400 extends Twig_Template
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
        $__internal_bb29e4b5da816553217a45b0167017256667d64d2edd2ec25dc0871a97e2aeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb29e4b5da816553217a45b0167017256667d64d2edd2ec25dc0871a97e2aeba->enter($__internal_bb29e4b5da816553217a45b0167017256667d64d2edd2ec25dc0871a97e2aeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/pluck.js"));

        // line 1
        echo "\"use strict\";

var value = require(\"../object/valid-value\");

module.exports = function (name) {
\treturn function (obj) {
\t\treturn value(obj)[name];
\t};
};
";
        
        $__internal_bb29e4b5da816553217a45b0167017256667d64d2edd2ec25dc0871a97e2aeba->leave($__internal_bb29e4b5da816553217a45b0167017256667d64d2edd2ec25dc0871a97e2aeba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/pluck.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value = require(\"../object/valid-value\");

module.exports = function (name) {
\treturn function (obj) {
\t\treturn value(obj)[name];
\t};
};
", "node_modules/es5-ext/function/pluck.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/pluck.js");
    }
}
