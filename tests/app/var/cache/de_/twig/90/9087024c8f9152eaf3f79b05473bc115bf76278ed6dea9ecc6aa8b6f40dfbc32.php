<?php

/* node_modules/es5-ext/test/array/#/copy-within/implement.js */
class __TwigTemplate_0664dcb2aea720aa00f5d2b6513e49db17e000860a7167e0752aa505941da757 extends Twig_Template
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
        $__internal_e043e3ced69467efb5cde24179ac2be4fd91b33b561c4397f53963993b1fd700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e043e3ced69467efb5cde24179ac2be4fd91b33b561c4397f53963993b1fd700->enter($__internal_e043e3ced69467efb5cde24179ac2be4fd91b33b561c4397f53963993b1fd700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/copy-within/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/copy-within/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_e043e3ced69467efb5cde24179ac2be4fd91b33b561c4397f53963993b1fd700->leave($__internal_e043e3ced69467efb5cde24179ac2be4fd91b33b561c4397f53963993b1fd700_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/copy-within/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/copy-within/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/copy-within/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/copy-within/implement.js");
    }
}
