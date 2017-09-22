<?php

/* node_modules/core-js/library/es6/set.js */
class __TwigTemplate_225d0c923569e1fb5828d41038dd60033b3d7d630fed2badaee3eb8a6b844426 extends Twig_Template
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
        $__internal_37713577e4b087e8d30f07fb046d2200bc3a2dd4788894a5fdbe3a43e2136de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37713577e4b087e8d30f07fb046d2200bc3a2dd4788894a5fdbe3a43e2136de4->enter($__internal_37713577e4b087e8d30f07fb046d2200bc3a2dd4788894a5fdbe3a43e2136de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es6/set.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.set');
module.exports = require('../modules/_core').Set;
";
        
        $__internal_37713577e4b087e8d30f07fb046d2200bc3a2dd4788894a5fdbe3a43e2136de4->leave($__internal_37713577e4b087e8d30f07fb046d2200bc3a2dd4788894a5fdbe3a43e2136de4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es6/set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.set');
module.exports = require('../modules/_core').Set;
", "node_modules/core-js/library/es6/set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es6/set.js");
    }
}
