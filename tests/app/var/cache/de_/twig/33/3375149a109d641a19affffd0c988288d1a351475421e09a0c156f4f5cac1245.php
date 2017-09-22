<?php

/* node_modules/es5-ext/array/is-plain-array.js */
class __TwigTemplate_fa457145f6edf517747304028762e1896370ef7090c61e1c4a83d88afa72843d extends Twig_Template
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
        $__internal_360d2f1722b6805cd22d27c145ff32baa1cc70843b0de667a6620d4eaf92cac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360d2f1722b6805cd22d27c145ff32baa1cc70843b0de667a6620d4eaf92cac8->enter($__internal_360d2f1722b6805cd22d27c145ff32baa1cc70843b0de667a6620d4eaf92cac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/is-plain-array.js"));

        // line 1
        echo "\"use strict\";

var isArray = Array.isArray, getPrototypeOf = Object.getPrototypeOf;

module.exports = function (obj) {
\tvar proto;
\tif (!obj || !isArray(obj)) return false;
\tproto = getPrototypeOf(obj);
\tif (!isArray(proto)) return false;
\treturn !isArray(getPrototypeOf(proto));
};
";
        
        $__internal_360d2f1722b6805cd22d27c145ff32baa1cc70843b0de667a6620d4eaf92cac8->leave($__internal_360d2f1722b6805cd22d27c145ff32baa1cc70843b0de667a6620d4eaf92cac8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/is-plain-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isArray = Array.isArray, getPrototypeOf = Object.getPrototypeOf;

module.exports = function (obj) {
\tvar proto;
\tif (!obj || !isArray(obj)) return false;
\tproto = getPrototypeOf(obj);
\tif (!isArray(proto)) return false;
\treturn !isArray(getPrototypeOf(proto));
};
", "node_modules/es5-ext/array/is-plain-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/is-plain-array.js");
    }
}
