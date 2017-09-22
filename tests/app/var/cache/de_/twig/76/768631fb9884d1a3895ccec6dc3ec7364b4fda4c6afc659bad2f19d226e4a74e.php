<?php

/* node_modules/es5-ext/string/#/indent.js */
class __TwigTemplate_dcf74224866d45bc6c59a75f047d0df2ef5273da6e71c93a7fce2aa30b43d604 extends Twig_Template
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
        $__internal_e5518ddacec75c4ff651bf9a11f0e738bd956e8cce03765063de5eb61b2c242c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5518ddacec75c4ff651bf9a11f0e738bd956e8cce03765063de5eb61b2c242c->enter($__internal_e5518ddacec75c4ff651bf9a11f0e738bd956e8cce03765063de5eb61b2c242c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/indent.js"));

        // line 1
        echo "\"use strict\";

var isValue = require(\"../../object/is-value\")
  , repeat  = require(\"./repeat\")
  , replace = String.prototype.replace
  , re      = /(\\r\\n|[\\n\\r\\u2028\\u2029])([\\u0000-\\u0009\\u000b-\\uffff]+)/g;

module.exports = function (indent /*, count*/) {
\tvar count = arguments[1];
\tindent = repeat.call(String(indent), isValue(count) ? count : 1);
\treturn indent + replace.call(this, re, \"\$1\" + indent + \"\$2\");
};
";
        
        $__internal_e5518ddacec75c4ff651bf9a11f0e738bd956e8cce03765063de5eb61b2c242c->leave($__internal_e5518ddacec75c4ff651bf9a11f0e738bd956e8cce03765063de5eb61b2c242c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/indent.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isValue = require(\"../../object/is-value\")
  , repeat  = require(\"./repeat\")
  , replace = String.prototype.replace
  , re      = /(\\r\\n|[\\n\\r\\u2028\\u2029])([\\u0000-\\u0009\\u000b-\\uffff]+)/g;

module.exports = function (indent /*, count*/) {
\tvar count = arguments[1];
\tindent = repeat.call(String(indent), isValue(count) ? count : 1);
\treturn indent + replace.call(this, re, \"\$1\" + indent + \"\$2\");
};
", "node_modules/es5-ext/string/#/indent.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/indent.js");
    }
}
