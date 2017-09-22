<?php

/* node_modules/core-js/library/fn/date/to-json.js */
class __TwigTemplate_75ab6bbc8792e40f7b52e4dad135f58a8adbe46e4b8b59ba10d109b77e1a082c extends Twig_Template
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
        $__internal_cb24c204106c9ecf980504289a8605be41a6ffcd5fb63d82292ce251281f38a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb24c204106c9ecf980504289a8605be41a6ffcd5fb63d82292ce251281f38a1->enter($__internal_cb24c204106c9ecf980504289a8605be41a6ffcd5fb63d82292ce251281f38a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/date/to-json.js"));

        // line 1
        echo "require('../../modules/es6.date.to-json');
module.exports = require('../../modules/_core').Date.toJSON;
";
        
        $__internal_cb24c204106c9ecf980504289a8605be41a6ffcd5fb63d82292ce251281f38a1->leave($__internal_cb24c204106c9ecf980504289a8605be41a6ffcd5fb63d82292ce251281f38a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/date/to-json.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.date.to-json');
module.exports = require('../../modules/_core').Date.toJSON;
", "node_modules/core-js/library/fn/date/to-json.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/date/to-json.js");
    }
}
