<?php

/* node_modules/core-js/library/fn/math/degrees.js */
class __TwigTemplate_9d4d90e152369dee4a70f048164d763e4238a54297478390953f2d239c80a599 extends Twig_Template
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
        $__internal_1d2d2a678e9ff15a46a56fde4454c65969e012c53caab1518acfb9620aa999e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d2d2a678e9ff15a46a56fde4454c65969e012c53caab1518acfb9620aa999e4->enter($__internal_1d2d2a678e9ff15a46a56fde4454c65969e012c53caab1518acfb9620aa999e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/math/degrees.js"));

        // line 1
        echo "require('../../modules/es7.math.degrees');
module.exports = require('../../modules/_core').Math.degrees;
";
        
        $__internal_1d2d2a678e9ff15a46a56fde4454c65969e012c53caab1518acfb9620aa999e4->leave($__internal_1d2d2a678e9ff15a46a56fde4454c65969e012c53caab1518acfb9620aa999e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/math/degrees.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.math.degrees');
module.exports = require('../../modules/_core').Math.degrees;
", "node_modules/core-js/library/fn/math/degrees.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/math/degrees.js");
    }
}
