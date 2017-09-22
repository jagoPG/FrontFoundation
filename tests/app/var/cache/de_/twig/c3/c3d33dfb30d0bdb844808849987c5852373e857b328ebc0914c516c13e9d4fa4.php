<?php

/* node_modules/core-js/library/fn/function/index.js */
class __TwigTemplate_f0635a2afc4fdba0b4e9e83adad0dcef7a8f76953e16e5c397cb8cace0852644 extends Twig_Template
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
        $__internal_9fc91c6cc3f2f3a566be727dd4b3e479616f4cb3e7fc978e9170953cadc69c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc91c6cc3f2f3a566be727dd4b3e479616f4cb3e7fc978e9170953cadc69c2a->enter($__internal_9fc91c6cc3f2f3a566be727dd4b3e479616f4cb3e7fc978e9170953cadc69c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/function/index.js"));

        // line 1
        echo "require('../../modules/es6.function.bind');
require('../../modules/es6.function.name');
require('../../modules/es6.function.has-instance');
require('../../modules/core.function.part');
module.exports = require('../../modules/_core').Function;
";
        
        $__internal_9fc91c6cc3f2f3a566be727dd4b3e479616f4cb3e7fc978e9170953cadc69c2a->leave($__internal_9fc91c6cc3f2f3a566be727dd4b3e479616f4cb3e7fc978e9170953cadc69c2a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/function/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.function.bind');
require('../../modules/es6.function.name');
require('../../modules/es6.function.has-instance');
require('../../modules/core.function.part');
module.exports = require('../../modules/_core').Function;
", "node_modules/core-js/library/fn/function/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/function/index.js");
    }
}
