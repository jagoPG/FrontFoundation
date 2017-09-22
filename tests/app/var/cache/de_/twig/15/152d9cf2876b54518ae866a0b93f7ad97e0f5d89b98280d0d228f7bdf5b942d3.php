<?php

/* node_modules/fsevents/node_modules/strip-json-comments/index.js */
class __TwigTemplate_1f8ffc1fb113e3a83b5d379eb9923bda062da50f9a24c99abb89ebba233fa6d0 extends Twig_Template
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
        $__internal_26eaa3660e89113dc90b974efef0548450a0be91cbe4723c8b5379fd1d45a37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26eaa3660e89113dc90b974efef0548450a0be91cbe4723c8b5379fd1d45a37d->enter($__internal_26eaa3660e89113dc90b974efef0548450a0be91cbe4723c8b5379fd1d45a37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/strip-json-comments/index.js"));

        // line 1
        echo "'use strict';
var singleComment = 1;
var multiComment = 2;

function stripWithoutWhitespace() {
\treturn '';
}

function stripWithWhitespace(str, start, end) {
\treturn str.slice(start, end).replace(/\\S/g, ' ');
}

module.exports = function (str, opts) {
\topts = opts || {};

\tvar currentChar;
\tvar nextChar;
\tvar insideString = false;
\tvar insideComment = false;
\tvar offset = 0;
\tvar ret = '';
\tvar strip = opts.whitespace === false ? stripWithoutWhitespace : stripWithWhitespace;

\tfor (var i = 0; i < str.length; i++) {
\t\tcurrentChar = str[i];
\t\tnextChar = str[i + 1];

\t\tif (!insideComment && currentChar === '\"') {
\t\t\tvar escaped = str[i - 1] === '\\\\' && str[i - 2] !== '\\\\';
\t\t\tif (!escaped) {
\t\t\t\tinsideString = !insideString;
\t\t\t}
\t\t}

\t\tif (insideString) {
\t\t\tcontinue;
\t\t}

\t\tif (!insideComment && currentChar + nextChar === '//') {
\t\t\tret += str.slice(offset, i);
\t\t\toffset = i;
\t\t\tinsideComment = singleComment;
\t\t\ti++;
\t\t} else if (insideComment === singleComment && currentChar + nextChar === '\\r\\n') {
\t\t\ti++;
\t\t\tinsideComment = false;
\t\t\tret += strip(str, offset, i);
\t\t\toffset = i;
\t\t\tcontinue;
\t\t} else if (insideComment === singleComment && currentChar === '\\n') {
\t\t\tinsideComment = false;
\t\t\tret += strip(str, offset, i);
\t\t\toffset = i;
\t\t} else if (!insideComment && currentChar + nextChar === '/*') {
\t\t\tret += str.slice(offset, i);
\t\t\toffset = i;
\t\t\tinsideComment = multiComment;
\t\t\ti++;
\t\t\tcontinue;
\t\t} else if (insideComment === multiComment && currentChar + nextChar === '*/') {
\t\t\ti++;
\t\t\tinsideComment = false;
\t\t\tret += strip(str, offset, i + 1);
\t\t\toffset = i + 1;
\t\t\tcontinue;
\t\t}
\t}

\treturn ret + (insideComment ? strip(str.substr(offset)) : str.substr(offset));
};
";
        
        $__internal_26eaa3660e89113dc90b974efef0548450a0be91cbe4723c8b5379fd1d45a37d->leave($__internal_26eaa3660e89113dc90b974efef0548450a0be91cbe4723c8b5379fd1d45a37d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/strip-json-comments/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var singleComment = 1;
var multiComment = 2;

function stripWithoutWhitespace() {
\treturn '';
}

function stripWithWhitespace(str, start, end) {
\treturn str.slice(start, end).replace(/\\S/g, ' ');
}

module.exports = function (str, opts) {
\topts = opts || {};

\tvar currentChar;
\tvar nextChar;
\tvar insideString = false;
\tvar insideComment = false;
\tvar offset = 0;
\tvar ret = '';
\tvar strip = opts.whitespace === false ? stripWithoutWhitespace : stripWithWhitespace;

\tfor (var i = 0; i < str.length; i++) {
\t\tcurrentChar = str[i];
\t\tnextChar = str[i + 1];

\t\tif (!insideComment && currentChar === '\"') {
\t\t\tvar escaped = str[i - 1] === '\\\\' && str[i - 2] !== '\\\\';
\t\t\tif (!escaped) {
\t\t\t\tinsideString = !insideString;
\t\t\t}
\t\t}

\t\tif (insideString) {
\t\t\tcontinue;
\t\t}

\t\tif (!insideComment && currentChar + nextChar === '//') {
\t\t\tret += str.slice(offset, i);
\t\t\toffset = i;
\t\t\tinsideComment = singleComment;
\t\t\ti++;
\t\t} else if (insideComment === singleComment && currentChar + nextChar === '\\r\\n') {
\t\t\ti++;
\t\t\tinsideComment = false;
\t\t\tret += strip(str, offset, i);
\t\t\toffset = i;
\t\t\tcontinue;
\t\t} else if (insideComment === singleComment && currentChar === '\\n') {
\t\t\tinsideComment = false;
\t\t\tret += strip(str, offset, i);
\t\t\toffset = i;
\t\t} else if (!insideComment && currentChar + nextChar === '/*') {
\t\t\tret += str.slice(offset, i);
\t\t\toffset = i;
\t\t\tinsideComment = multiComment;
\t\t\ti++;
\t\t\tcontinue;
\t\t} else if (insideComment === multiComment && currentChar + nextChar === '*/') {
\t\t\ti++;
\t\t\tinsideComment = false;
\t\t\tret += strip(str, offset, i + 1);
\t\t\toffset = i + 1;
\t\t\tcontinue;
\t\t}
\t}

\treturn ret + (insideComment ? strip(str.substr(offset)) : str.substr(offset));
};
", "node_modules/fsevents/node_modules/strip-json-comments/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/strip-json-comments/index.js");
    }
}
