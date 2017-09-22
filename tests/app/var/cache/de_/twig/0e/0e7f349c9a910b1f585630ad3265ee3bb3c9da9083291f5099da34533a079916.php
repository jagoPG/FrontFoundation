<?php

/* node_modules/lodash/fp/defaultsAll.js */
class __TwigTemplate_31a73978f66e791cf473183107681915cf7c625d22f6c0b7b20f555a4700c5d9 extends Twig_Template
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
        $__internal_5dbaed6bd199fa864e2f71cdde91b36badea853d410290463c329f9945fdc0c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbaed6bd199fa864e2f71cdde91b36badea853d410290463c329f9945fdc0c5->enter($__internal_5dbaed6bd199fa864e2f71cdde91b36badea853d410290463c329f9945fdc0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/defaultsAll.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('defaultsAll', require('../defaults'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_5dbaed6bd199fa864e2f71cdde91b36badea853d410290463c329f9945fdc0c5->leave($__internal_5dbaed6bd199fa864e2f71cdde91b36badea853d410290463c329f9945fdc0c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/defaultsAll.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('defaultsAll', require('../defaults'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/defaultsAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/defaultsAll.js");
    }
}
