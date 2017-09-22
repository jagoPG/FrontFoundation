<?php

/* node_modules/lodash/fp/stubString.js */
class __TwigTemplate_1deb706cdc92327fddcf9f3830da4e9793bd1c1245f9c071321dff1cbe5aa8d4 extends Twig_Template
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
        $__internal_22348ba6a95524090479d29a48c297ab99614a69a9694c8a39b8de8a67feff55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22348ba6a95524090479d29a48c297ab99614a69a9694c8a39b8de8a67feff55->enter($__internal_22348ba6a95524090479d29a48c297ab99614a69a9694c8a39b8de8a67feff55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/stubString.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('stubString', require('../stubString'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_22348ba6a95524090479d29a48c297ab99614a69a9694c8a39b8de8a67feff55->leave($__internal_22348ba6a95524090479d29a48c297ab99614a69a9694c8a39b8de8a67feff55_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/stubString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('stubString', require('../stubString'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/stubString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/stubString.js");
    }
}
