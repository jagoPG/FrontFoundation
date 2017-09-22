<?php

/* node_modules/es5-ext/test/array/#/concat/implement.js */
class __TwigTemplate_4a410aaa5e20e4bc4bf28825e7354c064acccdb690e4e2642886d687bc9282a4 extends Twig_Template
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
        $__internal_3812367c10fa45a20c9d340e332b8dc0f556fee4f14f9b250a79f89f2c66ec64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3812367c10fa45a20c9d340e332b8dc0f556fee4f14f9b250a79f89f2c66ec64->enter($__internal_3812367c10fa45a20c9d340e332b8dc0f556fee4f14f9b250a79f89f2c66ec64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/concat/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../../array/#/concat/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_3812367c10fa45a20c9d340e332b8dc0f556fee4f14f9b250a79f89f2c66ec64->leave($__internal_3812367c10fa45a20c9d340e332b8dc0f556fee4f14f9b250a79f89f2c66ec64_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/concat/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../../array/#/concat/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/array/#/concat/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/concat/implement.js");
    }
}
