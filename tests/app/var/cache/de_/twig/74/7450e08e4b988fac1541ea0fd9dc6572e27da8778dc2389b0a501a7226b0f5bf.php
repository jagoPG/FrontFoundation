<?php

/* node_modules/lodash/escape.js */
class __TwigTemplate_7bcbd3d3d43bdbd1647dbabb174f31093c54dddc29e8b7d6b7aa60d86ea35d86 extends Twig_Template
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
        $__internal_62e0ba0e0da118a45f31d1a86ff11d410f048fc03b6fc6a81e4ba3a9a0e2d13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e0ba0e0da118a45f31d1a86ff11d410f048fc03b6fc6a81e4ba3a9a0e2d13c->enter($__internal_62e0ba0e0da118a45f31d1a86ff11d410f048fc03b6fc6a81e4ba3a9a0e2d13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/escape.js"));

        // line 1
        echo "var escapeHtmlChar = require('./_escapeHtmlChar'),
    toString = require('./toString');

/** Used to match HTML entities and HTML characters. */
var reUnescapedHtml = /[&<>\"']/g,
    reHasUnescapedHtml = RegExp(reUnescapedHtml.source);

/**
 * Converts the characters \"&\", \"<\", \">\", '\"', and \"'\" in `string` to their
 * corresponding HTML entities.
 *
 * **Note:** No other characters are escaped. To escape additional
 * characters use a third-party library like [_he_](https://mths.be/he).
 *
 * Though the \">\" character is escaped for symmetry, characters like
 * \">\" and \"/\" don't need escaping in HTML and have no special meaning
 * unless they're part of a tag or unquoted attribute value. See
 * [Mathias Bynens's article](https://mathiasbynens.be/notes/ambiguous-ampersands)
 * (under \"semi-related fun fact\") for more details.
 *
 * When working with HTML you should always
 * [quote attribute values](http://wonko.com/post/html-escaping) to reduce
 * XSS vectors.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category String
 * @param {string} [string=''] The string to escape.
 * @returns {string} Returns the escaped string.
 * @example
 *
 * _.escape('fred, barney, & pebbles');
 * // => 'fred, barney, &amp; pebbles'
 */
function escape(string) {
  string = toString(string);
  return (string && reHasUnescapedHtml.test(string))
    ? string.replace(reUnescapedHtml, escapeHtmlChar)
    : string;
}

module.exports = escape;
";
        
        $__internal_62e0ba0e0da118a45f31d1a86ff11d410f048fc03b6fc6a81e4ba3a9a0e2d13c->leave($__internal_62e0ba0e0da118a45f31d1a86ff11d410f048fc03b6fc6a81e4ba3a9a0e2d13c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/escape.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var escapeHtmlChar = require('./_escapeHtmlChar'),
    toString = require('./toString');

/** Used to match HTML entities and HTML characters. */
var reUnescapedHtml = /[&<>\"']/g,
    reHasUnescapedHtml = RegExp(reUnescapedHtml.source);

/**
 * Converts the characters \"&\", \"<\", \">\", '\"', and \"'\" in `string` to their
 * corresponding HTML entities.
 *
 * **Note:** No other characters are escaped. To escape additional
 * characters use a third-party library like [_he_](https://mths.be/he).
 *
 * Though the \">\" character is escaped for symmetry, characters like
 * \">\" and \"/\" don't need escaping in HTML and have no special meaning
 * unless they're part of a tag or unquoted attribute value. See
 * [Mathias Bynens's article](https://mathiasbynens.be/notes/ambiguous-ampersands)
 * (under \"semi-related fun fact\") for more details.
 *
 * When working with HTML you should always
 * [quote attribute values](http://wonko.com/post/html-escaping) to reduce
 * XSS vectors.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category String
 * @param {string} [string=''] The string to escape.
 * @returns {string} Returns the escaped string.
 * @example
 *
 * _.escape('fred, barney, & pebbles');
 * // => 'fred, barney, &amp; pebbles'
 */
function escape(string) {
  string = toString(string);
  return (string && reHasUnescapedHtml.test(string))
    ? string.replace(reUnescapedHtml, escapeHtmlChar)
    : string;
}

module.exports = escape;
", "node_modules/lodash/escape.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/escape.js");
    }
}
