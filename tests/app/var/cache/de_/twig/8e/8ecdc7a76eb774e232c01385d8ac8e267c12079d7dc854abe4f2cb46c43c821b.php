<?php

/* node_modules/lodash/replace.js */
class __TwigTemplate_947a28235bcfc2ab6223ef992929ac7e99611ec23608531c0c52edbba720b8fd extends Twig_Template
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
        $__internal_4ca514da26a34d083eba5fecb0a31da7267e0a71105b0e33fb5068bcb4e9c7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca514da26a34d083eba5fecb0a31da7267e0a71105b0e33fb5068bcb4e9c7ae->enter($__internal_4ca514da26a34d083eba5fecb0a31da7267e0a71105b0e33fb5068bcb4e9c7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/replace.js"));

        // line 1
        echo "var toString = require('./toString');

/**
 * Replaces matches for `pattern` in `string` with `replacement`.
 *
 * **Note:** This method is based on
 * [`String#replace`](https://mdn.io/String/replace).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to modify.
 * @param {RegExp|string} pattern The pattern to replace.
 * @param {Function|string} replacement The match replacement.
 * @returns {string} Returns the modified string.
 * @example
 *
 * _.replace('Hi Fred', 'Fred', 'Barney');
 * // => 'Hi Barney'
 */
function replace() {
  var args = arguments,
      string = toString(args[0]);

  return args.length < 3 ? string : string.replace(args[1], args[2]);
}

module.exports = replace;
";
        
        $__internal_4ca514da26a34d083eba5fecb0a31da7267e0a71105b0e33fb5068bcb4e9c7ae->leave($__internal_4ca514da26a34d083eba5fecb0a31da7267e0a71105b0e33fb5068bcb4e9c7ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/replace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toString = require('./toString');

/**
 * Replaces matches for `pattern` in `string` with `replacement`.
 *
 * **Note:** This method is based on
 * [`String#replace`](https://mdn.io/String/replace).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category String
 * @param {string} [string=''] The string to modify.
 * @param {RegExp|string} pattern The pattern to replace.
 * @param {Function|string} replacement The match replacement.
 * @returns {string} Returns the modified string.
 * @example
 *
 * _.replace('Hi Fred', 'Fred', 'Barney');
 * // => 'Hi Barney'
 */
function replace() {
  var args = arguments,
      string = toString(args[0]);

  return args.length < 3 ? string : string.replace(args[1], args[2]);
}

module.exports = replace;
", "node_modules/lodash/replace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/replace.js");
    }
}
