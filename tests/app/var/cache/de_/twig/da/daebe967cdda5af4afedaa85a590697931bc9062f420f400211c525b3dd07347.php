<?php

/* node_modules/lodash/_realNames.js */
class __TwigTemplate_72ea855000a47b2091c3c52a7326eb9fbb2227a203ea89060448a8e6372e282d extends Twig_Template
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
        $__internal_b087c5e65e1bf930c120c1d3555e75d6c9d73b43e5d646edc711be6c7a914718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b087c5e65e1bf930c120c1d3555e75d6c9d73b43e5d646edc711be6c7a914718->enter($__internal_b087c5e65e1bf930c120c1d3555e75d6c9d73b43e5d646edc711be6c7a914718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_realNames.js"));

        // line 1
        echo "/** Used to lookup unminified function names. */
var realNames = {};

module.exports = realNames;
";
        
        $__internal_b087c5e65e1bf930c120c1d3555e75d6c9d73b43e5d646edc711be6c7a914718->leave($__internal_b087c5e65e1bf930c120c1d3555e75d6c9d73b43e5d646edc711be6c7a914718_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_realNames.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to lookup unminified function names. */
var realNames = {};

module.exports = realNames;
", "node_modules/lodash/_realNames.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_realNames.js");
    }
}
