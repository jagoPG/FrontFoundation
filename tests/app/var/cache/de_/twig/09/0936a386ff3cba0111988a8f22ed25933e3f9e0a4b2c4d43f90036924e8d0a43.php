<?php

/* node_modules/code-point-at/index.js */
class __TwigTemplate_645bdc947fe7caabdba6c696075e00a1bfafd633df5d3969721fa8e7bb9b01de extends Twig_Template
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
        $__internal_44d556f8f87538ef06153e732d9fd526cadaa5298af5ac5f109550d0b99c5367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d556f8f87538ef06153e732d9fd526cadaa5298af5ac5f109550d0b99c5367->enter($__internal_44d556f8f87538ef06153e732d9fd526cadaa5298af5ac5f109550d0b99c5367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/code-point-at/index.js"));

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
        
        $__internal_44d556f8f87538ef06153e732d9fd526cadaa5298af5ac5f109550d0b99c5367->leave($__internal_44d556f8f87538ef06153e732d9fd526cadaa5298af5ac5f109550d0b99c5367_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/code-point-at/index.js";
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
", "node_modules/code-point-at/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/code-point-at/index.js");
    }
}
