<?php

/* node_modules/chalk/node_modules/supports-color/index.js */
class __TwigTemplate_971faad9452ecd05cf5a507cd03fc2f42384979e7636a83fc1b5b6db362e7b6c extends Twig_Template
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
        $__internal_481806e850035c45ee20e7de4f9d592c1d6b32cf8bae21587ee3fac59f7168ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481806e850035c45ee20e7de4f9d592c1d6b32cf8bae21587ee3fac59f7168ac->enter($__internal_481806e850035c45ee20e7de4f9d592c1d6b32cf8bae21587ee3fac59f7168ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/chalk/node_modules/supports-color/index.js"));

        // line 1
        echo "'use strict';
var argv = process.argv;

var terminator = argv.indexOf('--');
var hasFlag = function (flag) {
\tflag = '--' + flag;
\tvar pos = argv.indexOf(flag);
\treturn pos !== -1 && (terminator !== -1 ? pos < terminator : true);
};

module.exports = (function () {
\tif ('FORCE_COLOR' in process.env) {
\t\treturn true;
\t}

\tif (hasFlag('no-color') ||
\t\thasFlag('no-colors') ||
\t\thasFlag('color=false')) {
\t\treturn false;
\t}

\tif (hasFlag('color') ||
\t\thasFlag('colors') ||
\t\thasFlag('color=true') ||
\t\thasFlag('color=always')) {
\t\treturn true;
\t}

\tif (process.stdout && !process.stdout.isTTY) {
\t\treturn false;
\t}

\tif (process.platform === 'win32') {
\t\treturn true;
\t}

\tif ('COLORTERM' in process.env) {
\t\treturn true;
\t}

\tif (process.env.TERM === 'dumb') {
\t\treturn false;
\t}

\tif (/^screen|^xterm|^vt100|color|ansi|cygwin|linux/i.test(process.env.TERM)) {
\t\treturn true;
\t}

\treturn false;
})();
";
        
        $__internal_481806e850035c45ee20e7de4f9d592c1d6b32cf8bae21587ee3fac59f7168ac->leave($__internal_481806e850035c45ee20e7de4f9d592c1d6b32cf8bae21587ee3fac59f7168ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/chalk/node_modules/supports-color/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var argv = process.argv;

var terminator = argv.indexOf('--');
var hasFlag = function (flag) {
\tflag = '--' + flag;
\tvar pos = argv.indexOf(flag);
\treturn pos !== -1 && (terminator !== -1 ? pos < terminator : true);
};

module.exports = (function () {
\tif ('FORCE_COLOR' in process.env) {
\t\treturn true;
\t}

\tif (hasFlag('no-color') ||
\t\thasFlag('no-colors') ||
\t\thasFlag('color=false')) {
\t\treturn false;
\t}

\tif (hasFlag('color') ||
\t\thasFlag('colors') ||
\t\thasFlag('color=true') ||
\t\thasFlag('color=always')) {
\t\treturn true;
\t}

\tif (process.stdout && !process.stdout.isTTY) {
\t\treturn false;
\t}

\tif (process.platform === 'win32') {
\t\treturn true;
\t}

\tif ('COLORTERM' in process.env) {
\t\treturn true;
\t}

\tif (process.env.TERM === 'dumb') {
\t\treturn false;
\t}

\tif (/^screen|^xterm|^vt100|color|ansi|cygwin|linux/i.test(process.env.TERM)) {
\t\treturn true;
\t}

\treturn false;
})();
", "node_modules/chalk/node_modules/supports-color/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/chalk/node_modules/supports-color/index.js");
    }
}
