<?php

/* node_modules/es5-ext/math/log10/shim.js */
class __TwigTemplate_a5b04e11364c5c4eb7ac62d95b83249de9e48eee11d20876c8b64bee2832766c extends Twig_Template
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
        $__internal_0d31ce454cea10cc4ac2c0c6f9f851a2c9e9199553d06b82222ed0d3208ffbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d31ce454cea10cc4ac2c0c6f9f851a2c9e9199553d06b82222ed0d3208ffbe1->enter($__internal_0d31ce454cea10cc4ac2c0c6f9f851a2c9e9199553d06b82222ed0d3208ffbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/log10/shim.js"));

        // line 1
        echo "\"use strict\";

var log = Math.log, LOG10E = Math.LOG10E;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value < 0) return NaN;
\tif (value === 0) return -Infinity;
\tif (value === 1) return 0;
\tif (value === Infinity) return Infinity;

\treturn log(value) * LOG10E;
};
";
        
        $__internal_0d31ce454cea10cc4ac2c0c6f9f851a2c9e9199553d06b82222ed0d3208ffbe1->leave($__internal_0d31ce454cea10cc4ac2c0c6f9f851a2c9e9199553d06b82222ed0d3208ffbe1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/log10/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var log = Math.log, LOG10E = Math.LOG10E;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value < 0) return NaN;
\tif (value === 0) return -Infinity;
\tif (value === 1) return 0;
\tif (value === Infinity) return Infinity;

\treturn log(value) * LOG10E;
};
", "node_modules/es5-ext/math/log10/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/log10/shim.js");
    }
}
