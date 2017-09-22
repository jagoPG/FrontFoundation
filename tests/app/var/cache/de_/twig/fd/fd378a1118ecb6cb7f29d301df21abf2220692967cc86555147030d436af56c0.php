<?php

/* node_modules/es5-ext/test/array/#/filter/is-implemented.js */
class __TwigTemplate_77e6e8349e10d21bf895e53060ad71ada31c6f77d96324fc05697f78785623d4 extends Twig_Template
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
        $__internal_fdaaef9936221cd1979422c6176a9c8b2ed49cc06a044ff187c0e8dbefea22b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdaaef9936221cd1979422c6176a9c8b2ed49cc06a044ff187c0e8dbefea22b8->enter($__internal_fdaaef9936221cd1979422c6176a9c8b2ed49cc06a044ff187c0e8dbefea22b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/filter/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_fdaaef9936221cd1979422c6176a9c8b2ed49cc06a044ff187c0e8dbefea22b8->leave($__internal_fdaaef9936221cd1979422c6176a9c8b2ed49cc06a044ff187c0e8dbefea22b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/filter/is-implemented.js";
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
", "node_modules/es5-ext/test/array/#/filter/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/filter/is-implemented.js");
    }
}
