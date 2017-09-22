<?php

/* node_modules/core-js/library/fn/set-interval.js */
class __TwigTemplate_3b00b088c753d62455f4bbcfacf0adce7e545a438569d0320cde7eb5d753c020 extends Twig_Template
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
        $__internal_2890c04aed6f3f9d52e9c20644c109de25db387a8fe814463a996cdeaf012294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2890c04aed6f3f9d52e9c20644c109de25db387a8fe814463a996cdeaf012294->enter($__internal_2890c04aed6f3f9d52e9c20644c109de25db387a8fe814463a996cdeaf012294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/set-interval.js"));

        // line 1
        echo "require('../modules/web.timers');
module.exports = require('../modules/_core').setInterval;
";
        
        $__internal_2890c04aed6f3f9d52e9c20644c109de25db387a8fe814463a996cdeaf012294->leave($__internal_2890c04aed6f3f9d52e9c20644c109de25db387a8fe814463a996cdeaf012294_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/set-interval.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.timers');
module.exports = require('../modules/_core').setInterval;
", "node_modules/core-js/library/fn/set-interval.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/set-interval.js");
    }
}
