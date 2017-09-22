<?php

/* node_modules/es5-ext/test/array/#/@@iterator/is-implemented.js */
class __TwigTemplate_20d0935ac28bda4ad85f8fa4f5389cb519fdab320a741ef586c4db02c48b93f1 extends Twig_Template
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
        $__internal_9c14c183b40248f9078e02c0c809085de57d1a36cfaf6e984e0c87b5bb8f55a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c14c183b40248f9078e02c0c809085de57d1a36cfaf6e984e0c87b5bb8f55a7->enter($__internal_9c14c183b40248f9078e02c0c809085de57d1a36cfaf6e984e0c87b5bb8f55a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/array/#/@@iterator/is-implemented.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
 a(typeof t(), \"boolean\");
};
";
        
        $__internal_9c14c183b40248f9078e02c0c809085de57d1a36cfaf6e984e0c87b5bb8f55a7->leave($__internal_9c14c183b40248f9078e02c0c809085de57d1a36cfaf6e984e0c87b5bb8f55a7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/array/#/@@iterator/is-implemented.js";
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
", "node_modules/es5-ext/test/array/#/@@iterator/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/array/#/@@iterator/is-implemented.js");
    }
}
