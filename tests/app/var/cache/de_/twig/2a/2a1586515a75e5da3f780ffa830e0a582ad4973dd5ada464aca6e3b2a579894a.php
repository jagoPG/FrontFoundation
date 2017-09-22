<?php

/* node_modules/core-js/modules/_to-absolute-index.js */
class __TwigTemplate_89b0116f7e4cccc5b398deb0d5af4874ebc986b6e730e6adb8548f5db53c4b96 extends Twig_Template
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
        $__internal_fb7d8851beebfc48f65644e36748bf5cefb2a96748a5d058bf1cefadb1edb18d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7d8851beebfc48f65644e36748bf5cefb2a96748a5d058bf1cefadb1edb18d->enter($__internal_fb7d8851beebfc48f65644e36748bf5cefb2a96748a5d058bf1cefadb1edb18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_to-absolute-index.js"));

        // line 1
        echo "var toInteger = require('./_to-integer');
var max = Math.max;
var min = Math.min;
module.exports = function (index, length) {
  index = toInteger(index);
  return index < 0 ? max(index + length, 0) : min(index, length);
};
";
        
        $__internal_fb7d8851beebfc48f65644e36748bf5cefb2a96748a5d058bf1cefadb1edb18d->leave($__internal_fb7d8851beebfc48f65644e36748bf5cefb2a96748a5d058bf1cefadb1edb18d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_to-absolute-index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toInteger = require('./_to-integer');
var max = Math.max;
var min = Math.min;
module.exports = function (index, length) {
  index = toInteger(index);
  return index < 0 ? max(index + length, 0) : min(index, length);
};
", "node_modules/core-js/modules/_to-absolute-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_to-absolute-index.js");
    }
}
