<?php

/* node_modules/core-js/library/modules/es6.math.acosh.js */
class __TwigTemplate_4f8a5a73599531fae41cfa2a3d6ea5e0f1c973dfcd5a7acff82a2e4df7678378 extends Twig_Template
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
        $__internal_73b2b2453dac773dc8663b43ff012143d18d9646ca4df61abad25aeb0e0d19c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b2b2453dac773dc8663b43ff012143d18d9646ca4df61abad25aeb0e0d19c8->enter($__internal_73b2b2453dac773dc8663b43ff012143d18d9646ca4df61abad25aeb0e0d19c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.math.acosh.js"));

        // line 1
        echo "// 20.2.2.3 Math.acosh(x)
var \$export = require('./_export');
var log1p = require('./_math-log1p');
var sqrt = Math.sqrt;
var \$acosh = Math.acosh;

\$export(\$export.S + \$export.F * !(\$acosh
  // V8 bug: https://code.google.com/p/v8/issues/detail?id=3509
  && Math.floor(\$acosh(Number.MAX_VALUE)) == 710
  // Tor Browser bug: Math.acosh(Infinity) -> NaN
  && \$acosh(Infinity) == Infinity
), 'Math', {
  acosh: function acosh(x) {
    return (x = +x) < 1 ? NaN : x > 94906265.62425156
      ? Math.log(x) + Math.LN2
      : log1p(x - 1 + sqrt(x - 1) * sqrt(x + 1));
  }
});
";
        
        $__internal_73b2b2453dac773dc8663b43ff012143d18d9646ca4df61abad25aeb0e0d19c8->leave($__internal_73b2b2453dac773dc8663b43ff012143d18d9646ca4df61abad25aeb0e0d19c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.math.acosh.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.3 Math.acosh(x)
var \$export = require('./_export');
var log1p = require('./_math-log1p');
var sqrt = Math.sqrt;
var \$acosh = Math.acosh;

\$export(\$export.S + \$export.F * !(\$acosh
  // V8 bug: https://code.google.com/p/v8/issues/detail?id=3509
  && Math.floor(\$acosh(Number.MAX_VALUE)) == 710
  // Tor Browser bug: Math.acosh(Infinity) -> NaN
  && \$acosh(Infinity) == Infinity
), 'Math', {
  acosh: function acosh(x) {
    return (x = +x) < 1 ? NaN : x > 94906265.62425156
      ? Math.log(x) + Math.LN2
      : log1p(x - 1 + sqrt(x - 1) * sqrt(x + 1));
  }
});
", "node_modules/core-js/library/modules/es6.math.acosh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.math.acosh.js");
    }
}
