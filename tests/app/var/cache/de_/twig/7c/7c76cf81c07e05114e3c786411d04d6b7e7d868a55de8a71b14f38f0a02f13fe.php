<?php

/* node_modules/fsevents/node_modules/code-point-at/index.js */
class __TwigTemplate_2888aef1f680c316abf7f1248eb726c32c6ae42268ac64ff92c79a246423650c extends Twig_Template
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
        $__internal_47524057c79951c760cfd3243b5d14eb6be28698ae6625687dbd70c9915a9100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47524057c79951c760cfd3243b5d14eb6be28698ae6625687dbd70c9915a9100->enter($__internal_47524057c79951c760cfd3243b5d14eb6be28698ae6625687dbd70c9915a9100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/code-point-at/index.js"));

        // line 1
        echo "/* eslint-disable babel/new-cap, xo/throw-new-error */
'use strict';
module.exports = function (str, pos) {
\tif (str === null || str === undefined) {
\t\tthrow TypeError();
\t}

\tstr = String(str);

\tvar size = str.length;
\tvar i = pos ? Number(pos) : 0;

\tif (Number.isNaN(i)) {
\t\ti = 0;
\t}

\tif (i < 0 || i >= size) {
\t\treturn undefined;
\t}

\tvar first = str.charCodeAt(i);

\tif (first >= 0xD800 && first <= 0xDBFF && size > i + 1) {
\t\tvar second = str.charCodeAt(i + 1);

\t\tif (second >= 0xDC00 && second <= 0xDFFF) {
\t\t\treturn ((first - 0xD800) * 0x400) + second - 0xDC00 + 0x10000;
\t\t}
\t}

\treturn first;
};
";
        
        $__internal_47524057c79951c760cfd3243b5d14eb6be28698ae6625687dbd70c9915a9100->leave($__internal_47524057c79951c760cfd3243b5d14eb6be28698ae6625687dbd70c9915a9100_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/code-point-at/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint-disable babel/new-cap, xo/throw-new-error */
'use strict';
module.exports = function (str, pos) {
\tif (str === null || str === undefined) {
\t\tthrow TypeError();
\t}

\tstr = String(str);

\tvar size = str.length;
\tvar i = pos ? Number(pos) : 0;

\tif (Number.isNaN(i)) {
\t\ti = 0;
\t}

\tif (i < 0 || i >= size) {
\t\treturn undefined;
\t}

\tvar first = str.charCodeAt(i);

\tif (first >= 0xD800 && first <= 0xDBFF && size > i + 1) {
\t\tvar second = str.charCodeAt(i + 1);

\t\tif (second >= 0xDC00 && second <= 0xDFFF) {
\t\t\treturn ((first - 0xD800) * 0x400) + second - 0xDC00 + 0x10000;
\t\t}
\t}

\treturn first;
};
", "node_modules/fsevents/node_modules/code-point-at/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/code-point-at/index.js");
    }
}
