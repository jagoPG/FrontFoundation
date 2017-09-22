<?php

/* node_modules/path-is-absolute/index.js */
class __TwigTemplate_9caa9c3018539331108c5590bb33dabe8300ffe50a2a386ac9d74dc0e0296b8f extends Twig_Template
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
        $__internal_4bec674272a6ca091d225a66af9bad83d73fa7a3ea4388b9cab82c7d1a66076f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bec674272a6ca091d225a66af9bad83d73fa7a3ea4388b9cab82c7d1a66076f->enter($__internal_4bec674272a6ca091d225a66af9bad83d73fa7a3ea4388b9cab82c7d1a66076f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/path-is-absolute/index.js"));

        // line 1
        echo "'use strict';

function posix(path) {
\treturn path.charAt(0) === '/';
}

function win32(path) {
\t// https://github.com/nodejs/node/blob/b3fcc245fb25539909ef1d5eaa01dbf92e168633/lib/path.js#L56
\tvar splitDeviceRe = /^([a-zA-Z]:|[\\\\\\/]{2}[^\\\\\\/]+[\\\\\\/]+[^\\\\\\/]+)?([\\\\\\/])?([\\s\\S]*?)\$/;
\tvar result = splitDeviceRe.exec(path);
\tvar device = result[1] || '';
\tvar isUnc = Boolean(device && device.charAt(1) !== ':');

\t// UNC paths are always absolute
\treturn Boolean(result[2] || isUnc);
}

module.exports = process.platform === 'win32' ? win32 : posix;
module.exports.posix = posix;
module.exports.win32 = win32;
";
        
        $__internal_4bec674272a6ca091d225a66af9bad83d73fa7a3ea4388b9cab82c7d1a66076f->leave($__internal_4bec674272a6ca091d225a66af9bad83d73fa7a3ea4388b9cab82c7d1a66076f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/path-is-absolute/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

function posix(path) {
\treturn path.charAt(0) === '/';
}

function win32(path) {
\t// https://github.com/nodejs/node/blob/b3fcc245fb25539909ef1d5eaa01dbf92e168633/lib/path.js#L56
\tvar splitDeviceRe = /^([a-zA-Z]:|[\\\\\\/]{2}[^\\\\\\/]+[\\\\\\/]+[^\\\\\\/]+)?([\\\\\\/])?([\\s\\S]*?)\$/;
\tvar result = splitDeviceRe.exec(path);
\tvar device = result[1] || '';
\tvar isUnc = Boolean(device && device.charAt(1) !== ':');

\t// UNC paths are always absolute
\treturn Boolean(result[2] || isUnc);
}

module.exports = process.platform === 'win32' ? win32 : posix;
module.exports.posix = posix;
module.exports.win32 = win32;
", "node_modules/path-is-absolute/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/path-is-absolute/index.js");
    }
}
