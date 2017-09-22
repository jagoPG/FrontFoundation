<?php

/* node_modules/fsevents/node_modules/number-is-nan/index.js */
class __TwigTemplate_0cb25c1dbd467f13cfcb4c634aab8d73340f6d1baa2cef545edfa2a3a83b19b5 extends Twig_Template
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
        $__internal_5b306941c1cd5ea60fe339a5d3443549f5a1f648541d784c2d8dc5925039050e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b306941c1cd5ea60fe339a5d3443549f5a1f648541d784c2d8dc5925039050e->enter($__internal_5b306941c1cd5ea60fe339a5d3443549f5a1f648541d784c2d8dc5925039050e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/number-is-nan/index.js"));

        // line 1
        echo "'use strict';
module.exports = Number.isNaN || function (x) {
\treturn x !== x;
};
";
        
        $__internal_5b306941c1cd5ea60fe339a5d3443549f5a1f648541d784c2d8dc5925039050e->leave($__internal_5b306941c1cd5ea60fe339a5d3443549f5a1f648541d784c2d8dc5925039050e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/number-is-nan/index.js";
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
", "node_modules/fsevents/node_modules/number-is-nan/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/number-is-nan/index.js");
    }
}
