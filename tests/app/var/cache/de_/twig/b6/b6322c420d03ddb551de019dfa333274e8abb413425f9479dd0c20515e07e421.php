<?php

/* node_modules/es5-ext/test/math/_unpack-ieee754.js */
class __TwigTemplate_0edbc65c64c6d2fc7dad510ce72de01e7eab2025c4f81d6fc584071c58562c68 extends Twig_Template
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
        $__internal_8c7e2d0ce7511b5f382bcaaa830ccf6816c48f3ec7bab1379668e1d40f2629e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7e2d0ce7511b5f382bcaaa830ccf6816c48f3ec7bab1379668e1d40f2629e9->enter($__internal_8c7e2d0ce7511b5f382bcaaa830ccf6816c48f3ec7bab1379668e1d40f2629e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/_unpack-ieee754.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta.deep(t([63, 171, 34, 209], 8, 23), 1.3370000123977661);
};
";
        
        $__internal_8c7e2d0ce7511b5f382bcaaa830ccf6816c48f3ec7bab1379668e1d40f2629e9->leave($__internal_8c7e2d0ce7511b5f382bcaaa830ccf6816c48f3ec7bab1379668e1d40f2629e9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/_unpack-ieee754.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta.deep(t([63, 171, 34, 209], 8, 23), 1.3370000123977661);
};
", "node_modules/es5-ext/test/math/_unpack-ieee754.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/_unpack-ieee754.js");
    }
}
