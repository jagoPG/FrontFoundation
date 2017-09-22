<?php

/* node_modules/es5-ext/math/cosh/shim.js */
class __TwigTemplate_717fb0c365dcf4148e28bd5c6cf729e2d01f394650d755e22583f63cc93521b1 extends Twig_Template
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
        $__internal_6ff7d49bd68ab92ead2954d4d15eb38d4b2e8169379d75504e150c5b39713323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff7d49bd68ab92ead2954d4d15eb38d4b2e8169379d75504e150c5b39713323->enter($__internal_6ff7d49bd68ab92ead2954d4d15eb38d4b2e8169379d75504e150c5b39713323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/cosh/shim.js"));

        // line 1
        echo "\"use strict\";

var exp = Math.exp;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return 1;
\tif (!isFinite(value)) return Infinity;
\treturn (exp(value) + exp(-value)) / 2;
};
";
        
        $__internal_6ff7d49bd68ab92ead2954d4d15eb38d4b2e8169379d75504e150c5b39713323->leave($__internal_6ff7d49bd68ab92ead2954d4d15eb38d4b2e8169379d75504e150c5b39713323_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/cosh/shim.js";
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
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value === 0) return 1;
\tif (!isFinite(value)) return Infinity;
\treturn (exp(value) + exp(-value)) / 2;
};
", "node_modules/es5-ext/math/cosh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/cosh/shim.js");
    }
}
