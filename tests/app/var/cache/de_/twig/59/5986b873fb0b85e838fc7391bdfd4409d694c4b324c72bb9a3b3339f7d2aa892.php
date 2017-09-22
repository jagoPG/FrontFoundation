<?php

/* node_modules/core-js/modules/_validate-collection.js */
class __TwigTemplate_b0dbce720c0eb4447c13d54403a516a159c82c3a0eb133dc95dac3076f5b3923 extends Twig_Template
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
        $__internal_88b6d911cf5b697ae3c31ab218bac2e8b8dbb544554d9f0c0c8696ad37a7e5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b6d911cf5b697ae3c31ab218bac2e8b8dbb544554d9f0c0c8696ad37a7e5b6->enter($__internal_88b6d911cf5b697ae3c31ab218bac2e8b8dbb544554d9f0c0c8696ad37a7e5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_validate-collection.js"));

        // line 1
        echo "var isObject = require('./_is-object');
module.exports = function (it, TYPE) {
  if (!isObject(it) || it._t !== TYPE) throw TypeError('Incompatible receiver, ' + TYPE + ' required!');
  return it;
};
";
        
        $__internal_88b6d911cf5b697ae3c31ab218bac2e8b8dbb544554d9f0c0c8696ad37a7e5b6->leave($__internal_88b6d911cf5b697ae3c31ab218bac2e8b8dbb544554d9f0c0c8696ad37a7e5b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_validate-collection.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./_is-object');
module.exports = function (it, TYPE) {
  if (!isObject(it) || it._t !== TYPE) throw TypeError('Incompatible receiver, ' + TYPE + ' required!');
  return it;
};
", "node_modules/core-js/modules/_validate-collection.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_validate-collection.js");
    }
}
