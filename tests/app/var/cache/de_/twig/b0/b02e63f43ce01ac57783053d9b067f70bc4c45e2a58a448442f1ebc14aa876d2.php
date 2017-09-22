<?php

/* node_modules/core-js/library/modules/_to-absolute-index.js */
class __TwigTemplate_32bf89fd87c85e7095d68e7fdb6c8bbb12f2b85d6020174c3c15177a9f766f21 extends Twig_Template
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
        $__internal_b829c1fec42edc8d1cd4ec2db0fc36c3a8697da7356024c435c5a8a864bf9523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b829c1fec42edc8d1cd4ec2db0fc36c3a8697da7356024c435c5a8a864bf9523->enter($__internal_b829c1fec42edc8d1cd4ec2db0fc36c3a8697da7356024c435c5a8a864bf9523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_to-absolute-index.js"));

        // line 1
        echo "var toInteger = require('./_to-integer');
var max = Math.max;
var min = Math.min;
module.exports = function (index, length) {
  index = toInteger(index);
  return index < 0 ? max(index + length, 0) : min(index, length);
};
";
        
        $__internal_b829c1fec42edc8d1cd4ec2db0fc36c3a8697da7356024c435c5a8a864bf9523->leave($__internal_b829c1fec42edc8d1cd4ec2db0fc36c3a8697da7356024c435c5a8a864bf9523_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_to-absolute-index.js";
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
", "node_modules/core-js/library/modules/_to-absolute-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_to-absolute-index.js");
    }
}
