<?php

/* node_modules/core-js/es7/string.js */
class __TwigTemplate_23f7f8ffb22f49f0e39cd307ff9492828c20382cd125279509932e93ae6f5316 extends Twig_Template
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
        $__internal_903f4e7f95ae25ebea20fee56687417c91d574c204bbe6baa0a510d0fa161df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903f4e7f95ae25ebea20fee56687417c91d574c204bbe6baa0a510d0fa161df3->enter($__internal_903f4e7f95ae25ebea20fee56687417c91d574c204bbe6baa0a510d0fa161df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/string.js"));

        // line 1
        echo "require('../modules/es7.string.at');
require('../modules/es7.string.pad-start');
require('../modules/es7.string.pad-end');
require('../modules/es7.string.trim-left');
require('../modules/es7.string.trim-right');
require('../modules/es7.string.match-all');
module.exports = require('../modules/_core').String;
";
        
        $__internal_903f4e7f95ae25ebea20fee56687417c91d574c204bbe6baa0a510d0fa161df3->leave($__internal_903f4e7f95ae25ebea20fee56687417c91d574c204bbe6baa0a510d0fa161df3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.string.at');
require('../modules/es7.string.pad-start');
require('../modules/es7.string.pad-end');
require('../modules/es7.string.trim-left');
require('../modules/es7.string.trim-right');
require('../modules/es7.string.match-all');
module.exports = require('../modules/_core').String;
", "node_modules/core-js/es7/string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/string.js");
    }
}
