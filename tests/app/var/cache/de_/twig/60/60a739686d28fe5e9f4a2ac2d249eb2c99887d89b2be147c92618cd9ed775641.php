<?php

/* node_modules/es5-ext/error/is-error.js */
class __TwigTemplate_36cd408e8ee975336479f8794db8e1482028e1619932600d733a60fafc009413 extends Twig_Template
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
        $__internal_c5fc368eed2299014bc342f2ea3938032852cfaefb469f2a97fd097e72de5c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fc368eed2299014bc342f2ea3938032852cfaefb469f2a97fd097e72de5c73->enter($__internal_c5fc368eed2299014bc342f2ea3938032852cfaefb469f2a97fd097e72de5c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/error/is-error.js"));

        // line 1
        echo "\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(new Error());

module.exports = function (value) {
\treturn (value && (value instanceof Error || objToString.call(value) === id)) || false;
};
";
        
        $__internal_c5fc368eed2299014bc342f2ea3938032852cfaefb469f2a97fd097e72de5c73->leave($__internal_c5fc368eed2299014bc342f2ea3938032852cfaefb469f2a97fd097e72de5c73_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/error/is-error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(new Error());

module.exports = function (value) {
\treturn (value && (value instanceof Error || objToString.call(value) === id)) || false;
};
", "node_modules/es5-ext/error/is-error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/error/is-error.js");
    }
}
