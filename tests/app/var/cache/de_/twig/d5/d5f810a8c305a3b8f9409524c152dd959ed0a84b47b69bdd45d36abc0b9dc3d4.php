<?php

/* node_modules/lodash/toIterator.js */
class __TwigTemplate_4a48cb6eac26df6118cad263d40135f96529ae1e7d03efe47f6ca65afb7fc8fb extends Twig_Template
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
        $__internal_25ff1cc895c047f4ae469532539113828c31bb254718db9657c3d9454423e9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ff1cc895c047f4ae469532539113828c31bb254718db9657c3d9454423e9fd->enter($__internal_25ff1cc895c047f4ae469532539113828c31bb254718db9657c3d9454423e9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toIterator.js"));

        // line 1
        echo "/**
 * Enables the wrapper to be iterable.
 *
 * @name Symbol.iterator
 * @memberOf _
 * @since 4.0.0
 * @category Seq
 * @returns {Object} Returns the wrapper object.
 * @example
 *
 * var wrapped = _([1, 2]);
 *
 * wrapped[Symbol.iterator]() === wrapped;
 * // => true
 *
 * Array.from(wrapped);
 * // => [1, 2]
 */
function wrapperToIterator() {
  return this;
}

module.exports = wrapperToIterator;
";
        
        $__internal_25ff1cc895c047f4ae469532539113828c31bb254718db9657c3d9454423e9fd->leave($__internal_25ff1cc895c047f4ae469532539113828c31bb254718db9657c3d9454423e9fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toIterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Enables the wrapper to be iterable.
 *
 * @name Symbol.iterator
 * @memberOf _
 * @since 4.0.0
 * @category Seq
 * @returns {Object} Returns the wrapper object.
 * @example
 *
 * var wrapped = _([1, 2]);
 *
 * wrapped[Symbol.iterator]() === wrapped;
 * // => true
 *
 * Array.from(wrapped);
 * // => [1, 2]
 */
function wrapperToIterator() {
  return this;
}

module.exports = wrapperToIterator;
", "node_modules/lodash/toIterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toIterator.js");
    }
}
