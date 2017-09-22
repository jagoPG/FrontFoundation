<?php

/* node_modules/es5-ext/date/valid-date.js */
class __TwigTemplate_2f278f3a6b31f5eebc41cd5b9600fe09ff1a489253a8d19b0ca65ec690d2cb7d extends Twig_Template
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
        $__internal_a2a52602556f380c9bd2ba102b338c8d6bba97d9b26c5eb6b4362c89242d070c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a52602556f380c9bd2ba102b338c8d6bba97d9b26c5eb6b4362c89242d070c->enter($__internal_a2a52602556f380c9bd2ba102b338c8d6bba97d9b26c5eb6b4362c89242d070c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/date/valid-date.js"));

        // line 1
        echo "\"use strict\";

var isDate = require(\"./is-date\");

module.exports = function (value) {
\tif (!isDate(value) || isNaN(value)) throw new TypeError(value + \" is not valid Date object\");
\treturn value;
};
";
        
        $__internal_a2a52602556f380c9bd2ba102b338c8d6bba97d9b26c5eb6b4362c89242d070c->leave($__internal_a2a52602556f380c9bd2ba102b338c8d6bba97d9b26c5eb6b4362c89242d070c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/date/valid-date.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isDate = require(\"./is-date\");

module.exports = function (value) {
\tif (!isDate(value) || isNaN(value)) throw new TypeError(value + \" is not valid Date object\");
\treturn value;
};
", "node_modules/es5-ext/date/valid-date.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/date/valid-date.js");
    }
}
