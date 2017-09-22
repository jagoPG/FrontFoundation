<?php

/* node_modules/core-js/fn/regexp/to-string.js */
class __TwigTemplate_80d3e0451c0f6084800b0e27906b3e69f813279cde5fad8f008402b023670897 extends Twig_Template
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
        $__internal_c7ef68b912cf415ff4464880ffd6cb0521b5b1e257de7c5f60313f7921e86362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ef68b912cf415ff4464880ffd6cb0521b5b1e257de7c5f60313f7921e86362->enter($__internal_c7ef68b912cf415ff4464880ffd6cb0521b5b1e257de7c5f60313f7921e86362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/regexp/to-string.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.regexp.to-string');
module.exports = function toString(it) {
  return RegExp.prototype.toString.call(it);
};
";
        
        $__internal_c7ef68b912cf415ff4464880ffd6cb0521b5b1e257de7c5f60313f7921e86362->leave($__internal_c7ef68b912cf415ff4464880ffd6cb0521b5b1e257de7c5f60313f7921e86362_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/regexp/to-string.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.regexp.to-string');
module.exports = function toString(it) {
  return RegExp.prototype.toString.call(it);
};
", "node_modules/core-js/fn/regexp/to-string.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/regexp/to-string.js");
    }
}
