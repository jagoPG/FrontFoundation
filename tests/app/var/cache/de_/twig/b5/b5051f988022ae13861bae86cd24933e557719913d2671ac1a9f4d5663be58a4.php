<?php

/* node_modules/lodash/upperCase.js */
class __TwigTemplate_8f74bda9468e6a6a2322c21943e5519a2ad0908538df757908de018c33db66da extends Twig_Template
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
        $__internal_e0a9c254de2a2132c38b26338878e06731d20a18a394eeaa24a2344a2650df2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a9c254de2a2132c38b26338878e06731d20a18a394eeaa24a2344a2650df2e->enter($__internal_e0a9c254de2a2132c38b26338878e06731d20a18a394eeaa24a2344a2650df2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/upperCase.js"));

        // line 1
        echo "var createCompounder = require('./_createCompounder');

/**
 * Converts `string`, as space separated words, to upper case.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the upper cased string.
 * @example
 *
 * _.upperCase('--foo-bar');
 * // => 'FOO BAR'
 *
 * _.upperCase('fooBar');
 * // => 'FOO BAR'
 *
 * _.upperCase('__foo_bar__');
 * // => 'FOO BAR'
 */
var upperCase = createCompounder(function(result, word, index) {
  return result + (index ? ' ' : '') + word.toUpperCase();
});

module.exports = upperCase;
";
        
        $__internal_e0a9c254de2a2132c38b26338878e06731d20a18a394eeaa24a2344a2650df2e->leave($__internal_e0a9c254de2a2132c38b26338878e06731d20a18a394eeaa24a2344a2650df2e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/upperCase.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createCompounder = require('./_createCompounder');

/**
 * Converts `string`, as space separated words, to upper case.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the upper cased string.
 * @example
 *
 * _.upperCase('--foo-bar');
 * // => 'FOO BAR'
 *
 * _.upperCase('fooBar');
 * // => 'FOO BAR'
 *
 * _.upperCase('__foo_bar__');
 * // => 'FOO BAR'
 */
var upperCase = createCompounder(function(result, word, index) {
  return result + (index ? ' ' : '') + word.toUpperCase();
});

module.exports = upperCase;
", "node_modules/lodash/upperCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/upperCase.js");
    }
}
