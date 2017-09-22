<?php

/* node_modules/es5-ext/test/string/#/contains/implement.js */
class __TwigTemplate_4409085c4162c8f9b01fbfdaeed761608f49b95535a6891b8b5223df31abdbb9 extends Twig_Template
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
        $__internal_0973b590fb87de6e010dee5889a0c7fb79375621bf9eee0c0a8226f1df5457b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0973b590fb87de6e010dee5889a0c7fb79375621bf9eee0c0a8226f1df5457b9->enter($__internal_0973b590fb87de6e010dee5889a0c7fb79375621bf9eee0c0a8226f1df5457b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/contains/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../string/#/contains/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_0973b590fb87de6e010dee5889a0c7fb79375621bf9eee0c0a8226f1df5457b9->leave($__internal_0973b590fb87de6e010dee5889a0c7fb79375621bf9eee0c0a8226f1df5457b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/contains/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../string/#/contains/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/string/#/contains/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/contains/implement.js");
    }
}
