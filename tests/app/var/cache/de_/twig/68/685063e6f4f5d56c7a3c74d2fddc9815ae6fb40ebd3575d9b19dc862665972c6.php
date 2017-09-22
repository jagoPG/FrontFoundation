<?php

/* node_modules/core-js/library/fn/string/link.js */
class __TwigTemplate_ee35960c5d723fc535c17038c3b2585805424bf157d37bfee517b9279d4f272c extends Twig_Template
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
        $__internal_280af52b33ab4f73ce2d662b7b20d41994ab8b3396f4c0c679601aa23247291b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280af52b33ab4f73ce2d662b7b20d41994ab8b3396f4c0c679601aa23247291b->enter($__internal_280af52b33ab4f73ce2d662b7b20d41994ab8b3396f4c0c679601aa23247291b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/link.js"));

        // line 1
        echo "require('../../modules/es6.string.link');
module.exports = require('../../modules/_core').String.link;
";
        
        $__internal_280af52b33ab4f73ce2d662b7b20d41994ab8b3396f4c0c679601aa23247291b->leave($__internal_280af52b33ab4f73ce2d662b7b20d41994ab8b3396f4c0c679601aa23247291b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/link.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.link');
module.exports = require('../../modules/_core').String.link;
", "node_modules/core-js/library/fn/string/link.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/link.js");
    }
}
