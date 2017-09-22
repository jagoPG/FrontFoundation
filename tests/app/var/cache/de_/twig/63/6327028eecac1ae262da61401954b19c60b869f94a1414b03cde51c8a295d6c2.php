<?php

/* node_modules/es5-ext/math/acosh/shim.js */
class __TwigTemplate_7171fc8ad67fdbc2aef97a4e7e578640f006afbccd74f7e78361a5d3cc065556 extends Twig_Template
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
        $__internal_be326740fd578c59d2e17d561a4f5cf94e4251f366a802765a5982e7afa93fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be326740fd578c59d2e17d561a4f5cf94e4251f366a802765a5982e7afa93fcb->enter($__internal_be326740fd578c59d2e17d561a4f5cf94e4251f366a802765a5982e7afa93fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/acosh/shim.js"));

        // line 1
        echo "\"use strict\";

var log = Math.log, sqrt = Math.sqrt;

module.exports = function (value) {
\tif (isNaN(value)) return NaN;
\tvalue = Number(value);
\tif (value < 1) return NaN;
\tif (value === 1) return 0;
\tif (value === Infinity) return value;
\treturn log(value + sqrt(value * value - 1));
};
";
        
        $__internal_be326740fd578c59d2e17d561a4f5cf94e4251f366a802765a5982e7afa93fcb->leave($__internal_be326740fd578c59d2e17d561a4f5cf94e4251f366a802765a5982e7afa93fcb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/acosh/shim.js";
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
\tif (value < 1) return NaN;
\tif (value === 1) return 0;
\tif (value === Infinity) return value;
\treturn log(value + sqrt(value * value - 1));
};
", "node_modules/es5-ext/math/acosh/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/acosh/shim.js");
    }
}
