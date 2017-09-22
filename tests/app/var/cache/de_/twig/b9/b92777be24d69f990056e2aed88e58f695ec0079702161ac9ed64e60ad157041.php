<?php

/* node_modules/core-js/library/fn/string/virtual/sup.js */
class __TwigTemplate_309ae8bc5d693cae3370a44fee130210c1c3bca057ffa00f29e6ec0dd2fd67d9 extends Twig_Template
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
        $__internal_cb147823b7b62a656551fb4b3ff02a52447a2a384311edb3a1452d435ca52a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb147823b7b62a656551fb4b3ff02a52447a2a384311edb3a1452d435ca52a42->enter($__internal_cb147823b7b62a656551fb4b3ff02a52447a2a384311edb3a1452d435ca52a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/virtual/sup.js"));

        // line 1
        echo "require('../../../modules/es6.string.sup');
module.exports = require('../../../modules/_entry-virtual')('String').sup;
";
        
        $__internal_cb147823b7b62a656551fb4b3ff02a52447a2a384311edb3a1452d435ca52a42->leave($__internal_cb147823b7b62a656551fb4b3ff02a52447a2a384311edb3a1452d435ca52a42_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/virtual/sup.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.sup');
module.exports = require('../../../modules/_entry-virtual')('String').sup;
", "node_modules/core-js/library/fn/string/virtual/sup.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/virtual/sup.js");
    }
}
