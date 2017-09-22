<?php

/* node_modules/es5-ext/math/sinh/shim.js */
class __TwigTemplate_cf2687a56587b9e2eaa958c485a37c4bf059e553f489d4726c03558198339024 extends Twig_Template
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
        $__internal_e1de963991d8bc3c049dc79e29208508a1260a513b273d82173fb2066bbd19b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1de963991d8bc3c049dc79e29208508a1260a513b273d82173fb2066bbd19b7->enter($__internal_e1de963991d8bc3c049dc79e29208508a1260a513b273d82173fb2066bbd19b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/sinh/shim.js"));

        // line 1
        echo "// Parts of implementation taken from es6-shim project
// See: https://github.com/paulmillr/es6-shim/blob/master/es6-shim.js

\"use strict\";

var expm1 = require(\"../expm1\")
  , abs   = Math.abs
  , exp   = Math.exp
  , e     = Math.E;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (!isFinite(value)) return value;
\tif (abs(value) < 1) return (expm1(value) - expm1(-value)) / 2;
\treturn (exp(value - 1) - exp(-value - 1)) * e / 2;
};
";
        
        $__internal_e1de963991d8bc3c049dc79e29208508a1260a513b273d82173fb2066bbd19b7->leave($__internal_e1de963991d8bc3c049dc79e29208508a1260a513b273d82173fb2066bbd19b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/sinh/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Parts of implementation taken from es6-shim project
// See: https://github.com/paulmillr/es6-shim/blob/master/es6-shim.js

\"use strict\";

var expm1 = require(\"../expm1\")
  , abs   = Math.abs
  , exp   = Math.exp
  , e     = Math.E;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (!isFinite(value)) return value;
\tif (abs(value) < 1) return (expm1(value) - expm1(-value)) / 2;
\treturn (exp(value - 1) - exp(-value - 1)) * e / 2;
};
", "node_modules/es5-ext/math/sinh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/sinh/shim.js");
    }
}
