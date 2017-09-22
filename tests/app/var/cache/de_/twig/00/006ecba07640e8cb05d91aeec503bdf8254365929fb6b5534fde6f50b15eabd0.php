<?php

/* node_modules/camelcase/index.js */
class __TwigTemplate_f06fba585f1c437dd5675c3b1031c0155c571303da7a2b64cd9eeeda28063beb extends Twig_Template
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
        $__internal_8f8e8d71fbf763cc9bc37f8ba0cc0e8d769d2ba1f061def78b2bc391fef2ebae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8e8d71fbf763cc9bc37f8ba0cc0e8d769d2ba1f061def78b2bc391fef2ebae->enter($__internal_8f8e8d71fbf763cc9bc37f8ba0cc0e8d769d2ba1f061def78b2bc391fef2ebae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/camelcase/index.js"));

        // line 1
        echo "'use strict';

function preserveCamelCase(str) {
\tlet isLastCharLower = false;
\tlet isLastCharUpper = false;
\tlet isLastLastCharUpper = false;

\tfor (let i = 0; i < str.length; i++) {
\t\tconst c = str[i];

\t\tif (isLastCharLower && /[a-zA-Z]/.test(c) && c.toUpperCase() === c) {
\t\t\tstr = str.substr(0, i) + '-' + str.substr(i);
\t\t\tisLastCharLower = false;
\t\t\tisLastLastCharUpper = isLastCharUpper;
\t\t\tisLastCharUpper = true;
\t\t\ti++;
\t\t} else if (isLastCharUpper && isLastLastCharUpper && /[a-zA-Z]/.test(c) && c.toLowerCase() === c) {
\t\t\tstr = str.substr(0, i - 1) + '-' + str.substr(i - 1);
\t\t\tisLastLastCharUpper = isLastCharUpper;
\t\t\tisLastCharUpper = false;
\t\t\tisLastCharLower = true;
\t\t} else {
\t\t\tisLastCharLower = c.toLowerCase() === c;
\t\t\tisLastLastCharUpper = isLastCharUpper;
\t\t\tisLastCharUpper = c.toUpperCase() === c;
\t\t}
\t}

\treturn str;
}

module.exports = function (str) {
\tif (arguments.length > 1) {
\t\tstr = Array.from(arguments)
\t\t\t.map(x => x.trim())
\t\t\t.filter(x => x.length)
\t\t\t.join('-');
\t} else {
\t\tstr = str.trim();
\t}

\tif (str.length === 0) {
\t\treturn '';
\t}

\tif (str.length === 1) {
\t\treturn str.toLowerCase();
\t}

\tif (/^[a-z0-9]+\$/.test(str)) {
\t\treturn str;
\t}

\tconst hasUpperCase = str !== str.toLowerCase();

\tif (hasUpperCase) {
\t\tstr = preserveCamelCase(str);
\t}

\treturn str
\t\t.replace(/^[_.\\- ]+/, '')
\t\t.toLowerCase()
\t\t.replace(/[_.\\- ]+(\\w|\$)/g, (m, p1) => p1.toUpperCase());
};
";
        
        $__internal_8f8e8d71fbf763cc9bc37f8ba0cc0e8d769d2ba1f061def78b2bc391fef2ebae->leave($__internal_8f8e8d71fbf763cc9bc37f8ba0cc0e8d769d2ba1f061def78b2bc391fef2ebae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/camelcase/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

function preserveCamelCase(str) {
\tlet isLastCharLower = false;
\tlet isLastCharUpper = false;
\tlet isLastLastCharUpper = false;

\tfor (let i = 0; i < str.length; i++) {
\t\tconst c = str[i];

\t\tif (isLastCharLower && /[a-zA-Z]/.test(c) && c.toUpperCase() === c) {
\t\t\tstr = str.substr(0, i) + '-' + str.substr(i);
\t\t\tisLastCharLower = false;
\t\t\tisLastLastCharUpper = isLastCharUpper;
\t\t\tisLastCharUpper = true;
\t\t\ti++;
\t\t} else if (isLastCharUpper && isLastLastCharUpper && /[a-zA-Z]/.test(c) && c.toLowerCase() === c) {
\t\t\tstr = str.substr(0, i - 1) + '-' + str.substr(i - 1);
\t\t\tisLastLastCharUpper = isLastCharUpper;
\t\t\tisLastCharUpper = false;
\t\t\tisLastCharLower = true;
\t\t} else {
\t\t\tisLastCharLower = c.toLowerCase() === c;
\t\t\tisLastLastCharUpper = isLastCharUpper;
\t\t\tisLastCharUpper = c.toUpperCase() === c;
\t\t}
\t}

\treturn str;
}

module.exports = function (str) {
\tif (arguments.length > 1) {
\t\tstr = Array.from(arguments)
\t\t\t.map(x => x.trim())
\t\t\t.filter(x => x.length)
\t\t\t.join('-');
\t} else {
\t\tstr = str.trim();
\t}

\tif (str.length === 0) {
\t\treturn '';
\t}

\tif (str.length === 1) {
\t\treturn str.toLowerCase();
\t}

\tif (/^[a-z0-9]+\$/.test(str)) {
\t\treturn str;
\t}

\tconst hasUpperCase = str !== str.toLowerCase();

\tif (hasUpperCase) {
\t\tstr = preserveCamelCase(str);
\t}

\treturn str
\t\t.replace(/^[_.\\- ]+/, '')
\t\t.toLowerCase()
\t\t.replace(/[_.\\- ]+(\\w|\$)/g, (m, p1) => p1.toUpperCase());
};
", "node_modules/camelcase/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/camelcase/index.js");
    }
}
