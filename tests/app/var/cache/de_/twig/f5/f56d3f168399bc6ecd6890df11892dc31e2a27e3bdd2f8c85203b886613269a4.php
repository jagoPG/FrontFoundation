<?php

/* node_modules/lodash/isNative.js */
class __TwigTemplate_951545a31b4f50b457e8fe0ecfd147e2f1782e77dd749b2e3adcfa5192e03247 extends Twig_Template
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
        $__internal_c830f871c61a76de99961550d647101600cc0b3bce8a2e1661154c2b824368e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c830f871c61a76de99961550d647101600cc0b3bce8a2e1661154c2b824368e6->enter($__internal_c830f871c61a76de99961550d647101600cc0b3bce8a2e1661154c2b824368e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isNative.js"));

        // line 1
        echo "var baseIsNative = require('./_baseIsNative'),
    isMaskable = require('./_isMaskable');

/** Error message constants. */
var CORE_ERROR_TEXT = 'Unsupported core-js use. Try https://npms.io/search?q=ponyfill.';

/**
 * Checks if `value` is a pristine native function.
 *
 * **Note:** This method can't reliably detect native functions in the presence
 * of the core-js package because core-js circumvents this kind of detection.
 * Despite multiple requests, the core-js maintainer has made it clear: any
 * attempt to fix the detection will be obstructed. As a result, we're left
 * with little choice but to throw an error. Unfortunately, this also affects
 * packages, like [babel-polyfill](https://www.npmjs.com/package/babel-polyfill),
 * which rely on core-js.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a native function,
 *  else `false`.
 * @example
 *
 * _.isNative(Array.prototype.push);
 * // => true
 *
 * _.isNative(_);
 * // => false
 */
function isNative(value) {
  if (isMaskable(value)) {
    throw new Error(CORE_ERROR_TEXT);
  }
  return baseIsNative(value);
}

module.exports = isNative;
";
        
        $__internal_c830f871c61a76de99961550d647101600cc0b3bce8a2e1661154c2b824368e6->leave($__internal_c830f871c61a76de99961550d647101600cc0b3bce8a2e1661154c2b824368e6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isNative.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsNative = require('./_baseIsNative'),
    isMaskable = require('./_isMaskable');

/** Error message constants. */
var CORE_ERROR_TEXT = 'Unsupported core-js use. Try https://npms.io/search?q=ponyfill.';

/**
 * Checks if `value` is a pristine native function.
 *
 * **Note:** This method can't reliably detect native functions in the presence
 * of the core-js package because core-js circumvents this kind of detection.
 * Despite multiple requests, the core-js maintainer has made it clear: any
 * attempt to fix the detection will be obstructed. As a result, we're left
 * with little choice but to throw an error. Unfortunately, this also affects
 * packages, like [babel-polyfill](https://www.npmjs.com/package/babel-polyfill),
 * which rely on core-js.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a native function,
 *  else `false`.
 * @example
 *
 * _.isNative(Array.prototype.push);
 * // => true
 *
 * _.isNative(_);
 * // => false
 */
function isNative(value) {
  if (isMaskable(value)) {
    throw new Error(CORE_ERROR_TEXT);
  }
  return baseIsNative(value);
}

module.exports = isNative;
", "node_modules/lodash/isNative.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isNative.js");
    }
}
