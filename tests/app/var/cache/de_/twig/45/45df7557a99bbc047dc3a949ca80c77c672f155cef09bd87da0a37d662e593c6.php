<?php

/* node_modules/read-pkg-up/index.js */
class __TwigTemplate_3d8f805fce65b01e91edf55b2af9586368b18f6e98cddb1b1e8b5f4a9add2712 extends Twig_Template
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
        $__internal_5d0a596fb3b902af0b6a2566d518d25f6af2ea5696314d66f68ec535a5bc79e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0a596fb3b902af0b6a2566d518d25f6af2ea5696314d66f68ec535a5bc79e7->enter($__internal_5d0a596fb3b902af0b6a2566d518d25f6af2ea5696314d66f68ec535a5bc79e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/read-pkg-up/index.js"));

        // line 1
        echo "'use strict';
const findUp = require('find-up');
const readPkg = require('read-pkg');

module.exports = opts => {
\treturn findUp('package.json', opts).then(fp => {
\t\tif (!fp) {
\t\t\treturn {};
\t\t}

\t\treturn readPkg(fp, opts).then(pkg => ({pkg, path: fp}));
\t});
};

module.exports.sync = opts => {
\tconst fp = findUp.sync('package.json', opts);

\tif (!fp) {
\t\treturn {};
\t}

\treturn {
\t\tpkg: readPkg.sync(fp, opts),
\t\tpath: fp
\t};
};
";
        
        $__internal_5d0a596fb3b902af0b6a2566d518d25f6af2ea5696314d66f68ec535a5bc79e7->leave($__internal_5d0a596fb3b902af0b6a2566d518d25f6af2ea5696314d66f68ec535a5bc79e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/read-pkg-up/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const findUp = require('find-up');
const readPkg = require('read-pkg');

module.exports = opts => {
\treturn findUp('package.json', opts).then(fp => {
\t\tif (!fp) {
\t\t\treturn {};
\t\t}

\t\treturn readPkg(fp, opts).then(pkg => ({pkg, path: fp}));
\t});
};

module.exports.sync = opts => {
\tconst fp = findUp.sync('package.json', opts);

\tif (!fp) {
\t\treturn {};
\t}

\treturn {
\t\tpkg: readPkg.sync(fp, opts),
\t\tpath: fp
\t};
};
", "node_modules/read-pkg-up/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/read-pkg-up/index.js");
    }
}
