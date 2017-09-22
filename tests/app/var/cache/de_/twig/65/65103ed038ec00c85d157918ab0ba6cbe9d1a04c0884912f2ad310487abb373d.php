<?php

/* node_modules/core-js/library/fn/array/virtual/map.js */
class __TwigTemplate_5ad92c25d7ab62a19642712c27054d6acd7e2df31e76c901857ca5f037d7e690 extends Twig_Template
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
        $__internal_3361d07d6b882eba23830614114edab7246ff359474aa1fc1234fd2e3ead871b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3361d07d6b882eba23830614114edab7246ff359474aa1fc1234fd2e3ead871b->enter($__internal_3361d07d6b882eba23830614114edab7246ff359474aa1fc1234fd2e3ead871b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/map.js"));

        // line 1
        echo "require('../../../modules/es6.array.map');
module.exports = require('../../../modules/_entry-virtual')('Array').map;
";
        
        $__internal_3361d07d6b882eba23830614114edab7246ff359474aa1fc1234fd2e3ead871b->leave($__internal_3361d07d6b882eba23830614114edab7246ff359474aa1fc1234fd2e3ead871b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.map');
module.exports = require('../../../modules/_entry-virtual')('Array').map;
", "node_modules/core-js/library/fn/array/virtual/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/map.js");
    }
}
