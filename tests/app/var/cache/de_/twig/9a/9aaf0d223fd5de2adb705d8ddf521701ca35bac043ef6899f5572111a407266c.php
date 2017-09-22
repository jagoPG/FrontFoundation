<?php

/* node_modules/core-js/library/fn/array/virtual/for-each.js */
class __TwigTemplate_02d87573bc4e83e596e9ec46df975f0778da9e445328751e97dd92612ff219d5 extends Twig_Template
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
        $__internal_64bde42ed880fef9925ce9f8be4fa95a4d72a89bd16e00e840687451d2754989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64bde42ed880fef9925ce9f8be4fa95a4d72a89bd16e00e840687451d2754989->enter($__internal_64bde42ed880fef9925ce9f8be4fa95a4d72a89bd16e00e840687451d2754989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/for-each.js"));

        // line 1
        echo "require('../../../modules/es6.array.for-each');
module.exports = require('../../../modules/_entry-virtual')('Array').forEach;
";
        
        $__internal_64bde42ed880fef9925ce9f8be4fa95a4d72a89bd16e00e840687451d2754989->leave($__internal_64bde42ed880fef9925ce9f8be4fa95a4d72a89bd16e00e840687451d2754989_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/for-each.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.for-each');
module.exports = require('../../../modules/_entry-virtual')('Array').forEach;
", "node_modules/core-js/library/fn/array/virtual/for-each.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/for-each.js");
    }
}
