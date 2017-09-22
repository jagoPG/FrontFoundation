<?php

/* node_modules/core-js/es7/map.js */
class __TwigTemplate_94f8911b970660aafd9762e1976e1efe8ed4f0e36e908b0710d0516bfced13bf extends Twig_Template
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
        $__internal_152f11ecf7c8e34013c61fdd54d738c081fd9141ef624dd7aff5d7f94b86717e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152f11ecf7c8e34013c61fdd54d738c081fd9141ef624dd7aff5d7f94b86717e->enter($__internal_152f11ecf7c8e34013c61fdd54d738c081fd9141ef624dd7aff5d7f94b86717e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/map.js"));

        // line 1
        echo "require('../modules/es7.map.to-json');
require('../modules/es7.map.of');
require('../modules/es7.map.from');
module.exports = require('../modules/_core').Map;
";
        
        $__internal_152f11ecf7c8e34013c61fdd54d738c081fd9141ef624dd7aff5d7f94b86717e->leave($__internal_152f11ecf7c8e34013c61fdd54d738c081fd9141ef624dd7aff5d7f94b86717e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.map.to-json');
require('../modules/es7.map.of');
require('../modules/es7.map.from');
module.exports = require('../modules/_core').Map;
", "node_modules/core-js/es7/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/map.js");
    }
}
