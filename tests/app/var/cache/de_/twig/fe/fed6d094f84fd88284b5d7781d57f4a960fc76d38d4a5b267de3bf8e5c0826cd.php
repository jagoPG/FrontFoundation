<?php

/* node_modules/es5-ext/math/sign/is-implemented.js */
class __TwigTemplate_d9cbc4ff78408ec3bb29956c21544aaa00250a089f4f9f79f41fef3c3f58ec62 extends Twig_Template
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
        $__internal_5d1db863c9ea08b6459d5ee564d3fcfcefb68d8f98d800daad0fa5a16b97e474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1db863c9ea08b6459d5ee564d3fcfcefb68d8f98d800daad0fa5a16b97e474->enter($__internal_5d1db863c9ea08b6459d5ee564d3fcfcefb68d8f98d800daad0fa5a16b97e474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/sign/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function () {
\tvar sign = Math.sign;
\tif (typeof sign !== \"function\") return false;
\treturn (sign(10) === 1) && (sign(-20) === -1);
};
";
        
        $__internal_5d1db863c9ea08b6459d5ee564d3fcfcefb68d8f98d800daad0fa5a16b97e474->leave($__internal_5d1db863c9ea08b6459d5ee564d3fcfcefb68d8f98d800daad0fa5a16b97e474_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/sign/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function () {
\tvar sign = Math.sign;
\tif (typeof sign !== \"function\") return false;
\treturn (sign(10) === 1) && (sign(-20) === -1);
};
", "node_modules/es5-ext/math/sign/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/sign/is-implemented.js");
    }
}
