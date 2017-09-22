<?php

/* node_modules/pkg-dir/index.js */
class __TwigTemplate_6ba04d3ad1639ad7127464fdff461594c549e4e57eea82733933b2ad091a1bc6 extends Twig_Template
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
        $__internal_36543c7b2e85376d92d5525db013b064703962720076efa643b9d5cd67898fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36543c7b2e85376d92d5525db013b064703962720076efa643b9d5cd67898fa1->enter($__internal_36543c7b2e85376d92d5525db013b064703962720076efa643b9d5cd67898fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pkg-dir/index.js"));

        // line 1
        echo "'use strict';
const path = require('path');
const findUp = require('find-up');

module.exports = cwd => findUp('package.json', {cwd}).then(fp => fp ? path.dirname(fp) : null);

module.exports.sync = cwd => {
\tconst fp = findUp.sync('package.json', {cwd});
\treturn fp ? path.dirname(fp) : null;
};
";
        
        $__internal_36543c7b2e85376d92d5525db013b064703962720076efa643b9d5cd67898fa1->leave($__internal_36543c7b2e85376d92d5525db013b064703962720076efa643b9d5cd67898fa1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pkg-dir/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
const path = require('path');
const findUp = require('find-up');

module.exports = cwd => findUp('package.json', {cwd}).then(fp => fp ? path.dirname(fp) : null);

module.exports.sync = cwd => {
\tconst fp = findUp.sync('package.json', {cwd});
\treturn fp ? path.dirname(fp) : null;
};
", "node_modules/pkg-dir/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pkg-dir/index.js");
    }
}
