<?php

/* node_modules/core-js/library/fn/string/repeat.js */
class __TwigTemplate_c9d016e680fc2855c457802f2d7c6208713efa07595c70dd2f1773509c1ff0ae extends Twig_Template
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
        $__internal_4405183a6532d8cd85881ec3c7c4d86feed04e6a4c09c7f0598865e45535c29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4405183a6532d8cd85881ec3c7c4d86feed04e6a4c09c7f0598865e45535c29b->enter($__internal_4405183a6532d8cd85881ec3c7c4d86feed04e6a4c09c7f0598865e45535c29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/repeat.js"));

        // line 1
        echo "require('../../modules/es6.string.repeat');
module.exports = require('../../modules/_core').String.repeat;
";
        
        $__internal_4405183a6532d8cd85881ec3c7c4d86feed04e6a4c09c7f0598865e45535c29b->leave($__internal_4405183a6532d8cd85881ec3c7c4d86feed04e6a4c09c7f0598865e45535c29b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/repeat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.repeat');
module.exports = require('../../modules/_core').String.repeat;
", "node_modules/core-js/library/fn/string/repeat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/repeat.js");
    }
}
