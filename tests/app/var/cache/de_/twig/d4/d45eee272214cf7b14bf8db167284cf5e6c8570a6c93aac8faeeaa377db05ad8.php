<?php

/* node_modules/core-js/fn/string/fixed.js */
class __TwigTemplate_ad5efeac6674cfd292ed9df5ece5a9249653083f3780c4907742a8f4acf8df51 extends Twig_Template
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
        $__internal_2389d3f225c8fc2440d11c643aa7227c7024fcd093ccd218b0cf813a39ddeab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2389d3f225c8fc2440d11c643aa7227c7024fcd093ccd218b0cf813a39ddeab4->enter($__internal_2389d3f225c8fc2440d11c643aa7227c7024fcd093ccd218b0cf813a39ddeab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/fixed.js"));

        // line 1
        echo "require('../../modules/es6.string.fixed');
module.exports = require('../../modules/_core').String.fixed;
";
        
        $__internal_2389d3f225c8fc2440d11c643aa7227c7024fcd093ccd218b0cf813a39ddeab4->leave($__internal_2389d3f225c8fc2440d11c643aa7227c7024fcd093ccd218b0cf813a39ddeab4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/fixed.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.fixed');
module.exports = require('../../modules/_core').String.fixed;
", "node_modules/core-js/fn/string/fixed.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/fixed.js");
    }
}
