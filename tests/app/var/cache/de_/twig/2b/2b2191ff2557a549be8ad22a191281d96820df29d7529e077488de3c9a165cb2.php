<?php

/* node_modules/es5-ext/string/#/ends-with/shim.js */
class __TwigTemplate_4c8688847850447c778b3ee48409597060cc7a29a3cf07722cc6327ae2de5376 extends Twig_Template
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
        $__internal_1fe8b2994d1024c7095f869feb0c2ab5b3d646f8d2953de91197eefcd3e35e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe8b2994d1024c7095f869feb0c2ab5b3d646f8d2953de91197eefcd3e35e35->enter($__internal_1fe8b2994d1024c7095f869feb0c2ab5b3d646f8d2953de91197eefcd3e35e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/ends-with/shim.js"));

        // line 1
        echo "\"use strict\";

var toInteger = require(\"../../../number/to-integer\")
  , value     = require(\"../../../object/valid-value\")
  , isValue   = require(\"../../../object/is-value\")
  , min       = Math.min
  , max       = Math.max;

module.exports = function (searchString /*, endPosition*/) {
\tvar self, start, endPos;
\tself = String(value(this));
\tsearchString = String(searchString);
\tendPos = arguments[1];
\tstart =
\t\t(isValue(endPos) ? min(max(toInteger(endPos), 0), self.length) : self.length) -
\t\tsearchString.length;
\treturn start < 0 ? false : self.indexOf(searchString, start) === start;
};
";
        
        $__internal_1fe8b2994d1024c7095f869feb0c2ab5b3d646f8d2953de91197eefcd3e35e35->leave($__internal_1fe8b2994d1024c7095f869feb0c2ab5b3d646f8d2953de91197eefcd3e35e35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/ends-with/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toInteger = require(\"../../../number/to-integer\")
  , value     = require(\"../../../object/valid-value\")
  , isValue   = require(\"../../../object/is-value\")
  , min       = Math.min
  , max       = Math.max;

module.exports = function (searchString /*, endPosition*/) {
\tvar self, start, endPos;
\tself = String(value(this));
\tsearchString = String(searchString);
\tendPos = arguments[1];
\tstart =
\t\t(isValue(endPos) ? min(max(toInteger(endPos), 0), self.length) : self.length) -
\t\tsearchString.length;
\treturn start < 0 ? false : self.indexOf(searchString, start) === start;
};
", "node_modules/es5-ext/string/#/ends-with/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/ends-with/shim.js");
    }
}
