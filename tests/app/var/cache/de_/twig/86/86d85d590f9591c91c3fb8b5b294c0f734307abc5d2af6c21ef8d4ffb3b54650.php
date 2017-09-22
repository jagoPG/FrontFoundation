<?php

/* node_modules/is-function/index.js */
class __TwigTemplate_3277dd5c042a91ecc9b27776ab340055ac2f50308143c7f3402971ca2f07fd28 extends Twig_Template
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
        $__internal_ad33f6ef60cb102776055789e4ef12495dedc6792a51db4f165c97046e4c013f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad33f6ef60cb102776055789e4ef12495dedc6792a51db4f165c97046e4c013f->enter($__internal_ad33f6ef60cb102776055789e4ef12495dedc6792a51db4f165c97046e4c013f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-function/index.js"));

        // line 1
        echo "module.exports = isFunction

var toString = Object.prototype.toString

function isFunction (fn) {
  var string = toString.call(fn)
  return string === '[object Function]' ||
    (typeof fn === 'function' && string !== '[object RegExp]') ||
    (typeof window !== 'undefined' &&
     // IE8 and below
     (fn === window.setTimeout ||
      fn === window.alert ||
      fn === window.confirm ||
      fn === window.prompt))
};
";
        
        $__internal_ad33f6ef60cb102776055789e4ef12495dedc6792a51db4f165c97046e4c013f->leave($__internal_ad33f6ef60cb102776055789e4ef12495dedc6792a51db4f165c97046e4c013f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-function/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = isFunction

var toString = Object.prototype.toString

function isFunction (fn) {
  var string = toString.call(fn)
  return string === '[object Function]' ||
    (typeof fn === 'function' && string !== '[object RegExp]') ||
    (typeof window !== 'undefined' &&
     // IE8 and below
     (fn === window.setTimeout ||
      fn === window.alert ||
      fn === window.confirm ||
      fn === window.prompt))
};
", "node_modules/is-function/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-function/index.js");
    }
}
