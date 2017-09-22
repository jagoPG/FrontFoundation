<?php

/* node_modules/core-js/core/number.js */
class __TwigTemplate_3d49236f569bb97b2307f73efc9030da2eca797abfdf4bfd97c334a47af78b63 extends Twig_Template
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
        $__internal_3ba0948e255fcd576978f195ff5a3da8c1247143ca2a4d509312b825291eee89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba0948e255fcd576978f195ff5a3da8c1247143ca2a4d509312b825291eee89->enter($__internal_3ba0948e255fcd576978f195ff5a3da8c1247143ca2a4d509312b825291eee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/core/number.js"));

        // line 1
        echo "require('../modules/core.number.iterator');
module.exports = require('../modules/_core').Number;
";
        
        $__internal_3ba0948e255fcd576978f195ff5a3da8c1247143ca2a4d509312b825291eee89->leave($__internal_3ba0948e255fcd576978f195ff5a3da8c1247143ca2a4d509312b825291eee89_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/core/number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.number.iterator');
module.exports = require('../modules/_core').Number;
", "node_modules/core-js/core/number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/core/number.js");
    }
}
