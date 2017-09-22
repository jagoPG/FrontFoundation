<?php

/* node_modules/lodash/fp/clamp.js */
class __TwigTemplate_c19145f86f3af4ee964cfe473a76ec28efdfde8d06147453bf546eb6e15ce92f extends Twig_Template
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
        $__internal_776a6e9560001285aadaf0d548861d85c676989c81acb6ee5e9a2d7ef23c7ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_776a6e9560001285aadaf0d548861d85c676989c81acb6ee5e9a2d7ef23c7ccc->enter($__internal_776a6e9560001285aadaf0d548861d85c676989c81acb6ee5e9a2d7ef23c7ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/clamp.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('clamp', require('../clamp'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_776a6e9560001285aadaf0d548861d85c676989c81acb6ee5e9a2d7ef23c7ccc->leave($__internal_776a6e9560001285aadaf0d548861d85c676989c81acb6ee5e9a2d7ef23c7ccc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/clamp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('clamp', require('../clamp'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/clamp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/clamp.js");
    }
}
