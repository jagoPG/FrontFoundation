<?php

/* node_modules/es5-ext/string/#/ends-with/is-implemented.js */
class __TwigTemplate_bc34a36d3f52a6c82d950e659da8e2201776f3be5079fdfd377978621617a366 extends Twig_Template
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
        $__internal_6f336e6ae38b3ac706c90cb33cdb50bda9f4053d3dfe3600e8f92ad75fd5142a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f336e6ae38b3ac706c90cb33cdb50bda9f4053d3dfe3600e8f92ad75fd5142a->enter($__internal_6f336e6ae38b3ac706c90cb33cdb50bda9f4053d3dfe3600e8f92ad75fd5142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/ends-with/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var str = \"razdwatrzy\";

module.exports = function () {
\tif (typeof str.endsWith !== \"function\") return false;
\treturn (str.endsWith(\"trzy\") === true) && (str.endsWith(\"raz\") === false);
};
";
        
        $__internal_6f336e6ae38b3ac706c90cb33cdb50bda9f4053d3dfe3600e8f92ad75fd5142a->leave($__internal_6f336e6ae38b3ac706c90cb33cdb50bda9f4053d3dfe3600e8f92ad75fd5142a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/ends-with/is-implemented.js";
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
\tif (typeof str.endsWith !== \"function\") return false;
\treturn (str.endsWith(\"trzy\") === true) && (str.endsWith(\"raz\") === false);
};
", "node_modules/es5-ext/string/#/ends-with/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/ends-with/is-implemented.js");
    }
}
