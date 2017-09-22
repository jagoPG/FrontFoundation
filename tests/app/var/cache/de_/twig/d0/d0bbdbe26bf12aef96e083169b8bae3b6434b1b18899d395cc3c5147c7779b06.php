<?php

/* node_modules/lodash/forInRight.js */
class __TwigTemplate_205d4c79d6e549eb0413dddac023ef885da413bfc859ab44050bc0ab3a714b1e extends Twig_Template
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
        $__internal_ddad4946f180c30ca4e217f0a1ac00cde028f4bc9e175e198dd9e375727711b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddad4946f180c30ca4e217f0a1ac00cde028f4bc9e175e198dd9e375727711b2->enter($__internal_ddad4946f180c30ca4e217f0a1ac00cde028f4bc9e175e198dd9e375727711b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/forInRight.js"));

        // line 1
        echo "var baseForRight = require('./_baseForRight'),
    castFunction = require('./_castFunction'),
    keysIn = require('./keysIn');

/**
 * This method is like `_.forIn` except that it iterates over properties of
 * `object` in the opposite order.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Object
 * @param {Object} object The object to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @returns {Object} Returns `object`.
 * @see _.forIn
 * @example
 *
 * function Foo() {
 *   this.a = 1;
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.forInRight(new Foo, function(value, key) {
 *   console.log(key);
 * });
 * // => Logs 'c', 'b', then 'a' assuming `_.forIn` logs 'a', 'b', then 'c'.
 */
function forInRight(object, iteratee) {
  return object == null
    ? object
    : baseForRight(object, castFunction(iteratee), keysIn);
}

module.exports = forInRight;
";
        
        $__internal_ddad4946f180c30ca4e217f0a1ac00cde028f4bc9e175e198dd9e375727711b2->leave($__internal_ddad4946f180c30ca4e217f0a1ac00cde028f4bc9e175e198dd9e375727711b2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/forInRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseForRight = require('./_baseForRight'),
    castFunction = require('./_castFunction'),
    keysIn = require('./keysIn');

/**
 * This method is like `_.forIn` except that it iterates over properties of
 * `object` in the opposite order.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Object
 * @param {Object} object The object to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @returns {Object} Returns `object`.
 * @see _.forIn
 * @example
 *
 * function Foo() {
 *   this.a = 1;
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.forInRight(new Foo, function(value, key) {
 *   console.log(key);
 * });
 * // => Logs 'c', 'b', then 'a' assuming `_.forIn` logs 'a', 'b', then 'c'.
 */
function forInRight(object, iteratee) {
  return object == null
    ? object
    : baseForRight(object, castFunction(iteratee), keysIn);
}

module.exports = forInRight;
", "node_modules/lodash/forInRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/forInRight.js");
    }
}
