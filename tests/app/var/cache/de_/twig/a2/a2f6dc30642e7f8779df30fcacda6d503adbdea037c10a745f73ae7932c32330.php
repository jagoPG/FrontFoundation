<?php

/* node_modules/lodash/isObject.js */
class __TwigTemplate_a3e06b279eb45042a446f063823551d489b76fc2eded0b98392e9d5fbee5eb93 extends Twig_Template
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
        $__internal_ddd2682a7e6d524aa4af04ec7d7c46df2e48bdbe6d5847f0af6b94952d0e2e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd2682a7e6d524aa4af04ec7d7c46df2e48bdbe6d5847f0af6b94952d0e2e4f->enter($__internal_ddd2682a7e6d524aa4af04ec7d7c46df2e48bdbe6d5847f0af6b94952d0e2e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isObject.js"));

        // line 1
        echo "/**
 * Checks if `value` is the
 * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
 * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an object, else `false`.
 * @example
 *
 * _.isObject({});
 * // => true
 *
 * _.isObject([1, 2, 3]);
 * // => true
 *
 * _.isObject(_.noop);
 * // => true
 *
 * _.isObject(null);
 * // => false
 */
function isObject(value) {
  var type = typeof value;
  return value != null && (type == 'object' || type == 'function');
}

module.exports = isObject;
";
        
        $__internal_ddd2682a7e6d524aa4af04ec7d7c46df2e48bdbe6d5847f0af6b94952d0e2e4f->leave($__internal_ddd2682a7e6d524aa4af04ec7d7c46df2e48bdbe6d5847f0af6b94952d0e2e4f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks if `value` is the
 * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
 * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an object, else `false`.
 * @example
 *
 * _.isObject({});
 * // => true
 *
 * _.isObject([1, 2, 3]);
 * // => true
 *
 * _.isObject(_.noop);
 * // => true
 *
 * _.isObject(null);
 * // => false
 */
function isObject(value) {
  var type = typeof value;
  return value != null && (type == 'object' || type == 'function');
}

module.exports = isObject;
", "node_modules/lodash/isObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isObject.js");
    }
}
