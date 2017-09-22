<?php

/* node_modules/lodash/fp/invertBy.js */
class __TwigTemplate_b004581075010205339f5cca1a47271a4a09605ea53118a29ca56334e4eb1e96 extends Twig_Template
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
        $__internal_45810228ce673f1c424965442c60cc1f89673ffbbe9277567bf8a932d3b66012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45810228ce673f1c424965442c60cc1f89673ffbbe9277567bf8a932d3b66012->enter($__internal_45810228ce673f1c424965442c60cc1f89673ffbbe9277567bf8a932d3b66012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/invertBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('invertBy', require('../invertBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_45810228ce673f1c424965442c60cc1f89673ffbbe9277567bf8a932d3b66012->leave($__internal_45810228ce673f1c424965442c60cc1f89673ffbbe9277567bf8a932d3b66012_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/invertBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('invertBy', require('../invertBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/invertBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/invertBy.js");
    }
}
