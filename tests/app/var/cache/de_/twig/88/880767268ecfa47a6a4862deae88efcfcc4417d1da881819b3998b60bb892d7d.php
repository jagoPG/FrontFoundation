<?php

/* node_modules/es5-ext/test/array/#/splice/implement.js */
class __TwigTemplate_986f7378c04992e9b763cbbf4f23f9e7b42664bfe75d0174b60f86dabc8cad18 extends Twig_Template
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
        $__internal_031afef93aad291307e3846b4f77b0b3439e1908ec00fe972fe8c3dc94085ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031afef93aad291307e3846b4f77b0b3439e1908ec00fe972fe8c3dc94085ec5->enter($__internal_031afef93aad291307e3846b4f77b0b3439e1908ec00fe972fe8c3dc94085ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/splice/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/splice/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_031afef93aad291307e3846b4f77b0b3439e1908ec00fe972fe8c3dc94085ec5->leave($__internal_031afef93aad291307e3846b4f77b0b3439e1908ec00fe972fe8c3dc94085ec5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/splice/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/splice/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/splice/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/splice/implement.js");
    }
}
