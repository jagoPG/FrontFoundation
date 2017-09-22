<?php

/* node_modules/es5-ext/string/#/contains/is-implemented.js */
class __TwigTemplate_5d44b8c062575bfe58a6dcc84a8ad6778750b114fe8c218feb003092038c1260 extends Twig_Template
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
        $__internal_1276a422eb30bd3020b719dc49c615db4c3041bb5a7e86667ce8dd615baa1146 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1276a422eb30bd3020b719dc49c615db4c3041bb5a7e86667ce8dd615baa1146->enter($__internal_1276a422eb30bd3020b719dc49c615db4c3041bb5a7e86667ce8dd615baa1146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/contains/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var str = \"razdwatrzy\";

module.exports = function () {
\tif (typeof str.contains !== \"function\") return false;
\treturn (str.contains(\"dwa\") === true) && (str.contains(\"foo\") === false);
};
";
        
        $__internal_1276a422eb30bd3020b719dc49c615db4c3041bb5a7e86667ce8dd615baa1146->leave($__internal_1276a422eb30bd3020b719dc49c615db4c3041bb5a7e86667ce8dd615baa1146_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/contains/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var str = \"razdwatrzy\";

module.exports = function () {
\tif (typeof str.contains !== \"function\") return false;
\treturn (str.contains(\"dwa\") === true) && (str.contains(\"foo\") === false);
};
", "node_modules/es5-ext/string/#/contains/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/contains/is-implemented.js");
    }
}
