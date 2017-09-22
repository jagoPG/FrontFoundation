<?php

/* node_modules/es5-ext/function/is-arguments.js */
class __TwigTemplate_3f139a416fc04dee83a9c69457d59bbe6231831e7a4d340fb6be425e3873fe64 extends Twig_Template
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
        $__internal_27f20b889b57db2ffc26bd1d9f92d04a9472f18088eb1327c1c9d609afd22ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f20b889b57db2ffc26bd1d9f92d04a9472f18088eb1327c1c9d609afd22ace->enter($__internal_27f20b889b57db2ffc26bd1d9f92d04a9472f18088eb1327c1c9d609afd22ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/is-arguments.js"));

        // line 1
        echo "\"use strict\";

var objToString = Object.prototype.toString
  , id = objToString.call(
\t(function () {
\t\treturn arguments;
\t})()
);

module.exports = function (value) {
\treturn objToString.call(value) === id;
};
";
        
        $__internal_27f20b889b57db2ffc26bd1d9f92d04a9472f18088eb1327c1c9d609afd22ace->leave($__internal_27f20b889b57db2ffc26bd1d9f92d04a9472f18088eb1327c1c9d609afd22ace_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/is-arguments.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var objToString = Object.prototype.toString
  , id = objToString.call(
\t(function () {
\t\treturn arguments;
\t})()
);

module.exports = function (value) {
\treturn objToString.call(value) === id;
};
", "node_modules/es5-ext/function/is-arguments.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/is-arguments.js");
    }
}
