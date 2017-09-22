<?php

/* node_modules/es5-ext/test/array/#/concat/is-implemented.js */
class __TwigTemplate_57758417fe94b3f4de921792b942e3b50db5d05cc195fd61c0b6e661a06c31e5 extends Twig_Template
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
        $__internal_3b8cc6a55c17e6e97af40b06cc349bc69a9d9c247facb147b7cbf70d654661c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b8cc6a55c17e6e97af40b06cc349bc69a9d9c247facb147b7cbf70d654661c9->enter($__internal_3b8cc6a55c17e6e97af40b06cc349bc69a9d9c247facb147b7cbf70d654661c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/concat/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_3b8cc6a55c17e6e97af40b06cc349bc69a9d9c247facb147b7cbf70d654661c9->leave($__internal_3b8cc6a55c17e6e97af40b06cc349bc69a9d9c247facb147b7cbf70d654661c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/concat/is-implemented.js";
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
", "node_modules/es5-ext/test/array/#/concat/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/concat/is-implemented.js");
    }
}
