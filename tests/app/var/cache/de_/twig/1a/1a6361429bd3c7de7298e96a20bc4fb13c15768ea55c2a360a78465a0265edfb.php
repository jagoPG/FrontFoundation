<?php

/* node_modules/es5-ext/array/#/slice/is-implemented.js */
class __TwigTemplate_938ee9fe093435ebcde332b6f7b21ea10dac582605ea9412f549535279a95cbb extends Twig_Template
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
        $__internal_3018062d2400a28190a7f6992431314bb87f9948e583efd00bc0052e3e8c2bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3018062d2400a28190a7f6992431314bb87f9948e583efd00bc0052e3e8c2bef->enter($__internal_3018062d2400a28190a7f6992431314bb87f9948e583efd00bc0052e3e8c2bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/slice/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var SubArray = require(\"../../_sub-array-dummy-safe\");

module.exports = function () {
\treturn (new SubArray()).slice() instanceof SubArray;
};
";
        
        $__internal_3018062d2400a28190a7f6992431314bb87f9948e583efd00bc0052e3e8c2bef->leave($__internal_3018062d2400a28190a7f6992431314bb87f9948e583efd00bc0052e3e8c2bef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/slice/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var SubArray = require(\"../../_sub-array-dummy-safe\");

module.exports = function () {
\treturn (new SubArray()).slice() instanceof SubArray;
};
", "node_modules/es5-ext/array/#/slice/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/slice/is-implemented.js");
    }
}
