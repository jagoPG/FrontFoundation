<?php

/* node_modules/es5-ext/error/valid-error.js */
class __TwigTemplate_3a556da2f85caf4e5f775134f3994f1003796d4fe5bbbf4fdd5e30211aa4c956 extends Twig_Template
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
        $__internal_365c91807cf526b3e0e9c2c19c552eb27532848eb8486950d8250ed2ad9a3bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365c91807cf526b3e0e9c2c19c552eb27532848eb8486950d8250ed2ad9a3bd2->enter($__internal_365c91807cf526b3e0e9c2c19c552eb27532848eb8486950d8250ed2ad9a3bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/error/valid-error.js"));

        // line 1
        echo "\"use strict\";

var isError = require(\"./is-error\");

module.exports = function (value) {
\tif (!isError(value)) throw new TypeError(value + \" is not an Error object\");
\treturn value;
};
";
        
        $__internal_365c91807cf526b3e0e9c2c19c552eb27532848eb8486950d8250ed2ad9a3bd2->leave($__internal_365c91807cf526b3e0e9c2c19c552eb27532848eb8486950d8250ed2ad9a3bd2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/error/valid-error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isError = require(\"./is-error\");

module.exports = function (value) {
\tif (!isError(value)) throw new TypeError(value + \" is not an Error object\");
\treturn value;
};
", "node_modules/es5-ext/error/valid-error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/error/valid-error.js");
    }
}
