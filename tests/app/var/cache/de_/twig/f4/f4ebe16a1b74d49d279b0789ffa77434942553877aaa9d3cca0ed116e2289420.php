<?php

/* node_modules/lodash/reverse.js */
class __TwigTemplate_e474ba09134767f39dec5acd47115be30516e13f422512e4dd2194270f53d175 extends Twig_Template
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
        $__internal_ff24ede0d6643941c4f9c578d5e8f871963301e83897987d19a4aaafaee38fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff24ede0d6643941c4f9c578d5e8f871963301e83897987d19a4aaafaee38fbd->enter($__internal_ff24ede0d6643941c4f9c578d5e8f871963301e83897987d19a4aaafaee38fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/reverse.js"));

        // line 1
        echo "/** Used for built-in method references. */
var arrayProto = Array.prototype;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeReverse = arrayProto.reverse;

/**
 * Reverses `array` so that the first element becomes the last, the second
 * element becomes the second to last, and so on.
 *
 * **Note:** This method mutates `array` and is based on
 * [`Array#reverse`](https://mdn.io/Array/reverse).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to modify.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = [1, 2, 3];
 *
 * _.reverse(array);
 * // => [3, 2, 1]
 *
 * console.log(array);
 * // => [3, 2, 1]
 */
function reverse(array) {
  return array == null ? array : nativeReverse.call(array);
}

module.exports = reverse;
";
        
        $__internal_ff24ede0d6643941c4f9c578d5e8f871963301e83897987d19a4aaafaee38fbd->leave($__internal_ff24ede0d6643941c4f9c578d5e8f871963301e83897987d19a4aaafaee38fbd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/reverse.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used for built-in method references. */
var arrayProto = Array.prototype;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeReverse = arrayProto.reverse;

/**
 * Reverses `array` so that the first element becomes the last, the second
 * element becomes the second to last, and so on.
 *
 * **Note:** This method mutates `array` and is based on
 * [`Array#reverse`](https://mdn.io/Array/reverse).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to modify.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = [1, 2, 3];
 *
 * _.reverse(array);
 * // => [3, 2, 1]
 *
 * console.log(array);
 * // => [3, 2, 1]
 */
function reverse(array) {
  return array == null ? array : nativeReverse.call(array);
}

module.exports = reverse;
", "node_modules/lodash/reverse.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/reverse.js");
    }
}
