<?php

/* node_modules/es5-ext/math/expm1/shim.js */
class __TwigTemplate_525d7d5b14c0753a9649d280090a93cbccd2b8f2c9993462c3db3480213e6da6 extends Twig_Template
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
        $__internal_e15ed387fd4c4e433829a1c79ad1fd2f8cabad4adb5a14a2330192b90001fa4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15ed387fd4c4e433829a1c79ad1fd2f8cabad4adb5a14a2330192b90001fa4d->enter($__internal_e15ed387fd4c4e433829a1c79ad1fd2f8cabad4adb5a14a2330192b90001fa4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/expm1/shim.js"));

        // line 1
        echo "// Thanks: https://github.com/monolithed/ECMAScript-6

\"use strict\";

var exp = Math.exp;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (value === Infinity) return Infinity;
\tif (value === -Infinity) return -1;

\tif (value > -1.0e-6 && value < 1.0e-6) return value + value * value / 2;
\treturn exp(value) - 1;
};
";
        
        $__internal_e15ed387fd4c4e433829a1c79ad1fd2f8cabad4adb5a14a2330192b90001fa4d->leave($__internal_e15ed387fd4c4e433829a1c79ad1fd2f8cabad4adb5a14a2330192b90001fa4d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/expm1/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Thanks: https://github.com/monolithed/ECMAScript-6

\"use strict\";

var exp = Math.exp;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (value === Infinity) return Infinity;
\tif (value === -Infinity) return -1;

\tif (value > -1.0e-6 && value < 1.0e-6) return value + value * value / 2;
\treturn exp(value) - 1;
};
", "node_modules/es5-ext/math/expm1/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/expm1/shim.js");
    }
}
