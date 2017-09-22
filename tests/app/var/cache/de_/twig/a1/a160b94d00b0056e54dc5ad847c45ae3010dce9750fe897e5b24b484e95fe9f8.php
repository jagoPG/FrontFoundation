<?php

/* node_modules/lodash/isNull.js */
class __TwigTemplate_14e6a07868533233fbd4a268dfa4c5ca033254d2dfcbab7175eab726736e696c extends Twig_Template
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
        $__internal_4fa91028ccc0eb0725ec7a5ed34b0e2fec8a223df1a3d5e759af248a095075e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa91028ccc0eb0725ec7a5ed34b0e2fec8a223df1a3d5e759af248a095075e4->enter($__internal_4fa91028ccc0eb0725ec7a5ed34b0e2fec8a223df1a3d5e759af248a095075e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isNull.js"));

        // line 1
        echo "/**
 * Checks if `value` is `null`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is `null`, else `false`.
 * @example
 *
 * _.isNull(null);
 * // => true
 *
 * _.isNull(void 0);
 * // => false
 */
function isNull(value) {
  return value === null;
}

module.exports = isNull;
";
        
        $__internal_4fa91028ccc0eb0725ec7a5ed34b0e2fec8a223df1a3d5e759af248a095075e4->leave($__internal_4fa91028ccc0eb0725ec7a5ed34b0e2fec8a223df1a3d5e759af248a095075e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isNull.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks if `value` is `null`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is `null`, else `false`.
 * @example
 *
 * _.isNull(null);
 * // => true
 *
 * _.isNull(void 0);
 * // => false
 */
function isNull(value) {
  return value === null;
}

module.exports = isNull;
", "node_modules/lodash/isNull.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isNull.js");
    }
}
