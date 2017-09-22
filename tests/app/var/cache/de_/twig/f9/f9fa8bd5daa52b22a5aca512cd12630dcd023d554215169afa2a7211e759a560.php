<?php

/* node_modules/lodash/_baseGt.js */
class __TwigTemplate_88a8b08cf47a3348167373ff222e3923281e0f3d2b3871cbfaf512628ae6c0ba extends Twig_Template
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
        $__internal_c32f5323f70e3a8161185fe2bbb0e7f32c70a1a9e7ba62d57071f07706fdafd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32f5323f70e3a8161185fe2bbb0e7f32c70a1a9e7ba62d57071f07706fdafd6->enter($__internal_c32f5323f70e3a8161185fe2bbb0e7f32c70a1a9e7ba62d57071f07706fdafd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseGt.js"));

        // line 1
        echo "/**
 * The base implementation of `_.gt` which doesn't coerce arguments.
 *
 * @private
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if `value` is greater than `other`,
 *  else `false`.
 */
function baseGt(value, other) {
  return value > other;
}

module.exports = baseGt;
";
        
        $__internal_c32f5323f70e3a8161185fe2bbb0e7f32c70a1a9e7ba62d57071f07706fdafd6->leave($__internal_c32f5323f70e3a8161185fe2bbb0e7f32c70a1a9e7ba62d57071f07706fdafd6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseGt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.gt` which doesn't coerce arguments.
 *
 * @private
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if `value` is greater than `other`,
 *  else `false`.
 */
function baseGt(value, other) {
  return value > other;
}

module.exports = baseGt;
", "node_modules/lodash/_baseGt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseGt.js");
    }
}
