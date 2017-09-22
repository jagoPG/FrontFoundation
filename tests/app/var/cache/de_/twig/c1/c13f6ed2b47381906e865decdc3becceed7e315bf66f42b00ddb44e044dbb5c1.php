<?php

/* node_modules/lodash/_wrapperClone.js */
class __TwigTemplate_11d8b879a6cbe49c965a549214ee5d0ec83df96563826d642f4b4a577861c1e8 extends Twig_Template
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
        $__internal_a2e629a1fe9732271f51a2fca9c06e9a7c23ec5d7dc55fbe96afe2e3ed74e15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e629a1fe9732271f51a2fca9c06e9a7c23ec5d7dc55fbe96afe2e3ed74e15b->enter($__internal_a2e629a1fe9732271f51a2fca9c06e9a7c23ec5d7dc55fbe96afe2e3ed74e15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_wrapperClone.js"));

        // line 1
        echo "var LazyWrapper = require('./_LazyWrapper'),
    LodashWrapper = require('./_LodashWrapper'),
    copyArray = require('./_copyArray');

/**
 * Creates a clone of `wrapper`.
 *
 * @private
 * @param {Object} wrapper The wrapper to clone.
 * @returns {Object} Returns the cloned wrapper.
 */
function wrapperClone(wrapper) {
  if (wrapper instanceof LazyWrapper) {
    return wrapper.clone();
  }
  var result = new LodashWrapper(wrapper.__wrapped__, wrapper.__chain__);
  result.__actions__ = copyArray(wrapper.__actions__);
  result.__index__  = wrapper.__index__;
  result.__values__ = wrapper.__values__;
  return result;
}

module.exports = wrapperClone;
";
        
        $__internal_a2e629a1fe9732271f51a2fca9c06e9a7c23ec5d7dc55fbe96afe2e3ed74e15b->leave($__internal_a2e629a1fe9732271f51a2fca9c06e9a7c23ec5d7dc55fbe96afe2e3ed74e15b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_wrapperClone.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var LazyWrapper = require('./_LazyWrapper'),
    LodashWrapper = require('./_LodashWrapper'),
    copyArray = require('./_copyArray');

/**
 * Creates a clone of `wrapper`.
 *
 * @private
 * @param {Object} wrapper The wrapper to clone.
 * @returns {Object} Returns the cloned wrapper.
 */
function wrapperClone(wrapper) {
  if (wrapper instanceof LazyWrapper) {
    return wrapper.clone();
  }
  var result = new LodashWrapper(wrapper.__wrapped__, wrapper.__chain__);
  result.__actions__ = copyArray(wrapper.__actions__);
  result.__index__  = wrapper.__index__;
  result.__values__ = wrapper.__values__;
  return result;
}

module.exports = wrapperClone;
", "node_modules/lodash/_wrapperClone.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_wrapperClone.js");
    }
}
