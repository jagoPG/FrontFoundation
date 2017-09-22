<?php

/* node_modules/lodash/fp/minBy.js */
class __TwigTemplate_2dfa532a3a915072fc90e5c372681dce8170362660ff400e4ad1d27ef35adb9a extends Twig_Template
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
        $__internal_12eaa892fbffadb4b1860af1690b4b92be4645e98a52aae83adff2afc85c28b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12eaa892fbffadb4b1860af1690b4b92be4645e98a52aae83adff2afc85c28b7->enter($__internal_12eaa892fbffadb4b1860af1690b4b92be4645e98a52aae83adff2afc85c28b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/minBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('minBy', require('../minBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_12eaa892fbffadb4b1860af1690b4b92be4645e98a52aae83adff2afc85c28b7->leave($__internal_12eaa892fbffadb4b1860af1690b4b92be4645e98a52aae83adff2afc85c28b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/minBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('minBy', require('../minBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/minBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/minBy.js");
    }
}
