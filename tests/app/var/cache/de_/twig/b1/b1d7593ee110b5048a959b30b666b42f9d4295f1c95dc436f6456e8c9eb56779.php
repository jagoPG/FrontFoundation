<?php

/* node_modules/es5-ext/test/math/acosh/implement.js */
class __TwigTemplate_79667dbc464d11206f3fb27d91e2c07da3069ef25eb0a568bd4ab38b4e051c08 extends Twig_Template
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
        $__internal_256d30b085b27d7ac3a21d5d3b77be47b12db3c01af7d5245076302b9bd13c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256d30b085b27d7ac3a21d5d3b77be47b12db3c01af7d5245076302b9bd13c43->enter($__internal_256d30b085b27d7ac3a21d5d3b77be47b12db3c01af7d5245076302b9bd13c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/acosh/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/acosh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_256d30b085b27d7ac3a21d5d3b77be47b12db3c01af7d5245076302b9bd13c43->leave($__internal_256d30b085b27d7ac3a21d5d3b77be47b12db3c01af7d5245076302b9bd13c43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/acosh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/acosh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/acosh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/acosh/implement.js");
    }
}
