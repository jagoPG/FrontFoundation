<?php

/* node_modules/es5-ext/array/#/diff.js */
class __TwigTemplate_c74da3bb05ac737759e614e6f503fb93c2277a741c5d4f2d5a78a97aea5f4c99 extends Twig_Template
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
        $__internal_f6a23da84c70db3fdf4920df92ad95397e7e7367e9f46d9cf7f541b1066a76a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a23da84c70db3fdf4920df92ad95397e7e7367e9f46d9cf7f541b1066a76a1->enter($__internal_f6a23da84c70db3fdf4920df92ad95397e7e7367e9f46d9cf7f541b1066a76a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/diff.js"));

        // line 1
        echo "\"use strict\";

var value    = require(\"../../object/valid-value\")
  , contains = require(\"./contains\")
  , filter   = Array.prototype.filter;

module.exports = function (other) {
\tvalue(this);
\tvalue(other);
\treturn filter.call(this, function (item) {
\t\treturn !contains.call(other, item);
\t});
};
";
        
        $__internal_f6a23da84c70db3fdf4920df92ad95397e7e7367e9f46d9cf7f541b1066a76a1->leave($__internal_f6a23da84c70db3fdf4920df92ad95397e7e7367e9f46d9cf7f541b1066a76a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/diff.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var value    = require(\"../../object/valid-value\")
  , contains = require(\"./contains\")
  , filter   = Array.prototype.filter;

module.exports = function (other) {
\tvalue(this);
\tvalue(other);
\treturn filter.call(this, function (item) {
\t\treturn !contains.call(other, item);
\t});
};
", "node_modules/es5-ext/array/#/diff.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/diff.js");
    }
}
