<?php

/* node_modules/core-js/library/fn/string/at.js */
class __TwigTemplate_a994344c26770300e20aa3c0eaa26604a5a081e4dc7923e071ff65c6e230951f extends Twig_Template
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
        $__internal_94b649de59abf6617f42e4fc437570ec229cfa50ac8db2d22be288c939288087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b649de59abf6617f42e4fc437570ec229cfa50ac8db2d22be288c939288087->enter($__internal_94b649de59abf6617f42e4fc437570ec229cfa50ac8db2d22be288c939288087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/at.js"));

        // line 1
        echo "require('../../modules/es7.string.at');
module.exports = require('../../modules/_core').String.at;
";
        
        $__internal_94b649de59abf6617f42e4fc437570ec229cfa50ac8db2d22be288c939288087->leave($__internal_94b649de59abf6617f42e4fc437570ec229cfa50ac8db2d22be288c939288087_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.string.at');
module.exports = require('../../modules/_core').String.at;
", "node_modules/core-js/library/fn/string/at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/at.js");
    }
}
