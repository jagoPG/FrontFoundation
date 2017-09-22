<?php

/* node_modules/path-type/index.js */
class __TwigTemplate_d6eb3d321f2ea0afd3a119313e5917fe2499dca9e7607ffea150eca8c1a3d22c extends Twig_Template
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
        $__internal_7f72b6f275f9db9f4abeda5daeb81d507433b83d94571388f4043f4cc313ed8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f72b6f275f9db9f4abeda5daeb81d507433b83d94571388f4043f4cc313ed8c->enter($__internal_7f72b6f275f9db9f4abeda5daeb81d507433b83d94571388f4043f4cc313ed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/path-type/index.js"));

        // line 1
        echo "'use strict';
const fs = require('fs');
const pify = require('pify');

function type(fn, fn2, fp) {
\tif (typeof fp !== 'string') {
\t\treturn Promise.reject(new TypeError(`Expected a string, got \${typeof fp}`));
\t}

\treturn pify(fs[fn])(fp).then(stats => stats[fn2]());
}

function typeSync(fn, fn2, fp) {
\tif (typeof fp !== 'string') {
\t\tthrow new TypeError(`Expected a string, got \${typeof fp}`);
\t}

\treturn fs[fn](fp)[fn2]();
}

exports.file = type.bind(null, 'stat', 'isFile');
exports.dir = type.bind(null, 'stat', 'isDirectory');
exports.symlink = type.bind(null, 'lstat', 'isSymbolicLink');
exports.fileSync = typeSync.bind(null, 'statSync', 'isFile');
exports.dirSync = typeSync.bind(null, 'statSync', 'isDirectory');
exports.symlinkSync = typeSync.bind(null, 'lstatSync', 'isSymbolicLink');
";
        
        $__internal_7f72b6f275f9db9f4abeda5daeb81d507433b83d94571388f4043f4cc313ed8c->leave($__internal_7f72b6f275f9db9f4abeda5daeb81d507433b83d94571388f4043f4cc313ed8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/path-type/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const fs = require('fs');
const pify = require('pify');

function type(fn, fn2, fp) {
\tif (typeof fp !== 'string') {
\t\treturn Promise.reject(new TypeError(`Expected a string, got \${typeof fp}`));
\t}

\treturn pify(fs[fn])(fp).then(stats => stats[fn2]());
}

function typeSync(fn, fn2, fp) {
\tif (typeof fp !== 'string') {
\t\tthrow new TypeError(`Expected a string, got \${typeof fp}`);
\t}

\treturn fs[fn](fp)[fn2]();
}

exports.file = type.bind(null, 'stat', 'isFile');
exports.dir = type.bind(null, 'stat', 'isDirectory');
exports.symlink = type.bind(null, 'lstat', 'isSymbolicLink');
exports.fileSync = typeSync.bind(null, 'statSync', 'isFile');
exports.dirSync = typeSync.bind(null, 'statSync', 'isDirectory');
exports.symlinkSync = typeSync.bind(null, 'lstatSync', 'isSymbolicLink');
", "node_modules/path-type/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/path-type/index.js");
    }
}
