<?php

/* node_modules/core-js/modules/_math-fround.js */
class __TwigTemplate_f31176ae61d0e25f2b1b87d2fbd26278d1bfe365d1301af1d47f0fa48e8d439a extends Twig_Template
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
        $__internal_58784c6b13b2c94a678fc63ebfe9dafe0214d111c2e87540a9ad5d27f7639679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58784c6b13b2c94a678fc63ebfe9dafe0214d111c2e87540a9ad5d27f7639679->enter($__internal_58784c6b13b2c94a678fc63ebfe9dafe0214d111c2e87540a9ad5d27f7639679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_math-fround.js"));

        // line 1
        echo "// 20.2.2.16 Math.fround(x)
var sign = require('./_math-sign');
var pow = Math.pow;
var EPSILON = pow(2, -52);
var EPSILON32 = pow(2, -23);
var MAX32 = pow(2, 127) * (2 - EPSILON32);
var MIN32 = pow(2, -126);

var roundTiesToEven = function (n) {
  return n + 1 / EPSILON - 1 / EPSILON;
};

module.exports = Math.fround || function fround(x) {
  var \$abs = Math.abs(x);
  var \$sign = sign(x);
  var a, result;
  if (\$abs < MIN32) return \$sign * roundTiesToEven(\$abs / MIN32 / EPSILON32) * MIN32 * EPSILON32;
  a = (1 + EPSILON32 / EPSILON) * \$abs;
  result = a - (a - \$abs);
  // eslint-disable-next-line no-self-compare
  if (result > MAX32 || result != result) return \$sign * Infinity;
  return \$sign * result;
};
";
        
        $__internal_58784c6b13b2c94a678fc63ebfe9dafe0214d111c2e87540a9ad5d27f7639679->leave($__internal_58784c6b13b2c94a678fc63ebfe9dafe0214d111c2e87540a9ad5d27f7639679_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_math-fround.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.2.2.16 Math.fround(x)
var sign = require('./_math-sign');
var pow = Math.pow;
var EPSILON = pow(2, -52);
var EPSILON32 = pow(2, -23);
var MAX32 = pow(2, 127) * (2 - EPSILON32);
var MIN32 = pow(2, -126);

var roundTiesToEven = function (n) {
  return n + 1 / EPSILON - 1 / EPSILON;
};

module.exports = Math.fround || function fround(x) {
  var \$abs = Math.abs(x);
  var \$sign = sign(x);
  var a, result;
  if (\$abs < MIN32) return \$sign * roundTiesToEven(\$abs / MIN32 / EPSILON32) * MIN32 * EPSILON32;
  a = (1 + EPSILON32 / EPSILON) * \$abs;
  result = a - (a - \$abs);
  // eslint-disable-next-line no-self-compare
  if (result > MAX32 || result != result) return \$sign * Infinity;
  return \$sign * result;
};
", "node_modules/core-js/modules/_math-fround.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_math-fround.js");
    }
}
