<?php

/* node_modules/core-js/modules/es6.string.fontcolor.js */
class __TwigTemplate_52189b2882e21803f15e6c12f60783865c779164a011d3df96d6f67e34a5e541 extends Twig_Template
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
        $__internal_652366d712964e60dfb8d3649782d9d57b4f56f7011ac9b909e2aed5d55f596b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652366d712964e60dfb8d3649782d9d57b4f56f7011ac9b909e2aed5d55f596b->enter($__internal_652366d712964e60dfb8d3649782d9d57b4f56f7011ac9b909e2aed5d55f596b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.string.fontcolor.js"));

        // line 1
        echo "'use strict';
// B.2.3.7 String.prototype.fontcolor(color)
require('./_string-html')('fontcolor', function (createHTML) {
  return function fontcolor(color) {
    return createHTML(this, 'font', 'color', color);
  };
});
";
        
        $__internal_652366d712964e60dfb8d3649782d9d57b4f56f7011ac9b909e2aed5d55f596b->leave($__internal_652366d712964e60dfb8d3649782d9d57b4f56f7011ac9b909e2aed5d55f596b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.string.fontcolor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
// B.2.3.7 String.prototype.fontcolor(color)
require('./_string-html')('fontcolor', function (createHTML) {
  return function fontcolor(color) {
    return createHTML(this, 'font', 'color', color);
  };
});
", "node_modules/core-js/modules/es6.string.fontcolor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.string.fontcolor.js");
    }
}
