<?php

/* node_modules/es5-ext/test/math/cosh/implement.js */
class __TwigTemplate_11573d1e6831c37b8ec1c0042a137e3c7acf62e9713aa814d273d4e7eee33132 extends Twig_Template
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
        $__internal_ccc8ce2a8fcfa98de58b418df1659d7d22539e8d7fb98b97e9c24551d597b806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc8ce2a8fcfa98de58b418df1659d7d22539e8d7fb98b97e9c24551d597b806->enter($__internal_ccc8ce2a8fcfa98de58b418df1659d7d22539e8d7fb98b97e9c24551d597b806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/cosh/implement.js"));

        // line 1
        echo "\"use strict\";

var isImplemented = require(\"../../../math/cosh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
";
        
        $__internal_ccc8ce2a8fcfa98de58b418df1659d7d22539e8d7fb98b97e9c24551d597b806->leave($__internal_ccc8ce2a8fcfa98de58b418df1659d7d22539e8d7fb98b97e9c24551d597b806_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/cosh/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var isImplemented = require(\"../../../math/cosh/is-implemented\");

module.exports = function (a) {
 a(isImplemented(), true);
};
", "node_modules/es5-ext/test/math/cosh/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/cosh/implement.js");
    }
}
