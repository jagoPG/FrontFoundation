<?php

/* node_modules/es6-map/valid-map.js */
class __TwigTemplate_e6dc1a1b936154a21300b9893237f94537776c797f64577a35e4f3a1472bee21 extends Twig_Template
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
        $__internal_6700f6eaa99571188a294843cbf75175bc62e6f067cadf3a95ead0b8607e694f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6700f6eaa99571188a294843cbf75175bc62e6f067cadf3a95ead0b8607e694f->enter($__internal_6700f6eaa99571188a294843cbf75175bc62e6f067cadf3a95ead0b8607e694f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/valid-map.js"));

        // line 1
        echo "'use strict';

var isMap = require('./is-map');

module.exports = function (x) {
\tif (!isMap(x)) throw new TypeError(x + \" is not a Map\");
\treturn x;
};
";
        
        $__internal_6700f6eaa99571188a294843cbf75175bc62e6f067cadf3a95ead0b8607e694f->leave($__internal_6700f6eaa99571188a294843cbf75175bc62e6f067cadf3a95ead0b8607e694f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/valid-map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var isMap = require('./is-map');

module.exports = function (x) {
\tif (!isMap(x)) throw new TypeError(x + \" is not a Map\");
\treturn x;
};
", "node_modules/es6-map/valid-map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/valid-map.js");
    }
}
