<?php

/* node_modules/core-js/library/modules/es6.math.tanh.js */
class __TwigTemplate_40fa9ea34ea126662475367cbf4f3933e5697f56031f86b0595226793fd1375b extends Twig_Template
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
        $__internal_7336658117c9527360f879dea30fd1806788b7999ce025a277d5dbb3347603b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7336658117c9527360f879dea30fd1806788b7999ce025a277d5dbb3347603b7->enter($__internal_7336658117c9527360f879dea30fd1806788b7999ce025a277d5dbb3347603b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.tanh.js"));

        // line 1
        echo "// 20.2.2.33 Math.tanh(x)
var \$export = require('./_export');
var expm1 = require('./_math-expm1');
var exp = Math.exp;

\$export(\$export.S, 'Math', {
  tanh: function tanh(x) {
    var a = expm1(x = +x);
    var b = expm1(-x);
    return a == Infinity ? 1 : b == Infinity ? -1 : (a - b) / (exp(x) + exp(-x));
  }
});
";
        
        $__internal_7336658117c9527360f879dea30fd1806788b7999ce025a277d5dbb3347603b7->leave($__internal_7336658117c9527360f879dea30fd1806788b7999ce025a277d5dbb3347603b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.tanh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.33 Math.tanh(x)
var \$export = require('./_export');
var expm1 = require('./_math-expm1');
var exp = Math.exp;

\$export(\$export.S, 'Math', {
  tanh: function tanh(x) {
    var a = expm1(x = +x);
    var b = expm1(-x);
    return a == Infinity ? 1 : b == Infinity ? -1 : (a - b) / (exp(x) + exp(-x));
  }
});
", "node_modules/core-js/library/modules/es6.math.tanh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.tanh.js");
    }
}
