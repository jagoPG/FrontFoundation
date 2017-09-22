<?php

/* node_modules/core-js/fn/promise/index.js */
class __TwigTemplate_307d569c65601ad23e3fc3a37a9c7e0c9168c224f7cc57b2938d0d3f7bf09049 extends Twig_Template
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
        $__internal_2881d51aa638384b6412186e90373c53a73834466a45a5c6c667a680cbc82776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2881d51aa638384b6412186e90373c53a73834466a45a5c6c667a680cbc82776->enter($__internal_2881d51aa638384b6412186e90373c53a73834466a45a5c6c667a680cbc82776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/promise/index.js"));

        // line 1
        echo "require('../../modules/es6.object.to-string');
require('../../modules/es6.string.iterator');
require('../../modules/web.dom.iterable');
require('../../modules/es6.promise');
require('../../modules/es7.promise.finally');
require('../../modules/es7.promise.try');
module.exports = require('../../modules/_core').Promise;
";
        
        $__internal_2881d51aa638384b6412186e90373c53a73834466a45a5c6c667a680cbc82776->leave($__internal_2881d51aa638384b6412186e90373c53a73834466a45a5c6c667a680cbc82776_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/promise/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.to-string');
require('../../modules/es6.string.iterator');
require('../../modules/web.dom.iterable');
require('../../modules/es6.promise');
require('../../modules/es7.promise.finally');
require('../../modules/es7.promise.try');
module.exports = require('../../modules/_core').Promise;
", "node_modules/core-js/fn/promise/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/promise/index.js");
    }
}
