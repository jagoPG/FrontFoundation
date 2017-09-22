<?php

/* node_modules/core-js/stage/index.js */
class __TwigTemplate_2e35649d929fe331e60be425deed2d4ac4e36616c13ae8799757a01a6beb9f20 extends Twig_Template
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
        $__internal_335d270030d110e32b263348ee032ebe920c06dc36dfde250393704537925f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335d270030d110e32b263348ee032ebe920c06dc36dfde250393704537925f42->enter($__internal_335d270030d110e32b263348ee032ebe920c06dc36dfde250393704537925f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/stage/index.js"));

        // line 1
        echo "module.exports = require('./pre');
";
        
        $__internal_335d270030d110e32b263348ee032ebe920c06dc36dfde250393704537925f42->leave($__internal_335d270030d110e32b263348ee032ebe920c06dc36dfde250393704537925f42_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/stage/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./pre');
", "node_modules/core-js/stage/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/stage/index.js");
    }
}
