<?php

/* node_modules/core-js/library/es6/parse-float.js */
class __TwigTemplate_16c79e0402af0878894bc175a1e4b5488ed7c498f954db53ee590738a8cd434a extends Twig_Template
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
        $__internal_3ac48a3ddc5475d77cfff87a3d8692c776b12fd931fae259d4644474de2d4015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac48a3ddc5475d77cfff87a3d8692c776b12fd931fae259d4644474de2d4015->enter($__internal_3ac48a3ddc5475d77cfff87a3d8692c776b12fd931fae259d4644474de2d4015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es6/parse-float.js"));

        // line 1
        echo "require('../modules/es6.parse-float');
module.exports = require('../modules/_core').parseFloat;
";
        
        $__internal_3ac48a3ddc5475d77cfff87a3d8692c776b12fd931fae259d4644474de2d4015->leave($__internal_3ac48a3ddc5475d77cfff87a3d8692c776b12fd931fae259d4644474de2d4015_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es6/parse-float.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.parse-float');
module.exports = require('../modules/_core').parseFloat;
", "node_modules/core-js/library/es6/parse-float.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es6/parse-float.js");
    }
}
