<?php

/* node_modules/lodash/fp/sum.js */
class __TwigTemplate_5983c3be0e3f784165b11c14bc8bfe7b13d396377f6cba365f52d34ab1932723 extends Twig_Template
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
        $__internal_4189058705c2741069d0190a89deaa74f880293a9f32e8beeadbc3cbeb44cc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4189058705c2741069d0190a89deaa74f880293a9f32e8beeadbc3cbeb44cc98->enter($__internal_4189058705c2741069d0190a89deaa74f880293a9f32e8beeadbc3cbeb44cc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/sum.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('sum', require('../sum'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_4189058705c2741069d0190a89deaa74f880293a9f32e8beeadbc3cbeb44cc98->leave($__internal_4189058705c2741069d0190a89deaa74f880293a9f32e8beeadbc3cbeb44cc98_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/sum.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('sum', require('../sum'), require('./_falseOptions'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/sum.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/sum.js");
    }
}
