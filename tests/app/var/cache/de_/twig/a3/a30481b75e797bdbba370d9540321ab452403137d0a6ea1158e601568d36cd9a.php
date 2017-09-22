<?php

/* node_modules/core-js/fn/set-timeout.js */
class __TwigTemplate_94a49194e54859b6ea8804fda48cffea9af0cf740c502daf8d95a2afe6b9cb42 extends Twig_Template
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
        $__internal_c21f10922a6381192fa49f4340a1f317b11f296675720247d5a15f916baf54c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c21f10922a6381192fa49f4340a1f317b11f296675720247d5a15f916baf54c9->enter($__internal_c21f10922a6381192fa49f4340a1f317b11f296675720247d5a15f916baf54c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/set-timeout.js"));

        // line 1
        echo "require('../modules/web.timers');
module.exports = require('../modules/_core').setTimeout;
";
        
        $__internal_c21f10922a6381192fa49f4340a1f317b11f296675720247d5a15f916baf54c9->leave($__internal_c21f10922a6381192fa49f4340a1f317b11f296675720247d5a15f916baf54c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/set-timeout.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.timers');
module.exports = require('../modules/_core').setTimeout;
", "node_modules/core-js/fn/set-timeout.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/set-timeout.js");
    }
}
