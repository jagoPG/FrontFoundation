<?php

/* node_modules/core-js/library/core/delay.js */
class __TwigTemplate_7ae3a3489323b002655a0270391ef380d6e313d5d7b18cc496d55a1a5d002629 extends Twig_Template
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
        $__internal_5d1a8baa890b6850f739cff7c33f4828b7694546a4d6e43ef4f3d39860c95994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1a8baa890b6850f739cff7c33f4828b7694546a4d6e43ef4f3d39860c95994->enter($__internal_5d1a8baa890b6850f739cff7c33f4828b7694546a4d6e43ef4f3d39860c95994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/core/delay.js"));

        // line 1
        echo "require('../modules/core.delay');
module.exports = require('../modules/_core').delay;
";
        
        $__internal_5d1a8baa890b6850f739cff7c33f4828b7694546a4d6e43ef4f3d39860c95994->leave($__internal_5d1a8baa890b6850f739cff7c33f4828b7694546a4d6e43ef4f3d39860c95994_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/core/delay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.delay');
module.exports = require('../modules/_core').delay;
", "node_modules/core-js/library/core/delay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/core/delay.js");
    }
}
