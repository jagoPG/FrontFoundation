<?php

/* node_modules/es6-set/index.js */
class __TwigTemplate_428e1feaed4917eeb85d8f7f541e13b0e8ba39c0733956754f693e5d16dbfbc6 extends Twig_Template
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
        $__internal_ac72e64a279ec109db004f0e673855d1686c271a40a7302e62a683a58e557661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac72e64a279ec109db004f0e673855d1686c271a40a7302e62a683a58e557661->enter($__internal_ac72e64a279ec109db004f0e673855d1686c271a40a7302e62a683a58e557661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/index.js"));

        // line 1
        echo "'use strict';

module.exports = require('./is-implemented')() ? Set : require('./polyfill');
";
        
        $__internal_ac72e64a279ec109db004f0e673855d1686c271a40a7302e62a683a58e557661->leave($__internal_ac72e64a279ec109db004f0e673855d1686c271a40a7302e62a683a58e557661_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = require('./is-implemented')() ? Set : require('./polyfill');
", "node_modules/es6-set/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/index.js");
    }
}
