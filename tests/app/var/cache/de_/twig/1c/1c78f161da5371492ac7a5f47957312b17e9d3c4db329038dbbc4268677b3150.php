<?php

/* node_modules/es5-ext/test/number/min-safe-integer/implement.js */
class __TwigTemplate_2600db1d31b8e00fcf9021b8d0bf01eaa8fcb02ab669d34fe754d433f4720018 extends Twig_Template
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
        $__internal_a4cc67e33c6f92b9e3de80e793a3ad2b34681d651f0aa8980262fce0da9c519f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cc67e33c6f92b9e3de80e793a3ad2b34681d651f0aa8980262fce0da9c519f->enter($__internal_a4cc67e33c6f92b9e3de80e793a3ad2b34681d651f0aa8980262fce0da9c519f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/min-safe-integer/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../number/min-safe-integer/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_a4cc67e33c6f92b9e3de80e793a3ad2b34681d651f0aa8980262fce0da9c519f->leave($__internal_a4cc67e33c6f92b9e3de80e793a3ad2b34681d651f0aa8980262fce0da9c519f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/min-safe-integer/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../number/min-safe-integer/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/number/min-safe-integer/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/min-safe-integer/implement.js");
    }
}
