<?php

/* node_modules/lodash/fp/assign.js */
class __TwigTemplate_e314c91b013fe94c37d0f3319402d7f8a3f439b7433f1d8826865409918259cb extends Twig_Template
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
        $__internal_3be418fcc24117ce8d6107e04223fe57dcb793074dcf070e0665c46ecb9033cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be418fcc24117ce8d6107e04223fe57dcb793074dcf070e0665c46ecb9033cb->enter($__internal_3be418fcc24117ce8d6107e04223fe57dcb793074dcf070e0665c46ecb9033cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/assign.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('assign', require('../assign'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_3be418fcc24117ce8d6107e04223fe57dcb793074dcf070e0665c46ecb9033cb->leave($__internal_3be418fcc24117ce8d6107e04223fe57dcb793074dcf070e0665c46ecb9033cb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/assign.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('assign', require('../assign'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/assign.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/assign.js");
    }
}
