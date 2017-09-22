<?php

/* node_modules/core-js/fn/regexp/index.js */
class __TwigTemplate_cbe845e5f5d931c077d55f8ca2205363e7e03d3a6f9976cd5ef37632ad13f532 extends Twig_Template
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
        $__internal_af1648b7f2452d4ab1758b43a400a2ac2b6beaa641339ba4e025428d24b1821a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1648b7f2452d4ab1758b43a400a2ac2b6beaa641339ba4e025428d24b1821a->enter($__internal_af1648b7f2452d4ab1758b43a400a2ac2b6beaa641339ba4e025428d24b1821a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/regexp/index.js"));

        // line 1
        echo "require('../../modules/es6.regexp.constructor');
require('../../modules/es6.regexp.to-string');
require('../../modules/es6.regexp.flags');
require('../../modules/es6.regexp.match');
require('../../modules/es6.regexp.replace');
require('../../modules/es6.regexp.search');
require('../../modules/es6.regexp.split');
require('../../modules/core.regexp.escape');
module.exports = require('../../modules/_core').RegExp;
";
        
        $__internal_af1648b7f2452d4ab1758b43a400a2ac2b6beaa641339ba4e025428d24b1821a->leave($__internal_af1648b7f2452d4ab1758b43a400a2ac2b6beaa641339ba4e025428d24b1821a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/regexp/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.constructor');
require('../../modules/es6.regexp.to-string');
require('../../modules/es6.regexp.flags');
require('../../modules/es6.regexp.match');
require('../../modules/es6.regexp.replace');
require('../../modules/es6.regexp.search');
require('../../modules/es6.regexp.split');
require('../../modules/core.regexp.escape');
module.exports = require('../../modules/_core').RegExp;
", "node_modules/core-js/fn/regexp/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/regexp/index.js");
    }
}
