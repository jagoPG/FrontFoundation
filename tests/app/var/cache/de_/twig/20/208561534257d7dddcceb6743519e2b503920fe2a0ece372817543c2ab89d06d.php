<?php

/* node_modules/lodash/_setWrapToString.js */
class __TwigTemplate_9809d9816e0885998cc0df730a907a680634d8f97deb2409751d38779a6fcccb extends Twig_Template
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
        $__internal_7570d2cd72691fb55881dd99ea925af3e29d301c7444e7bb764e837371569ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7570d2cd72691fb55881dd99ea925af3e29d301c7444e7bb764e837371569ba5->enter($__internal_7570d2cd72691fb55881dd99ea925af3e29d301c7444e7bb764e837371569ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_setWrapToString.js"));

        // line 1
        echo "var getWrapDetails = require('./_getWrapDetails'),
    insertWrapDetails = require('./_insertWrapDetails'),
    setToString = require('./_setToString'),
    updateWrapDetails = require('./_updateWrapDetails');

/**
 * Sets the `toString` method of `wrapper` to mimic the source of `reference`
 * with wrapper details in a comment at the top of the source body.
 *
 * @private
 * @param {Function} wrapper The function to modify.
 * @param {Function} reference The reference function.
 * @param {number} bitmask The bitmask flags. See `createWrap` for more details.
 * @returns {Function} Returns `wrapper`.
 */
function setWrapToString(wrapper, reference, bitmask) {
  var source = (reference + '');
  return setToString(wrapper, insertWrapDetails(source, updateWrapDetails(getWrapDetails(source), bitmask)));
}

module.exports = setWrapToString;
";
        
        $__internal_7570d2cd72691fb55881dd99ea925af3e29d301c7444e7bb764e837371569ba5->leave($__internal_7570d2cd72691fb55881dd99ea925af3e29d301c7444e7bb764e837371569ba5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_setWrapToString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getWrapDetails = require('./_getWrapDetails'),
    insertWrapDetails = require('./_insertWrapDetails'),
    setToString = require('./_setToString'),
    updateWrapDetails = require('./_updateWrapDetails');

/**
 * Sets the `toString` method of `wrapper` to mimic the source of `reference`
 * with wrapper details in a comment at the top of the source body.
 *
 * @private
 * @param {Function} wrapper The function to modify.
 * @param {Function} reference The reference function.
 * @param {number} bitmask The bitmask flags. See `createWrap` for more details.
 * @returns {Function} Returns `wrapper`.
 */
function setWrapToString(wrapper, reference, bitmask) {
  var source = (reference + '');
  return setToString(wrapper, insertWrapDetails(source, updateWrapDetails(getWrapDetails(source), bitmask)));
}

module.exports = setWrapToString;
", "node_modules/lodash/_setWrapToString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_setWrapToString.js");
    }
}
