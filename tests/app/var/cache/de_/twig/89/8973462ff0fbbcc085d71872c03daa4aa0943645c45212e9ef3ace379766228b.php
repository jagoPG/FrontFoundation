<?php

/* node_modules/core-js/core/object.js */
class __TwigTemplate_cf21678e5ab58f4985bbc83eb7dd9715a9322d8ed5d088f821dbe863635a349b extends Twig_Template
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
        $__internal_59880147f9f3f3b02c641f68cfb962905b00d15f8aba4387ca20dc6fee8b048a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59880147f9f3f3b02c641f68cfb962905b00d15f8aba4387ca20dc6fee8b048a->enter($__internal_59880147f9f3f3b02c641f68cfb962905b00d15f8aba4387ca20dc6fee8b048a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/core/object.js"));

        // line 1
        echo "require('../modules/core.object.is-object');
require('../modules/core.object.classof');
require('../modules/core.object.define');
require('../modules/core.object.make');
module.exports = require('../modules/_core').Object;
";
        
        $__internal_59880147f9f3f3b02c641f68cfb962905b00d15f8aba4387ca20dc6fee8b048a->leave($__internal_59880147f9f3f3b02c641f68cfb962905b00d15f8aba4387ca20dc6fee8b048a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/core/object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.object.is-object');
require('../modules/core.object.classof');
require('../modules/core.object.define');
require('../modules/core.object.make');
module.exports = require('../modules/_core').Object;
", "node_modules/core-js/core/object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/core/object.js");
    }
}
