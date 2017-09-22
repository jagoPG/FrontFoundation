<?php

/* node_modules/lodash/conformsTo.js */
class __TwigTemplate_96086cbf828261d46a923128b028fbbb80ef6306f7cf7471092e89f0f0a50890 extends Twig_Template
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
        $__internal_0c03d1803b6a0b968e863181c17704f27ea98ab29ccf7a68e6d5f33524df617f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c03d1803b6a0b968e863181c17704f27ea98ab29ccf7a68e6d5f33524df617f->enter($__internal_0c03d1803b6a0b968e863181c17704f27ea98ab29ccf7a68e6d5f33524df617f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/conformsTo.js"));

        // line 1
        echo "var baseConformsTo = require('./_baseConformsTo'),
    keys = require('./keys');

/**
 * Checks if `object` conforms to `source` by invoking the predicate
 * properties of `source` with the corresponding property values of `object`.
 *
 * **Note:** This method is equivalent to `_.conforms` when `source` is
 * partially applied.
 *
 * @static
 * @memberOf _
 * @since 4.14.0
 * @category Lang
 * @param {Object} object The object to inspect.
 * @param {Object} source The object of property predicates to conform to.
 * @returns {boolean} Returns `true` if `object` conforms, else `false`.
 * @example
 *
 * var object = { 'a': 1, 'b': 2 };
 *
 * _.conformsTo(object, { 'b': function(n) { return n > 1; } });
 * // => true
 *
 * _.conformsTo(object, { 'b': function(n) { return n > 2; } });
 * // => false
 */
function conformsTo(object, source) {
  return source == null || baseConformsTo(object, source, keys(source));
}

module.exports = conformsTo;
";
        
        $__internal_0c03d1803b6a0b968e863181c17704f27ea98ab29ccf7a68e6d5f33524df617f->leave($__internal_0c03d1803b6a0b968e863181c17704f27ea98ab29ccf7a68e6d5f33524df617f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/conformsTo.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseConformsTo = require('./_baseConformsTo'),
    keys = require('./keys');

/**
 * Checks if `object` conforms to `source` by invoking the predicate
 * properties of `source` with the corresponding property values of `object`.
 *
 * **Note:** This method is equivalent to `_.conforms` when `source` is
 * partially applied.
 *
 * @static
 * @memberOf _
 * @since 4.14.0
 * @category Lang
 * @param {Object} object The object to inspect.
 * @param {Object} source The object of property predicates to conform to.
 * @returns {boolean} Returns `true` if `object` conforms, else `false`.
 * @example
 *
 * var object = { 'a': 1, 'b': 2 };
 *
 * _.conformsTo(object, { 'b': function(n) { return n > 1; } });
 * // => true
 *
 * _.conformsTo(object, { 'b': function(n) { return n > 2; } });
 * // => false
 */
function conformsTo(object, source) {
  return source == null || baseConformsTo(object, source, keys(source));
}

module.exports = conformsTo;
", "node_modules/lodash/conformsTo.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/conformsTo.js");
    }
}
