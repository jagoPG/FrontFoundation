<?php

/* node_modules/es5-ext/number/is-number.js */
class __TwigTemplate_b5f3c5ae15abd6455cc9a4f401f4ffd0f42ae127d7c44c49edbff468b14437d3 extends Twig_Template
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
        $__internal_7697826bd04bc43e2e8ff7e4062af1080aea6f4d40f24b4640530c51264a525d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7697826bd04bc43e2e8ff7e4062af1080aea6f4d40f24b4640530c51264a525d->enter($__internal_7697826bd04bc43e2e8ff7e4062af1080aea6f4d40f24b4640530c51264a525d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/is-number.js"));

        // line 1
        echo "\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(1);

module.exports = function (value) {
\treturn (
\t\ttypeof value === \"number\" ||
\t\t(value instanceof Number || (typeof value === \"object\" && objToString.call(value) === id))
\t);
};
";
        
        $__internal_7697826bd04bc43e2e8ff7e4062af1080aea6f4d40f24b4640530c51264a525d->leave($__internal_7697826bd04bc43e2e8ff7e4062af1080aea6f4d40f24b4640530c51264a525d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/is-number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(1);

module.exports = function (value) {
\treturn (
\t\ttypeof value === \"number\" ||
\t\t(value instanceof Number || (typeof value === \"object\" && objToString.call(value) === id))
\t);
};
", "node_modules/es5-ext/number/is-number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/is-number.js");
    }
}
