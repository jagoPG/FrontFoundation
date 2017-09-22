<?php

/* node_modules/lodash/escapeRegExp.js */
class __TwigTemplate_ca628198755d36b9756e3de78cb23f91118c99e39b8cbcad6d30794a150b141b extends Twig_Template
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
        $__internal_5feb3ca7f23a48841df829c7bf88071901c784506073af7c585cc50f986b509e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5feb3ca7f23a48841df829c7bf88071901c784506073af7c585cc50f986b509e->enter($__internal_5feb3ca7f23a48841df829c7bf88071901c784506073af7c585cc50f986b509e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/escapeRegExp.js"));

        // line 1
        echo "var toString = require('./toString');

/**
 * Used to match `RegExp`
 * [syntax characters](http://ecma-international.org/ecma-262/7.0/#sec-patterns).
 */
var reRegExpChar = /[\\\\^\$.*+?()[\\]{}|]/g,
    reHasRegExpChar = RegExp(reRegExpChar.source);

/**
 * Escapes the `RegExp` special characters \"^\", \"\$\", \"\\\", \".\", \"*\", \"+\",
 * \"?\", \"(\", \")\", \"[\", \"]\", \"{\", \"}\", and \"|\" in `string`.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to escape.
 * @returns {string} Returns the escaped string.
 * @example
 *
 * _.escapeRegExp('[lodash](https://lodash.com/)');
 * // => '\\[lodash\\]\\(https://lodash\\.com/\\)'
 */
function escapeRegExp(string) {
  string = toString(string);
  return (string && reHasRegExpChar.test(string))
    ? string.replace(reRegExpChar, '\\\\\$&')
    : string;
}

module.exports = escapeRegExp;
";
        
        $__internal_5feb3ca7f23a48841df829c7bf88071901c784506073af7c585cc50f986b509e->leave($__internal_5feb3ca7f23a48841df829c7bf88071901c784506073af7c585cc50f986b509e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/escapeRegExp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toString = require('./toString');

/**
 * Used to match `RegExp`
 * [syntax characters](http://ecma-international.org/ecma-262/7.0/#sec-patterns).
 */
var reRegExpChar = /[\\\\^\$.*+?()[\\]{}|]/g,
    reHasRegExpChar = RegExp(reRegExpChar.source);

/**
 * Escapes the `RegExp` special characters \"^\", \"\$\", \"\\\", \".\", \"*\", \"+\",
 * \"?\", \"(\", \")\", \"[\", \"]\", \"{\", \"}\", and \"|\" in `string`.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category String
 * @param {string} [string=''] The string to escape.
 * @returns {string} Returns the escaped string.
 * @example
 *
 * _.escapeRegExp('[lodash](https://lodash.com/)');
 * // => '\\[lodash\\]\\(https://lodash\\.com/\\)'
 */
function escapeRegExp(string) {
  string = toString(string);
  return (string && reHasRegExpChar.test(string))
    ? string.replace(reRegExpChar, '\\\\\$&')
    : string;
}

module.exports = escapeRegExp;
", "node_modules/lodash/escapeRegExp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/escapeRegExp.js");
    }
}
