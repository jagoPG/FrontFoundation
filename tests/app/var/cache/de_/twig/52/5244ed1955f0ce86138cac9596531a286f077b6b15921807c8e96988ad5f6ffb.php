<?php

/* node_modules/core-js/fn/promise.js */
class __TwigTemplate_a387f255771dfd920cab9e08770c117e3c6cdde06ad4f80c0121be689cb9200f extends Twig_Template
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
        $__internal_f908f04006705743ed19993e9be1279ae7f40845e81ec5b2343aa3f056afd71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f908f04006705743ed19993e9be1279ae7f40845e81ec5b2343aa3f056afd71b->enter($__internal_f908f04006705743ed19993e9be1279ae7f40845e81ec5b2343aa3f056afd71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/promise.js"));

        // line 1
        echo "require('../modules/es6.object.to-string');
require('../modules/es6.string.iterator');
require('../modules/web.dom.iterable');
require('../modules/es6.promise');
require('../modules/es7.promise.finally');
require('../modules/es7.promise.try');
module.exports = require('../modules/_core').Promise;
";
        
        $__internal_f908f04006705743ed19993e9be1279ae7f40845e81ec5b2343aa3f056afd71b->leave($__internal_f908f04006705743ed19993e9be1279ae7f40845e81ec5b2343aa3f056afd71b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/promise.js";
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
require('../modules/es7.promise.finally');
require('../modules/es7.promise.try');
module.exports = require('../modules/_core').Promise;
", "node_modules/core-js/fn/promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/promise.js");
    }
}
