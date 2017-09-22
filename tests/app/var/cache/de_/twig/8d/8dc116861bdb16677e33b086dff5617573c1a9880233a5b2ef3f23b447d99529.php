<?php

/* node_modules/core-js/modules/es6.number.epsilon.js */
class __TwigTemplate_5d13f45cc6f5f0a90e2e97b193d2ab764275c2af22b7c2140169aaf078ab7148 extends Twig_Template
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
        $__internal_a6eef17a062eecac14d55760f5b4d8c8360414e1a00142d32b511a3cc87a294e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6eef17a062eecac14d55760f5b4d8c8360414e1a00142d32b511a3cc87a294e->enter($__internal_a6eef17a062eecac14d55760f5b4d8c8360414e1a00142d32b511a3cc87a294e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.number.epsilon.js"));

        // line 1
        echo "// 20.1.2.1 Number.EPSILON
var \$export = require('./_export');

\$export(\$export.S, 'Number', { EPSILON: Math.pow(2, -52) });
";
        
        $__internal_a6eef17a062eecac14d55760f5b4d8c8360414e1a00142d32b511a3cc87a294e->leave($__internal_a6eef17a062eecac14d55760f5b4d8c8360414e1a00142d32b511a3cc87a294e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.number.epsilon.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.1 Number.EPSILON
var \$export = require('./_export');

\$export(\$export.S, 'Number', { EPSILON: Math.pow(2, -52) });
", "node_modules/core-js/modules/es6.number.epsilon.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.number.epsilon.js");
    }
}
