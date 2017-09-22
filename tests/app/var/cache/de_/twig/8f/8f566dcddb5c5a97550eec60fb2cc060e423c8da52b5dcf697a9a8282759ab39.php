<?php

/* node_modules/core-js/modules/es6.math.tanh.js */
class __TwigTemplate_47bf1cdf88a4a27e80ff361887363697756947d3f0897803b5503baf5ca29de9 extends Twig_Template
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
        $__internal_07876892db446270626478925ec11c57f8d98f8c418110f39cb29f6bcfa2af70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07876892db446270626478925ec11c57f8d98f8c418110f39cb29f6bcfa2af70->enter($__internal_07876892db446270626478925ec11c57f8d98f8c418110f39cb29f6bcfa2af70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.tanh.js"));

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
        
        $__internal_07876892db446270626478925ec11c57f8d98f8c418110f39cb29f6bcfa2af70->leave($__internal_07876892db446270626478925ec11c57f8d98f8c418110f39cb29f6bcfa2af70_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.tanh.js";
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
", "node_modules/core-js/modules/es6.math.tanh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.tanh.js");
    }
}
