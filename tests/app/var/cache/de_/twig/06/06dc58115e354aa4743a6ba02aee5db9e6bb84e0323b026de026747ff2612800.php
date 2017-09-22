<?php

/* node_modules/core-js/library/modules/es7.math.fscale.js */
class __TwigTemplate_ac8fd20571c5110f03a8366ae005d59002d1a3711f7ee349838fedeac34c5c88 extends Twig_Template
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
        $__internal_5e90afddb1b9a82f2b49ed0c4930e4dbf708968eef853d32a357be7e876bb97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e90afddb1b9a82f2b49ed0c4930e4dbf708968eef853d32a357be7e876bb97b->enter($__internal_5e90afddb1b9a82f2b49ed0c4930e4dbf708968eef853d32a357be7e876bb97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es7.math.fscale.js"));

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
        
        $__internal_5e90afddb1b9a82f2b49ed0c4930e4dbf708968eef853d32a357be7e876bb97b->leave($__internal_5e90afddb1b9a82f2b49ed0c4930e4dbf708968eef853d32a357be7e876bb97b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es7.math.fscale.js";
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
", "node_modules/core-js/library/modules/es7.math.fscale.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es7.math.fscale.js");
    }
}
