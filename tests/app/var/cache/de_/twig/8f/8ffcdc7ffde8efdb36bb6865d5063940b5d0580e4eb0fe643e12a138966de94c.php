<?php

/* node_modules/core-js/library/fn/regexp/replace.js */
class __TwigTemplate_7101c0fe932e31e2ef09c30ff411814a97a57a8b9ed529dc833aa9b5e318a96a extends Twig_Template
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
        $__internal_a35d142953a7d5432ecafb6ee016826aa8d4245d3b2ae2fe345688d89074e52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35d142953a7d5432ecafb6ee016826aa8d4245d3b2ae2fe345688d89074e52b->enter($__internal_a35d142953a7d5432ecafb6ee016826aa8d4245d3b2ae2fe345688d89074e52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/regexp/replace.js"));

        // line 1
        echo "require('../../modules/es6.regexp.replace');
var REPLACE = require('../../modules/_wks')('replace');
module.exports = function (it, str, replacer) {
  return RegExp.prototype[REPLACE].call(it, str, replacer);
};
";
        
        $__internal_a35d142953a7d5432ecafb6ee016826aa8d4245d3b2ae2fe345688d89074e52b->leave($__internal_a35d142953a7d5432ecafb6ee016826aa8d4245d3b2ae2fe345688d89074e52b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/regexp/replace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.replace');
var REPLACE = require('../../modules/_wks')('replace');
module.exports = function (it, str, replacer) {
  return RegExp.prototype[REPLACE].call(it, str, replacer);
};
", "node_modules/core-js/library/fn/regexp/replace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/regexp/replace.js");
    }
}
