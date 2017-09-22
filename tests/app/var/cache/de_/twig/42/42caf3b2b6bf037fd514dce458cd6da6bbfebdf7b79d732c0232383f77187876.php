<?php

/* node_modules/core-js/fn/string/virtual/small.js */
class __TwigTemplate_36692192b1a555e16f73aeb6a2e84febaef17c4210b81956f07bc752ef95bffc extends Twig_Template
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
        $__internal_3bafd2af711d9acf6ffa8d42c01e8fdadc9e8b19a81e5209050cee9c68e26a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bafd2af711d9acf6ffa8d42c01e8fdadc9e8b19a81e5209050cee9c68e26a1d->enter($__internal_3bafd2af711d9acf6ffa8d42c01e8fdadc9e8b19a81e5209050cee9c68e26a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/small.js"));

        // line 1
        echo "require('../../../modules/es6.string.small');
module.exports = require('../../../modules/_entry-virtual')('String').small;
";
        
        $__internal_3bafd2af711d9acf6ffa8d42c01e8fdadc9e8b19a81e5209050cee9c68e26a1d->leave($__internal_3bafd2af711d9acf6ffa8d42c01e8fdadc9e8b19a81e5209050cee9c68e26a1d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/small.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.small');
module.exports = require('../../../modules/_entry-virtual')('String').small;
", "node_modules/core-js/fn/string/virtual/small.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/small.js");
    }
}
