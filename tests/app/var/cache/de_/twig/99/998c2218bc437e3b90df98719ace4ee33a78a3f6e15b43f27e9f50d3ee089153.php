<?php

/* node_modules/lodash/fp/hasIn.js */
class __TwigTemplate_c269a0c53a37572366d0607c1191d5348f17d1f0916873c61f1710f62f42f291 extends Twig_Template
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
        $__internal_de1c666f3b529d1e4e3bf03162e9d8a36ab8b2e00f6275ee8efb652a79d436d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1c666f3b529d1e4e3bf03162e9d8a36ab8b2e00f6275ee8efb652a79d436d4->enter($__internal_de1c666f3b529d1e4e3bf03162e9d8a36ab8b2e00f6275ee8efb652a79d436d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/hasIn.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('hasIn', require('../hasIn'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_de1c666f3b529d1e4e3bf03162e9d8a36ab8b2e00f6275ee8efb652a79d436d4->leave($__internal_de1c666f3b529d1e4e3bf03162e9d8a36ab8b2e00f6275ee8efb652a79d436d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/hasIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('hasIn', require('../hasIn'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/hasIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/hasIn.js");
    }
}
