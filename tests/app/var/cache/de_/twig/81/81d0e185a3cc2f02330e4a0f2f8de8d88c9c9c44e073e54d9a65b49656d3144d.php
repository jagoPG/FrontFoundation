<?php

/* node_modules/lodash/next.js */
class __TwigTemplate_81e9764de1af3f62ec59cc917b8901671782b65a61ceed95973660b40b0928bd extends Twig_Template
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
        $__internal_5ba425650f90878a2c342492d8e5656ab3dee9faea7bec68aa504443f940a69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba425650f90878a2c342492d8e5656ab3dee9faea7bec68aa504443f940a69e->enter($__internal_5ba425650f90878a2c342492d8e5656ab3dee9faea7bec68aa504443f940a69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/next.js"));

        // line 1
        echo "var toArray = require('./toArray');

/**
 * Gets the next value on a wrapped object following the
 * [iterator protocol](https://mdn.io/iteration_protocols#iterator).
 *
 * @name next
 * @memberOf _
 * @since 4.0.0
 * @category Seq
 * @returns {Object} Returns the next iterator value.
 * @example
 *
 * var wrapped = _([1, 2]);
 *
 * wrapped.next();
 * // => { 'done': false, 'value': 1 }
 *
 * wrapped.next();
 * // => { 'done': false, 'value': 2 }
 *
 * wrapped.next();
 * // => { 'done': true, 'value': undefined }
 */
function wrapperNext() {
  if (this.__values__ === undefined) {
    this.__values__ = toArray(this.value());
  }
  var done = this.__index__ >= this.__values__.length,
      value = done ? undefined : this.__values__[this.__index__++];

  return { 'done': done, 'value': value };
}

module.exports = wrapperNext;
";
        
        $__internal_5ba425650f90878a2c342492d8e5656ab3dee9faea7bec68aa504443f940a69e->leave($__internal_5ba425650f90878a2c342492d8e5656ab3dee9faea7bec68aa504443f940a69e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/next.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toArray = require('./toArray');

/**
 * Gets the next value on a wrapped object following the
 * [iterator protocol](https://mdn.io/iteration_protocols#iterator).
 *
 * @name next
 * @memberOf _
 * @since 4.0.0
 * @category Seq
 * @returns {Object} Returns the next iterator value.
 * @example
 *
 * var wrapped = _([1, 2]);
 *
 * wrapped.next();
 * // => { 'done': false, 'value': 1 }
 *
 * wrapped.next();
 * // => { 'done': false, 'value': 2 }
 *
 * wrapped.next();
 * // => { 'done': true, 'value': undefined }
 */
function wrapperNext() {
  if (this.__values__ === undefined) {
    this.__values__ = toArray(this.value());
  }
  var done = this.__index__ >= this.__values__.length,
      value = done ? undefined : this.__values__[this.__index__++];

  return { 'done': done, 'value': value };
}

module.exports = wrapperNext;
", "node_modules/lodash/next.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/next.js");
    }
}
