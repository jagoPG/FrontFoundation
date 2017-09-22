<?php

/* node_modules/es5-ext/math/sign/shim.js */
class __TwigTemplate_533d9a2b9a07a003d129705addcdab2a9c1f6b567b163aa80ba4358a35d7a333 extends Twig_Template
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
        $__internal_616e36fb7f9ff47d6aff023eb98c724e0df8e754f9cb520d6544f893d3440c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616e36fb7f9ff47d6aff023eb98c724e0df8e754f9cb520d6544f893d3440c34->enter($__internal_616e36fb7f9ff47d6aff023eb98c724e0df8e754f9cb520d6544f893d3440c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/math/sign/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (value) {
\tvalue = Number(value);
\tif (isNaN(value) || (value === 0)) return value;
\treturn value > 0 ? 1 : -1;
};
";
        
        $__internal_616e36fb7f9ff47d6aff023eb98c724e0df8e754f9cb520d6544f893d3440c34->leave($__internal_616e36fb7f9ff47d6aff023eb98c724e0df8e754f9cb520d6544f893d3440c34_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/math/sign/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (value) {
\tvalue = Number(value);
\tif (isNaN(value) || (value === 0)) return value;
\treturn value > 0 ? 1 : -1;
};
", "node_modules/es5-ext/math/sign/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/math/sign/shim.js");
    }
}
