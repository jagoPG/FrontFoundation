<?php

/* node_modules/es5-ext/test/string/#/starts-with/implement.js */
class __TwigTemplate_aa11d4ed1886ab68a5066ae0328578d0abe86f105d21ba3c60d640c20ae56d61 extends Twig_Template
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
        $__internal_957964c208e868a756bec46f87b881748b3d21b3dde2d81f183cf52ddcd605bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957964c208e868a756bec46f87b881748b3d21b3dde2d81f183cf52ddcd605bc->enter($__internal_957964c208e868a756bec46f87b881748b3d21b3dde2d81f183cf52ddcd605bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/starts-with/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../string/#/starts-with/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_957964c208e868a756bec46f87b881748b3d21b3dde2d81f183cf52ddcd605bc->leave($__internal_957964c208e868a756bec46f87b881748b3d21b3dde2d81f183cf52ddcd605bc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/starts-with/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../string/#/starts-with/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/string/#/starts-with/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/starts-with/implement.js");
    }
}
