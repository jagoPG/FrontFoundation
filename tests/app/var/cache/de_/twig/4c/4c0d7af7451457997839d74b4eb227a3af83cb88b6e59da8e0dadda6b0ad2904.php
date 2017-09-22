<?php

/* node_modules/core-js/fn/regexp/constructor.js */
class __TwigTemplate_2b40944184e4dc7d5eb1a5f3f2f017f6f0869d1f020c21c5d25ad6a096142ba2 extends Twig_Template
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
        $__internal_961323e073b150c40ed40521738891d6ed63347f251d0b4af9273c4a84b271a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961323e073b150c40ed40521738891d6ed63347f251d0b4af9273c4a84b271a6->enter($__internal_961323e073b150c40ed40521738891d6ed63347f251d0b4af9273c4a84b271a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/regexp/constructor.js"));

        // line 1
        echo "require('../../modules/es6.regexp.constructor');
module.exports = RegExp;
";
        
        $__internal_961323e073b150c40ed40521738891d6ed63347f251d0b4af9273c4a84b271a6->leave($__internal_961323e073b150c40ed40521738891d6ed63347f251d0b4af9273c4a84b271a6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/regexp/constructor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.constructor');
module.exports = RegExp;
", "node_modules/core-js/fn/regexp/constructor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/regexp/constructor.js");
    }
}
