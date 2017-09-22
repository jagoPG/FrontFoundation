<?php

/* node_modules/lodash/_stringSize.js */
class __TwigTemplate_86ebb70b8f90cea9035b8d22ffc42f634fbf72399ba5fd67f4012412685420e3 extends Twig_Template
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
        $__internal_8fde5c4911959fde68b241690b560ed3c7aba81371439ce3b76ee795ed0cd9d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fde5c4911959fde68b241690b560ed3c7aba81371439ce3b76ee795ed0cd9d7->enter($__internal_8fde5c4911959fde68b241690b560ed3c7aba81371439ce3b76ee795ed0cd9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_stringSize.js"));

        // line 1
        echo "var asciiSize = require('./_asciiSize'),
    hasUnicode = require('./_hasUnicode'),
    unicodeSize = require('./_unicodeSize');

/**
 * Gets the number of symbols in `string`.
 *
 * @private
 * @param {string} string The string to inspect.
 * @returns {number} Returns the string size.
 */
function stringSize(string) {
  return hasUnicode(string)
    ? unicodeSize(string)
    : asciiSize(string);
}

module.exports = stringSize;
";
        
        $__internal_8fde5c4911959fde68b241690b560ed3c7aba81371439ce3b76ee795ed0cd9d7->leave($__internal_8fde5c4911959fde68b241690b560ed3c7aba81371439ce3b76ee795ed0cd9d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_stringSize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var asciiSize = require('./_asciiSize'),
    hasUnicode = require('./_hasUnicode'),
    unicodeSize = require('./_unicodeSize');

/**
 * Gets the number of symbols in `string`.
 *
 * @private
 * @param {string} string The string to inspect.
 * @returns {number} Returns the string size.
 */
function stringSize(string) {
  return hasUnicode(string)
    ? unicodeSize(string)
    : asciiSize(string);
}

module.exports = stringSize;
", "node_modules/lodash/_stringSize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_stringSize.js");
    }
}
