<?php

/* node_modules/lodash/_hasUnicodeWord.js */
class __TwigTemplate_b693f94440727a045c10e631c602bc9c85083a0573369a2c1432b299be4846f3 extends Twig_Template
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
        $__internal_b9c03b415bc84eb142c2a7c46daa3382efc1bf8a60f4eb124fdecbdf68d65261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c03b415bc84eb142c2a7c46daa3382efc1bf8a60f4eb124fdecbdf68d65261->enter($__internal_b9c03b415bc84eb142c2a7c46daa3382efc1bf8a60f4eb124fdecbdf68d65261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_hasUnicodeWord.js"));

        // line 1
        echo "/** Used to detect strings that need a more robust regexp to match words. */
var reHasUnicodeWord = /[a-z][A-Z]|[A-Z]{2,}[a-z]|[0-9][a-zA-Z]|[a-zA-Z][0-9]|[^a-zA-Z0-9 ]/;

/**
 * Checks if `string` contains a word composed of Unicode symbols.
 *
 * @private
 * @param {string} string The string to inspect.
 * @returns {boolean} Returns `true` if a word is found, else `false`.
 */
function hasUnicodeWord(string) {
  return reHasUnicodeWord.test(string);
}

module.exports = hasUnicodeWord;
";
        
        $__internal_b9c03b415bc84eb142c2a7c46daa3382efc1bf8a60f4eb124fdecbdf68d65261->leave($__internal_b9c03b415bc84eb142c2a7c46daa3382efc1bf8a60f4eb124fdecbdf68d65261_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_hasUnicodeWord.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to detect strings that need a more robust regexp to match words. */
var reHasUnicodeWord = /[a-z][A-Z]|[A-Z]{2,}[a-z]|[0-9][a-zA-Z]|[a-zA-Z][0-9]|[^a-zA-Z0-9 ]/;

/**
 * Checks if `string` contains a word composed of Unicode symbols.
 *
 * @private
 * @param {string} string The string to inspect.
 * @returns {boolean} Returns `true` if a word is found, else `false`.
 */
function hasUnicodeWord(string) {
  return reHasUnicodeWord.test(string);
}

module.exports = hasUnicodeWord;
", "node_modules/lodash/_hasUnicodeWord.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_hasUnicodeWord.js");
    }
}
