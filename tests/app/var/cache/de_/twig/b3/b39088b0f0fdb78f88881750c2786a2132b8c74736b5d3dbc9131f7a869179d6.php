<?php

/* node_modules/core-js/library/fn/array/virtual/some.js */
class __TwigTemplate_034f3e0912b533b67f99797b482be4b07198cae2031a6b40ec74df3f1431091f extends Twig_Template
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
        $__internal_ada76ae7a6d37b711979b1f1d790d6aff593a28917ac2e71446f3fbf3c233656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada76ae7a6d37b711979b1f1d790d6aff593a28917ac2e71446f3fbf3c233656->enter($__internal_ada76ae7a6d37b711979b1f1d790d6aff593a28917ac2e71446f3fbf3c233656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/some.js"));

        // line 1
        echo "require('../../../modules/es6.array.some');
module.exports = require('../../../modules/_entry-virtual')('Array').some;
";
        
        $__internal_ada76ae7a6d37b711979b1f1d790d6aff593a28917ac2e71446f3fbf3c233656->leave($__internal_ada76ae7a6d37b711979b1f1d790d6aff593a28917ac2e71446f3fbf3c233656_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/some.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.some');
module.exports = require('../../../modules/_entry-virtual')('Array').some;
", "node_modules/core-js/library/fn/array/virtual/some.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/some.js");
    }
}
