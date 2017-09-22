<?php

/* node_modules/lodash/head.js */
class __TwigTemplate_ac05bcf86b8516a114e43196d5c1d282fead9d5ff516c0aa95240fab5543a0e5 extends Twig_Template
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
        $__internal_088b5081973e906358a71dab5ea25add1b3f05238f0804d0d86b126209ab3eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088b5081973e906358a71dab5ea25add1b3f05238f0804d0d86b126209ab3eb1->enter($__internal_088b5081973e906358a71dab5ea25add1b3f05238f0804d0d86b126209ab3eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/head.js"));

        // line 1
        echo "/**
 * Gets the first element of `array`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @alias first
 * @category Array
 * @param {Array} array The array to query.
 * @returns {*} Returns the first element of `array`.
 * @example
 *
 * _.head([1, 2, 3]);
 * // => 1
 *
 * _.head([]);
 * // => undefined
 */
function head(array) {
  return (array && array.length) ? array[0] : undefined;
}

module.exports = head;
";
        
        $__internal_088b5081973e906358a71dab5ea25add1b3f05238f0804d0d86b126209ab3eb1->leave($__internal_088b5081973e906358a71dab5ea25add1b3f05238f0804d0d86b126209ab3eb1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/head.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Gets the first element of `array`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @alias first
 * @category Array
 * @param {Array} array The array to query.
 * @returns {*} Returns the first element of `array`.
 * @example
 *
 * _.head([1, 2, 3]);
 * // => 1
 *
 * _.head([]);
 * // => undefined
 */
function head(array) {
  return (array && array.length) ? array[0] : undefined;
}

module.exports = head;
", "node_modules/lodash/head.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/head.js");
    }
}
