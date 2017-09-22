<?php

/* node_modules/core-js/core/dict.js */
class __TwigTemplate_127651bce093e895ed6067d23c284b8c7a91d6052c5148c744656d83af0dc9a9 extends Twig_Template
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
        $__internal_d61ae5aba4777ca4cf767b90b619e79b630fcbe941f177143e206558e80cb376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61ae5aba4777ca4cf767b90b619e79b630fcbe941f177143e206558e80cb376->enter($__internal_d61ae5aba4777ca4cf767b90b619e79b630fcbe941f177143e206558e80cb376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/core/dict.js"));

        // line 1
        echo "require('../modules/core.dict');
module.exports = require('../modules/_core').Dict;
";
        
        $__internal_d61ae5aba4777ca4cf767b90b619e79b630fcbe941f177143e206558e80cb376->leave($__internal_d61ae5aba4777ca4cf767b90b619e79b630fcbe941f177143e206558e80cb376_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/core/dict.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.dict');
module.exports = require('../modules/_core').Dict;
", "node_modules/core-js/core/dict.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/core/dict.js");
    }
}
