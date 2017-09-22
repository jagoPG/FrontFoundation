<?php

/* node_modules/core-js/library/fn/typed/data-view.js */
class __TwigTemplate_a9e69566a59e09fa8166fede1b036d9cc7baed900a7869d9a5450951c7b11bb5 extends Twig_Template
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
        $__internal_f033efcfe31326e39ea1222a385270e99bf6d768bf350d5a243c799a19d61885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f033efcfe31326e39ea1222a385270e99bf6d768bf350d5a243c799a19d61885->enter($__internal_f033efcfe31326e39ea1222a385270e99bf6d768bf350d5a243c799a19d61885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/typed/data-view.js"));

        // line 1
        echo "require('../../modules/es6.typed.data-view');
require('../../modules/es6.object.to-string');
module.exports = require('../../modules/_core').DataView;
";
        
        $__internal_f033efcfe31326e39ea1222a385270e99bf6d768bf350d5a243c799a19d61885->leave($__internal_f033efcfe31326e39ea1222a385270e99bf6d768bf350d5a243c799a19d61885_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/typed/data-view.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.data-view');
require('../../modules/es6.object.to-string');
module.exports = require('../../modules/_core').DataView;
", "node_modules/core-js/library/fn/typed/data-view.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/typed/data-view.js");
    }
}
