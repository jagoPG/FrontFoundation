<?php

/* node_modules/es5-ext/array/#/separate.js */
class __TwigTemplate_5accd14dabeb7d29c0b41f21594ee38f117dc65c9a41708b252ab62e919e20f5 extends Twig_Template
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
        $__internal_866fee0936f15f01562e4831a2f948ac159ed841c713a317aa3f943dcbbffddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866fee0936f15f01562e4831a2f948ac159ed841c713a317aa3f943dcbbffddd->enter($__internal_866fee0936f15f01562e4831a2f948ac159ed841c713a317aa3f943dcbbffddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/separate.js"));

        // line 1
        echo "\"use strict\";

var forEach = Array.prototype.forEach;

module.exports = function (sep) {
\tvar result = [];
\tforEach.call(this, function (val) {
\t\tresult.push(val, sep);
\t});
\tresult.pop();
\treturn result;
};
";
        
        $__internal_866fee0936f15f01562e4831a2f948ac159ed841c713a317aa3f943dcbbffddd->leave($__internal_866fee0936f15f01562e4831a2f948ac159ed841c713a317aa3f943dcbbffddd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/separate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var forEach = Array.prototype.forEach;

module.exports = function (sep) {
\tvar result = [];
\tforEach.call(this, function (val) {
\t\tresult.push(val, sep);
\t});
\tresult.pop();
\treturn result;
};
", "node_modules/es5-ext/array/#/separate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/separate.js");
    }
}
