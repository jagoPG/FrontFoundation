<?php

/* node_modules/lodash/_baseHasIn.js */
class __TwigTemplate_9e72c6dfaeefc9723ad0467d8fa1a93fc1c271dc95781cbb5c81304140f9d4ba extends Twig_Template
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
        $__internal_06b34448d62d19d552aadfa8678ad5e3ec0424c91f5c94e5959b064e9e391695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b34448d62d19d552aadfa8678ad5e3ec0424c91f5c94e5959b064e9e391695->enter($__internal_06b34448d62d19d552aadfa8678ad5e3ec0424c91f5c94e5959b064e9e391695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseHasIn.js"));

        // line 1
        echo "/**
 * The base implementation of `_.hasIn` without support for deep paths.
 *
 * @private
 * @param {Object} [object] The object to query.
 * @param {Array|string} key The key to check.
 * @returns {boolean} Returns `true` if `key` exists, else `false`.
 */
function baseHasIn(object, key) {
  return object != null && key in Object(object);
}

module.exports = baseHasIn;
";
        
        $__internal_06b34448d62d19d552aadfa8678ad5e3ec0424c91f5c94e5959b064e9e391695->leave($__internal_06b34448d62d19d552aadfa8678ad5e3ec0424c91f5c94e5959b064e9e391695_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseHasIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.hasIn` without support for deep paths.
 *
 * @private
 * @param {Object} [object] The object to query.
 * @param {Array|string} key The key to check.
 * @returns {boolean} Returns `true` if `key` exists, else `false`.
 */
function baseHasIn(object, key) {
  return object != null && key in Object(object);
}

module.exports = baseHasIn;
", "node_modules/lodash/_baseHasIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseHasIn.js");
    }
}
