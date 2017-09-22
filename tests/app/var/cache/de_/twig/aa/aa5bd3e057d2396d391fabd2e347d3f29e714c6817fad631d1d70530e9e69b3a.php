<?php

/* node_modules/es5-ext/test/number/epsilon/implement.js */
class __TwigTemplate_8cadd74d8f1a8420cc1052395c1414e808432303bea50b1e3fc169ec0abea5b4 extends Twig_Template
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
        $__internal_0336066e69027b23d0062ba01a313ce3afd17893a6974935eac31bddaa5e7e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0336066e69027b23d0062ba01a313ce3afd17893a6974935eac31bddaa5e7e79->enter($__internal_0336066e69027b23d0062ba01a313ce3afd17893a6974935eac31bddaa5e7e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/number/epsilon/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../number/epsilon/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_0336066e69027b23d0062ba01a313ce3afd17893a6974935eac31bddaa5e7e79->leave($__internal_0336066e69027b23d0062ba01a313ce3afd17893a6974935eac31bddaa5e7e79_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/number/epsilon/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../number/epsilon/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/number/epsilon/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/number/epsilon/implement.js");
    }
}
