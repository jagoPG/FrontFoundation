<?php

/* node_modules/core-js/fn/reflect/prevent-extensions.js */
class __TwigTemplate_e28e9867aae4eac14dd5a211a045fec9bcf577af4569bc1c2d7a00a345da1ee3 extends Twig_Template
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
        $__internal_e5906cc8df7f885332621446ef162c516e354a007f98729c67ca2b72e8f75d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5906cc8df7f885332621446ef162c516e354a007f98729c67ca2b72e8f75d24->enter($__internal_e5906cc8df7f885332621446ef162c516e354a007f98729c67ca2b72e8f75d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/reflect/prevent-extensions.js"));

        // line 1
        echo "require('../../modules/es6.reflect.prevent-extensions');
module.exports = require('../../modules/_core').Reflect.preventExtensions;
";
        
        $__internal_e5906cc8df7f885332621446ef162c516e354a007f98729c67ca2b72e8f75d24->leave($__internal_e5906cc8df7f885332621446ef162c516e354a007f98729c67ca2b72e8f75d24_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/reflect/prevent-extensions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.prevent-extensions');
module.exports = require('../../modules/_core').Reflect.preventExtensions;
", "node_modules/core-js/fn/reflect/prevent-extensions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/reflect/prevent-extensions.js");
    }
}
