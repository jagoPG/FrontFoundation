<?php

/* node_modules/core-js/fn/weak-set.js */
class __TwigTemplate_fb3a982d2e212f12610caa37f0dd790b56c3cb5bef85752169ab46f0b4bf1e0d extends Twig_Template
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
        $__internal_ed176bfd7295fffac2a336993d771fa8ba71b07b79fb03244c9658727d8a2b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed176bfd7295fffac2a336993d771fa8ba71b07b79fb03244c9658727d8a2b7d->enter($__internal_ed176bfd7295fffac2a336993d771fa8ba71b07b79fb03244c9658727d8a2b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/weak-set.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/web.dom.iterable');
require('../modules/es6.weak-set');
require('../modules/es7.weak-set.of');
require('../modules/es7.weak-set.from');
module.exports = require('../modules/_core').WeakSet;
";
        
        $__internal_ed176bfd7295fffac2a336993d771fa8ba71b07b79fb03244c9658727d8a2b7d->leave($__internal_ed176bfd7295fffac2a336993d771fa8ba71b07b79fb03244c9658727d8a2b7d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/weak-set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/web.dom.iterable');
require('../modules/es6.weak-set');
require('../modules/es7.weak-set.of');
require('../modules/es7.weak-set.from');
module.exports = require('../modules/_core').WeakSet;
", "node_modules/core-js/fn/weak-set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/weak-set.js");
    }
}
