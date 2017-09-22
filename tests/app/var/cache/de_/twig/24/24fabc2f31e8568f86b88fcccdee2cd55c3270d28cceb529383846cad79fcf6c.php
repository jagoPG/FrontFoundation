<?php

/* node_modules/es5-ext/math/atanh/shim.js */
class __TwigTemplate_67410a560acdc967f6ee924e66ff5f1d81a7c108c6cd521034c762654501e7dd extends Twig_Template
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
        $__internal_c8a6ddfb04429f83d924c55f3ea967148777dcdd9519c19e2e435fa7fec333d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a6ddfb04429f83d924c55f3ea967148777dcdd9519c19e2e435fa7fec333d5->enter($__internal_c8a6ddfb04429f83d924c55f3ea967148777dcdd9519c19e2e435fa7fec333d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/atanh/shim.js"));

        // line 1
        echo "\"use strict\";

var log = Math.log;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value < -1) return NaN;
\tif (value > 1) return NaN;
\tif (value === -1) return -Infinity;
\tif (value === 1) return Infinity;
\tif (value === 0) return value;
\treturn 0.5 * log((1 + value) / (1 - value));
};
";
        
        $__internal_c8a6ddfb04429f83d924c55f3ea967148777dcdd9519c19e2e435fa7fec333d5->leave($__internal_c8a6ddfb04429f83d924c55f3ea967148777dcdd9519c19e2e435fa7fec333d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/atanh/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var log = Math.log;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value < -1) return NaN;
\tif (value > 1) return NaN;
\tif (value === -1) return -Infinity;
\tif (value === 1) return Infinity;
\tif (value === 0) return value;
\treturn 0.5 * log((1 + value) / (1 - value));
};
", "node_modules/es5-ext/math/atanh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/atanh/shim.js");
    }
}
