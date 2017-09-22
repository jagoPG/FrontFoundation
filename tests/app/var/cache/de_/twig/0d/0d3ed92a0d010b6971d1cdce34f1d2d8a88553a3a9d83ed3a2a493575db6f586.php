<?php

/* node_modules/lodash/fp/invert.js */
class __TwigTemplate_06ca7ad7975a82d70c0d0352ab98ef0aaf54770dbb5e4c16669083a50c43ffc5 extends Twig_Template
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
        $__internal_251c7795f028709a177b7e9e20faa5acf83d452712b75f8004325a8eb84df029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251c7795f028709a177b7e9e20faa5acf83d452712b75f8004325a8eb84df029->enter($__internal_251c7795f028709a177b7e9e20faa5acf83d452712b75f8004325a8eb84df029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/invert.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('invert', require('../invert'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_251c7795f028709a177b7e9e20faa5acf83d452712b75f8004325a8eb84df029->leave($__internal_251c7795f028709a177b7e9e20faa5acf83d452712b75f8004325a8eb84df029_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/invert.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('invert', require('../invert'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/invert.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/invert.js");
    }
}
