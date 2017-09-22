<?php

/* node_modules/es5-ext/string/#/starts-with/is-implemented.js */
class __TwigTemplate_1edf097d3ee3212aa672d14207035c3b9e1125c4a70d547ab353dcb95fd2503c extends Twig_Template
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
        $__internal_6d89cf1cdef8fe39b8c52b70cf2bbd183aa423f5e03f92d554bbf8f524ee8730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d89cf1cdef8fe39b8c52b70cf2bbd183aa423f5e03f92d554bbf8f524ee8730->enter($__internal_6d89cf1cdef8fe39b8c52b70cf2bbd183aa423f5e03f92d554bbf8f524ee8730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/starts-with/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var str = \"razdwatrzy\";

module.exports = function () {
\tif (typeof str.startsWith !== \"function\") return false;
\treturn (str.startsWith(\"trzy\") === false) &&
\t\t(str.startsWith(\"raz\") === true);
};
";
        
        $__internal_6d89cf1cdef8fe39b8c52b70cf2bbd183aa423f5e03f92d554bbf8f524ee8730->leave($__internal_6d89cf1cdef8fe39b8c52b70cf2bbd183aa423f5e03f92d554bbf8f524ee8730_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/starts-with/is-implemented.js";
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
\tif (typeof str.startsWith !== \"function\") return false;
\treturn (str.startsWith(\"trzy\") === false) &&
\t\t(str.startsWith(\"raz\") === true);
};
", "node_modules/es5-ext/string/#/starts-with/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/starts-with/is-implemented.js");
    }
}
