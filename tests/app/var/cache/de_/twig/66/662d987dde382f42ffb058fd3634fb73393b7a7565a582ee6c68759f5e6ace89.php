<?php

/* node_modules/es5-ext/string/is-string.js */
class __TwigTemplate_ca3aa8c3abd266d12fa9fe34b11afffed7cc765da11f7902a0ce92aff077550c extends Twig_Template
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
        $__internal_c8a6d44b25e914ace72146011ff70c9b1ee3ed5eb1dd11503b9c6eaddc852913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a6d44b25e914ace72146011ff70c9b1ee3ed5eb1dd11503b9c6eaddc852913->enter($__internal_c8a6d44b25e914ace72146011ff70c9b1ee3ed5eb1dd11503b9c6eaddc852913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/is-string.js"));

        // line 1
        echo "\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(\"\");

module.exports = function (value) {
\treturn (
\t\ttypeof value === \"string\" ||
\t\t(value &&
\t\t\ttypeof value === \"object\" &&
\t\t\t(value instanceof String || objToString.call(value) === id)) ||
\t\tfalse
\t);
};
";
        
        $__internal_c8a6d44b25e914ace72146011ff70c9b1ee3ed5eb1dd11503b9c6eaddc852913->leave($__internal_c8a6d44b25e914ace72146011ff70c9b1ee3ed5eb1dd11503b9c6eaddc852913_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/is-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(\"\");

module.exports = function (value) {
\treturn (
\t\ttypeof value === \"string\" ||
\t\t(value &&
\t\t\ttypeof value === \"object\" &&
\t\t\t(value instanceof String || objToString.call(value) === id)) ||
\t\tfalse
\t);
};
", "node_modules/es5-ext/string/is-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/is-string.js");
    }
}
