<?php

/* node_modules/es5-ext/test/math/expm1/is-implemented.js */
class __TwigTemplate_d4890f926b8ea34928f98520c03f1d77afbc78f9ad6e0c59a2f2f9f9a018d3f1 extends Twig_Template
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
        $__internal_02d8e1afc9a6de66b7b85883934eafa66df424417d260d5adc498095cfeeeefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d8e1afc9a6de66b7b85883934eafa66df424417d260d5adc498095cfeeeefc->enter($__internal_02d8e1afc9a6de66b7b85883934eafa66df424417d260d5adc498095cfeeeefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/expm1/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_02d8e1afc9a6de66b7b85883934eafa66df424417d260d5adc498095cfeeeefc->leave($__internal_02d8e1afc9a6de66b7b85883934eafa66df424417d260d5adc498095cfeeeefc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/expm1/is-implemented.js";
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
", "node_modules/es5-ext/test/math/expm1/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/expm1/is-implemented.js");
    }
}
