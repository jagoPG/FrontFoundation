<?php

/* node_modules/lodash/fp/omit.js */
class __TwigTemplate_c01521cecdc19137b9f1252739e7d8d940b8d3e219372fbbfbe33920a1a8f6be extends Twig_Template
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
        $__internal_74157badf41d0cca7e12ef30f3cb7dbf068333b7b5501e0ec697a416bbdfdb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74157badf41d0cca7e12ef30f3cb7dbf068333b7b5501e0ec697a416bbdfdb37->enter($__internal_74157badf41d0cca7e12ef30f3cb7dbf068333b7b5501e0ec697a416bbdfdb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/omit.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('omit', require('../omit'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_74157badf41d0cca7e12ef30f3cb7dbf068333b7b5501e0ec697a416bbdfdb37->leave($__internal_74157badf41d0cca7e12ef30f3cb7dbf068333b7b5501e0ec697a416bbdfdb37_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/omit.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('omit', require('../omit'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/omit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/omit.js");
    }
}
