<?php

/* node_modules/core-js/fn/delay.js */
class __TwigTemplate_c0defba8532c8d537295dd25c3fd6d43d30705f1cd3ad991419f32da09831cc5 extends Twig_Template
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
        $__internal_363b9c4fc93954bbb72180784b117b723ad8ed5dd0d07a0531498d0d430574b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363b9c4fc93954bbb72180784b117b723ad8ed5dd0d07a0531498d0d430574b1->enter($__internal_363b9c4fc93954bbb72180784b117b723ad8ed5dd0d07a0531498d0d430574b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/delay.js"));

        // line 1
        echo "require('../modules/core.delay');
module.exports = require('../modules/_core').delay;
";
        
        $__internal_363b9c4fc93954bbb72180784b117b723ad8ed5dd0d07a0531498d0d430574b1->leave($__internal_363b9c4fc93954bbb72180784b117b723ad8ed5dd0d07a0531498d0d430574b1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/delay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.delay');
module.exports = require('../modules/_core').delay;
", "node_modules/core-js/fn/delay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/delay.js");
    }
}
