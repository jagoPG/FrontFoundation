<?php

/* node_modules/lodash/_baseAssignValue.js */
class __TwigTemplate_4eee885224e1216f50bb6bbb425367f225b3583ff05c8df4b9078309748f036f extends Twig_Template
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
        $__internal_90f5f691b79fc5088a03689cc15679260e659bb75efcd48a28a1dc51b547cd0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f5f691b79fc5088a03689cc15679260e659bb75efcd48a28a1dc51b547cd0f->enter($__internal_90f5f691b79fc5088a03689cc15679260e659bb75efcd48a28a1dc51b547cd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseAssignValue.js"));

        // line 1
        echo "var defineProperty = require('./_defineProperty');

/**
 * The base implementation of `assignValue` and `assignMergeValue` without
 * value checks.
 *
 * @private
 * @param {Object} object The object to modify.
 * @param {string} key The key of the property to assign.
 * @param {*} value The value to assign.
 */
function baseAssignValue(object, key, value) {
  if (key == '__proto__' && defineProperty) {
    defineProperty(object, key, {
      'configurable': true,
      'enumerable': true,
      'value': value,
      'writable': true
    });
  } else {
    object[key] = value;
  }
}

module.exports = baseAssignValue;
";
        
        $__internal_90f5f691b79fc5088a03689cc15679260e659bb75efcd48a28a1dc51b547cd0f->leave($__internal_90f5f691b79fc5088a03689cc15679260e659bb75efcd48a28a1dc51b547cd0f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseAssignValue.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var defineProperty = require('./_defineProperty');

/**
 * The base implementation of `assignValue` and `assignMergeValue` without
 * value checks.
 *
 * @private
 * @param {Object} object The object to modify.
 * @param {string} key The key of the property to assign.
 * @param {*} value The value to assign.
 */
function baseAssignValue(object, key, value) {
  if (key == '__proto__' && defineProperty) {
    defineProperty(object, key, {
      'configurable': true,
      'enumerable': true,
      'value': value,
      'writable': true
    });
  } else {
    object[key] = value;
  }
}

module.exports = baseAssignValue;
", "node_modules/lodash/_baseAssignValue.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseAssignValue.js");
    }
}
