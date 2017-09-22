<?php

/* node_modules/core-js/fn/object/create.js */
class __TwigTemplate_6b049ead7c375ffbce0eb3addde964d04e8fd4283cc0aff3de4453fe79f034ac extends Twig_Template
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
        $__internal_1fb44d25a4ae34ab497700ca62012804e8b2c55284b277e8aad18816b89fcdc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb44d25a4ae34ab497700ca62012804e8b2c55284b277e8aad18816b89fcdc8->enter($__internal_1fb44d25a4ae34ab497700ca62012804e8b2c55284b277e8aad18816b89fcdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/create.js"));

        // line 1
        echo "require('../../modules/es6.object.create');
var \$Object = require('../../modules/_core').Object;
module.exports = function create(P, D) {
  return \$Object.create(P, D);
};
";
        
        $__internal_1fb44d25a4ae34ab497700ca62012804e8b2c55284b277e8aad18816b89fcdc8->leave($__internal_1fb44d25a4ae34ab497700ca62012804e8b2c55284b277e8aad18816b89fcdc8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/create.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.create');
var \$Object = require('../../modules/_core').Object;
module.exports = function create(P, D) {
  return \$Object.create(P, D);
};
", "node_modules/core-js/fn/object/create.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/create.js");
    }
}
