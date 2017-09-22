<?php

/* node_modules/core-js/library/modules/_is-integer.js */
class __TwigTemplate_a62448cd161be08bbc41325fb30fcea05928b83383d1c59bab633448973d1b93 extends Twig_Template
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
        $__internal_60793fdc1c126a619d94bd6082bc1fe2c8396e9df980843d4a437d0504972669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60793fdc1c126a619d94bd6082bc1fe2c8396e9df980843d4a437d0504972669->enter($__internal_60793fdc1c126a619d94bd6082bc1fe2c8396e9df980843d4a437d0504972669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_is-integer.js"));

        // line 1
        echo "// 20.1.2.3 Number.isInteger(number)
var isObject = require('./_is-object');
var floor = Math.floor;
module.exports = function isInteger(it) {
  return !isObject(it) && isFinite(it) && floor(it) === it;
};
";
        
        $__internal_60793fdc1c126a619d94bd6082bc1fe2c8396e9df980843d4a437d0504972669->leave($__internal_60793fdc1c126a619d94bd6082bc1fe2c8396e9df980843d4a437d0504972669_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_is-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 20.1.2.3 Number.isInteger(number)
var isObject = require('./_is-object');
var floor = Math.floor;
module.exports = function isInteger(it) {
  return !isObject(it) && isFinite(it) && floor(it) === it;
};
", "node_modules/core-js/library/modules/_is-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_is-integer.js");
    }
}
