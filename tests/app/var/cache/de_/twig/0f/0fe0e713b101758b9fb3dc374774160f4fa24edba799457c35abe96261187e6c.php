<?php

/* node_modules/lodash/isFinite.js */
class __TwigTemplate_2f6a71b9def3b6672d7a2c6b688e024ae9fea4c610afd01279e07e4d15047f51 extends Twig_Template
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
        $__internal_a5c8541b22f61500c7ff908a2b6275521d1dcf8c6fb54f00ebe094b5703deea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c8541b22f61500c7ff908a2b6275521d1dcf8c6fb54f00ebe094b5703deea4->enter($__internal_a5c8541b22f61500c7ff908a2b6275521d1dcf8c6fb54f00ebe094b5703deea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isFinite.js"));

        // line 1
        echo "var root = require('./_root');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeIsFinite = root.isFinite;

/**
 * Checks if `value` is a finite primitive number.
 *
 * **Note:** This method is based on
 * [`Number.isFinite`](https://mdn.io/Number/isFinite).
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a finite number, else `false`.
 * @example
 *
 * _.isFinite(3);
 * // => true
 *
 * _.isFinite(Number.MIN_VALUE);
 * // => true
 *
 * _.isFinite(Infinity);
 * // => false
 *
 * _.isFinite('3');
 * // => false
 */
function isFinite(value) {
  return typeof value == 'number' && nativeIsFinite(value);
}

module.exports = isFinite;
";
        
        $__internal_a5c8541b22f61500c7ff908a2b6275521d1dcf8c6fb54f00ebe094b5703deea4->leave($__internal_a5c8541b22f61500c7ff908a2b6275521d1dcf8c6fb54f00ebe094b5703deea4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isFinite.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var root = require('./_root');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeIsFinite = root.isFinite;

/**
 * Checks if `value` is a finite primitive number.
 *
 * **Note:** This method is based on
 * [`Number.isFinite`](https://mdn.io/Number/isFinite).
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a finite number, else `false`.
 * @example
 *
 * _.isFinite(3);
 * // => true
 *
 * _.isFinite(Number.MIN_VALUE);
 * // => true
 *
 * _.isFinite(Infinity);
 * // => false
 *
 * _.isFinite('3');
 * // => false
 */
function isFinite(value) {
  return typeof value == 'number' && nativeIsFinite(value);
}

module.exports = isFinite;
", "node_modules/lodash/isFinite.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isFinite.js");
    }
}
