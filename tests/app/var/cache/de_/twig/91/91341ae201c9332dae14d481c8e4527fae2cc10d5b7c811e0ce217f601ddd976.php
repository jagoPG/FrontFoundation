<?php

/* node_modules/es5-ext/global.js */
class __TwigTemplate_6209f538188c0f02195b16a0d36d49c479e92dbcc113b1d3ae301f8ffc75370d extends Twig_Template
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
        $__internal_b97c54e54323b6addba92db2493c90945a915d9705d19e5e9d3eca82830ecd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97c54e54323b6addba92db2493c90945a915d9705d19e5e9d3eca82830ecd9a->enter($__internal_b97c54e54323b6addba92db2493c90945a915d9705d19e5e9d3eca82830ecd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/global.js"));

        // line 1
        echo "/* eslint strict: \"off\" */

module.exports = (function () {
\treturn this;
}());
";
        
        $__internal_b97c54e54323b6addba92db2493c90945a915d9705d19e5e9d3eca82830ecd9a->leave($__internal_b97c54e54323b6addba92db2493c90945a915d9705d19e5e9d3eca82830ecd9a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint strict: \"off\" */

module.exports = (function () {
\treturn this;
}());
", "node_modules/es5-ext/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/global.js");
    }
}
