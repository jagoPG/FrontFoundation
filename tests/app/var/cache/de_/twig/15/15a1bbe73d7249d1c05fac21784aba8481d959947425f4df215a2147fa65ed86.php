<?php

/* node_modules/core-js/modules/es7.math.clamp.js */
class __TwigTemplate_18ee66d4509e795886de6ec019cbf0e1d81c5bba7bd81674e49161ff27b9d16f extends Twig_Template
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
        $__internal_444625c7656dc4f2e9205378f34010838f569173f97fa525e0801636bc8eb7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444625c7656dc4f2e9205378f34010838f569173f97fa525e0801636bc8eb7c9->enter($__internal_444625c7656dc4f2e9205378f34010838f569173f97fa525e0801636bc8eb7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.clamp.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  clamp: function clamp(x, lower, upper) {
    return Math.min(upper, Math.max(lower, x));
  }
});
";
        
        $__internal_444625c7656dc4f2e9205378f34010838f569173f97fa525e0801636bc8eb7c9->leave($__internal_444625c7656dc4f2e9205378f34010838f569173f97fa525e0801636bc8eb7c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.clamp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');

\$export(\$export.S, 'Math', {
  clamp: function clamp(x, lower, upper) {
    return Math.min(upper, Math.max(lower, x));
  }
});
", "node_modules/core-js/modules/es7.math.clamp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.clamp.js");
    }
}
