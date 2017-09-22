<?php

/* node_modules/lodash/keys.js */
class __TwigTemplate_713146aee6f8633acec23b079a73cdd6ee920771a83d5bac5e301b6229aa42bd extends Twig_Template
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
        $__internal_8b7b6fc6abdc70230e158f6e6b36e04c735df3f8b790a2bd0298ab92f35f2cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7b6fc6abdc70230e158f6e6b36e04c735df3f8b790a2bd0298ab92f35f2cad->enter($__internal_8b7b6fc6abdc70230e158f6e6b36e04c735df3f8b790a2bd0298ab92f35f2cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/keys.js"));

        // line 1
        echo "var arrayLikeKeys = require('./_arrayLikeKeys'),
    baseKeys = require('./_baseKeys'),
    isArrayLike = require('./isArrayLike');

/**
 * Creates an array of the own enumerable property names of `object`.
 *
 * **Note:** Non-object values are coerced to objects. See the
 * [ES spec](http://ecma-international.org/ecma-262/7.0/#sec-object.keys)
 * for more details.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
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
 * _.keys(new Foo);
 * // => ['a', 'b'] (iteration order is not guaranteed)
 *
 * _.keys('hi');
 * // => ['0', '1']
 */
function keys(object) {
  return isArrayLike(object) ? arrayLikeKeys(object) : baseKeys(object);
}

module.exports = keys;
";
        
        $__internal_8b7b6fc6abdc70230e158f6e6b36e04c735df3f8b790a2bd0298ab92f35f2cad->leave($__internal_8b7b6fc6abdc70230e158f6e6b36e04c735df3f8b790a2bd0298ab92f35f2cad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayLikeKeys = require('./_arrayLikeKeys'),
    baseKeys = require('./_baseKeys'),
    isArrayLike = require('./isArrayLike');

/**
 * Creates an array of the own enumerable property names of `object`.
 *
 * **Note:** Non-object values are coerced to objects. See the
 * [ES spec](http://ecma-international.org/ecma-262/7.0/#sec-object.keys)
 * for more details.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
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
 * _.keys(new Foo);
 * // => ['a', 'b'] (iteration order is not guaranteed)
 *
 * _.keys('hi');
 * // => ['0', '1']
 */
function keys(object) {
  return isArrayLike(object) ? arrayLikeKeys(object) : baseKeys(object);
}

module.exports = keys;
", "node_modules/lodash/keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/keys.js");
    }
}
