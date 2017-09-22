<?php

/* node_modules/path-exists/index.js */
class __TwigTemplate_51ac3e6d39d39e3eb9d454295640840b33c9ae23d11119d32278d90079a6d277 extends Twig_Template
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
        $__internal_000a7dc1128013797b3072a4ea72040f6494fb52f0472454fa93ad92620b0a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000a7dc1128013797b3072a4ea72040f6494fb52f0472454fa93ad92620b0a25->enter($__internal_000a7dc1128013797b3072a4ea72040f6494fb52f0472454fa93ad92620b0a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/path-exists/index.js"));

        // line 1
        echo "'use strict';
const fs = require('fs');

module.exports = fp => new Promise(resolve => {
\tfs.access(fp, err => {
\t\tresolve(!err);
\t});
});

module.exports.sync = fp => {
\ttry {
\t\tfs.accessSync(fp);
\t\treturn true;
\t} catch (err) {
\t\treturn false;
\t}
};
";
        
        $__internal_000a7dc1128013797b3072a4ea72040f6494fb52f0472454fa93ad92620b0a25->leave($__internal_000a7dc1128013797b3072a4ea72040f6494fb52f0472454fa93ad92620b0a25_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/path-exists/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const fs = require('fs');

module.exports = fp => new Promise(resolve => {
\tfs.access(fp, err => {
\t\tresolve(!err);
\t});
});

module.exports.sync = fp => {
\ttry {
\t\tfs.accessSync(fp);
\t\treturn true;
\t} catch (err) {
\t\treturn false;
\t}
};
", "node_modules/path-exists/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/path-exists/index.js");
    }
}
