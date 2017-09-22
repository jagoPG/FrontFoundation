<?php

/* node_modules/core-js/library/fn/reflect/set.js */
class __TwigTemplate_0f4bd4637a9bb13663aa60208c6b2f058a75b3e767b590f9e1f86fe816ede855 extends Twig_Template
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
        $__internal_7c019cbaff575d3f108bc12f4b5d3347681a8d093b95297270c86ffb6cc2db4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c019cbaff575d3f108bc12f4b5d3347681a8d093b95297270c86ffb6cc2db4d->enter($__internal_7c019cbaff575d3f108bc12f4b5d3347681a8d093b95297270c86ffb6cc2db4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/set.js"));

        // line 1
        echo "require('../../modules/es6.reflect.set');
module.exports = require('../../modules/_core').Reflect.set;
";
        
        $__internal_7c019cbaff575d3f108bc12f4b5d3347681a8d093b95297270c86ffb6cc2db4d->leave($__internal_7c019cbaff575d3f108bc12f4b5d3347681a8d093b95297270c86ffb6cc2db4d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.set');
module.exports = require('../../modules/_core').Reflect.set;
", "node_modules/core-js/library/fn/reflect/set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/set.js");
    }
}
