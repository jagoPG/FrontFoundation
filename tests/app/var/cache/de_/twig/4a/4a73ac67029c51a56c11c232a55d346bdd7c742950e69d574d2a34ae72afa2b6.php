<?php

/* node_modules/es5-ext/array/#/map/is-implemented.js */
class __TwigTemplate_de0b6d00a7b276a56dfaed4b6922a3fa025e7daf49db950c8e983edf67f6e65a extends Twig_Template
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
        $__internal_fc702532bf62063270a656e33dffd91c430cae677464eb0409b2cb9c2fbee6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc702532bf62063270a656e33dffd91c430cae677464eb0409b2cb9c2fbee6d7->enter($__internal_fc702532bf62063270a656e33dffd91c430cae677464eb0409b2cb9c2fbee6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/map/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var identity = require(\"../../../function/identity\")
  , SubArray = require(\"../../_sub-array-dummy-safe\");

module.exports = function () {
\treturn (new SubArray()).map(identity) instanceof SubArray;
};
";
        
        $__internal_fc702532bf62063270a656e33dffd91c430cae677464eb0409b2cb9c2fbee6d7->leave($__internal_fc702532bf62063270a656e33dffd91c430cae677464eb0409b2cb9c2fbee6d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/map/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var identity = require(\"../../../function/identity\")
  , SubArray = require(\"../../_sub-array-dummy-safe\");

module.exports = function () {
\treturn (new SubArray()).map(identity) instanceof SubArray;
};
", "node_modules/es5-ext/array/#/map/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/map/is-implemented.js");
    }
}
