<?php

/* node_modules/lodash/fp/isTypedArray.js */
class __TwigTemplate_0befa088be48e018fb61c7c5bb2ce001aaec73a9a1d944a4a0ea4a0cecdb8e9b extends Twig_Template
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
        $__internal_02f93d89af4eb511837fe54037b3fee3065aee711add285c42a690e2bd85ad33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f93d89af4eb511837fe54037b3fee3065aee711add285c42a690e2bd85ad33->enter($__internal_02f93d89af4eb511837fe54037b3fee3065aee711add285c42a690e2bd85ad33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/isTypedArray.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('isTypedArray', require('../isTypedArray'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_02f93d89af4eb511837fe54037b3fee3065aee711add285c42a690e2bd85ad33->leave($__internal_02f93d89af4eb511837fe54037b3fee3065aee711add285c42a690e2bd85ad33_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/isTypedArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('isTypedArray', require('../isTypedArray'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/isTypedArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/isTypedArray.js");
    }
}
