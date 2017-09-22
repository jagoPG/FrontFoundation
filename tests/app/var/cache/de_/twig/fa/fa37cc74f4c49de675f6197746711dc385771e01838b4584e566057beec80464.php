<?php

/* node_modules/core-js/library/es7/observable.js */
class __TwigTemplate_735731436ff862a0a68d8dde30d77d8c797dfa5c86a30a38bf4f874b40b415fb extends Twig_Template
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
        $__internal_f37a5e6894d183b70b3150144c62b777d2d92ad6fecad573c3a562e15961d782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f37a5e6894d183b70b3150144c62b777d2d92ad6fecad573c3a562e15961d782->enter($__internal_f37a5e6894d183b70b3150144c62b777d2d92ad6fecad573c3a562e15961d782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/observable.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.promise');
require('../modules/es7.symbol.observable');
require('../modules/es7.observable');
module.exports = require('../modules/_core').Observable;
";
        
        $__internal_f37a5e6894d183b70b3150144c62b777d2d92ad6fecad573c3a562e15961d782->leave($__internal_f37a5e6894d183b70b3150144c62b777d2d92ad6fecad573c3a562e15961d782_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/observable.js";
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
require('../modules/es6.promise');
require('../modules/es7.symbol.observable');
require('../modules/es7.observable');
module.exports = require('../modules/_core').Observable;
", "node_modules/core-js/library/es7/observable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/observable.js");
    }
}
