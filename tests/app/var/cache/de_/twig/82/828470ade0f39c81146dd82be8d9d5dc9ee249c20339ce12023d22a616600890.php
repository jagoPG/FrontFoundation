<?php

/* node_modules/core-js/library/fn/array/virtual/entries.js */
class __TwigTemplate_0483e3d1fdbbe9d1aa1f4f18f98ab6f7ef0b560fe2e2761cdd9d76eb39a8c2a4 extends Twig_Template
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
        $__internal_d7bd0283775fd640dc586659509bfe9d233bce00b208d004540fa02bcc249e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bd0283775fd640dc586659509bfe9d233bce00b208d004540fa02bcc249e07->enter($__internal_d7bd0283775fd640dc586659509bfe9d233bce00b208d004540fa02bcc249e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/virtual/entries.js"));

        // line 1
        echo "require('../../../modules/es6.array.iterator');
module.exports = require('../../../modules/_entry-virtual')('Array').entries;
";
        
        $__internal_d7bd0283775fd640dc586659509bfe9d233bce00b208d004540fa02bcc249e07->leave($__internal_d7bd0283775fd640dc586659509bfe9d233bce00b208d004540fa02bcc249e07_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/virtual/entries.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.array.iterator');
module.exports = require('../../../modules/_entry-virtual')('Array').entries;
", "node_modules/core-js/library/fn/array/virtual/entries.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/virtual/entries.js");
    }
}
