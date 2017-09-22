<?php

/* node_modules/os-tmpdir/index.js */
class __TwigTemplate_2dcb0037203854dea887531ceadec6e33117fe19f8b600d936c928b94174e168 extends Twig_Template
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
        $__internal_9a5c81daea8f485d2d6d79ddb5da0ab13f21ceedb1c4c24dd1956fb84b859501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5c81daea8f485d2d6d79ddb5da0ab13f21ceedb1c4c24dd1956fb84b859501->enter($__internal_9a5c81daea8f485d2d6d79ddb5da0ab13f21ceedb1c4c24dd1956fb84b859501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/os-tmpdir/index.js"));

        // line 1
        echo "'use strict';
var isWindows = process.platform === 'win32';
var trailingSlashRe = isWindows ? /[^:]\\\\\$/ : /.\\/\$/;

// https://github.com/nodejs/node/blob/3e7a14381497a3b73dda68d05b5130563cdab420/lib/os.js#L25-L43
module.exports = function () {
\tvar path;

\tif (isWindows) {
\t\tpath = process.env.TEMP ||
\t\t\tprocess.env.TMP ||
\t\t\t(process.env.SystemRoot || process.env.windir) + '\\\\temp';
\t} else {
\t\tpath = process.env.TMPDIR ||
\t\t\tprocess.env.TMP ||
\t\t\tprocess.env.TEMP ||
\t\t\t'/tmp';
\t}

\tif (trailingSlashRe.test(path)) {
\t\tpath = path.slice(0, -1);
\t}

\treturn path;
};
";
        
        $__internal_9a5c81daea8f485d2d6d79ddb5da0ab13f21ceedb1c4c24dd1956fb84b859501->leave($__internal_9a5c81daea8f485d2d6d79ddb5da0ab13f21ceedb1c4c24dd1956fb84b859501_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/os-tmpdir/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var isWindows = process.platform === 'win32';
var trailingSlashRe = isWindows ? /[^:]\\\\\$/ : /.\\/\$/;

// https://github.com/nodejs/node/blob/3e7a14381497a3b73dda68d05b5130563cdab420/lib/os.js#L25-L43
module.exports = function () {
\tvar path;

\tif (isWindows) {
\t\tpath = process.env.TEMP ||
\t\t\tprocess.env.TMP ||
\t\t\t(process.env.SystemRoot || process.env.windir) + '\\\\temp';
\t} else {
\t\tpath = process.env.TMPDIR ||
\t\t\tprocess.env.TMP ||
\t\t\tprocess.env.TEMP ||
\t\t\t'/tmp';
\t}

\tif (trailingSlashRe.test(path)) {
\t\tpath = path.slice(0, -1);
\t}

\treturn path;
};
", "node_modules/os-tmpdir/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/os-tmpdir/index.js");
    }
}
