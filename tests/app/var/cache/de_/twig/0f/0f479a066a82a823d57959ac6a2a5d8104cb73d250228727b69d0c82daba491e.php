<?php

/* node_modules/core-js/library/modules/es6.math.expm1.js */
class __TwigTemplate_70ace1af3813b540dc8ad4b657f4806ab8d2844766043f4aa105cfd8ab2fe39d extends Twig_Template
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
        $__internal_e90196af152871d8a2152d89ea69a79a6200c9b04da711c366ca5247749a7ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90196af152871d8a2152d89ea69a79a6200c9b04da711c366ca5247749a7ee7->enter($__internal_e90196af152871d8a2152d89ea69a79a6200c9b04da711c366ca5247749a7ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.expm1.js"));

        // line 1
        echo "// 20.2.2.14 Math.expm1(x)
var \$export = require('./_export');
var \$expm1 = require('./_math-expm1');

\$export(\$export.S + \$export.F * (\$expm1 != Math.expm1), 'Math', { expm1: \$expm1 });
";
        
        $__internal_e90196af152871d8a2152d89ea69a79a6200c9b04da711c366ca5247749a7ee7->leave($__internal_e90196af152871d8a2152d89ea69a79a6200c9b04da711c366ca5247749a7ee7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.expm1.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.14 Math.expm1(x)
var \$export = require('./_export');
var \$expm1 = require('./_math-expm1');

\$export(\$export.S + \$export.F * (\$expm1 != Math.expm1), 'Math', { expm1: \$expm1 });
", "node_modules/core-js/library/modules/es6.math.expm1.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.expm1.js");
    }
}
