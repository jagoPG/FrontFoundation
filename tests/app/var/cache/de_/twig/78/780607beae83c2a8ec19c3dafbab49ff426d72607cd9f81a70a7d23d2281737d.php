<?php

/* node_modules/lodash/_unescapeHtmlChar.js */
class __TwigTemplate_0c5d65c290857aad0331f47d1886c41fdb6518b60b8319b0a0acaae183053cc7 extends Twig_Template
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
        $__internal_dce859cfef2c7481e51007585efcbf21f0e182c58cd68ac3ab56950603f9f3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce859cfef2c7481e51007585efcbf21f0e182c58cd68ac3ab56950603f9f3dd->enter($__internal_dce859cfef2c7481e51007585efcbf21f0e182c58cd68ac3ab56950603f9f3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_unescapeHtmlChar.js"));

        // line 1
        echo "var basePropertyOf = require('./_basePropertyOf');

/** Used to map HTML entities to characters. */
var htmlUnescapes = {
  '&amp;': '&',
  '&lt;': '<',
  '&gt;': '>',
  '&quot;': '\"',
  '&#39;': \"'\"
};

/**
 * Used by `_.unescape` to convert HTML entities to characters.
 *
 * @private
 * @param {string} chr The matched character to unescape.
 * @returns {string} Returns the unescaped character.
 */
var unescapeHtmlChar = basePropertyOf(htmlUnescapes);

module.exports = unescapeHtmlChar;
";
        
        $__internal_dce859cfef2c7481e51007585efcbf21f0e182c58cd68ac3ab56950603f9f3dd->leave($__internal_dce859cfef2c7481e51007585efcbf21f0e182c58cd68ac3ab56950603f9f3dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_unescapeHtmlChar.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var basePropertyOf = require('./_basePropertyOf');

/** Used to map HTML entities to characters. */
var htmlUnescapes = {
  '&amp;': '&',
  '&lt;': '<',
  '&gt;': '>',
  '&quot;': '\"',
  '&#39;': \"'\"
};

/**
 * Used by `_.unescape` to convert HTML entities to characters.
 *
 * @private
 * @param {string} chr The matched character to unescape.
 * @returns {string} Returns the unescaped character.
 */
var unescapeHtmlChar = basePropertyOf(htmlUnescapes);

module.exports = unescapeHtmlChar;
", "node_modules/lodash/_unescapeHtmlChar.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_unescapeHtmlChar.js");
    }
}
