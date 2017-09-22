<?php

/* node_modules/es5-ext/string/#/uncapitalize.js */
class __TwigTemplate_941f099ac467946ba40a943163a5d9867a5e8ace5b1303bc75e5ae729b84d752 extends Twig_Template
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
        $__internal_0cd9e08e7d313cf715a72578d690c722957c7463f6de94e584e4e240f5b4ed30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd9e08e7d313cf715a72578d690c722957c7463f6de94e584e4e240f5b4ed30->enter($__internal_0cd9e08e7d313cf715a72578d690c722957c7463f6de94e584e4e240f5b4ed30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/string/#/uncapitalize.js"));

        // line 1
        echo "\"use strict\";

var ensureStringifiable = require(\"../../object/validate-stringifiable-value\");

module.exports = function () {
\tvar str = ensureStringifiable(this);
\treturn str.charAt(0).toLowerCase() + str.slice(1);
};
";
        
        $__internal_0cd9e08e7d313cf715a72578d690c722957c7463f6de94e584e4e240f5b4ed30->leave($__internal_0cd9e08e7d313cf715a72578d690c722957c7463f6de94e584e4e240f5b4ed30_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/string/#/uncapitalize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var ensureStringifiable = require(\"../../object/validate-stringifiable-value\");

module.exports = function () {
\tvar str = ensureStringifiable(this);
\treturn str.charAt(0).toLowerCase() + str.slice(1);
};
", "node_modules/es5-ext/string/#/uncapitalize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/string/#/uncapitalize.js");
    }
}
