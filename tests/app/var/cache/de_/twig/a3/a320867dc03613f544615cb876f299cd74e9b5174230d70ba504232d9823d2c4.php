<?php

/* node_modules/public-encrypt/xor.js */
class __TwigTemplate_57bbf79effc5f909fbf4778adfd2458dc47cc3aee656e4ac44ad12ade8ac0219 extends Twig_Template
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
        $__internal_0efa47ea81ad1b144be4eaf85505735cf85349d20639c9a4d0c214f66ed46752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0efa47ea81ad1b144be4eaf85505735cf85349d20639c9a4d0c214f66ed46752->enter($__internal_0efa47ea81ad1b144be4eaf85505735cf85349d20639c9a4d0c214f66ed46752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/public-encrypt/xor.js"));

        // line 1
        echo "module.exports = function xor(a, b) {
  var len = a.length;
  var i = -1;
  while (++i < len) {
    a[i] ^= b[i];
  }
  return a
};";
        
        $__internal_0efa47ea81ad1b144be4eaf85505735cf85349d20639c9a4d0c214f66ed46752->leave($__internal_0efa47ea81ad1b144be4eaf85505735cf85349d20639c9a4d0c214f66ed46752_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/public-encrypt/xor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function xor(a, b) {
  var len = a.length;
  var i = -1;
  while (++i < len) {
    a[i] ^= b[i];
  }
  return a
};", "node_modules/public-encrypt/xor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/public-encrypt/xor.js");
    }
}
