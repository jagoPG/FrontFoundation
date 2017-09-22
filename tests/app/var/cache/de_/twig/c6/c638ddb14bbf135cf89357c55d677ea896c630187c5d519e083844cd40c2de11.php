<?php

/* node_modules/find-up/index.js */
class __TwigTemplate_040898f86a42e89ede5dc1936070cc15e77a9b440f2a744b27e4cca23b10c09a extends Twig_Template
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
        $__internal_42b41426ffdbd489ec21e879dbddb84c4312f1ce7de54e1f8293c130b8d1c972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b41426ffdbd489ec21e879dbddb84c4312f1ce7de54e1f8293c130b8d1c972->enter($__internal_42b41426ffdbd489ec21e879dbddb84c4312f1ce7de54e1f8293c130b8d1c972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/find-up/index.js"));

        // line 1
        echo "'use strict';
const path = require('path');
const locatePath = require('locate-path');

module.exports = (filename, opts) => {
\topts = opts || {};

\tconst startDir = path.resolve(opts.cwd || '');
\tconst root = path.parse(startDir).root;

\tconst filenames = [].concat(filename);

\treturn new Promise(resolve => {
\t\t(function find(dir) {
\t\t\tlocatePath(filenames, {cwd: dir}).then(file => {
\t\t\t\tif (file) {
\t\t\t\t\tresolve(path.join(dir, file));
\t\t\t\t} else if (dir === root) {
\t\t\t\t\tresolve(null);
\t\t\t\t} else {
\t\t\t\t\tfind(path.dirname(dir));
\t\t\t\t}
\t\t\t});
\t\t})(startDir);
\t});
};

module.exports.sync = (filename, opts) => {
\topts = opts || {};

\tlet dir = path.resolve(opts.cwd || '');
\tconst root = path.parse(dir).root;

\tconst filenames = [].concat(filename);

\t// eslint-disable-next-line no-constant-condition
\twhile (true) {
\t\tconst file = locatePath.sync(filenames, {cwd: dir});

\t\tif (file) {
\t\t\treturn path.join(dir, file);
\t\t} else if (dir === root) {
\t\t\treturn null;
\t\t}

\t\tdir = path.dirname(dir);
\t}
};
";
        
        $__internal_42b41426ffdbd489ec21e879dbddb84c4312f1ce7de54e1f8293c130b8d1c972->leave($__internal_42b41426ffdbd489ec21e879dbddb84c4312f1ce7de54e1f8293c130b8d1c972_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/find-up/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const path = require('path');
const locatePath = require('locate-path');

module.exports = (filename, opts) => {
\topts = opts || {};

\tconst startDir = path.resolve(opts.cwd || '');
\tconst root = path.parse(startDir).root;

\tconst filenames = [].concat(filename);

\treturn new Promise(resolve => {
\t\t(function find(dir) {
\t\t\tlocatePath(filenames, {cwd: dir}).then(file => {
\t\t\t\tif (file) {
\t\t\t\t\tresolve(path.join(dir, file));
\t\t\t\t} else if (dir === root) {
\t\t\t\t\tresolve(null);
\t\t\t\t} else {
\t\t\t\t\tfind(path.dirname(dir));
\t\t\t\t}
\t\t\t});
\t\t})(startDir);
\t});
};

module.exports.sync = (filename, opts) => {
\topts = opts || {};

\tlet dir = path.resolve(opts.cwd || '');
\tconst root = path.parse(dir).root;

\tconst filenames = [].concat(filename);

\t// eslint-disable-next-line no-constant-condition
\twhile (true) {
\t\tconst file = locatePath.sync(filenames, {cwd: dir});

\t\tif (file) {
\t\t\treturn path.join(dir, file);
\t\t} else if (dir === root) {
\t\t\treturn null;
\t\t}

\t\tdir = path.dirname(dir);
\t}
};
", "node_modules/find-up/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/find-up/index.js");
    }
}
