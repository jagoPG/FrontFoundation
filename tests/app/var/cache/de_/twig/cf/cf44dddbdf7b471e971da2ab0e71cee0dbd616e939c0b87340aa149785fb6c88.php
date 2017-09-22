<?php

/* node_modules/core-js/fn/array/includes.js */
class __TwigTemplate_3bc0bd49a30950ed42dfd48e2f6f510c0345d7dce5d00bb9dbd8024fcf758e85 extends Twig_Template
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
        $__internal_a17b824c3d6ac4b5af3074850be27fb5b26866f3cff9d5914cc262cc795fcb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17b824c3d6ac4b5af3074850be27fb5b26866f3cff9d5914cc262cc795fcb65->enter($__internal_a17b824c3d6ac4b5af3074850be27fb5b26866f3cff9d5914cc262cc795fcb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/includes.js"));

        // line 1
        echo "require('../../modules/es7.array.includes');
module.exports = require('../../modules/_core').Array.includes;
";
        
        $__internal_a17b824c3d6ac4b5af3074850be27fb5b26866f3cff9d5914cc262cc795fcb65->leave($__internal_a17b824c3d6ac4b5af3074850be27fb5b26866f3cff9d5914cc262cc795fcb65_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.array.includes');
module.exports = require('../../modules/_core').Array.includes;
", "node_modules/core-js/fn/array/includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/includes.js");
    }
}
