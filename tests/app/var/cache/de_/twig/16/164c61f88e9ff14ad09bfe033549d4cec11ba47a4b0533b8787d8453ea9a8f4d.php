<?php

/* node_modules/core-js/fn/number/max-safe-integer.js */
class __TwigTemplate_bd2dff3905b291113b082779157756c9f1464d4d7cffa918121721c7fe3a554a extends Twig_Template
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
        $__internal_555ff69d4cf934ca037923ff60b32f9f6370e5b5728fbc4027307aaace116591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555ff69d4cf934ca037923ff60b32f9f6370e5b5728fbc4027307aaace116591->enter($__internal_555ff69d4cf934ca037923ff60b32f9f6370e5b5728fbc4027307aaace116591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/max-safe-integer.js"));

        // line 1
        echo "require('../../modules/es6.number.max-safe-integer');
module.exports = 0x1fffffffffffff;
";
        
        $__internal_555ff69d4cf934ca037923ff60b32f9f6370e5b5728fbc4027307aaace116591->leave($__internal_555ff69d4cf934ca037923ff60b32f9f6370e5b5728fbc4027307aaace116591_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/max-safe-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.number.max-safe-integer');
module.exports = 0x1fffffffffffff;
", "node_modules/core-js/fn/number/max-safe-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/max-safe-integer.js");
    }
}
