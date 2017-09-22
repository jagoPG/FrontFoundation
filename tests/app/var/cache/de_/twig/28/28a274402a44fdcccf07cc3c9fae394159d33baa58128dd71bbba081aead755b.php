<?php

/* node_modules/lodash/functions.js */
class __TwigTemplate_cbee691af1f7e0c290537084933a53a77938fa9d9841e2ebf80f006103afbaea extends Twig_Template
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
        $__internal_51ee4f449a925edc931e2abdb28cf15d8d6a28772683b50d8c97a0dd4c6e466f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ee4f449a925edc931e2abdb28cf15d8d6a28772683b50d8c97a0dd4c6e466f->enter($__internal_51ee4f449a925edc931e2abdb28cf15d8d6a28772683b50d8c97a0dd4c6e466f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/functions.js"));

        // line 1
        echo "var baseFunctions = require('./_baseFunctions'),
    keys = require('./keys');

/**
 * Creates an array of function property names from own enumerable properties
 * of `object`.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Object
 * @param {Object} object The object to inspect.
 * @returns {Array} Returns the function names.
 * @see _.functionsIn
 * @example
 *
 * function Foo() {
 *   this.a = _.constant('a');
 *   this.b = _.constant('b');
 * }
 *
 * Foo.prototype.c = _.constant('c');
 *
 * _.functions(new Foo);
 * // => ['a', 'b']
 */
function functions(object) {
  return object == null ? [] : baseFunctions(object, keys(object));
}

module.exports = functions;
";
        
        $__internal_51ee4f449a925edc931e2abdb28cf15d8d6a28772683b50d8c97a0dd4c6e466f->leave($__internal_51ee4f449a925edc931e2abdb28cf15d8d6a28772683b50d8c97a0dd4c6e466f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/functions.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFunctions = require('./_baseFunctions'),
    keys = require('./keys');

/**
 * Creates an array of function property names from own enumerable properties
 * of `object`.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Object
 * @param {Object} object The object to inspect.
 * @returns {Array} Returns the function names.
 * @see _.functionsIn
 * @example
 *
 * function Foo() {
 *   this.a = _.constant('a');
 *   this.b = _.constant('b');
 * }
 *
 * Foo.prototype.c = _.constant('c');
 *
 * _.functions(new Foo);
 * // => ['a', 'b']
 */
function functions(object) {
  return object == null ? [] : baseFunctions(object, keys(object));
}

module.exports = functions;
", "node_modules/lodash/functions.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/functions.js");
    }
}
