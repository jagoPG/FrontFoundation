<?php

/* node_modules/builtin-status-codes/index.js */
class __TwigTemplate_a990d50fb09b6e1981d0c497976a7884c3075dbb38f124f51d633915ba805099 extends Twig_Template
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
        $__internal_8a2d005ca34f768d4ac98a390bf8380bf224f82fffe5da493da82e51abef56d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2d005ca34f768d4ac98a390bf8380bf224f82fffe5da493da82e51abef56d5->enter($__internal_8a2d005ca34f768d4ac98a390bf8380bf224f82fffe5da493da82e51abef56d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/builtin-status-codes/index.js"));

        // line 1
        echo "'use strict'

module.exports = require('http').STATUS_CODES
";
        
        $__internal_8a2d005ca34f768d4ac98a390bf8380bf224f82fffe5da493da82e51abef56d5->leave($__internal_8a2d005ca34f768d4ac98a390bf8380bf224f82fffe5da493da82e51abef56d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/builtin-status-codes/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

module.exports = require('http').STATUS_CODES
", "node_modules/builtin-status-codes/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/builtin-status-codes/index.js");
    }
}
