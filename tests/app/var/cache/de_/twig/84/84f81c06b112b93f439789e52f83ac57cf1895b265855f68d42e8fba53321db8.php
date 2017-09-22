<?php

/* node_modules/core-js/library/fn/array/virtual/sort.js */
class __TwigTemplate_96adb2c69982c62fcd00a49eff82b7bd8d4bee8db194a8717deacbb078956beb extends Twig_Template
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
        $__internal_e0b50824b918296b9eb139eb32b1af7e0b75eb8e3c0236cc68f9753df589276c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b50824b918296b9eb139eb32b1af7e0b75eb8e3c0236cc68f9753df589276c->enter($__internal_e0b50824b918296b9eb139eb32b1af7e0b75eb8e3c0236cc68f9753df589276c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/sort.js"));

        // line 1
        echo "require('../../../modules/es6.array.sort');
module.exports = require('../../../modules/_entry-virtual')('Array').sort;
";
        
        $__internal_e0b50824b918296b9eb139eb32b1af7e0b75eb8e3c0236cc68f9753df589276c->leave($__internal_e0b50824b918296b9eb139eb32b1af7e0b75eb8e3c0236cc68f9753df589276c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/sort.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.sort');
module.exports = require('../../../modules/_entry-virtual')('Array').sort;
", "node_modules/core-js/library/fn/array/virtual/sort.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/sort.js");
    }
}
