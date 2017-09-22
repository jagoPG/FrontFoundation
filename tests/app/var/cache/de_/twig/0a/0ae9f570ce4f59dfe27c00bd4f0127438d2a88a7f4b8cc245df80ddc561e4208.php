<?php

/* node_modules/locate-path/index.js */
class __TwigTemplate_b5e351db0ae155fa3abf215d6e919a72ff8da92ec622ac00bdc60d37f524d255 extends Twig_Template
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
        $__internal_75cfe49918287bfd7189a9ed526c6810203bcbb99e782054b7daf664176eb68e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75cfe49918287bfd7189a9ed526c6810203bcbb99e782054b7daf664176eb68e->enter($__internal_75cfe49918287bfd7189a9ed526c6810203bcbb99e782054b7daf664176eb68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/locate-path/index.js"));

        // line 1
        echo "'use strict';
const path = require('path');
const pathExists = require('path-exists');
const pLocate = require('p-locate');

module.exports = (iterable, opts) => {
\topts = Object.assign({
\t\tcwd: process.cwd()
\t}, opts);

\treturn pLocate(iterable, el => pathExists(path.resolve(opts.cwd, el)), opts);
};

module.exports.sync = (iterable, opts) => {
\topts = Object.assign({
\t\tcwd: process.cwd()
\t}, opts);

\tfor (const el of iterable) {
\t\tif (pathExists.sync(path.resolve(opts.cwd, el))) {
\t\t\treturn el;
\t\t}
\t}
};
";
        
        $__internal_75cfe49918287bfd7189a9ed526c6810203bcbb99e782054b7daf664176eb68e->leave($__internal_75cfe49918287bfd7189a9ed526c6810203bcbb99e782054b7daf664176eb68e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/locate-path/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const path = require('path');
const pathExists = require('path-exists');
const pLocate = require('p-locate');

module.exports = (iterable, opts) => {
\topts = Object.assign({
\t\tcwd: process.cwd()
\t}, opts);

\treturn pLocate(iterable, el => pathExists(path.resolve(opts.cwd, el)), opts);
};

module.exports.sync = (iterable, opts) => {
\topts = Object.assign({
\t\tcwd: process.cwd()
\t}, opts);

\tfor (const el of iterable) {
\t\tif (pathExists.sync(path.resolve(opts.cwd, el))) {
\t\t\treturn el;
\t\t}
\t}
};
", "node_modules/locate-path/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/locate-path/index.js");
    }
}
