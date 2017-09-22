<?php

/* node_modules/core-js/modules/es6.math.acosh.js */
class __TwigTemplate_652f15600446678a26f32b0a5a48cdb11f217c10e383037dda778f3e057b3736 extends Twig_Template
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
        $__internal_54bde033d7d9a43a8ebdec72235902c0a9984f50fb374023fb75b039eb562b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bde033d7d9a43a8ebdec72235902c0a9984f50fb374023fb75b039eb562b2f->enter($__internal_54bde033d7d9a43a8ebdec72235902c0a9984f50fb374023fb75b039eb562b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.math.acosh.js"));

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
        
        $__internal_54bde033d7d9a43a8ebdec72235902c0a9984f50fb374023fb75b039eb562b2f->leave($__internal_54bde033d7d9a43a8ebdec72235902c0a9984f50fb374023fb75b039eb562b2f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.math.acosh.js";
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
", "node_modules/core-js/modules/es6.math.acosh.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.math.acosh.js");
    }
}
