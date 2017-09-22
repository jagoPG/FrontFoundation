<?php

/* node_modules/core-js/library/fn/object/assign.js */
class __TwigTemplate_3821b5cc0c058de147fe368c17638fcc6056a1497d673de39b901eca39e80ad5 extends Twig_Template
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
        $__internal_b16abefa392467a4c4fd82c15d1dce64eab66346b1677dc294f2158ca4e68cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16abefa392467a4c4fd82c15d1dce64eab66346b1677dc294f2158ca4e68cdf->enter($__internal_b16abefa392467a4c4fd82c15d1dce64eab66346b1677dc294f2158ca4e68cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/assign.js"));

        // line 1
        echo "require('../../modules/es6.object.assign');
module.exports = require('../../modules/_core').Object.assign;
";
        
        $__internal_b16abefa392467a4c4fd82c15d1dce64eab66346b1677dc294f2158ca4e68cdf->leave($__internal_b16abefa392467a4c4fd82c15d1dce64eab66346b1677dc294f2158ca4e68cdf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/assign.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.assign');
module.exports = require('../../modules/_core').Object.assign;
", "node_modules/core-js/library/fn/object/assign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/assign.js");
    }
}
