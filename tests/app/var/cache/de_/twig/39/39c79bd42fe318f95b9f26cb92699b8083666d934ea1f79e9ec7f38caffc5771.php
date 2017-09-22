<?php

/* node_modules/lodash/functionsIn.js */
class __TwigTemplate_b3020f3923989b692c33f53181c93eaecf68e0b94d875f132d52c11bffe7fffd extends Twig_Template
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
        $__internal_181f2e90b14bb9059b953a9c03d6c496daa4411aa19ed1070b3bb44b1f386268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181f2e90b14bb9059b953a9c03d6c496daa4411aa19ed1070b3bb44b1f386268->enter($__internal_181f2e90b14bb9059b953a9c03d6c496daa4411aa19ed1070b3bb44b1f386268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/functionsIn.js"));

        // line 1
        echo "var baseFunctions = require('./_baseFunctions'),
    keysIn = require('./keysIn');

/**
 * Creates an array of function property names from own and inherited
 * enumerable properties of `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The object to inspect.
 * @returns {Array} Returns the function names.
 * @see _.functions
 * @example
 *
 * function Foo() {
 *   this.a = _.constant('a');
 *   this.b = _.constant('b');
 * }
 *
 * Foo.prototype.c = _.constant('c');
 *
 * _.functionsIn(new Foo);
 * // => ['a', 'b', 'c']
 */
function functionsIn(object) {
  return object == null ? [] : baseFunctions(object, keysIn(object));
}

module.exports = functionsIn;
";
        
        $__internal_181f2e90b14bb9059b953a9c03d6c496daa4411aa19ed1070b3bb44b1f386268->leave($__internal_181f2e90b14bb9059b953a9c03d6c496daa4411aa19ed1070b3bb44b1f386268_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/functionsIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFunctions = require('./_baseFunctions'),
    keysIn = require('./keysIn');

/**
 * Creates an array of function property names from own and inherited
 * enumerable properties of `object`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Object
 * @param {Object} object The object to inspect.
 * @returns {Array} Returns the function names.
 * @see _.functions
 * @example
 *
 * function Foo() {
 *   this.a = _.constant('a');
 *   this.b = _.constant('b');
 * }
 *
 * Foo.prototype.c = _.constant('c');
 *
 * _.functionsIn(new Foo);
 * // => ['a', 'b', 'c']
 */
function functionsIn(object) {
  return object == null ? [] : baseFunctions(object, keysIn(object));
}

module.exports = functionsIn;
", "node_modules/lodash/functionsIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/functionsIn.js");
    }
}
