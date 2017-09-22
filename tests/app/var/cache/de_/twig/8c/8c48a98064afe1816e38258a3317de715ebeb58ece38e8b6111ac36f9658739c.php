<?php

/* node_modules/core-js/library/modules/es7.math.degrees.js */
class __TwigTemplate_132f82f4133d25d45f8ba3b5782299c65a704763eb3e9891dc498e5e9cd86f57 extends Twig_Template
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
        $__internal_0ec762c2cf8f9aeeccfaf94aea2abc6c6cd4752e4bf45f59219ee405cab751a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec762c2cf8f9aeeccfaf94aea2abc6c6cd4752e4bf45f59219ee405cab751a3->enter($__internal_0ec762c2cf8f9aeeccfaf94aea2abc6c6cd4752e4bf45f59219ee405cab751a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.math.degrees.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');
var RAD_PER_DEG = 180 / Math.PI;

\$export(\$export.S, 'Math', {
  degrees: function degrees(radians) {
    return radians * RAD_PER_DEG;
  }
});
";
        
        $__internal_0ec762c2cf8f9aeeccfaf94aea2abc6c6cd4752e4bf45f59219ee405cab751a3->leave($__internal_0ec762c2cf8f9aeeccfaf94aea2abc6c6cd4752e4bf45f59219ee405cab751a3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.math.degrees.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');
var RAD_PER_DEG = 180 / Math.PI;

\$export(\$export.S, 'Math', {
  degrees: function degrees(radians) {
    return radians * RAD_PER_DEG;
  }
});
", "node_modules/core-js/library/modules/es7.math.degrees.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.math.degrees.js");
    }
}
