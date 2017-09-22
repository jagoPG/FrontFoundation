<?php

/* node_modules/core-js/fn/error/is-error.js */
class __TwigTemplate_e4901fab6ec325e01cda9a6433ee50d044753118c75522da798848c9361f7e5d extends Twig_Template
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
        $__internal_3251b099791d13fe8efac2c6640993c2ab6a91f3c7c8d0a78c24475d5034619f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3251b099791d13fe8efac2c6640993c2ab6a91f3c7c8d0a78c24475d5034619f->enter($__internal_3251b099791d13fe8efac2c6640993c2ab6a91f3c7c8d0a78c24475d5034619f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/error/is-error.js"));

        // line 1
        echo "require('../../modules/es7.error.is-error');
module.exports = require('../../modules/_core').Error.isError;
";
        
        $__internal_3251b099791d13fe8efac2c6640993c2ab6a91f3c7c8d0a78c24475d5034619f->leave($__internal_3251b099791d13fe8efac2c6640993c2ab6a91f3c7c8d0a78c24475d5034619f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/error/is-error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.error.is-error');
module.exports = require('../../modules/_core').Error.isError;
", "node_modules/core-js/fn/error/is-error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/error/is-error.js");
    }
}
