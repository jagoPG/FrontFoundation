<?php

/* node_modules/core-js/library/fn/object/is-extensible.js */
class __TwigTemplate_d78962a340675c0f70176f77125fdbc113c0bf68503b6372fecb1b04f92b8486 extends Twig_Template
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
        $__internal_097faaa59394417c726046a3a86c749314bbafe492a304a8afedf1960383c27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097faaa59394417c726046a3a86c749314bbafe492a304a8afedf1960383c27f->enter($__internal_097faaa59394417c726046a3a86c749314bbafe492a304a8afedf1960383c27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/is-extensible.js"));

        // line 1
        echo "require('../../modules/es6.object.is-extensible');
module.exports = require('../../modules/_core').Object.isExtensible;
";
        
        $__internal_097faaa59394417c726046a3a86c749314bbafe492a304a8afedf1960383c27f->leave($__internal_097faaa59394417c726046a3a86c749314bbafe492a304a8afedf1960383c27f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/is-extensible.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.is-extensible');
module.exports = require('../../modules/_core').Object.isExtensible;
", "node_modules/core-js/library/fn/object/is-extensible.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/is-extensible.js");
    }
}
