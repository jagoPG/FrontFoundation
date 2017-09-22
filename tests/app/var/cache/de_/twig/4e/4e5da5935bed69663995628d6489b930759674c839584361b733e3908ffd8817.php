<?php

/* node_modules/es5-ext/math/log1p/shim.js */
class __TwigTemplate_adc1cb350f479dfb611f71ebf1ee410f19225d492e2875f10dbbb6e425cc462d extends Twig_Template
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
        $__internal_cae52c2c1cbc0518d3b1c30d0fe7fb9b48ef765b9cedee93f47dd963fb28afc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae52c2c1cbc0518d3b1c30d0fe7fb9b48ef765b9cedee93f47dd963fb28afc2->enter($__internal_cae52c2c1cbc0518d3b1c30d0fe7fb9b48ef765b9cedee93f47dd963fb28afc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log1p/shim.js"));

        // line 1
        echo "// Thanks: https://github.com/monolithed/ECMAScript-6/blob/master/ES6.js

\"use strict\";

var log = Math.log;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value < -1) return NaN;
\tif (value === -1) return -Infinity;
\tif (value === 0) return value;
\tif (value === Infinity) return Infinity;

\tif (value > -1.0e-8 && value < 1.0e-8) return value - value * value / 2;
\treturn log(1 + value);
};
";
        
        $__internal_cae52c2c1cbc0518d3b1c30d0fe7fb9b48ef765b9cedee93f47dd963fb28afc2->leave($__internal_cae52c2c1cbc0518d3b1c30d0fe7fb9b48ef765b9cedee93f47dd963fb28afc2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log1p/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Thanks: https://github.com/monolithed/ECMAScript-6/blob/master/ES6.js

\"use strict\";

var log = Math.log;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value < -1) return NaN;
\tif (value === -1) return -Infinity;
\tif (value === 0) return value;
\tif (value === Infinity) return Infinity;

\tif (value > -1.0e-8 && value < 1.0e-8) return value - value * value / 2;
\treturn log(1 + value);
};
", "node_modules/es5-ext/math/log1p/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log1p/shim.js");
    }
}
