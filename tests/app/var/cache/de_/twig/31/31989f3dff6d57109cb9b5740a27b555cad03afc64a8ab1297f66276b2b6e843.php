<?php

/* node_modules/fsevents/node_modules/string-width/index.js */
class __TwigTemplate_9ae566c04393ef1bcd5d4d7bf0fa30daa5f80242a7891877bca23eaeb6fe8410 extends Twig_Template
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
        $__internal_a81b151ee41c20c567e615463075033ba46a30b0ce7421210a6f55b3ae371d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81b151ee41c20c567e615463075033ba46a30b0ce7421210a6f55b3ae371d50->enter($__internal_a81b151ee41c20c567e615463075033ba46a30b0ce7421210a6f55b3ae371d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/string-width/index.js"));

        // line 1
        echo "'use strict';
var stripAnsi = require('strip-ansi');
var codePointAt = require('code-point-at');
var isFullwidthCodePoint = require('is-fullwidth-code-point');

// https://github.com/nodejs/io.js/blob/cff7300a578be1b10001f2d967aaedc88aee6402/lib/readline.js#L1345
module.exports = function (str) {
\tif (typeof str !== 'string' || str.length === 0) {
\t\treturn 0;
\t}

\tvar width = 0;

\tstr = stripAnsi(str);

\tfor (var i = 0; i < str.length; i++) {
\t\tvar code = codePointAt(str, i);

\t\t// ignore control characters
\t\tif (code <= 0x1f || (code >= 0x7f && code <= 0x9f)) {
\t\t\tcontinue;
\t\t}

\t\t// surrogates
\t\tif (code >= 0x10000) {
\t\t\ti++;
\t\t}

\t\tif (isFullwidthCodePoint(code)) {
\t\t\twidth += 2;
\t\t} else {
\t\t\twidth++;
\t\t}
\t}

\treturn width;
};
";
        
        $__internal_a81b151ee41c20c567e615463075033ba46a30b0ce7421210a6f55b3ae371d50->leave($__internal_a81b151ee41c20c567e615463075033ba46a30b0ce7421210a6f55b3ae371d50_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/string-width/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var stripAnsi = require('strip-ansi');
var codePointAt = require('code-point-at');
var isFullwidthCodePoint = require('is-fullwidth-code-point');

// https://github.com/nodejs/io.js/blob/cff7300a578be1b10001f2d967aaedc88aee6402/lib/readline.js#L1345
module.exports = function (str) {
\tif (typeof str !== 'string' || str.length === 0) {
\t\treturn 0;
\t}

\tvar width = 0;

\tstr = stripAnsi(str);

\tfor (var i = 0; i < str.length; i++) {
\t\tvar code = codePointAt(str, i);

\t\t// ignore control characters
\t\tif (code <= 0x1f || (code >= 0x7f && code <= 0x9f)) {
\t\t\tcontinue;
\t\t}

\t\t// surrogates
\t\tif (code >= 0x10000) {
\t\t\ti++;
\t\t}

\t\tif (isFullwidthCodePoint(code)) {
\t\t\twidth += 2;
\t\t} else {
\t\t\twidth++;
\t\t}
\t}

\treturn width;
};
", "node_modules/fsevents/node_modules/string-width/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/string-width/index.js");
    }
}
