<?php

/* node_modules/es5-ext/test/array/from/is-implemented.js */
class __TwigTemplate_dcae8c77db613f9ebd98131a0f14e969f33a75fbb2745b2f451524e7cd88e596 extends Twig_Template
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
        $__internal_2aaf398e082bafe48b4c8ca413f388e5745d08183de0798d4ae0fe7b325e80ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaf398e082bafe48b4c8ca413f388e5745d08183de0798d4ae0fe7b325e80ee->enter($__internal_2aaf398e082bafe48b4c8ca413f388e5745d08183de0798d4ae0fe7b325e80ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/from/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_2aaf398e082bafe48b4c8ca413f388e5745d08183de0798d4ae0fe7b325e80ee->leave($__internal_2aaf398e082bafe48b4c8ca413f388e5745d08183de0798d4ae0fe7b325e80ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/from/is-implemented.js";
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
", "node_modules/es5-ext/test/array/from/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/from/is-implemented.js");
    }
}
