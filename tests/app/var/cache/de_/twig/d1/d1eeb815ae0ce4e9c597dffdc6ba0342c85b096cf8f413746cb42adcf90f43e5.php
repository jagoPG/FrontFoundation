<?php

/* node_modules/lodash/_createAssigner.js */
class __TwigTemplate_ec34aa0c66856c8ab9ce06120509144093e1283d0c591b361e9365596909ea62 extends Twig_Template
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
        $__internal_0f75b619a3838c0aa4136a33f33aba210af7dda3f50b4f9e9353b58b3b063921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f75b619a3838c0aa4136a33f33aba210af7dda3f50b4f9e9353b58b3b063921->enter($__internal_0f75b619a3838c0aa4136a33f33aba210af7dda3f50b4f9e9353b58b3b063921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createAssigner.js"));

        // line 1
        echo "var baseRest = require('./_baseRest'),
    isIterateeCall = require('./_isIterateeCall');

/**
 * Creates a function like `_.assign`.
 *
 * @private
 * @param {Function} assigner The function to assign values.
 * @returns {Function} Returns the new assigner function.
 */
function createAssigner(assigner) {
  return baseRest(function(object, sources) {
    var index = -1,
        length = sources.length,
        customizer = length > 1 ? sources[length - 1] : undefined,
        guard = length > 2 ? sources[2] : undefined;

    customizer = (assigner.length > 3 && typeof customizer == 'function')
      ? (length--, customizer)
      : undefined;

    if (guard && isIterateeCall(sources[0], sources[1], guard)) {
      customizer = length < 3 ? undefined : customizer;
      length = 1;
    }
    object = Object(object);
    while (++index < length) {
      var source = sources[index];
      if (source) {
        assigner(object, source, index, customizer);
      }
    }
    return object;
  });
}

module.exports = createAssigner;
";
        
        $__internal_0f75b619a3838c0aa4136a33f33aba210af7dda3f50b4f9e9353b58b3b063921->leave($__internal_0f75b619a3838c0aa4136a33f33aba210af7dda3f50b4f9e9353b58b3b063921_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createAssigner.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseRest = require('./_baseRest'),
    isIterateeCall = require('./_isIterateeCall');

/**
 * Creates a function like `_.assign`.
 *
 * @private
 * @param {Function} assigner The function to assign values.
 * @returns {Function} Returns the new assigner function.
 */
function createAssigner(assigner) {
  return baseRest(function(object, sources) {
    var index = -1,
        length = sources.length,
        customizer = length > 1 ? sources[length - 1] : undefined,
        guard = length > 2 ? sources[2] : undefined;

    customizer = (assigner.length > 3 && typeof customizer == 'function')
      ? (length--, customizer)
      : undefined;

    if (guard && isIterateeCall(sources[0], sources[1], guard)) {
      customizer = length < 3 ? undefined : customizer;
      length = 1;
    }
    object = Object(object);
    while (++index < length) {
      var source = sources[index];
      if (source) {
        assigner(object, source, index, customizer);
      }
    }
    return object;
  });
}

module.exports = createAssigner;
", "node_modules/lodash/_createAssigner.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createAssigner.js");
    }
}
