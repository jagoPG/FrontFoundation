<?php

/* node_modules/babel-runtime/core-js/reflect/prevent-extensions.js */
class __TwigTemplate_3ab8f9c52415c9a6a41d651ce339929b0cb35de1e5c62909d9341c7773647cf8 extends Twig_Template
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
        $__internal_c148d9b24d414f22f4dc8fc0f2ee534dce34832ac3b36318d10d17e14861bbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c148d9b24d414f22f4dc8fc0f2ee534dce34832ac3b36318d10d17e14861bbc0->enter($__internal_c148d9b24d414f22f4dc8fc0f2ee534dce34832ac3b36318d10d17e14861bbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/reflect/prevent-extensions.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/reflect/prevent-extensions\"), __esModule: true };";
        
        $__internal_c148d9b24d414f22f4dc8fc0f2ee534dce34832ac3b36318d10d17e14861bbc0->leave($__internal_c148d9b24d414f22f4dc8fc0f2ee534dce34832ac3b36318d10d17e14861bbc0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/reflect/prevent-extensions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/reflect/prevent-extensions\"), __esModule: true };", "node_modules/babel-runtime/core-js/reflect/prevent-extensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/reflect/prevent-extensions.js");
    }
}
