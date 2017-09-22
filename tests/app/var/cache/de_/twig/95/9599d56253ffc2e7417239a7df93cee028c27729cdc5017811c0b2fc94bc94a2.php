<?php

/* node_modules/es5-ext/math/trunc/is-implemented.js */
class __TwigTemplate_56f9735160523b011edb58ee24b7ac0cc6d3bdf8a76984f8999f746bd065af5c extends Twig_Template
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
        $__internal_32af11fc736fb15d39b6fd1933468680f6907361ebe905a7e979d8bd0e8656b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32af11fc736fb15d39b6fd1933468680f6907361ebe905a7e979d8bd0e8656b8->enter($__internal_32af11fc736fb15d39b6fd1933468680f6907361ebe905a7e979d8bd0e8656b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/trunc/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar trunc = Math.trunc;
\tif (typeof trunc !== \"function\") return false;
\treturn (trunc(13.67) === 13) && (trunc(-13.67) === -13);
};
";
        
        $__internal_32af11fc736fb15d39b6fd1933468680f6907361ebe905a7e979d8bd0e8656b8->leave($__internal_32af11fc736fb15d39b6fd1933468680f6907361ebe905a7e979d8bd0e8656b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/trunc/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar trunc = Math.trunc;
\tif (typeof trunc !== \"function\") return false;
\treturn (trunc(13.67) === 13) && (trunc(-13.67) === -13);
};
", "node_modules/es5-ext/math/trunc/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/trunc/is-implemented.js");
    }
}
