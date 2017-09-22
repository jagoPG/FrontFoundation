<?php

/* node_modules/es5-ext/array/generate.js */
class __TwigTemplate_c3e361ea58190614fcc3b011a931d56d52f791c87a59646814e04ae7b5333dfe extends Twig_Template
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
        $__internal_926ef874e9272693a1a242ec8432877485f54c1350a0c9706bfbfe8f5d6bdfa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926ef874e9272693a1a242ec8432877485f54c1350a0c9706bfbfe8f5d6bdfa9->enter($__internal_926ef874e9272693a1a242ec8432877485f54c1350a0c9706bfbfe8f5d6bdfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/generate.js"));

        // line 1
        echo "\"use strict\";

var toPosInt = require(\"../number/to-pos-integer\")
  , value    = require(\"../object/valid-value\")
  , slice    = Array.prototype.slice;

module.exports = function (length /*, …fill*/) {
\tvar arr, currentLength;
\tlength = toPosInt(value(length));
\tif (length === 0) return [];

\tarr = arguments.length < 2 ? [undefined] : slice.call(arguments, 1, 1 + length);

\twhile ((currentLength = arr.length) < length) {
\t\tarr = arr.concat(arr.slice(0, length - currentLength));
\t}
\treturn arr;
};
";
        
        $__internal_926ef874e9272693a1a242ec8432877485f54c1350a0c9706bfbfe8f5d6bdfa9->leave($__internal_926ef874e9272693a1a242ec8432877485f54c1350a0c9706bfbfe8f5d6bdfa9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/generate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toPosInt = require(\"../number/to-pos-integer\")
  , value    = require(\"../object/valid-value\")
  , slice    = Array.prototype.slice;

module.exports = function (length /*, …fill*/) {
\tvar arr, currentLength;
\tlength = toPosInt(value(length));
\tif (length === 0) return [];

\tarr = arguments.length < 2 ? [undefined] : slice.call(arguments, 1, 1 + length);

\twhile ((currentLength = arr.length) < length) {
\t\tarr = arr.concat(arr.slice(0, length - currentLength));
\t}
\treturn arr;
};
", "node_modules/es5-ext/array/generate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/generate.js");
    }
}
