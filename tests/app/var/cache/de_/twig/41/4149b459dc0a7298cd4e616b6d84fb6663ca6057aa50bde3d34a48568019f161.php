<?php

/* node_modules/es5-ext/date/is-date.js */
class __TwigTemplate_3790e64bcbd0bada41f300042e4dbc4d4befe6b030b238661112f62308521b7f extends Twig_Template
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
        $__internal_54da08f2cea382e32894bf5ec7e99d318db040086ea1cccf8a052ebd9e21a0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54da08f2cea382e32894bf5ec7e99d318db040086ea1cccf8a052ebd9e21a0d0->enter($__internal_54da08f2cea382e32894bf5ec7e99d318db040086ea1cccf8a052ebd9e21a0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/date/is-date.js"));

        // line 1
        echo "\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(new Date());

module.exports = function (value) {
\treturn (value && (value instanceof Date || objToString.call(value) === id)) || false;
};
";
        
        $__internal_54da08f2cea382e32894bf5ec7e99d318db040086ea1cccf8a052ebd9e21a0d0->leave($__internal_54da08f2cea382e32894bf5ec7e99d318db040086ea1cccf8a052ebd9e21a0d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/date/is-date.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var objToString = Object.prototype.toString, id = objToString.call(new Date());

module.exports = function (value) {
\treturn (value && (value instanceof Date || objToString.call(value) === id)) || false;
};
", "node_modules/es5-ext/date/is-date.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/date/is-date.js");
    }
}
