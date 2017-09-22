<?php

/* node_modules/lodash/fp/toJSON.js */
class __TwigTemplate_75a7248614e572bd80347093e59c6aa406cd01096fe9e1f4ac46edbaeec0f6e7 extends Twig_Template
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
        $__internal_f3c0a4b9d723d82d185388db467891108fb8f3db9d442d976ff15d95ec15b856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c0a4b9d723d82d185388db467891108fb8f3db9d442d976ff15d95ec15b856->enter($__internal_f3c0a4b9d723d82d185388db467891108fb8f3db9d442d976ff15d95ec15b856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/toJSON.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('toJSON', require('../toJSON'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_f3c0a4b9d723d82d185388db467891108fb8f3db9d442d976ff15d95ec15b856->leave($__internal_f3c0a4b9d723d82d185388db467891108fb8f3db9d442d976ff15d95ec15b856_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/toJSON.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('toJSON', require('../toJSON'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/toJSON.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/toJSON.js");
    }
}
