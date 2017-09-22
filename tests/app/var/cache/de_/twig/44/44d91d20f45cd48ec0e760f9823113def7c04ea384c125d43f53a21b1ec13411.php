<?php

/* node_modules/lodash/isObjectLike.js */
class __TwigTemplate_88174ce29ee936e1fd854c0802bfad5b4dec6c0620cc92a458f5ba475add9f8d extends Twig_Template
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
        $__internal_f4f8425aad9225ab6cdc848593905ccc3830299ac62a6328dceb31ef2c5ef8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f8425aad9225ab6cdc848593905ccc3830299ac62a6328dceb31ef2c5ef8e1->enter($__internal_f4f8425aad9225ab6cdc848593905ccc3830299ac62a6328dceb31ef2c5ef8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isObjectLike.js"));

        // line 1
        echo "/**
 * Checks if `value` is object-like. A value is object-like if it's not `null`
 * and has a `typeof` result of \"object\".
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
 * @example
 *
 * _.isObjectLike({});
 * // => true
 *
 * _.isObjectLike([1, 2, 3]);
 * // => true
 *
 * _.isObjectLike(_.noop);
 * // => false
 *
 * _.isObjectLike(null);
 * // => false
 */
function isObjectLike(value) {
  return value != null && typeof value == 'object';
}

module.exports = isObjectLike;
";
        
        $__internal_f4f8425aad9225ab6cdc848593905ccc3830299ac62a6328dceb31ef2c5ef8e1->leave($__internal_f4f8425aad9225ab6cdc848593905ccc3830299ac62a6328dceb31ef2c5ef8e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isObjectLike.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks if `value` is object-like. A value is object-like if it's not `null`
 * and has a `typeof` result of \"object\".
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
 * @example
 *
 * _.isObjectLike({});
 * // => true
 *
 * _.isObjectLike([1, 2, 3]);
 * // => true
 *
 * _.isObjectLike(_.noop);
 * // => false
 *
 * _.isObjectLike(null);
 * // => false
 */
function isObjectLike(value) {
  return value != null && typeof value == 'object';
}

module.exports = isObjectLike;
", "node_modules/lodash/isObjectLike.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isObjectLike.js");
    }
}
