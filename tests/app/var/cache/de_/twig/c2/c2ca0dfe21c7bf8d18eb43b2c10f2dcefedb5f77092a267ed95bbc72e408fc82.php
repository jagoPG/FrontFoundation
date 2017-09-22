<?php

/* node_modules/es5-ext/function/is-function.js */
class __TwigTemplate_49da28c9f33a0e8c9a01f2f57e7d60d3f42e311848c9d641bf93a9d19d6ff766 extends Twig_Template
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
        $__internal_69e4a1b49ed2a8a162bb3e9205379ebc89c483cdea737dd4964a16479cbfed9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e4a1b49ed2a8a162bb3e9205379ebc89c483cdea737dd4964a16479cbfed9f->enter($__internal_69e4a1b49ed2a8a162bb3e9205379ebc89c483cdea737dd4964a16479cbfed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/function/is-function.js"));

        // line 1
        echo "\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(require(\"./noop\"));

module.exports = function (value) {
\treturn typeof value === \"function\" && objToString.call(value) === id;
};
";
        
        $__internal_69e4a1b49ed2a8a162bb3e9205379ebc89c483cdea737dd4964a16479cbfed9f->leave($__internal_69e4a1b49ed2a8a162bb3e9205379ebc89c483cdea737dd4964a16479cbfed9f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/function/is-function.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(require(\"./noop\"));

module.exports = function (value) {
\treturn typeof value === \"function\" && objToString.call(value) === id;
};
", "node_modules/es5-ext/function/is-function.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/function/is-function.js");
    }
}
