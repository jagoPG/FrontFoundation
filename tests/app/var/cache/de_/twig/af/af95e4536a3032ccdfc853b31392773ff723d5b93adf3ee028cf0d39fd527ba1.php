<?php

/* node_modules/lodash/camelCase.js */
class __TwigTemplate_f379a919d355b8805032b4740948cadfc154eb4d1b994d4544c82c255cb6f5e4 extends Twig_Template
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
        $__internal_746bd3181a566928122ddf107788c209c56f564448b00aa31781f4f9cd415289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746bd3181a566928122ddf107788c209c56f564448b00aa31781f4f9cd415289->enter($__internal_746bd3181a566928122ddf107788c209c56f564448b00aa31781f4f9cd415289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/camelCase.js"));

        // line 1
        echo "var capitalize = require('./capitalize'),
    createCompounder = require('./_createCompounder');

/**
 * Converts `string` to [camel case](https://en.wikipedia.org/wiki/CamelCase).
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the camel cased string.
 * @example
 *
 * _.camelCase('Foo Bar');
 * // => 'fooBar'
 *
 * _.camelCase('--foo-bar--');
 * // => 'fooBar'
 *
 * _.camelCase('__FOO_BAR__');
 * // => 'fooBar'
 */
var camelCase = createCompounder(function(result, word, index) {
  word = word.toLowerCase();
  return result + (index ? capitalize(word) : word);
});

module.exports = camelCase;
";
        
        $__internal_746bd3181a566928122ddf107788c209c56f564448b00aa31781f4f9cd415289->leave($__internal_746bd3181a566928122ddf107788c209c56f564448b00aa31781f4f9cd415289_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/camelCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var capitalize = require('./capitalize'),
    createCompounder = require('./_createCompounder');

/**
 * Converts `string` to [camel case](https://en.wikipedia.org/wiki/CamelCase).
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the camel cased string.
 * @example
 *
 * _.camelCase('Foo Bar');
 * // => 'fooBar'
 *
 * _.camelCase('--foo-bar--');
 * // => 'fooBar'
 *
 * _.camelCase('__FOO_BAR__');
 * // => 'fooBar'
 */
var camelCase = createCompounder(function(result, word, index) {
  word = word.toLowerCase();
  return result + (index ? capitalize(word) : word);
});

module.exports = camelCase;
", "node_modules/lodash/camelCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/camelCase.js");
    }
}
