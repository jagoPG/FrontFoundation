<?php

/* node_modules/lodash/_escapeHtmlChar.js */
class __TwigTemplate_92bf981aec0f5b74a3a12496f201a41f910d3bca6c0083fdc0ae07c613973638 extends Twig_Template
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
        $__internal_e55a759eff5b0bddeeb261be430bbcb43e91524634fd154dfd088cf4baaab67f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e55a759eff5b0bddeeb261be430bbcb43e91524634fd154dfd088cf4baaab67f->enter($__internal_e55a759eff5b0bddeeb261be430bbcb43e91524634fd154dfd088cf4baaab67f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_escapeHtmlChar.js"));

        // line 1
        echo "var basePropertyOf = require('./_basePropertyOf');

/** Used to map characters to HTML entities. */
var htmlEscapes = {
  '&': '&amp;',
  '<': '&lt;',
  '>': '&gt;',
  '\"': '&quot;',
  \"'\": '&#39;'
};

/**
 * Used by `_.escape` to convert characters to HTML entities.
 *
 * @private
 * @param {string} chr The matched character to escape.
 * @returns {string} Returns the escaped character.
 */
var escapeHtmlChar = basePropertyOf(htmlEscapes);

module.exports = escapeHtmlChar;
";
        
        $__internal_e55a759eff5b0bddeeb261be430bbcb43e91524634fd154dfd088cf4baaab67f->leave($__internal_e55a759eff5b0bddeeb261be430bbcb43e91524634fd154dfd088cf4baaab67f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_escapeHtmlChar.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var basePropertyOf = require('./_basePropertyOf');

/** Used to map characters to HTML entities. */
var htmlEscapes = {
  '&': '&amp;',
  '<': '&lt;',
  '>': '&gt;',
  '\"': '&quot;',
  \"'\": '&#39;'
};

/**
 * Used by `_.escape` to convert characters to HTML entities.
 *
 * @private
 * @param {string} chr The matched character to escape.
 * @returns {string} Returns the escaped character.
 */
var escapeHtmlChar = basePropertyOf(htmlEscapes);

module.exports = escapeHtmlChar;
", "node_modules/lodash/_escapeHtmlChar.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_escapeHtmlChar.js");
    }
}
