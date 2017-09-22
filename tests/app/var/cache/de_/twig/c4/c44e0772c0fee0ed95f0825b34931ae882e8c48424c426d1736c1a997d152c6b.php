<?php

/* node_modules/es5-ext/test/array/#/fill/implement.js */
class __TwigTemplate_2bf5a04842f2c4ff7330e88067cc7de58d8d9497e9e6bc613e480087c308dc3a extends Twig_Template
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
        $__internal_639dea08586abfc6faa61790818b372e5a4e5412f2ab6044883142fb95e9b989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639dea08586abfc6faa61790818b372e5a4e5412f2ab6044883142fb95e9b989->enter($__internal_639dea08586abfc6faa61790818b372e5a4e5412f2ab6044883142fb95e9b989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/fill/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/fill/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_639dea08586abfc6faa61790818b372e5a4e5412f2ab6044883142fb95e9b989->leave($__internal_639dea08586abfc6faa61790818b372e5a4e5412f2ab6044883142fb95e9b989_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/fill/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/fill/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/fill/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/fill/implement.js");
    }
}
