<?php

/* node_modules/es5-ext/object/is-value.js */
class __TwigTemplate_d4baddf817a9038e38e16a5324d9763d4f2ebb4d4460e32c5c494540c7f06aa9 extends Twig_Template
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
        $__internal_867619030dda46ebbdc56bbfa226f65e97c9bc6be81238696f42cce7e582d344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867619030dda46ebbdc56bbfa226f65e97c9bc6be81238696f42cce7e582d344->enter($__internal_867619030dda46ebbdc56bbfa226f65e97c9bc6be81238696f42cce7e582d344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/is-value.js"));

        // line 1
        echo "\"use strict\";

var _undefined = require(\"../function/noop\")(); // Support ES3 engines

module.exports = function (val) {
 return (val !== _undefined) && (val !== null);
};
";
        
        $__internal_867619030dda46ebbdc56bbfa226f65e97c9bc6be81238696f42cce7e582d344->leave($__internal_867619030dda46ebbdc56bbfa226f65e97c9bc6be81238696f42cce7e582d344_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/is-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var _undefined = require(\"../function/noop\")(); // Support ES3 engines

module.exports = function (val) {
 return (val !== _undefined) && (val !== null);
};
", "node_modules/es5-ext/object/is-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/is-value.js");
    }
}
