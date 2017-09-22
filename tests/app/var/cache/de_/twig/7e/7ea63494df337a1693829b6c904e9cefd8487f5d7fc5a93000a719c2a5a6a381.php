<?php

/* node_modules/lodash/_asciiToArray.js */
class __TwigTemplate_212240b8b9be6c943cc407311ef2f57bab06c1b7832ea32c8f5d9bbb9674acd9 extends Twig_Template
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
        $__internal_84b7112b0e728b2c36002293b77d8f17094de9e199e1bff1656cddcf02e8b438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b7112b0e728b2c36002293b77d8f17094de9e199e1bff1656cddcf02e8b438->enter($__internal_84b7112b0e728b2c36002293b77d8f17094de9e199e1bff1656cddcf02e8b438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_asciiToArray.js"));

        // line 1
        echo "/**
 * Converts an ASCII `string` to an array.
 *
 * @private
 * @param {string} string The string to convert.
 * @returns {Array} Returns the converted array.
 */
function asciiToArray(string) {
  return string.split('');
}

module.exports = asciiToArray;
";
        
        $__internal_84b7112b0e728b2c36002293b77d8f17094de9e199e1bff1656cddcf02e8b438->leave($__internal_84b7112b0e728b2c36002293b77d8f17094de9e199e1bff1656cddcf02e8b438_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_asciiToArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Converts an ASCII `string` to an array.
 *
 * @private
 * @param {string} string The string to convert.
 * @returns {Array} Returns the converted array.
 */
function asciiToArray(string) {
  return string.split('');
}

module.exports = asciiToArray;
", "node_modules/lodash/_asciiToArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_asciiToArray.js");
    }
}
