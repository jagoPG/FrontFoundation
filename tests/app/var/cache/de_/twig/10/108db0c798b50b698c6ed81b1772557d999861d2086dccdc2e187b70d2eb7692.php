<?php

/* node_modules/npm-run-path/index.js */
class __TwigTemplate_515a1b1c7001a204a6c1416376f41d4daec40e7f5b22f418d7f19484b568fc80 extends Twig_Template
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
        $__internal_e04099bc3ea1e80bb13b2bdd00607cd5f2e3d5267ce8c36df9e22a03ff4f5403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04099bc3ea1e80bb13b2bdd00607cd5f2e3d5267ce8c36df9e22a03ff4f5403->enter($__internal_e04099bc3ea1e80bb13b2bdd00607cd5f2e3d5267ce8c36df9e22a03ff4f5403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/npm-run-path/index.js"));

        // line 1
        echo "'use strict';
const path = require('path');
const pathKey = require('path-key');

module.exports = opts => {
\topts = Object.assign({
\t\tcwd: process.cwd(),
\t\tpath: process.env[pathKey()]
\t}, opts);

\tlet prev;
\tlet pth = path.resolve(opts.cwd);
\tconst ret = [];

\twhile (prev !== pth) {
\t\tret.push(path.join(pth, 'node_modules/.bin'));
\t\tprev = pth;
\t\tpth = path.resolve(pth, '..');
\t}

\t// ensure the running `node` binary is used
\tret.push(path.dirname(process.execPath));

\treturn ret.concat(opts.path).join(path.delimiter);
};

module.exports.env = opts => {
\topts = Object.assign({
\t\tenv: process.env
\t}, opts);

\tconst env = Object.assign({}, opts.env);
\tconst path = pathKey({env});

\topts.path = env[path];
\tenv[path] = module.exports(opts);

\treturn env;
};
";
        
        $__internal_e04099bc3ea1e80bb13b2bdd00607cd5f2e3d5267ce8c36df9e22a03ff4f5403->leave($__internal_e04099bc3ea1e80bb13b2bdd00607cd5f2e3d5267ce8c36df9e22a03ff4f5403_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/npm-run-path/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const path = require('path');
const pathKey = require('path-key');

module.exports = opts => {
\topts = Object.assign({
\t\tcwd: process.cwd(),
\t\tpath: process.env[pathKey()]
\t}, opts);

\tlet prev;
\tlet pth = path.resolve(opts.cwd);
\tconst ret = [];

\twhile (prev !== pth) {
\t\tret.push(path.join(pth, 'node_modules/.bin'));
\t\tprev = pth;
\t\tpth = path.resolve(pth, '..');
\t}

\t// ensure the running `node` binary is used
\tret.push(path.dirname(process.execPath));

\treturn ret.concat(opts.path).join(path.delimiter);
};

module.exports.env = opts => {
\topts = Object.assign({
\t\tenv: process.env
\t}, opts);

\tconst env = Object.assign({}, opts.env);
\tconst path = pathKey({env});

\topts.path = env[path];
\tenv[path] = module.exports(opts);

\treturn env;
};
", "node_modules/npm-run-path/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/npm-run-path/index.js");
    }
}
