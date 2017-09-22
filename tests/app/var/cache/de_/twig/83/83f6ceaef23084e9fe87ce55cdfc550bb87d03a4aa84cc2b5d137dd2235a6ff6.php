<?php

/* node_modules/lodash/isNil.js */
class __TwigTemplate_0a19b6ac34f06914018ba32bbf0855a86bf4a149f5cbccbea23237b901a53a68 extends Twig_Template
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
        $__internal_a12277926eff0abc45448f9d3b6c41eebb0e1855e442ceb3d1abfa333b728dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12277926eff0abc45448f9d3b6c41eebb0e1855e442ceb3d1abfa333b728dc9->enter($__internal_a12277926eff0abc45448f9d3b6c41eebb0e1855e442ceb3d1abfa333b728dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isNil.js"));

        // line 1
        echo "/**
 * Checks if `value` is `null` or `undefined`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is nullish, else `false`.
 * @example
 *
 * _.isNil(null);
 * // => true
 *
 * _.isNil(void 0);
 * // => true
 *
 * _.isNil(NaN);
 * // => false
 */
function isNil(value) {
  return value == null;
}

module.exports = isNil;
";
        
        $__internal_a12277926eff0abc45448f9d3b6c41eebb0e1855e442ceb3d1abfa333b728dc9->leave($__internal_a12277926eff0abc45448f9d3b6c41eebb0e1855e442ceb3d1abfa333b728dc9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isNil.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks if `value` is `null` or `undefined`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is nullish, else `false`.
 * @example
 *
 * _.isNil(null);
 * // => true
 *
 * _.isNil(void 0);
 * // => true
 *
 * _.isNil(NaN);
 * // => false
 */
function isNil(value) {
  return value == null;
}

module.exports = isNil;
", "node_modules/lodash/isNil.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isNil.js");
    }
}
