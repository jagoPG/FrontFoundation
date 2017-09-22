<?php

/* node_modules/lodash/isArrayLikeObject.js */
class __TwigTemplate_00251eeac352f3de1b9152440b388653e3498d7e52169965b559ae813fdae02f extends Twig_Template
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
        $__internal_e060e52de8d9ef92b42ed5499ff4016434e99cb611cd10dc4803963d807ff861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e060e52de8d9ef92b42ed5499ff4016434e99cb611cd10dc4803963d807ff861->enter($__internal_e060e52de8d9ef92b42ed5499ff4016434e99cb611cd10dc4803963d807ff861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isArrayLikeObject.js"));

        // line 1
        echo "var isArrayLike = require('./isArrayLike'),
    isObjectLike = require('./isObjectLike');

/**
 * This method is like `_.isArrayLike` except that it also checks if `value`
 * is an object.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an array-like object,
 *  else `false`.
 * @example
 *
 * _.isArrayLikeObject([1, 2, 3]);
 * // => true
 *
 * _.isArrayLikeObject(document.body.children);
 * // => true
 *
 * _.isArrayLikeObject('abc');
 * // => false
 *
 * _.isArrayLikeObject(_.noop);
 * // => false
 */
function isArrayLikeObject(value) {
  return isObjectLike(value) && isArrayLike(value);
}

module.exports = isArrayLikeObject;
";
        
        $__internal_e060e52de8d9ef92b42ed5499ff4016434e99cb611cd10dc4803963d807ff861->leave($__internal_e060e52de8d9ef92b42ed5499ff4016434e99cb611cd10dc4803963d807ff861_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isArrayLikeObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isArrayLike = require('./isArrayLike'),
    isObjectLike = require('./isObjectLike');

/**
 * This method is like `_.isArrayLike` except that it also checks if `value`
 * is an object.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an array-like object,
 *  else `false`.
 * @example
 *
 * _.isArrayLikeObject([1, 2, 3]);
 * // => true
 *
 * _.isArrayLikeObject(document.body.children);
 * // => true
 *
 * _.isArrayLikeObject('abc');
 * // => false
 *
 * _.isArrayLikeObject(_.noop);
 * // => false
 */
function isArrayLikeObject(value) {
  return isObjectLike(value) && isArrayLike(value);
}

module.exports = isArrayLikeObject;
", "node_modules/lodash/isArrayLikeObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isArrayLikeObject.js");
    }
}
