<?php

/* node_modules/es5-ext/math/log2/index.js */
class __TwigTemplate_b672935f234905f00ce0153fc1308a0b87736f600a1533bf9d57c6e43e4873bc extends Twig_Template
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
        $__internal_48e02509b473a072d3eaa0d0755520673e02a610c8eec75820fa1dbe7162d00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e02509b473a072d3eaa0d0755520673e02a610c8eec75820fa1dbe7162d00d->enter($__internal_48e02509b473a072d3eaa0d0755520673e02a610c8eec75820fa1dbe7162d00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log2/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.log2
\t: require(\"./shim\");
";
        
        $__internal_48e02509b473a072d3eaa0d0755520673e02a610c8eec75820fa1dbe7162d00d->leave($__internal_48e02509b473a072d3eaa0d0755520673e02a610c8eec75820fa1dbe7162d00d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log2/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Math.log2
\t: require(\"./shim\");
", "node_modules/es5-ext/math/log2/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log2/index.js");
    }
}
