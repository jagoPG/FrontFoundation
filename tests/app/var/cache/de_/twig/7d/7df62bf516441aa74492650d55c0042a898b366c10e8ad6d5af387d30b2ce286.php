<?php

/* node_modules/lodash/startCase.js */
class __TwigTemplate_022d8f23a83d519563d66b50fb0696dee566ba9a9cf8671e2dd32b1aa540f197 extends Twig_Template
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
        $__internal_4a4d78c11aa6d6caf557dc11da62fd72d3541eccf4f809919fdb0136dfbf97a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4d78c11aa6d6caf557dc11da62fd72d3541eccf4f809919fdb0136dfbf97a4->enter($__internal_4a4d78c11aa6d6caf557dc11da62fd72d3541eccf4f809919fdb0136dfbf97a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/startCase.js"));

        // line 1
        echo "var createCompounder = require('./_createCompounder'),
    upperFirst = require('./upperFirst');

/**
 * Converts `string` to
 * [start case](https://en.wikipedia.org/wiki/Letter_case#Stylistic_or_specialised_usage).
 *
 * @static
 * @memberOf _
 * @since 3.1.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the start cased string.
 * @example
 *
 * _.startCase('--foo-bar--');
 * // => 'Foo Bar'
 *
 * _.startCase('fooBar');
 * // => 'Foo Bar'
 *
 * _.startCase('__FOO_BAR__');
 * // => 'FOO BAR'
 */
var startCase = createCompounder(function(result, word, index) {
  return result + (index ? ' ' : '') + upperFirst(word);
});

module.exports = startCase;
";
        
        $__internal_4a4d78c11aa6d6caf557dc11da62fd72d3541eccf4f809919fdb0136dfbf97a4->leave($__internal_4a4d78c11aa6d6caf557dc11da62fd72d3541eccf4f809919fdb0136dfbf97a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/startCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createCompounder = require('./_createCompounder'),
    upperFirst = require('./upperFirst');

/**
 * Converts `string` to
 * [start case](https://en.wikipedia.org/wiki/Letter_case#Stylistic_or_specialised_usage).
 *
 * @static
 * @memberOf _
 * @since 3.1.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the start cased string.
 * @example
 *
 * _.startCase('--foo-bar--');
 * // => 'Foo Bar'
 *
 * _.startCase('fooBar');
 * // => 'Foo Bar'
 *
 * _.startCase('__FOO_BAR__');
 * // => 'FOO BAR'
 */
var startCase = createCompounder(function(result, word, index) {
  return result + (index ? ' ' : '') + upperFirst(word);
});

module.exports = startCase;
", "node_modules/lodash/startCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/startCase.js");
    }
}
