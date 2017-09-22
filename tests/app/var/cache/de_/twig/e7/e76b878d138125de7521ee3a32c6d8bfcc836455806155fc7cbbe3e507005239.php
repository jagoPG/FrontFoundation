<?php

/* node_modules/es5-ext/string/#/contains/shim.js */
class __TwigTemplate_0c4ba3e60c5943ef1516d26d23c197f40ef1a664afb8a74a7c347bdf460bb11a extends Twig_Template
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
        $__internal_0db24d4fb953bacce41b03b37b78f74ba80bc453f60a7ca8e63c87f971446903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db24d4fb953bacce41b03b37b78f74ba80bc453f60a7ca8e63c87f971446903->enter($__internal_0db24d4fb953bacce41b03b37b78f74ba80bc453f60a7ca8e63c87f971446903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/contains/shim.js"));

        // line 1
        echo "\"use strict\";

var indexOf = String.prototype.indexOf;

module.exports = function (searchString/*, position*/) {
\treturn indexOf.call(this, searchString, arguments[1]) > -1;
};
";
        
        $__internal_0db24d4fb953bacce41b03b37b78f74ba80bc453f60a7ca8e63c87f971446903->leave($__internal_0db24d4fb953bacce41b03b37b78f74ba80bc453f60a7ca8e63c87f971446903_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/contains/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var indexOf = String.prototype.indexOf;

module.exports = function (searchString/*, position*/) {
\treturn indexOf.call(this, searchString, arguments[1]) > -1;
};
", "node_modules/es5-ext/string/#/contains/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/contains/shim.js");
    }
}
