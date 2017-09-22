<?php

/* node_modules/es6-weak-map/valid-weak-map.js */
class __TwigTemplate_adc40a89a1fdd90303c0f9eb8b6e01e7a5c6c9e80b7a7ea69cec342aa0adf24a extends Twig_Template
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
        $__internal_53ce250b3f1b5db763d3c6776b258afe39708223b59983aec0f3780013740f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ce250b3f1b5db763d3c6776b258afe39708223b59983aec0f3780013740f2b->enter($__internal_53ce250b3f1b5db763d3c6776b258afe39708223b59983aec0f3780013740f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/valid-weak-map.js"));

        // line 1
        echo "'use strict';

var isWeakMap = require('./is-weak-map');

module.exports = function (x) {
\tif (!isWeakMap(x)) throw new TypeError(x + \" is not a WeakMap\");
\treturn x;
};
";
        
        $__internal_53ce250b3f1b5db763d3c6776b258afe39708223b59983aec0f3780013740f2b->leave($__internal_53ce250b3f1b5db763d3c6776b258afe39708223b59983aec0f3780013740f2b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/valid-weak-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var isWeakMap = require('./is-weak-map');

module.exports = function (x) {
\tif (!isWeakMap(x)) throw new TypeError(x + \" is not a WeakMap\");
\treturn x;
};
", "node_modules/es6-weak-map/valid-weak-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/valid-weak-map.js");
    }
}
