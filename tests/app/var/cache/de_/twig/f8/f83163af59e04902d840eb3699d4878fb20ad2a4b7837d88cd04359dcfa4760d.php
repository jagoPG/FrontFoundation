<?php

/* node_modules/lodash/fp/collection.js */
class __TwigTemplate_5e06edac47d68d566719b06528556ea225889f1eed7649166b417cd12db2b2f0 extends Twig_Template
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
        $__internal_c7110216198769e45e93f42e777061bf929b020f04bfc5ca2096ed11b024041a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7110216198769e45e93f42e777061bf929b020f04bfc5ca2096ed11b024041a->enter($__internal_c7110216198769e45e93f42e777061bf929b020f04bfc5ca2096ed11b024041a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/collection.js"));

        // line 1
        echo "var convert = require('./convert');
module.exports = convert(require('../collection'));
";
        
        $__internal_c7110216198769e45e93f42e777061bf929b020f04bfc5ca2096ed11b024041a->leave($__internal_c7110216198769e45e93f42e777061bf929b020f04bfc5ca2096ed11b024041a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/collection.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert');
module.exports = convert(require('../collection'));
", "node_modules/lodash/fp/collection.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/collection.js");
    }
}
