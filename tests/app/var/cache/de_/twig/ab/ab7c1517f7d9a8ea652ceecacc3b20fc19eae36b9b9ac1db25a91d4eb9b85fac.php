<?php

/* node_modules/core-js/modules/es6.math.sinh.js */
class __TwigTemplate_c088d917e05347fd7b32c111f6b38a25488bfeb6b0b5a74dce4a393a0f7f4071 extends Twig_Template
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
        $__internal_f2668ec3e82d418b4dffd2ab9dc108ff85dfd41ca433ab4a8f5fe932446167a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2668ec3e82d418b4dffd2ab9dc108ff85dfd41ca433ab4a8f5fe932446167a0->enter($__internal_f2668ec3e82d418b4dffd2ab9dc108ff85dfd41ca433ab4a8f5fe932446167a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.sinh.js"));

        // line 1
        echo "// 20.2.2.30 Math.sinh(x)
var \$export = require('./_export');
var expm1 = require('./_math-expm1');
var exp = Math.exp;

// V8 near Chromium 38 has a problem with very small numbers
\$export(\$export.S + \$export.F * require('./_fails')(function () {
  return !Math.sinh(-2e-17) != -2e-17;
}), 'Math', {
  sinh: function sinh(x) {
    return Math.abs(x = +x) < 1
      ? (expm1(x) - expm1(-x)) / 2
      : (exp(x - 1) - exp(-x - 1)) * (Math.E / 2);
  }
});
";
        
        $__internal_f2668ec3e82d418b4dffd2ab9dc108ff85dfd41ca433ab4a8f5fe932446167a0->leave($__internal_f2668ec3e82d418b4dffd2ab9dc108ff85dfd41ca433ab4a8f5fe932446167a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.sinh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.30 Math.sinh(x)
var \$export = require('./_export');
var expm1 = require('./_math-expm1');
var exp = Math.exp;

// V8 near Chromium 38 has a problem with very small numbers
\$export(\$export.S + \$export.F * require('./_fails')(function () {
  return !Math.sinh(-2e-17) != -2e-17;
}), 'Math', {
  sinh: function sinh(x) {
    return Math.abs(x = +x) < 1
      ? (expm1(x) - expm1(-x)) / 2
      : (exp(x - 1) - exp(-x - 1)) * (Math.E / 2);
  }
});
", "node_modules/core-js/modules/es6.math.sinh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.sinh.js");
    }
}