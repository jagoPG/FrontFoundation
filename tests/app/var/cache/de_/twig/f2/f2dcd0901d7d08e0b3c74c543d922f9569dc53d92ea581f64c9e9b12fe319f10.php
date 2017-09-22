<?php

/* node_modules/lodash/keysIn.js */
class __TwigTemplate_dc1605236f6cd3e35b99da11238c270a009edcebfbe0f473a4a425556bfb99b8 extends Twig_Template
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
        $__internal_f50e5224107a85795562d12f8d2c0cff53ae7edbec8635121eaff1bff3fee113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50e5224107a85795562d12f8d2c0cff53ae7edbec8635121eaff1bff3fee113->enter($__internal_f50e5224107a85795562d12f8d2c0cff53ae7edbec8635121eaff1bff3fee113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/keysIn.js"));

        // line 1
        echo "var arrayLikeKeys = require('./_arrayLikeKeys'),
    baseKeysIn = require('./_baseKeysIn'),
    isArrayLike = require('./isArrayLike');

/**
 * Creates an array of the own and inherited enumerable property names of `object`.
 *
 * **Note:** Non-object values are coerced to objects.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Object
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of property names.
 * @example
 *
 * function Foo() {
 *   this.a = 1;
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.keysIn(new Foo);
 * // => ['a', 'b', 'c'] (iteration order is not guaranteed)
 */
function keysIn(object) {
  return isArrayLike(object) ? arrayLikeKeys(object, true) : baseKeysIn(object);
}

module.exports = keysIn;
";
        
        $__internal_f50e5224107a85795562d12f8d2c0cff53ae7edbec8635121eaff1bff3fee113->leave($__internal_f50e5224107a85795562d12f8d2c0cff53ae7edbec8635121eaff1bff3fee113_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/keysIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayLikeKeys = require('./_arrayLikeKeys'),
    baseKeysIn = require('./_baseKeysIn'),
    isArrayLike = require('./isArrayLike');

/**
 * Creates an array of the own and inherited enumerable property names of `object`.
 *
 * **Note:** Non-object values are coerced to objects.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Object
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of property names.
 * @example
 *
 * function Foo() {
 *   this.a = 1;
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.keysIn(new Foo);
 * // => ['a', 'b', 'c'] (iteration order is not guaranteed)
 */
function keysIn(object) {
  return isArrayLike(object) ? arrayLikeKeys(object, true) : baseKeysIn(object);
}

module.exports = keysIn;
", "node_modules/lodash/keysIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/keysIn.js");
    }
}
