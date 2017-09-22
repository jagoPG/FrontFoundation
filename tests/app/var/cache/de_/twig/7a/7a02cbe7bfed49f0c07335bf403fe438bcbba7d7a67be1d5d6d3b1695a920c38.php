<?php

/* node_modules/core-js/modules/library/_redefine-all.js */
class __TwigTemplate_579f2cc1b096e8cae8a1ceb0c8c2b6cefe839c1cf21528975d7d1b73070993af extends Twig_Template
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
        $__internal_d89163803f31d2837143a26d85452c1e82b3f6de68610cb39bf7146d83e0d79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89163803f31d2837143a26d85452c1e82b3f6de68610cb39bf7146d83e0d79e->enter($__internal_d89163803f31d2837143a26d85452c1e82b3f6de68610cb39bf7146d83e0d79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/library/_redefine-all.js"));

        // line 1
        echo "var hide = require('./_hide');
module.exports = function (target, src, safe) {
  for (var key in src) {
    if (safe && target[key]) target[key] = src[key];
    else hide(target, key, src[key]);
  } return target;
};
";
        
        $__internal_d89163803f31d2837143a26d85452c1e82b3f6de68610cb39bf7146d83e0d79e->leave($__internal_d89163803f31d2837143a26d85452c1e82b3f6de68610cb39bf7146d83e0d79e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/library/_redefine-all.js";
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
", "node_modules/core-js/modules/library/_redefine-all.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/library/_redefine-all.js");
    }
}
