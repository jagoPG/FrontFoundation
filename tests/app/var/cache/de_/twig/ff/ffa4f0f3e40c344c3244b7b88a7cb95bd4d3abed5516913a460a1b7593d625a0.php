<?php

/* node_modules/number-is-nan/index.js */
class __TwigTemplate_189c5860adfb83f92a5d154a1ea3508a733d6a7af6e34190f389839e2896e632 extends Twig_Template
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
        $__internal_8f84c4b6b1d690d063ea6c433c009fca45ae6be638e0db798b4e27282f8596e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f84c4b6b1d690d063ea6c433c009fca45ae6be638e0db798b4e27282f8596e8->enter($__internal_8f84c4b6b1d690d063ea6c433c009fca45ae6be638e0db798b4e27282f8596e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/number-is-nan/index.js"));

        // line 1
        echo "'use strict';
module.exports = Number.isNaN || function (x) {
\treturn x !== x;
};
";
        
        $__internal_8f84c4b6b1d690d063ea6c433c009fca45ae6be638e0db798b4e27282f8596e8->leave($__internal_8f84c4b6b1d690d063ea6c433c009fca45ae6be638e0db798b4e27282f8596e8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/number-is-nan/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
module.exports = Number.isNaN || function (x) {
\treturn x !== x;
};
", "node_modules/number-is-nan/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/number-is-nan/index.js");
    }
}
