<?php

/* node_modules/lodash/fp/debounce.js */
class __TwigTemplate_7fe49812f771dd74d7949be24c201513c2db399e1430e00101969df20e5d6c40 extends Twig_Template
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
        $__internal_92cd9bf9e7b32a6f3b9e503974ce4f39ee75c7d10f83edefd696827bca158ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cd9bf9e7b32a6f3b9e503974ce4f39ee75c7d10f83edefd696827bca158ae0->enter($__internal_92cd9bf9e7b32a6f3b9e503974ce4f39ee75c7d10f83edefd696827bca158ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/debounce.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('debounce', require('../debounce'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_92cd9bf9e7b32a6f3b9e503974ce4f39ee75c7d10f83edefd696827bca158ae0->leave($__internal_92cd9bf9e7b32a6f3b9e503974ce4f39ee75c7d10f83edefd696827bca158ae0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/debounce.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('debounce', require('../debounce'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/debounce.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/debounce.js");
    }
}
