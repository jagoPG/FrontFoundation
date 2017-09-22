<?php

/* node_modules/es5-ext/string/#/starts-with/shim.js */
class __TwigTemplate_4873624dacd869f3c39a2805f126998c043d64bc8cf476f52e886345b9e4fd94 extends Twig_Template
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
        $__internal_bf98e3a4ae1f47dae6485ace8c0f6ebb6948e4a5377c008e8e69a0744136863d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf98e3a4ae1f47dae6485ace8c0f6ebb6948e4a5377c008e8e69a0744136863d->enter($__internal_bf98e3a4ae1f47dae6485ace8c0f6ebb6948e4a5377c008e8e69a0744136863d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/starts-with/shim.js"));

        // line 1
        echo "\"use strict\";

var value     = require(\"../../../object/valid-value\")
  , toInteger = require(\"../../../number/to-integer\")

  , max = Math.max, min = Math.min;

module.exports = function (searchString/*, position*/) {
\tvar start, self = String(value(this));
\tstart = min(max(toInteger(arguments[1]), 0), self.length);
\treturn self.indexOf(searchString, start) === start;
};
";
        
        $__internal_bf98e3a4ae1f47dae6485ace8c0f6ebb6948e4a5377c008e8e69a0744136863d->leave($__internal_bf98e3a4ae1f47dae6485ace8c0f6ebb6948e4a5377c008e8e69a0744136863d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/starts-with/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value     = require(\"../../../object/valid-value\")
  , toInteger = require(\"../../../number/to-integer\")

  , max = Math.max, min = Math.min;

module.exports = function (searchString/*, position*/) {
\tvar start, self = String(value(this));
\tstart = min(max(toInteger(arguments[1]), 0), self.length);
\treturn self.indexOf(searchString, start) === start;
};
", "node_modules/es5-ext/string/#/starts-with/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/starts-with/shim.js");
    }
}
