<?php

/* node_modules/es5-ext/test/array/of/implement.js */
class __TwigTemplate_5a6f94de63cc187e3d86af31626cfc0a0e79bf1dcfcdda00aa1f839b9eb90848 extends Twig_Template
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
        $__internal_682eb8c889ffba591b0a0e1503ccea24488582d3fc9bdb815970c9a3b47de37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682eb8c889ffba591b0a0e1503ccea24488582d3fc9bdb815970c9a3b47de37a->enter($__internal_682eb8c889ffba591b0a0e1503ccea24488582d3fc9bdb815970c9a3b47de37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/of/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../array/of/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_682eb8c889ffba591b0a0e1503ccea24488582d3fc9bdb815970c9a3b47de37a->leave($__internal_682eb8c889ffba591b0a0e1503ccea24488582d3fc9bdb815970c9a3b47de37a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/of/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../array/of/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/of/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/of/implement.js");
    }
}
