<?php

/* node_modules/lodash/_asciiSize.js */
class __TwigTemplate_89c5d4679543c2648de9fac47a11443757c6a3ab26039a0b631717031cb5cfbb extends Twig_Template
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
        $__internal_a463fd38243a468d1c9ffbbd746208c64b129833f43136f1c173597a2b65dd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a463fd38243a468d1c9ffbbd746208c64b129833f43136f1c173597a2b65dd81->enter($__internal_a463fd38243a468d1c9ffbbd746208c64b129833f43136f1c173597a2b65dd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_asciiSize.js"));

        // line 1
        echo "var baseProperty = require('./_baseProperty');

/**
 * Gets the size of an ASCII `string`.
 *
 * @private
 * @param {string} string The string inspect.
 * @returns {number} Returns the string size.
 */
var asciiSize = baseProperty('length');

module.exports = asciiSize;
";
        
        $__internal_a463fd38243a468d1c9ffbbd746208c64b129833f43136f1c173597a2b65dd81->leave($__internal_a463fd38243a468d1c9ffbbd746208c64b129833f43136f1c173597a2b65dd81_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_asciiSize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseProperty = require('./_baseProperty');

/**
 * Gets the size of an ASCII `string`.
 *
 * @private
 * @param {string} string The string inspect.
 * @returns {number} Returns the string size.
 */
var asciiSize = baseProperty('length');

module.exports = asciiSize;
", "node_modules/lodash/_asciiSize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_asciiSize.js");
    }
}
