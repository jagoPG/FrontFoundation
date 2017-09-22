<?php

/* node_modules/es5-ext/string/#/repeat/is-implemented.js */
class __TwigTemplate_65298da6cd6de86a4a40a31f62e646b4dae0daddf5a96f39bdd1481dcfccc3b0 extends Twig_Template
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
        $__internal_838a2c906264535e1d24554a14744b794f25994b39cf6ba21b3009f410989502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838a2c906264535e1d24554a14744b794f25994b39cf6ba21b3009f410989502->enter($__internal_838a2c906264535e1d24554a14744b794f25994b39cf6ba21b3009f410989502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/repeat/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var str = \"foo\";

module.exports = function () {
\tif (typeof str.repeat !== \"function\") return false;
\treturn str.repeat(2) === \"foofoo\";
};
";
        
        $__internal_838a2c906264535e1d24554a14744b794f25994b39cf6ba21b3009f410989502->leave($__internal_838a2c906264535e1d24554a14744b794f25994b39cf6ba21b3009f410989502_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/repeat/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var str = \"foo\";

module.exports = function () {
\tif (typeof str.repeat !== \"function\") return false;
\treturn str.repeat(2) === \"foofoo\";
};
", "node_modules/es5-ext/string/#/repeat/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/repeat/is-implemented.js");
    }
}
