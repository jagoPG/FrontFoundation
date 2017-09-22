<?php

/* node_modules/es5-ext/math/asinh/shim.js */
class __TwigTemplate_e8863e5fa3dc6e26b829f45521048b9e391e0ab5129e531922ba43e86d26d914 extends Twig_Template
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
        $__internal_b33f715820fc2c17ddb162ae996d762c340a84543cd2574b8932093ea69ea57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33f715820fc2c17ddb162ae996d762c340a84543cd2574b8932093ea69ea57a->enter($__internal_b33f715820fc2c17ddb162ae996d762c340a84543cd2574b8932093ea69ea57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/asinh/shim.js"));

        // line 1
        echo "\"use strict\";

var log = Math.log, sqrt = Math.sqrt;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (!isFinite(value)) return value;
\tif (value < 0) {
\t\tvalue = -value;
\t\treturn -log(value + sqrt(value * value + 1));
\t}
\treturn log(value + sqrt(value * value + 1));
};
";
        
        $__internal_b33f715820fc2c17ddb162ae996d762c340a84543cd2574b8932093ea69ea57a->leave($__internal_b33f715820fc2c17ddb162ae996d762c340a84543cd2574b8932093ea69ea57a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/asinh/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var log = Math.log, sqrt = Math.sqrt;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return value;
\tif (!isFinite(value)) return value;
\tif (value < 0) {
\t\tvalue = -value;
\t\treturn -log(value + sqrt(value * value + 1));
\t}
\treturn log(value + sqrt(value * value + 1));
};
", "node_modules/es5-ext/math/asinh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/asinh/shim.js");
    }
}
