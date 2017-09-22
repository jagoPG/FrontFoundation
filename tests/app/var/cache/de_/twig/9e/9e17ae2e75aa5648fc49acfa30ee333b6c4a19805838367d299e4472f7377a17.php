<?php

/* node_modules/lodash/lowerCase.js */
class __TwigTemplate_9fbf60d2b02735c0aaaa6e0a9b6cd8a604cc1b114ef679cdd7c90f26e4b0eb92 extends Twig_Template
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
        $__internal_29e1b9711bdec8ce219aabf97eb196be39fb9601189794c4c4ca9b124536d484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e1b9711bdec8ce219aabf97eb196be39fb9601189794c4c4ca9b124536d484->enter($__internal_29e1b9711bdec8ce219aabf97eb196be39fb9601189794c4c4ca9b124536d484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/lowerCase.js"));

        // line 1
        echo "var createCompounder = require('./_createCompounder');

/**
 * Converts `string`, as space separated words, to lower case.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the lower cased string.
 * @example
 *
 * _.lowerCase('--Foo-Bar--');
 * // => 'foo bar'
 *
 * _.lowerCase('fooBar');
 * // => 'foo bar'
 *
 * _.lowerCase('__FOO_BAR__');
 * // => 'foo bar'
 */
var lowerCase = createCompounder(function(result, word, index) {
  return result + (index ? ' ' : '') + word.toLowerCase();
});

module.exports = lowerCase;
";
        
        $__internal_29e1b9711bdec8ce219aabf97eb196be39fb9601189794c4c4ca9b124536d484->leave($__internal_29e1b9711bdec8ce219aabf97eb196be39fb9601189794c4c4ca9b124536d484_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/lowerCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createCompounder = require('./_createCompounder');

/**
 * Converts `string`, as space separated words, to lower case.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the lower cased string.
 * @example
 *
 * _.lowerCase('--Foo-Bar--');
 * // => 'foo bar'
 *
 * _.lowerCase('fooBar');
 * // => 'foo bar'
 *
 * _.lowerCase('__FOO_BAR__');
 * // => 'foo bar'
 */
var lowerCase = createCompounder(function(result, word, index) {
  return result + (index ? ' ' : '') + word.toLowerCase();
});

module.exports = lowerCase;
", "node_modules/lodash/lowerCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/lowerCase.js");
    }
}
