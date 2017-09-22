<?php

/* node_modules/es5-ext/test/array/#/slice/implement.js */
class __TwigTemplate_b8305e749489e779bd8683cb6429b5b43f616746832278d9227c0366fa4c4565 extends Twig_Template
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
        $__internal_b31073899de5e4639023b3a8736ccdc017ae2825fd6445f2b99bd8d0e2bb5463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31073899de5e4639023b3a8736ccdc017ae2825fd6445f2b99bd8d0e2bb5463->enter($__internal_b31073899de5e4639023b3a8736ccdc017ae2825fd6445f2b99bd8d0e2bb5463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/slice/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/slice/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_b31073899de5e4639023b3a8736ccdc017ae2825fd6445f2b99bd8d0e2bb5463->leave($__internal_b31073899de5e4639023b3a8736ccdc017ae2825fd6445f2b99bd8d0e2bb5463_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/slice/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/slice/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/slice/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/slice/implement.js");
    }
}
