<?php

/* node_modules/lodash/fp/getOr.js */
class __TwigTemplate_4832c002c5edb8693a053d4525f66df27ab7c2f4dc58e09bf750088eced8c3f4 extends Twig_Template
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
        $__internal_1011979d5396012086ea608406d0c4e78d704d5dc4586c3c028d64344843701c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1011979d5396012086ea608406d0c4e78d704d5dc4586c3c028d64344843701c->enter($__internal_1011979d5396012086ea608406d0c4e78d704d5dc4586c3c028d64344843701c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/getOr.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('getOr', require('../get'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_1011979d5396012086ea608406d0c4e78d704d5dc4586c3c028d64344843701c->leave($__internal_1011979d5396012086ea608406d0c4e78d704d5dc4586c3c028d64344843701c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/getOr.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('getOr', require('../get'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/getOr.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/getOr.js");
    }
}
