<?php

/* node_modules/core-js/modules/es7.math.fscale.js */
class __TwigTemplate_2a566637b5ffdd24a5ea004f9c40f926929bb09f6a55318bea52a0170f91f5a3 extends Twig_Template
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
        $__internal_8ac83f614f45108de57d38c2d45c00d6763c69a9090f8ffbff7ea27d37d82fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac83f614f45108de57d38c2d45c00d6763c69a9090f8ffbff7ea27d37d82fd2->enter($__internal_8ac83f614f45108de57d38c2d45c00d6763c69a9090f8ffbff7ea27d37d82fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es7.math.fscale.js"));

        // line 1
        echo "// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');
var scale = require('./_math-scale');
var fround = require('./_math-fround');

\$export(\$export.S, 'Math', {
  fscale: function fscale(x, inLow, inHigh, outLow, outHigh) {
    return fround(scale(x, inLow, inHigh, outLow, outHigh));
  }
});
";
        
        $__internal_8ac83f614f45108de57d38c2d45c00d6763c69a9090f8ffbff7ea27d37d82fd2->leave($__internal_8ac83f614f45108de57d38c2d45c00d6763c69a9090f8ffbff7ea27d37d82fd2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es7.math.fscale.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://rwaldron.github.io/proposal-math-extensions/
var \$export = require('./_export');
var scale = require('./_math-scale');
var fround = require('./_math-fround');

\$export(\$export.S, 'Math', {
  fscale: function fscale(x, inLow, inHigh, outLow, outHigh) {
    return fround(scale(x, inLow, inHigh, outLow, outHigh));
  }
});
", "node_modules/core-js/modules/es7.math.fscale.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es7.math.fscale.js");
    }
}
