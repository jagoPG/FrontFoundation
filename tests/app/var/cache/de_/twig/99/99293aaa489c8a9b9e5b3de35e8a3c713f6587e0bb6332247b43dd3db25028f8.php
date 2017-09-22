<?php

/* node_modules/es6-symbol/validate-symbol.js */
class __TwigTemplate_ace8369eade310740a8ee4ca5562bba6cef22d8453504c62a1ed65bf620c9245 extends Twig_Template
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
        $__internal_d01d1f3c7ca90b361f11c9fbb427990109820eb856ca270f30d425d3a34137de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01d1f3c7ca90b361f11c9fbb427990109820eb856ca270f30d425d3a34137de->enter($__internal_d01d1f3c7ca90b361f11c9fbb427990109820eb856ca270f30d425d3a34137de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/validate-symbol.js"));

        // line 1
        echo "'use strict';

var isSymbol = require('./is-symbol');

module.exports = function (value) {
\tif (!isSymbol(value)) throw new TypeError(value + \" is not a symbol\");
\treturn value;
};
";
        
        $__internal_d01d1f3c7ca90b361f11c9fbb427990109820eb856ca270f30d425d3a34137de->leave($__internal_d01d1f3c7ca90b361f11c9fbb427990109820eb856ca270f30d425d3a34137de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/validate-symbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var isSymbol = require('./is-symbol');

module.exports = function (value) {
\tif (!isSymbol(value)) throw new TypeError(value + \" is not a symbol\");
\treturn value;
};
", "node_modules/es6-symbol/validate-symbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/validate-symbol.js");
    }
}
