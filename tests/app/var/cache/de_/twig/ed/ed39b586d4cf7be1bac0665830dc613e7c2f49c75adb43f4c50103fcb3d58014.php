<?php

/* node_modules/es5-ext/object/first-key.js */
class __TwigTemplate_a58a0e6f58e06fad77ea108cad30d4b68ce5826f01963864bd52e73f2a30386d extends Twig_Template
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
        $__internal_55a58f8661885838accb217d6a63811bb7f11eb88ca014b6505fb1dad0efdbbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a58f8661885838accb217d6a63811bb7f11eb88ca014b6505fb1dad0efdbbb->enter($__internal_55a58f8661885838accb217d6a63811bb7f11eb88ca014b6505fb1dad0efdbbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/first-key.js"));

        // line 1
        echo "\"use strict\";

var value                   = require(\"./valid-value\")
  , objPropertyIsEnumerable = Object.prototype.propertyIsEnumerable;

module.exports = function (obj) {
\tvar i;
\tvalue(obj);
\tfor (i in obj) {
\t\tif (objPropertyIsEnumerable.call(obj, i)) return i;
\t}
\treturn null;
};
";
        
        $__internal_55a58f8661885838accb217d6a63811bb7f11eb88ca014b6505fb1dad0efdbbb->leave($__internal_55a58f8661885838accb217d6a63811bb7f11eb88ca014b6505fb1dad0efdbbb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/first-key.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value                   = require(\"./valid-value\")
  , objPropertyIsEnumerable = Object.prototype.propertyIsEnumerable;

module.exports = function (obj) {
\tvar i;
\tvalue(obj);
\tfor (i in obj) {
\t\tif (objPropertyIsEnumerable.call(obj, i)) return i;
\t}
\treturn null;
};
", "node_modules/es5-ext/object/first-key.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/first-key.js");
    }
}
