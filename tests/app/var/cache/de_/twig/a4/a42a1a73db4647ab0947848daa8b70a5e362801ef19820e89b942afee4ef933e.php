<?php

/* node_modules/es5-ext/array/#/flatten.js */
class __TwigTemplate_e61806d2542c25c3420a8670548d3354d00f7c54817d3dd8e7c0b475b9ee553c extends Twig_Template
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
        $__internal_cd5f1b4d924d397b9a05df86728141cdc0c3b5c177d45a6dfe4dd67ef41d170b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5f1b4d924d397b9a05df86728141cdc0c3b5c177d45a6dfe4dd67ef41d170b->enter($__internal_cd5f1b4d924d397b9a05df86728141cdc0c3b5c177d45a6dfe4dd67ef41d170b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/flatten.js"));

        // line 1
        echo "// Stack grow safe implementation

\"use strict\";

var ensureValue       = require(\"../../object/valid-value\")
  , isArray           = Array.isArray
  , objHasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function () {
\tvar input = ensureValue(this), index = 0, remaining, remainingIndexes, length, i, result = [];
\t// Jslint: ignore
\tmain: while (input) {
\t\tlength = input.length;
\t\tfor (i = index; i < length; ++i) {
\t\t\tif (!objHasOwnProperty.call(input, i)) continue;
\t\t\tif (isArray(input[i])) {
\t\t\t\tif (i < length - 1) {
\t\t\t\t\t// eslint-disable-next-line max-depth
\t\t\t\t\tif (!remaining) {
\t\t\t\t\t\tremaining = [];
\t\t\t\t\t\tremainingIndexes = [];
\t\t\t\t\t}
\t\t\t\t\tremaining.push(input);
\t\t\t\t\tremainingIndexes.push(i + 1);
\t\t\t\t}
\t\t\t\tinput = input[i];
\t\t\t\tindex = 0;
\t\t\t\tcontinue main;
\t\t\t}
\t\t\tresult.push(input[i]);
\t\t}
\t\tif (remaining) {
\t\t\tinput = remaining.pop();
\t\t\tindex = remainingIndexes.pop();
\t\t} else {
\t\t\tinput = null;
\t\t}
\t}
\treturn result;
};
";
        
        $__internal_cd5f1b4d924d397b9a05df86728141cdc0c3b5c177d45a6dfe4dd67ef41d170b->leave($__internal_cd5f1b4d924d397b9a05df86728141cdc0c3b5c177d45a6dfe4dd67ef41d170b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Stack grow safe implementation

\"use strict\";

var ensureValue       = require(\"../../object/valid-value\")
  , isArray           = Array.isArray
  , objHasOwnProperty = Object.prototype.hasOwnProperty;

module.exports = function () {
\tvar input = ensureValue(this), index = 0, remaining, remainingIndexes, length, i, result = [];
\t// Jslint: ignore
\tmain: while (input) {
\t\tlength = input.length;
\t\tfor (i = index; i < length; ++i) {
\t\t\tif (!objHasOwnProperty.call(input, i)) continue;
\t\t\tif (isArray(input[i])) {
\t\t\t\tif (i < length - 1) {
\t\t\t\t\t// eslint-disable-next-line max-depth
\t\t\t\t\tif (!remaining) {
\t\t\t\t\t\tremaining = [];
\t\t\t\t\t\tremainingIndexes = [];
\t\t\t\t\t}
\t\t\t\t\tremaining.push(input);
\t\t\t\t\tremainingIndexes.push(i + 1);
\t\t\t\t}
\t\t\t\tinput = input[i];
\t\t\t\tindex = 0;
\t\t\t\tcontinue main;
\t\t\t}
\t\t\tresult.push(input[i]);
\t\t}
\t\tif (remaining) {
\t\t\tinput = remaining.pop();
\t\t\tindex = remainingIndexes.pop();
\t\t} else {
\t\t\tinput = null;
\t\t}
\t}
\treturn result;
};
", "node_modules/es5-ext/array/#/flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/flatten.js");
    }
}
