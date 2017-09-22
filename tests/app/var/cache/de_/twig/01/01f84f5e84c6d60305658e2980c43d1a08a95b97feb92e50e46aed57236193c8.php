<?php

/* node_modules/core-js/fn/array/virtual/slice.js */
class __TwigTemplate_1b9f305f31ed29ef269de2e30a363889851a05e6b42317a0bad370339645f9ff extends Twig_Template
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
        $__internal_fdda536c5a6dbd0ff1411accaf6cde87e5a9b854c3bcf52f802d1d5521da33a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdda536c5a6dbd0ff1411accaf6cde87e5a9b854c3bcf52f802d1d5521da33a2->enter($__internal_fdda536c5a6dbd0ff1411accaf6cde87e5a9b854c3bcf52f802d1d5521da33a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/virtual/slice.js"));

        // line 1
        echo "require('../../../modules/es6.array.slice');
module.exports = require('../../../modules/_entry-virtual')('Array').slice;
";
        
        $__internal_fdda536c5a6dbd0ff1411accaf6cde87e5a9b854c3bcf52f802d1d5521da33a2->leave($__internal_fdda536c5a6dbd0ff1411accaf6cde87e5a9b854c3bcf52f802d1d5521da33a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/virtual/slice.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.slice');
module.exports = require('../../../modules/_entry-virtual')('Array').slice;
", "node_modules/core-js/fn/array/virtual/slice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/virtual/slice.js");
    }
}
