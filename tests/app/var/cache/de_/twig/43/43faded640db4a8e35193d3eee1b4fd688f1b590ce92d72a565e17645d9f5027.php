<?php

/* node_modules/core-js/fn/string/sub.js */
class __TwigTemplate_ecdab7ae6b00a0281ff23a05ad6be4bfeb1515255581dda1391d5f496f7555ea extends Twig_Template
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
        $__internal_e885e9cec7816532facddb32890f4dfa607221596e5d6f850cf3ee72015a85bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e885e9cec7816532facddb32890f4dfa607221596e5d6f850cf3ee72015a85bd->enter($__internal_e885e9cec7816532facddb32890f4dfa607221596e5d6f850cf3ee72015a85bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/sub.js"));

        // line 1
        echo "require('../../modules/es6.string.sub');
module.exports = require('../../modules/_core').String.sub;
";
        
        $__internal_e885e9cec7816532facddb32890f4dfa607221596e5d6f850cf3ee72015a85bd->leave($__internal_e885e9cec7816532facddb32890f4dfa607221596e5d6f850cf3ee72015a85bd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/sub.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.sub');
module.exports = require('../../modules/_core').String.sub;
", "node_modules/core-js/fn/string/sub.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/sub.js");
    }
}
