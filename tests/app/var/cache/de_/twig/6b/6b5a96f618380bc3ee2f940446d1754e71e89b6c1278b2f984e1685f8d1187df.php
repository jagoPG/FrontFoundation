<?php

/* node_modules/find-cache-dir/index.js */
class __TwigTemplate_ec05f5db4ab81e131f4a46b36c97c1be8b39c5a54249c51230cf1174a1a1587a extends Twig_Template
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
        $__internal_7307e73e1e9358774c2be6d73b7601027c9535ac7923f2320ee87d032d14b8ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7307e73e1e9358774c2be6d73b7601027c9535ac7923f2320ee87d032d14b8ef->enter($__internal_7307e73e1e9358774c2be6d73b7601027c9535ac7923f2320ee87d032d14b8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/find-cache-dir/index.js"));

        // line 1
        echo "'use strict';
const path = require('path');
const commonDir = require('commondir');
const pkgDir = require('pkg-dir');
const makeDir = require('make-dir');

module.exports = options => {
\tconst name = options.name;
\tlet dir = options.cwd;

\tif (options.files) {
\t\tdir = commonDir(dir, options.files);
\t} else {
\t\tdir = dir || process.cwd();
\t}

\tdir = pkgDir.sync(dir);

\tif (dir) {
\t\tdir = path.join(dir, 'node_modules', '.cache', name);

\t\tif (dir && options.create) {
\t\t\tmakeDir.sync(dir);
\t\t}

\t\tif (options.thunk) {
\t\t\treturn function () {
\t\t\t\treturn path.join.apply(path, [dir].concat(Array.prototype.slice.call(arguments)));
\t\t\t};
\t\t}
\t}

\treturn dir;
};
";
        
        $__internal_7307e73e1e9358774c2be6d73b7601027c9535ac7923f2320ee87d032d14b8ef->leave($__internal_7307e73e1e9358774c2be6d73b7601027c9535ac7923f2320ee87d032d14b8ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/find-cache-dir/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const path = require('path');
const commonDir = require('commondir');
const pkgDir = require('pkg-dir');
const makeDir = require('make-dir');

module.exports = options => {
\tconst name = options.name;
\tlet dir = options.cwd;

\tif (options.files) {
\t\tdir = commonDir(dir, options.files);
\t} else {
\t\tdir = dir || process.cwd();
\t}

\tdir = pkgDir.sync(dir);

\tif (dir) {
\t\tdir = path.join(dir, 'node_modules', '.cache', name);

\t\tif (dir && options.create) {
\t\t\tmakeDir.sync(dir);
\t\t}

\t\tif (options.thunk) {
\t\t\treturn function () {
\t\t\t\treturn path.join.apply(path, [dir].concat(Array.prototype.slice.call(arguments)));
\t\t\t};
\t\t}
\t}

\treturn dir;
};
", "node_modules/find-cache-dir/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/find-cache-dir/index.js");
    }
}
