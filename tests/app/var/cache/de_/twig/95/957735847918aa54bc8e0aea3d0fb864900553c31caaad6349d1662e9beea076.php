<?php

/* node_modules/es5-ext/test/array/#/@@iterator/implement.js */
class __TwigTemplate_0cf58dc9f4c2f874898ca80cb63c5300b0a743cf34306fd0d467044a4b3a615d extends Twig_Template
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
        $__internal_5b74d45ab429de9a774699410508918a302448b0210b02289a537b153b14845a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b74d45ab429de9a774699410508918a302448b0210b02289a537b153b14845a->enter($__internal_5b74d45ab429de9a774699410508918a302448b0210b02289a537b153b14845a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/@@iterator/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/@@iterator/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_5b74d45ab429de9a774699410508918a302448b0210b02289a537b153b14845a->leave($__internal_5b74d45ab429de9a774699410508918a302448b0210b02289a537b153b14845a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/@@iterator/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/@@iterator/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/@@iterator/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/@@iterator/implement.js");
    }
}
