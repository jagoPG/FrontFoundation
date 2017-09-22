<?php

/* node_modules/lodash/fp/methodOf.js */
class __TwigTemplate_0f72f69e8916e72e032b6d566f16988a279bd255f983d9158707aa91fed66469 extends Twig_Template
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
        $__internal_a1f5c4b41dd3f7909bcd9fa65d60b88bf6bec1cb8168a2c89714e5412a07ee67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f5c4b41dd3f7909bcd9fa65d60b88bf6bec1cb8168a2c89714e5412a07ee67->enter($__internal_a1f5c4b41dd3f7909bcd9fa65d60b88bf6bec1cb8168a2c89714e5412a07ee67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/methodOf.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('methodOf', require('../methodOf'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_a1f5c4b41dd3f7909bcd9fa65d60b88bf6bec1cb8168a2c89714e5412a07ee67->leave($__internal_a1f5c4b41dd3f7909bcd9fa65d60b88bf6bec1cb8168a2c89714e5412a07ee67_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/methodOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('methodOf', require('../methodOf'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/methodOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/methodOf.js");
    }
}
