<?php

/* node_modules/lodash/fp/intersection.js */
class __TwigTemplate_66477286e35fe8874a4621e3186554ab21984e78f74413f208cf5f1da17e3753 extends Twig_Template
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
        $__internal_f6d4501a5990dff79ea7ed7da73fbc74a5d7d859cba1e1bff3018c6a03230149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d4501a5990dff79ea7ed7da73fbc74a5d7d859cba1e1bff3018c6a03230149->enter($__internal_f6d4501a5990dff79ea7ed7da73fbc74a5d7d859cba1e1bff3018c6a03230149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/intersection.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('intersection', require('../intersection'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_f6d4501a5990dff79ea7ed7da73fbc74a5d7d859cba1e1bff3018c6a03230149->leave($__internal_f6d4501a5990dff79ea7ed7da73fbc74a5d7d859cba1e1bff3018c6a03230149_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/intersection.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('intersection', require('../intersection'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/intersection.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/intersection.js");
    }
}
