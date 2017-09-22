<?php

/* node_modules/lodash/toUpper.js */
class __TwigTemplate_b2139bac2a51bff5363933715dcda6e695413aa86adf958209d59fba29ac393f extends Twig_Template
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
        $__internal_88073a707cdc5d0c21d9e98e1c60a9b4f4bc6bda3cd67acd4601e2934c41b89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88073a707cdc5d0c21d9e98e1c60a9b4f4bc6bda3cd67acd4601e2934c41b89c->enter($__internal_88073a707cdc5d0c21d9e98e1c60a9b4f4bc6bda3cd67acd4601e2934c41b89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toUpper.js"));

        // line 1
        echo "var toString = require('./toString');

/**
 * Converts `string`, as a whole, to upper case just like
 * [String#toUpperCase](https://mdn.io/toUpperCase).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the upper cased string.
 * @example
 *
 * _.toUpper('--foo-bar--');
 * // => '--FOO-BAR--'
 *
 * _.toUpper('fooBar');
 * // => 'FOOBAR'
 *
 * _.toUpper('__foo_bar__');
 * // => '__FOO_BAR__'
 */
function toUpper(value) {
  return toString(value).toUpperCase();
}

module.exports = toUpper;
";
        
        $__internal_88073a707cdc5d0c21d9e98e1c60a9b4f4bc6bda3cd67acd4601e2934c41b89c->leave($__internal_88073a707cdc5d0c21d9e98e1c60a9b4f4bc6bda3cd67acd4601e2934c41b89c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toUpper.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toString = require('./toString');

/**
 * Converts `string`, as a whole, to upper case just like
 * [String#toUpperCase](https://mdn.io/toUpperCase).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to convert.
 * @returns {string} Returns the upper cased string.
 * @example
 *
 * _.toUpper('--foo-bar--');
 * // => '--FOO-BAR--'
 *
 * _.toUpper('fooBar');
 * // => 'FOOBAR'
 *
 * _.toUpper('__foo_bar__');
 * // => '__FOO_BAR__'
 */
function toUpper(value) {
  return toString(value).toUpperCase();
}

module.exports = toUpper;
", "node_modules/lodash/toUpper.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toUpper.js");
    }
}
