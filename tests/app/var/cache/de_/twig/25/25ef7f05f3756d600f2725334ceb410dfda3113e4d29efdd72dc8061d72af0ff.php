<?php

/* node_modules/lodash/_baseLt.js */
class __TwigTemplate_bd3bd6f5db6c49d2d0ec061e0158c012b35a6caae7077fa4326f2bf8cebd57f6 extends Twig_Template
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
        $__internal_79dc37e14d074000a2f1da2357eb10fa2046f99fa914daf3ed6894fe54325bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79dc37e14d074000a2f1da2357eb10fa2046f99fa914daf3ed6894fe54325bb6->enter($__internal_79dc37e14d074000a2f1da2357eb10fa2046f99fa914daf3ed6894fe54325bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseLt.js"));

        // line 1
        echo "/**
 * The base implementation of `_.lt` which doesn't coerce arguments.
 *
 * @private
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if `value` is less than `other`,
 *  else `false`.
 */
function baseLt(value, other) {
  return value < other;
}

module.exports = baseLt;
";
        
        $__internal_79dc37e14d074000a2f1da2357eb10fa2046f99fa914daf3ed6894fe54325bb6->leave($__internal_79dc37e14d074000a2f1da2357eb10fa2046f99fa914daf3ed6894fe54325bb6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseLt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.lt` which doesn't coerce arguments.
 *
 * @private
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if `value` is less than `other`,
 *  else `false`.
 */
function baseLt(value, other) {
  return value < other;
}

module.exports = baseLt;
", "node_modules/lodash/_baseLt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseLt.js");
    }
}
