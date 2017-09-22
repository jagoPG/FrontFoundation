<?php

/* node_modules/lodash/last.js */
class __TwigTemplate_d64f50775e957f320eef937beecdfd2e83d1dec0d90f62da4daf30b48f1bc3da extends Twig_Template
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
        $__internal_a782b1528f369cece9730d3e44d8bbdb94a8650aaae0889cc98e27b2c3c564e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a782b1528f369cece9730d3e44d8bbdb94a8650aaae0889cc98e27b2c3c564e7->enter($__internal_a782b1528f369cece9730d3e44d8bbdb94a8650aaae0889cc98e27b2c3c564e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/last.js"));

        // line 1
        echo "/**
 * Gets the last element of `array`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to query.
 * @returns {*} Returns the last element of `array`.
 * @example
 *
 * _.last([1, 2, 3]);
 * // => 3
 */
function last(array) {
  var length = array == null ? 0 : array.length;
  return length ? array[length - 1] : undefined;
}

module.exports = last;
";
        
        $__internal_a782b1528f369cece9730d3e44d8bbdb94a8650aaae0889cc98e27b2c3c564e7->leave($__internal_a782b1528f369cece9730d3e44d8bbdb94a8650aaae0889cc98e27b2c3c564e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/last.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Gets the last element of `array`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to query.
 * @returns {*} Returns the last element of `array`.
 * @example
 *
 * _.last([1, 2, 3]);
 * // => 3
 */
function last(array) {
  var length = array == null ? 0 : array.length;
  return length ? array[length - 1] : undefined;
}

module.exports = last;
", "node_modules/lodash/last.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/last.js");
    }
}
