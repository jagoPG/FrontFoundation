<?php

/* node_modules/es5-ext/object/ensure-array.js */
class __TwigTemplate_7b75e43fec4227e75511242b7f78c0d7ac703c19a24056239f982970b271ccef extends Twig_Template
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
        $__internal_976c3929b6cefdefaba72609084d77225af7f90f693be5e9b0d4b2d96cf4f0a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976c3929b6cefdefaba72609084d77225af7f90f693be5e9b0d4b2d96cf4f0a6->enter($__internal_976c3929b6cefdefaba72609084d77225af7f90f693be5e9b0d4b2d96cf4f0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/ensure-array.js"));

        // line 1
        echo "\"use strict\";

var toShortString = require(\"../to-short-string-representation\")
  , isArray       = require(\"./is-array-like\");

module.exports = function (value) {
\tif (isArray(value)) return value;
\tthrow new TypeError(toShortString(value) + \" is not a array\");
};
";
        
        $__internal_976c3929b6cefdefaba72609084d77225af7f90f693be5e9b0d4b2d96cf4f0a6->leave($__internal_976c3929b6cefdefaba72609084d77225af7f90f693be5e9b0d4b2d96cf4f0a6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/ensure-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toShortString = require(\"../to-short-string-representation\")
  , isArray       = require(\"./is-array-like\");

module.exports = function (value) {
\tif (isArray(value)) return value;
\tthrow new TypeError(toShortString(value) + \" is not a array\");
};
", "node_modules/es5-ext/object/ensure-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/ensure-array.js");
    }
}
