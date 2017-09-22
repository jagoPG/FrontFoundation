<?php

/* node_modules/es5-ext/object/eq.js */
class __TwigTemplate_3a1367768b79c495a55d8d013a47bf1136911b290e4676e7e2fd312ae94d0adf extends Twig_Template
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
        $__internal_585b515dbb93f930823d1b8a7f071d152fb29bcbd04f8a647abd7ee1dd83ad6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585b515dbb93f930823d1b8a7f071d152fb29bcbd04f8a647abd7ee1dd83ad6f->enter($__internal_585b515dbb93f930823d1b8a7f071d152fb29bcbd04f8a647abd7ee1dd83ad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/eq.js"));

        // line 1
        echo "\"use strict\";

var numIsNaN = require(\"../number/is-nan\");

module.exports = function (val1, val2) {
\treturn val1 === val2 || (numIsNaN(val1) && numIsNaN(val2));
};
";
        
        $__internal_585b515dbb93f930823d1b8a7f071d152fb29bcbd04f8a647abd7ee1dd83ad6f->leave($__internal_585b515dbb93f930823d1b8a7f071d152fb29bcbd04f8a647abd7ee1dd83ad6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/eq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var numIsNaN = require(\"../number/is-nan\");

module.exports = function (val1, val2) {
\treturn val1 === val2 || (numIsNaN(val1) && numIsNaN(val2));
};
", "node_modules/es5-ext/object/eq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/eq.js");
    }
}
