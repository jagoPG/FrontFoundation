<?php

/* node_modules/core-js/core/_.js */
class __TwigTemplate_4810cb2ca3e31c47c66b992fb3e9b873b69f2c9f5ecb572201e1909bf7039807 extends Twig_Template
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
        $__internal_7b633c40b87b5afa96110f3fda1e32b06632f5af482938287ff60b48c6fde2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b633c40b87b5afa96110f3fda1e32b06632f5af482938287ff60b48c6fde2d3->enter($__internal_7b633c40b87b5afa96110f3fda1e32b06632f5af482938287ff60b48c6fde2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/core/_.js"));

        // line 1
        echo "require('../modules/core.function.part');
module.exports = require('../modules/_core')._;
";
        
        $__internal_7b633c40b87b5afa96110f3fda1e32b06632f5af482938287ff60b48c6fde2d3->leave($__internal_7b633c40b87b5afa96110f3fda1e32b06632f5af482938287ff60b48c6fde2d3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/core/_.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.function.part');
module.exports = require('../modules/_core')._;
", "node_modules/core-js/core/_.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/core/_.js");
    }
}
