<?php

/* node_modules/lodash/setWith.js */
class __TwigTemplate_f68183065d84bcf188a91b1dcf18908b3b47af2b3acc918d92129a200af16d19 extends Twig_Template
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
        $__internal_a16e44ff8271479ce1a077a5d518c4808d4d00c75da1806fc3fd23689d5b0ef6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16e44ff8271479ce1a077a5d518c4808d4d00c75da1806fc3fd23689d5b0ef6->enter($__internal_a16e44ff8271479ce1a077a5d518c4808d4d00c75da1806fc3fd23689d5b0ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/setWith.js"));

        // line 1
        echo "var baseSet = require('./_baseSet');

/**
 * This method is like `_.set` except that it accepts `customizer` which is
 * invoked to produce the objects of `path`.  If `customizer` returns `undefined`
 * path creation is handled by the method instead. The `customizer` is invoked
 * with three arguments: (nsValue, key, nsObject).
 *
 * **Note:** This method mutates `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The object to modify.
 * @param {Array|string} path The path of the property to set.
 * @param {*} value The value to set.
 * @param {Function} [customizer] The function to customize assigned values.
 * @returns {Object} Returns `object`.
 * @example
 *
 * var object = {};
 *
 * _.setWith(object, '[0][1]', 'a', Object);
 * // => { '0': { '1': 'a' } }
 */
function setWith(object, path, value, customizer) {
  customizer = typeof customizer == 'function' ? customizer : undefined;
  return object == null ? object : baseSet(object, path, value, customizer);
}

module.exports = setWith;
";
        
        $__internal_a16e44ff8271479ce1a077a5d518c4808d4d00c75da1806fc3fd23689d5b0ef6->leave($__internal_a16e44ff8271479ce1a077a5d518c4808d4d00c75da1806fc3fd23689d5b0ef6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/setWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSet = require('./_baseSet');

/**
 * This method is like `_.set` except that it accepts `customizer` which is
 * invoked to produce the objects of `path`.  If `customizer` returns `undefined`
 * path creation is handled by the method instead. The `customizer` is invoked
 * with three arguments: (nsValue, key, nsObject).
 *
 * **Note:** This method mutates `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The object to modify.
 * @param {Array|string} path The path of the property to set.
 * @param {*} value The value to set.
 * @param {Function} [customizer] The function to customize assigned values.
 * @returns {Object} Returns `object`.
 * @example
 *
 * var object = {};
 *
 * _.setWith(object, '[0][1]', 'a', Object);
 * // => { '0': { '1': 'a' } }
 */
function setWith(object, path, value, customizer) {
  customizer = typeof customizer == 'function' ? customizer : undefined;
  return object == null ? object : baseSet(object, path, value, customizer);
}

module.exports = setWith;
", "node_modules/lodash/setWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/setWith.js");
    }
}
