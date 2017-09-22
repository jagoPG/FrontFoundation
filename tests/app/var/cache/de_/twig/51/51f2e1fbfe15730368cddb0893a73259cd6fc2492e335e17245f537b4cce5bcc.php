<?php

/* node_modules/core-js/modules/es6.math.expm1.js */
class __TwigTemplate_2a7739e645706c82c2fadd89855d9cf72d84a3866524bd5733f5c13c0d54ecac extends Twig_Template
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
        $__internal_4d335d1bb0a68d9f077df8356cdeb772e42d6791adfdc5d358561211b12bbd09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d335d1bb0a68d9f077df8356cdeb772e42d6791adfdc5d358561211b12bbd09->enter($__internal_4d335d1bb0a68d9f077df8356cdeb772e42d6791adfdc5d358561211b12bbd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.expm1.js"));

        // line 1
        echo "// 20.2.2.14 Math.expm1(x)
var \$export = require('./_export');
var \$expm1 = require('./_math-expm1');

\$export(\$export.S + \$export.F * (\$expm1 != Math.expm1), 'Math', { expm1: \$expm1 });
";
        
        $__internal_4d335d1bb0a68d9f077df8356cdeb772e42d6791adfdc5d358561211b12bbd09->leave($__internal_4d335d1bb0a68d9f077df8356cdeb772e42d6791adfdc5d358561211b12bbd09_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.expm1.js";
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
", "node_modules/core-js/modules/es6.math.expm1.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.expm1.js");
    }
}
