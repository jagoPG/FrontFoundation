<?php

/* node_modules/read-pkg/index.js */
class __TwigTemplate_99e85f1de818919ac524b6bf264022a5788bddc3d24cf899a4cd24cf1395fa6f extends Twig_Template
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
        $__internal_7204d512990e65819bebcd9283f46b923793c2f5868690ee49a58d4f9d83e3c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7204d512990e65819bebcd9283f46b923793c2f5868690ee49a58d4f9d83e3c5->enter($__internal_7204d512990e65819bebcd9283f46b923793c2f5868690ee49a58d4f9d83e3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/read-pkg/index.js"));

        // line 1
        echo "'use strict';
const path = require('path');
const loadJsonFile = require('load-json-file');
const pathType = require('path-type');

module.exports = (fp, opts) => {
\tif (typeof fp !== 'string') {
\t\topts = fp;
\t\tfp = '.';
\t}

\topts = opts || {};

\treturn pathType.dir(fp)
\t\t.then(isDir => {
\t\t\tif (isDir) {
\t\t\t\tfp = path.join(fp, 'package.json');
\t\t\t}

\t\t\treturn loadJsonFile(fp);
\t\t})
\t\t.then(x => {
\t\t\tif (opts.normalize !== false) {
\t\t\t\trequire('normalize-package-data')(x);
\t\t\t}

\t\t\treturn x;
\t\t});
};

module.exports.sync = (fp, opts) => {
\tif (typeof fp !== 'string') {
\t\topts = fp;
\t\tfp = '.';
\t}

\topts = opts || {};
\tfp = pathType.dirSync(fp) ? path.join(fp, 'package.json') : fp;

\tconst x = loadJsonFile.sync(fp);

\tif (opts.normalize !== false) {
\t\trequire('normalize-package-data')(x);
\t}

\treturn x;
};
";
        
        $__internal_7204d512990e65819bebcd9283f46b923793c2f5868690ee49a58d4f9d83e3c5->leave($__internal_7204d512990e65819bebcd9283f46b923793c2f5868690ee49a58d4f9d83e3c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/read-pkg/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const path = require('path');
const loadJsonFile = require('load-json-file');
const pathType = require('path-type');

module.exports = (fp, opts) => {
\tif (typeof fp !== 'string') {
\t\topts = fp;
\t\tfp = '.';
\t}

\topts = opts || {};

\treturn pathType.dir(fp)
\t\t.then(isDir => {
\t\t\tif (isDir) {
\t\t\t\tfp = path.join(fp, 'package.json');
\t\t\t}

\t\t\treturn loadJsonFile(fp);
\t\t})
\t\t.then(x => {
\t\t\tif (opts.normalize !== false) {
\t\t\t\trequire('normalize-package-data')(x);
\t\t\t}

\t\t\treturn x;
\t\t});
};

module.exports.sync = (fp, opts) => {
\tif (typeof fp !== 'string') {
\t\topts = fp;
\t\tfp = '.';
\t}

\topts = opts || {};
\tfp = pathType.dirSync(fp) ? path.join(fp, 'package.json') : fp;

\tconst x = loadJsonFile.sync(fp);

\tif (opts.normalize !== false) {
\t\trequire('normalize-package-data')(x);
\t}

\treturn x;
};
", "node_modules/read-pkg/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/read-pkg/index.js");
    }
}
