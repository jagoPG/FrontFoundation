<?php

/* node_modules/lodash/toLower.js */
class __TwigTemplate_47992653ced53efae6c5b59d678a31c9d8cda7c3bc384e146be9a76762fabfb7 extends Twig_Template
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
        $__internal_03867025e9eb51c0d0d39066a6f12105cdfd891d1e1c66e5a7a9052d355db383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03867025e9eb51c0d0d39066a6f12105cdfd891d1e1c66e5a7a9052d355db383->enter($__internal_03867025e9eb51c0d0d39066a6f12105cdfd891d1e1c66e5a7a9052d355db383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toLower.js"));

        // line 1
        echo "var toString = require('./toString');

/**
 * Converts `string`, as a whole, to lower case just like
 * [String#toLowerCase](https://mdn.io/toLowerCase).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the lower cased string.
 * @example
 *
 * _.toLower('--Foo-Bar--');
 * // => '--foo-bar--'
 *
 * _.toLower('fooBar');
 * // => 'foobar'
 *
 * _.toLower('__FOO_BAR__');
 * // => '__foo_bar__'
 */
function toLower(value) {
  return toString(value).toLowerCase();
}

module.exports = toLower;
";
        
        $__internal_03867025e9eb51c0d0d39066a6f12105cdfd891d1e1c66e5a7a9052d355db383->leave($__internal_03867025e9eb51c0d0d39066a6f12105cdfd891d1e1c66e5a7a9052d355db383_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toLower.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toString = require('./toString');

/**
 * Converts `string`, as a whole, to lower case just like
 * [String#toLowerCase](https://mdn.io/toLowerCase).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the lower cased string.
 * @example
 *
 * _.toLower('--Foo-Bar--');
 * // => '--foo-bar--'
 *
 * _.toLower('fooBar');
 * // => 'foobar'
 *
 * _.toLower('__FOO_BAR__');
 * // => '__foo_bar__'
 */
function toLower(value) {
  return toString(value).toLowerCase();
}

module.exports = toLower;
", "node_modules/lodash/toLower.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toLower.js");
    }
}
