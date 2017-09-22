<?php

/* node_modules/es5-ext/array/#/filter/is-implemented.js */
class __TwigTemplate_118cf6936212f802dfcf2e4bfba0787440ab77a35537398302a4b610982688e8 extends Twig_Template
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
        $__internal_4f8616f3123453e2c6a8a91bf232ec9ce48848a6a43a244aade7dd8db4833080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8616f3123453e2c6a8a91bf232ec9ce48848a6a43a244aade7dd8db4833080->enter($__internal_4f8616f3123453e2c6a8a91bf232ec9ce48848a6a43a244aade7dd8db4833080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/#/filter/is-implemented.js"));

        // line 1
        echo "\"use strict\";

var SubArray = require(\"../../_sub-array-dummy-safe\")

  , pass = function () {
 return true;
};

module.exports = function () {
\treturn (new SubArray()).filter(pass) instanceof SubArray;
};
";
        
        $__internal_4f8616f3123453e2c6a8a91bf232ec9ce48848a6a43a244aade7dd8db4833080->leave($__internal_4f8616f3123453e2c6a8a91bf232ec9ce48848a6a43a244aade7dd8db4833080_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/#/filter/is-implemented.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var SubArray = require(\"../../_sub-array-dummy-safe\")

  , pass = function () {
 return true;
};

module.exports = function () {
\treturn (new SubArray()).filter(pass) instanceof SubArray;
};
", "node_modules/es5-ext/array/#/filter/is-implemented.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/#/filter/is-implemented.js");
    }
}
