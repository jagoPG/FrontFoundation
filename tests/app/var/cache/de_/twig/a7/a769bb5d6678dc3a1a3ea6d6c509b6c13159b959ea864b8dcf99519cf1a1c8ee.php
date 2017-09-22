<?php

/* node_modules/core-js/library/fn/object/is.js */
class __TwigTemplate_62b1da12553180d385fd45a51b443122a3c7fcb8f964987c68da4e43a3ffb9fd extends Twig_Template
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
        $__internal_eb59ff462c3029a582f1a3686efccbcc92c274b8a5559544aa24ac2b743d548b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb59ff462c3029a582f1a3686efccbcc92c274b8a5559544aa24ac2b743d548b->enter($__internal_eb59ff462c3029a582f1a3686efccbcc92c274b8a5559544aa24ac2b743d548b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/is.js"));

        // line 1
        echo "require('../../modules/es6.object.is');
module.exports = require('../../modules/_core').Object.is;
";
        
        $__internal_eb59ff462c3029a582f1a3686efccbcc92c274b8a5559544aa24ac2b743d548b->leave($__internal_eb59ff462c3029a582f1a3686efccbcc92c274b8a5559544aa24ac2b743d548b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/is.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.is');
module.exports = require('../../modules/_core').Object.is;
", "node_modules/core-js/library/fn/object/is.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/is.js");
    }
}
