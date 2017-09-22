<?php

/* node_modules/core-js/es7/observable.js */
class __TwigTemplate_7a62d2663468bc9d603ff78de292bc1096f376e876e3fe40dd233ff9da10bf20 extends Twig_Template
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
        $__internal_7600684a0990f72c4b098e5c554de378a28ac4960cb3d6a76a65520c8e2ae1ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7600684a0990f72c4b098e5c554de378a28ac4960cb3d6a76a65520c8e2ae1ac->enter($__internal_7600684a0990f72c4b098e5c554de378a28ac4960cb3d6a76a65520c8e2ae1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/observable.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.promise');
require('../modules/es7.symbol.observable');
require('../modules/es7.observable');
module.exports = require('../modules/_core').Observable;
";
        
        $__internal_7600684a0990f72c4b098e5c554de378a28ac4960cb3d6a76a65520c8e2ae1ac->leave($__internal_7600684a0990f72c4b098e5c554de378a28ac4960cb3d6a76a65520c8e2ae1ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/observable.js";
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
", "node_modules/core-js/es7/observable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/observable.js");
    }
}
