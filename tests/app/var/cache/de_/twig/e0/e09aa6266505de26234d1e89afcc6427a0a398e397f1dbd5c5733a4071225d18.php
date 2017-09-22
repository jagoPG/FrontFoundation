<?php

/* node_modules/es5-ext/math/tanh/shim.js */
class __TwigTemplate_f81e7cebc801f97728ca9632fc540d44a9cbdb802e11909cc7c71bc85bf868cb extends Twig_Template
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
        $__internal_9c60fcfea97c9b39b062ae61dc5a0d4b0cbf8a1c3d8f2fdc8ce5d04bafe011a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c60fcfea97c9b39b062ae61dc5a0d4b0cbf8a1c3d8f2fdc8ce5d04bafe011a9->enter($__internal_9c60fcfea97c9b39b062ae61dc5a0d4b0cbf8a1c3d8f2fdc8ce5d04bafe011a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/tanh/shim.js"));

        // line 1
        echo "\"use strict\";

var exp = Math.exp;

module.exports = function (value) {
\tvar num1, num2;
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (value === Infinity) return 1;
\tif (value === -Infinity) return -1;
\tnum1 = exp(value);
\tif (num1 === Infinity) return 1;
\tnum2 = exp(-value);
\tif (num2 === Infinity) return -1;
\treturn (num1 - num2) / (num1 + num2);
};
";
        
        $__internal_9c60fcfea97c9b39b062ae61dc5a0d4b0cbf8a1c3d8f2fdc8ce5d04bafe011a9->leave($__internal_9c60fcfea97c9b39b062ae61dc5a0d4b0cbf8a1c3d8f2fdc8ce5d04bafe011a9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/tanh/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var exp = Math.exp;

module.exports = function (value) {
\tvar num1, num2;
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (value === Infinity) return 1;
\tif (value === -Infinity) return -1;
\tnum1 = exp(value);
\tif (num1 === Infinity) return 1;
\tnum2 = exp(-value);
\tif (num2 === Infinity) return -1;
\treturn (num1 - num2) / (num1 + num2);
};
", "node_modules/es5-ext/math/tanh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/tanh/shim.js");
    }
}
