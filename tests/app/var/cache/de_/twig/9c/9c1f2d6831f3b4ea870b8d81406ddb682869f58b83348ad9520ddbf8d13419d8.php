<?php

/* node_modules/lodash/forOwnRight.js */
class __TwigTemplate_548d74b36abd25e6c3ef9c0fbb1ebf7dff8f4ffeed5ffafda91182a38824f0db extends Twig_Template
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
        $__internal_18bc3e6186db27e772daeb6bc9b6e6a0aa94cb1991f5ca17ab8f0d5301ab73ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bc3e6186db27e772daeb6bc9b6e6a0aa94cb1991f5ca17ab8f0d5301ab73ad->enter($__internal_18bc3e6186db27e772daeb6bc9b6e6a0aa94cb1991f5ca17ab8f0d5301ab73ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/forOwnRight.js"));

        // line 1
        echo "var baseForOwnRight = require('./_baseForOwnRight'),
    castFunction = require('./_castFunction');

/**
 * This method is like `_.forOwn` except that it iterates over properties of
 * `object` in the opposite order.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Object
 * @param {Object} object The object to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @returns {Object} Returns `object`.
 * @see _.forOwn
 * @example
 *
 * function Foo() {
 *   this.a = 1;
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.forOwnRight(new Foo, function(value, key) {
 *   console.log(key);
 * });
 * // => Logs 'b' then 'a' assuming `_.forOwn` logs 'a' then 'b'.
 */
function forOwnRight(object, iteratee) {
  return object && baseForOwnRight(object, castFunction(iteratee));
}

module.exports = forOwnRight;
";
        
        $__internal_18bc3e6186db27e772daeb6bc9b6e6a0aa94cb1991f5ca17ab8f0d5301ab73ad->leave($__internal_18bc3e6186db27e772daeb6bc9b6e6a0aa94cb1991f5ca17ab8f0d5301ab73ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/forOwnRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseForOwnRight = require('./_baseForOwnRight'),
    castFunction = require('./_castFunction');

/**
 * This method is like `_.forOwn` except that it iterates over properties of
 * `object` in the opposite order.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Object
 * @param {Object} object The object to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @returns {Object} Returns `object`.
 * @see _.forOwn
 * @example
 *
 * function Foo() {
 *   this.a = 1;
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.forOwnRight(new Foo, function(value, key) {
 *   console.log(key);
 * });
 * // => Logs 'b' then 'a' assuming `_.forOwn` logs 'a' then 'b'.
 */
function forOwnRight(object, iteratee) {
  return object && baseForOwnRight(object, castFunction(iteratee));
}

module.exports = forOwnRight;
", "node_modules/lodash/forOwnRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/forOwnRight.js");
    }
}
