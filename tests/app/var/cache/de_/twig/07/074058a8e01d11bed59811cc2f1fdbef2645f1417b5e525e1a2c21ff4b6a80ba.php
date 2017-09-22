<?php

/* node_modules/es5-ext/date/#/days-in-month.js */
class __TwigTemplate_32e2053af5d554b1442dea9f31d3aa1b74df68c8b1e8c851eb14334210aa3b2b extends Twig_Template
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
        $__internal_a69c1858e1962d15cecc58fa63f777d97feaa69ec78d919e651fa94004ead07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a69c1858e1962d15cecc58fa63f777d97feaa69ec78d919e651fa94004ead07a->enter($__internal_a69c1858e1962d15cecc58fa63f777d97feaa69ec78d919e651fa94004ead07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/date/#/days-in-month.js"));

        // line 1
        echo "\"use strict\";

var getMonth = Date.prototype.getMonth;

module.exports = function () {
\tswitch (getMonth.call(this)) {
\tcase 1:
\t\treturn this.getFullYear() % 4 ? 28 : 29;
\tcase 3:
\tcase 5:
\tcase 8:
\tcase 10:
\t\treturn 30;
\tdefault:
\t\treturn 31;
\t}
};
";
        
        $__internal_a69c1858e1962d15cecc58fa63f777d97feaa69ec78d919e651fa94004ead07a->leave($__internal_a69c1858e1962d15cecc58fa63f777d97feaa69ec78d919e651fa94004ead07a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/date/#/days-in-month.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var getMonth = Date.prototype.getMonth;

module.exports = function () {
\tswitch (getMonth.call(this)) {
\tcase 1:
\t\treturn this.getFullYear() % 4 ? 28 : 29;
\tcase 3:
\tcase 5:
\tcase 8:
\tcase 10:
\t\treturn 30;
\tdefault:
\t\treturn 31;
\t}
};
", "node_modules/es5-ext/date/#/days-in-month.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/date/#/days-in-month.js");
    }
}
