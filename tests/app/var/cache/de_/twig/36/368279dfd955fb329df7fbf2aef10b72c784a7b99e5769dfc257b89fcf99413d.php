<?php

/* node_modules/lodash/_nativeKeys.js */
class __TwigTemplate_74903f10beee636a5cd3f21820bf81a0d29f137279397621e1e4e997619b8d19 extends Twig_Template
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
        $__internal_01caef36b3910fbff790bf1604fe61dbc62311aca608ab208168c7549a6b7273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01caef36b3910fbff790bf1604fe61dbc62311aca608ab208168c7549a6b7273->enter($__internal_01caef36b3910fbff790bf1604fe61dbc62311aca608ab208168c7549a6b7273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_nativeKeys.js"));

        // line 1
        echo "var overArg = require('./_overArg');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeKeys = overArg(Object.keys, Object);

module.exports = nativeKeys;
";
        
        $__internal_01caef36b3910fbff790bf1604fe61dbc62311aca608ab208168c7549a6b7273->leave($__internal_01caef36b3910fbff790bf1604fe61dbc62311aca608ab208168c7549a6b7273_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_nativeKeys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var overArg = require('./_overArg');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeKeys = overArg(Object.keys, Object);

module.exports = nativeKeys;
", "node_modules/lodash/_nativeKeys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_nativeKeys.js");
    }
}
