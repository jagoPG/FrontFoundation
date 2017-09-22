<?php

/* node_modules/core-js/library/modules/_redefine-all.js */
class __TwigTemplate_99151c3b0ae22449f7fc7a64a57e95b2fa45115b77fca5db096ab037f6d74779 extends Twig_Template
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
        $__internal_741b32fd6592e3cd1570c648748feb4c83c77a37850bcd573b003b3a2f10a78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741b32fd6592e3cd1570c648748feb4c83c77a37850bcd573b003b3a2f10a78d->enter($__internal_741b32fd6592e3cd1570c648748feb4c83c77a37850bcd573b003b3a2f10a78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_redefine-all.js"));

        // line 1
        echo "var hide = require('./_hide');
module.exports = function (target, src, safe) {
  for (var key in src) {
    if (safe && target[key]) target[key] = src[key];
    else hide(target, key, src[key]);
  } return target;
};
";
        
        $__internal_741b32fd6592e3cd1570c648748feb4c83c77a37850bcd573b003b3a2f10a78d->leave($__internal_741b32fd6592e3cd1570c648748feb4c83c77a37850bcd573b003b3a2f10a78d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_redefine-all.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var hide = require('./_hide');
module.exports = function (target, src, safe) {
  for (var key in src) {
    if (safe && target[key]) target[key] = src[key];
    else hide(target, key, src[key]);
  } return target;
};
", "node_modules/core-js/library/modules/_redefine-all.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_redefine-all.js");
    }
}
