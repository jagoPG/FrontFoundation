<?php

/* node_modules/core-js/library/fn/array/is-array.js */
class __TwigTemplate_8c71e6876015eccbbd092c4a1993bce4ba8d6887dd0637415bf6ff634bed7ed5 extends Twig_Template
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
        $__internal_a779aac4e4d55f998ba9ad9bb1aaa2f27e71d95450ad7d2b814b3fec516b7384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a779aac4e4d55f998ba9ad9bb1aaa2f27e71d95450ad7d2b814b3fec516b7384->enter($__internal_a779aac4e4d55f998ba9ad9bb1aaa2f27e71d95450ad7d2b814b3fec516b7384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/is-array.js"));

        // line 1
        echo "require('../../modules/es6.array.is-array');
module.exports = require('../../modules/_core').Array.isArray;
";
        
        $__internal_a779aac4e4d55f998ba9ad9bb1aaa2f27e71d95450ad7d2b814b3fec516b7384->leave($__internal_a779aac4e4d55f998ba9ad9bb1aaa2f27e71d95450ad7d2b814b3fec516b7384_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/is-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.is-array');
module.exports = require('../../modules/_core').Array.isArray;
", "node_modules/core-js/library/fn/array/is-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/is-array.js");
    }
}
