<?php

/* node_modules/lodash/snakeCase.js */
class __TwigTemplate_3e3efc0ec083844c6e62fd2b1f037a9e8ce9bfb908ecb516171d6483d1a35133 extends Twig_Template
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
        $__internal_7fa566c9f553fc3e6ad924a0182f03f027311468631ea512691601f20c46b2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa566c9f553fc3e6ad924a0182f03f027311468631ea512691601f20c46b2a5->enter($__internal_7fa566c9f553fc3e6ad924a0182f03f027311468631ea512691601f20c46b2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/snakeCase.js"));

        // line 1
        echo "var createCompounder = require('./_createCompounder');

/**
 * Converts `string` to
 * [snake case](https://en.wikipedia.org/wiki/Snake_case).
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the snake cased string.
 * @example
 *
 * _.snakeCase('Foo Bar');
 * // => 'foo_bar'
 *
 * _.snakeCase('fooBar');
 * // => 'foo_bar'
 *
 * _.snakeCase('--FOO-BAR--');
 * // => 'foo_bar'
 */
var snakeCase = createCompounder(function(result, word, index) {
  return result + (index ? '_' : '') + word.toLowerCase();
});

module.exports = snakeCase;
";
        
        $__internal_7fa566c9f553fc3e6ad924a0182f03f027311468631ea512691601f20c46b2a5->leave($__internal_7fa566c9f553fc3e6ad924a0182f03f027311468631ea512691601f20c46b2a5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/snakeCase.js";
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
 * [snake case](https://en.wikipedia.org/wiki/Snake_case).
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the snake cased string.
 * @example
 *
 * _.snakeCase('Foo Bar');
 * // => 'foo_bar'
 *
 * _.snakeCase('fooBar');
 * // => 'foo_bar'
 *
 * _.snakeCase('--FOO-BAR--');
 * // => 'foo_bar'
 */
var snakeCase = createCompounder(function(result, word, index) {
  return result + (index ? '_' : '') + word.toLowerCase();
});

module.exports = snakeCase;
", "node_modules/lodash/snakeCase.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/snakeCase.js");
    }
}
