<?php

/* node_modules/es5-ext/test/string/from-code-point/is-implemented.js */
class __TwigTemplate_0cf8aa3ceb298d187ff0c26689a8450752d6c79418e228f4d6751f15e239da7b extends Twig_Template
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
        $__internal_55801f1042259fb64170c8c815cf3a40913bb50c2c043146dc115b04196cbbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55801f1042259fb64170c8c815cf3a40913bb50c2c043146dc115b04196cbbf3->enter($__internal_55801f1042259fb64170c8c815cf3a40913bb50c2c043146dc115b04196cbbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/from-code-point/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_55801f1042259fb64170c8c815cf3a40913bb50c2c043146dc115b04196cbbf3->leave($__internal_55801f1042259fb64170c8c815cf3a40913bb50c2c043146dc115b04196cbbf3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/from-code-point/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
", "node_modules/es5-ext/test/string/from-code-point/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/from-code-point/is-implemented.js");
    }
}
