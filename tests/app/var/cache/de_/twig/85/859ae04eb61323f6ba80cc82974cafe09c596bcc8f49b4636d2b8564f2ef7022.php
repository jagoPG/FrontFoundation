<?php

/* node_modules/es6-iterator/valid-iterable.js */
class __TwigTemplate_1b6d79dad201928a8479cc718d42c1a559ebe5208376feae3905ad4c7228e978 extends Twig_Template
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
        $__internal_9684f14d8091d028acdb1a7fe1693489e83b2af1c43c67e7a2b783ff419999ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9684f14d8091d028acdb1a7fe1693489e83b2af1c43c67e7a2b783ff419999ce->enter($__internal_9684f14d8091d028acdb1a7fe1693489e83b2af1c43c67e7a2b783ff419999ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-iterator/valid-iterable.js"));

        // line 1
        echo "'use strict';

var isIterable = require('./is-iterable');

module.exports = function (value) {
\tif (!isIterable(value)) throw new TypeError(value + \" is not iterable\");
\treturn value;
};
";
        
        $__internal_9684f14d8091d028acdb1a7fe1693489e83b2af1c43c67e7a2b783ff419999ce->leave($__internal_9684f14d8091d028acdb1a7fe1693489e83b2af1c43c67e7a2b783ff419999ce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-iterator/valid-iterable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var isIterable = require('./is-iterable');

module.exports = function (value) {
\tif (!isIterable(value)) throw new TypeError(value + \" is not iterable\");
\treturn value;
};
", "node_modules/es6-iterator/valid-iterable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-iterator/valid-iterable.js");
    }
}
