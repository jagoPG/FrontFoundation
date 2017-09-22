<?php

/* node_modules/uglify-js/node_modules/camelcase/index.js */
class __TwigTemplate_ff174186b73d5f6b97aa4639f0c8d5a6e5e2b70ac9bce0708434319b2cc956c1 extends Twig_Template
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
        $__internal_f324753442e9069e148755193a12a7b5468966405aaec33a0e158f45a386ff35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f324753442e9069e148755193a12a7b5468966405aaec33a0e158f45a386ff35->enter($__internal_f324753442e9069e148755193a12a7b5468966405aaec33a0e158f45a386ff35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglify-js/node_modules/camelcase/index.js"));

        // line 1
        echo "'use strict';
module.exports = function () {
\tvar str = [].map.call(arguments, function (str) {
\t\treturn str.trim();
\t}).filter(function (str) {
\t\treturn str.length;
\t}).join('-');

\tif (!str.length) {
\t\treturn '';
\t}

\tif (str.length === 1 || !(/[_.\\- ]+/).test(str) ) {
\t\tif (str[0] === str[0].toLowerCase() && str.slice(1) !== str.slice(1).toLowerCase()) {
\t\t\treturn str;
\t\t}

\t\treturn str.toLowerCase();
\t}

\treturn str
\t.replace(/^[_.\\- ]+/, '')
\t.toLowerCase()
\t.replace(/[_.\\- ]+(\\w|\$)/g, function (m, p1) {
\t\treturn p1.toUpperCase();
\t});
};
";
        
        $__internal_f324753442e9069e148755193a12a7b5468966405aaec33a0e158f45a386ff35->leave($__internal_f324753442e9069e148755193a12a7b5468966405aaec33a0e158f45a386ff35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglify-js/node_modules/camelcase/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = function () {
\tvar str = [].map.call(arguments, function (str) {
\t\treturn str.trim();
\t}).filter(function (str) {
\t\treturn str.length;
\t}).join('-');

\tif (!str.length) {
\t\treturn '';
\t}

\tif (str.length === 1 || !(/[_.\\- ]+/).test(str) ) {
\t\tif (str[0] === str[0].toLowerCase() && str.slice(1) !== str.slice(1).toLowerCase()) {
\t\t\treturn str;
\t\t}

\t\treturn str.toLowerCase();
\t}

\treturn str
\t.replace(/^[_.\\- ]+/, '')
\t.toLowerCase()
\t.replace(/[_.\\- ]+(\\w|\$)/g, function (m, p1) {
\t\treturn p1.toUpperCase();
\t});
};
", "node_modules/uglify-js/node_modules/camelcase/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglify-js/node_modules/camelcase/index.js");
    }
}
