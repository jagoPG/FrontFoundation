<?php

/* node_modules/es5-ext/test/math/log2/implement.js */
class __TwigTemplate_dab753af30843e37f65f3d53c34e00979ecf675b6fb727c3faff3c1b2fbe1cad extends Twig_Template
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
        $__internal_d30fc64877e78c0937ab8a7036774166ec6235003c7cdd2a97a9a927e6539706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30fc64877e78c0937ab8a7036774166ec6235003c7cdd2a97a9a927e6539706->enter($__internal_d30fc64877e78c0937ab8a7036774166ec6235003c7cdd2a97a9a927e6539706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/log2/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/log2/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_d30fc64877e78c0937ab8a7036774166ec6235003c7cdd2a97a9a927e6539706->leave($__internal_d30fc64877e78c0937ab8a7036774166ec6235003c7cdd2a97a9a927e6539706_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/log2/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/log2/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/log2/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/log2/implement.js");
    }
}
