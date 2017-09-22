<?php

/* node_modules/lodash/_asciiWords.js */
class __TwigTemplate_b00b2885ab874af54a863a74608aeeba5165675d36fbcb031d8af670cd50b3a0 extends Twig_Template
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
        $__internal_f3428049bbc4f785e3f60926e2b55db1f1f41df830d3a877b8535d89d85e7e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3428049bbc4f785e3f60926e2b55db1f1f41df830d3a877b8535d89d85e7e59->enter($__internal_f3428049bbc4f785e3f60926e2b55db1f1f41df830d3a877b8535d89d85e7e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_asciiWords.js"));

        // line 1
        echo "/** Used to match words composed of alphanumeric characters. */
var reAsciiWord = /[^\\x00-\\x2f\\x3a-\\x40\\x5b-\\x60\\x7b-\\x7f]+/g;

/**
 * Splits an ASCII `string` into an array of its words.
 *
 * @private
 * @param {string} The string to inspect.
 * @returns {Array} Returns the words of `string`.
 */
function asciiWords(string) {
  return string.match(reAsciiWord) || [];
}

module.exports = asciiWords;
";
        
        $__internal_f3428049bbc4f785e3f60926e2b55db1f1f41df830d3a877b8535d89d85e7e59->leave($__internal_f3428049bbc4f785e3f60926e2b55db1f1f41df830d3a877b8535d89d85e7e59_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_asciiWords.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to match words composed of alphanumeric characters. */
var reAsciiWord = /[^\\x00-\\x2f\\x3a-\\x40\\x5b-\\x60\\x7b-\\x7f]+/g;

/**
 * Splits an ASCII `string` into an array of its words.
 *
 * @private
 * @param {string} The string to inspect.
 * @returns {Array} Returns the words of `string`.
 */
function asciiWords(string) {
  return string.match(reAsciiWord) || [];
}

module.exports = asciiWords;
", "node_modules/lodash/_asciiWords.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_asciiWords.js");
    }
}
