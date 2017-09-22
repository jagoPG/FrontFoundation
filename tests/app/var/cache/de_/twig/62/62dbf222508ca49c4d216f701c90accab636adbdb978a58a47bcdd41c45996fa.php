<?php

/* node_modules/babel-plugin-transform-regenerator/lib/index.js */
class __TwigTemplate_abb1c3c070d581534dd2293db8d6518877ccc82d909a908b9240f798062b0d1d extends Twig_Template
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
        $__internal_1292e0db78c9a0534f2beb62138ea99e1ddaa04047f786fa472a670aa9be02fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1292e0db78c9a0534f2beb62138ea99e1ddaa04047f786fa472a670aa9be02fd->enter($__internal_1292e0db78c9a0534f2beb62138ea99e1ddaa04047f786fa472a670aa9be02fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-regenerator/lib/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"regenerator-transform\");";
        
        $__internal_1292e0db78c9a0534f2beb62138ea99e1ddaa04047f786fa472a670aa9be02fd->leave($__internal_1292e0db78c9a0534f2beb62138ea99e1ddaa04047f786fa472a670aa9be02fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-regenerator/lib/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"regenerator-transform\");", "node_modules/babel-plugin-transform-regenerator/lib/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-regenerator/lib/index.js");
    }
}
