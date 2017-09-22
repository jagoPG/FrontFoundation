<?php

/* node_modules/lodash/kebabCase.js */
class __TwigTemplate_52e8704810f4b2db4c04440e01586a3aafe11289492f23483c4499a1d2642755 extends Twig_Template
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
        $__internal_728eac7ec20d7e9b6aead80ff19d411d5049883cb46e759a413e8a5708a0d328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728eac7ec20d7e9b6aead80ff19d411d5049883cb46e759a413e8a5708a0d328->enter($__internal_728eac7ec20d7e9b6aead80ff19d411d5049883cb46e759a413e8a5708a0d328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/kebabCase.js"));

        // line 1
        echo "var createCompounder = require('./_createCompounder');

/**
 * Converts `string` to
 * [kebab case](https://en.wikipedia.org/wiki/Letter_case#Special_case_styles).
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the kebab cased string.
 * @example
 *
 * _.kebabCase('Foo Bar');
 * // => 'foo-bar'
 *
 * _.kebabCase('fooBar');
 * // => 'foo-bar'
 *
 * _.kebabCase('__FOO_BAR__');
 * // => 'foo-bar'
 */
var kebabCase = createCompounder(function(result, word, index) {
  return result + (index ? '-' : '') + word.toLowerCase();
});

module.exports = kebabCase;
";
        
        $__internal_728eac7ec20d7e9b6aead80ff19d411d5049883cb46e759a413e8a5708a0d328->leave($__internal_728eac7ec20d7e9b6aead80ff19d411d5049883cb46e759a413e8a5708a0d328_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/kebabCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createCompounder = require('./_createCompounder');

/**
 * Converts `string` to
 * [kebab case](https://en.wikipedia.org/wiki/Letter_case#Special_case_styles).
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the kebab cased string.
 * @example
 *
 * _.kebabCase('Foo Bar');
 * // => 'foo-bar'
 *
 * _.kebabCase('fooBar');
 * // => 'foo-bar'
 *
 * _.kebabCase('__FOO_BAR__');
 * // => 'foo-bar'
 */
var kebabCase = createCompounder(function(result, word, index) {
  return result + (index ? '-' : '') + word.toLowerCase();
});

module.exports = kebabCase;
", "node_modules/lodash/kebabCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/kebabCase.js");
    }
}
