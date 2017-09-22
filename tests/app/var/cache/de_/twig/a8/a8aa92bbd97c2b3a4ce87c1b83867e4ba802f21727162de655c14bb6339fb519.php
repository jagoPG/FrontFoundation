<?php

/* node_modules/es5-ext/test/string/#/@@iterator/implement.js */
class __TwigTemplate_ae6d517745bff5d252938307156b7085b7bbfc6e1a4d5d6f6f9398cba9fd0f5c extends Twig_Template
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
        $__internal_f66ddfd8bbde0baeeaf3b5aeb650f9aa6f69a76d0e0d37594070223752dced16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66ddfd8bbde0baeeaf3b5aeb650f9aa6f69a76d0e0d37594070223752dced16->enter($__internal_f66ddfd8bbde0baeeaf3b5aeb650f9aa6f69a76d0e0d37594070223752dced16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/@@iterator/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../string/#/@@iterator/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_f66ddfd8bbde0baeeaf3b5aeb650f9aa6f69a76d0e0d37594070223752dced16->leave($__internal_f66ddfd8bbde0baeeaf3b5aeb650f9aa6f69a76d0e0d37594070223752dced16_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/@@iterator/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../string/#/@@iterator/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/string/#/@@iterator/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/@@iterator/implement.js");
    }
}
