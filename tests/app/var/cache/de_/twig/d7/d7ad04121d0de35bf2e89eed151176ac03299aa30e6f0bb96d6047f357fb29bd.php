<?php

/* node_modules/fsevents/node_modules/os-tmpdir/index.js */
class __TwigTemplate_e19a9673faf7e1ba3edaeba8398e3c6b1507716ab03c16c69a1c38e15ca4fb62 extends Twig_Template
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
        $__internal_9aea60d59c6578b138206ea719a308f72a5f6cac10e021511fe71c5bba1bf705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aea60d59c6578b138206ea719a308f72a5f6cac10e021511fe71c5bba1bf705->enter($__internal_9aea60d59c6578b138206ea719a308f72a5f6cac10e021511fe71c5bba1bf705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/os-tmpdir/index.js"));

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
        
        $__internal_9aea60d59c6578b138206ea719a308f72a5f6cac10e021511fe71c5bba1bf705->leave($__internal_9aea60d59c6578b138206ea719a308f72a5f6cac10e021511fe71c5bba1bf705_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/os-tmpdir/index.js";
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
", "node_modules/fsevents/node_modules/os-tmpdir/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/os-tmpdir/index.js");
    }
}
