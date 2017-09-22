<?php

/* node_modules/es5-ext/test/object/keys/implement.js */
class __TwigTemplate_40a4f321505fe5540135d19cd0778ee09cb1891a66a27a2f68e9d2f840d951ed extends Twig_Template
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
        $__internal_2b89dacd11852b0eba3d5f17cebca40e2aef778cdffe45106adab13ed3437925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b89dacd11852b0eba3d5f17cebca40e2aef778cdffe45106adab13ed3437925->enter($__internal_2b89dacd11852b0eba3d5f17cebca40e2aef778cdffe45106adab13ed3437925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/object/keys/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../object/keys/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_2b89dacd11852b0eba3d5f17cebca40e2aef778cdffe45106adab13ed3437925->leave($__internal_2b89dacd11852b0eba3d5f17cebca40e2aef778cdffe45106adab13ed3437925_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/object/keys/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../object/keys/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/object/keys/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/object/keys/implement.js");
    }
}
