<?php

/* node_modules/core-js/modules/es6.number.parse-float.js */
class __TwigTemplate_5743370d1b800f81e56deb1d578a2f128f56272c3661d9af0ab4f2706c52f5c9 extends Twig_Template
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
        $__internal_58c59e91337eca61fcd05fb60abbfc8585c6ae5cf736e0e8a502b9674dfbf8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c59e91337eca61fcd05fb60abbfc8585c6ae5cf736e0e8a502b9674dfbf8a6->enter($__internal_58c59e91337eca61fcd05fb60abbfc8585c6ae5cf736e0e8a502b9674dfbf8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.number.parse-float.js"));

        // line 1
        echo "var \$export = require('./_export');
var \$parseFloat = require('./_parse-float');
// 20.1.2.12 Number.parseFloat(string)
\$export(\$export.S + \$export.F * (Number.parseFloat != \$parseFloat), 'Number', { parseFloat: \$parseFloat });
";
        
        $__internal_58c59e91337eca61fcd05fb60abbfc8585c6ae5cf736e0e8a502b9674dfbf8a6->leave($__internal_58c59e91337eca61fcd05fb60abbfc8585c6ae5cf736e0e8a502b9674dfbf8a6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.number.parse-float.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var \$export = require('./_export');
var \$parseFloat = require('./_parse-float');
// 20.1.2.12 Number.parseFloat(string)
\$export(\$export.S + \$export.F * (Number.parseFloat != \$parseFloat), 'Number', { parseFloat: \$parseFloat });
", "node_modules/core-js/modules/es6.number.parse-float.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.number.parse-float.js");
    }
}
