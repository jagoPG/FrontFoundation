<?php

/* node_modules/lodash/_customOmitClone.js */
class __TwigTemplate_23890681831ede274174510e2ab97c703d1e3f8b04052c5a50304a423eb25ce2 extends Twig_Template
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
        $__internal_b352244e98e0739efdd1ec30d51ff05b2a6ecd6e11995cb00a847368cc8e613f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b352244e98e0739efdd1ec30d51ff05b2a6ecd6e11995cb00a847368cc8e613f->enter($__internal_b352244e98e0739efdd1ec30d51ff05b2a6ecd6e11995cb00a847368cc8e613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_customOmitClone.js"));

        // line 1
        echo "var isPlainObject = require('./isPlainObject');

/**
 * Used by `_.omit` to customize its `_.cloneDeep` use to only clone plain
 * objects.
 *
 * @private
 * @param {*} value The value to inspect.
 * @param {string} key The key of the property to inspect.
 * @returns {*} Returns the uncloned value or `undefined` to defer cloning to `_.cloneDeep`.
 */
function customOmitClone(value) {
  return isPlainObject(value) ? undefined : value;
}

module.exports = customOmitClone;
";
        
        $__internal_b352244e98e0739efdd1ec30d51ff05b2a6ecd6e11995cb00a847368cc8e613f->leave($__internal_b352244e98e0739efdd1ec30d51ff05b2a6ecd6e11995cb00a847368cc8e613f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_customOmitClone.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isPlainObject = require('./isPlainObject');

/**
 * Used by `_.omit` to customize its `_.cloneDeep` use to only clone plain
 * objects.
 *
 * @private
 * @param {*} value The value to inspect.
 * @param {string} key The key of the property to inspect.
 * @returns {*} Returns the uncloned value or `undefined` to defer cloning to `_.cloneDeep`.
 */
function customOmitClone(value) {
  return isPlainObject(value) ? undefined : value;
}

module.exports = customOmitClone;
", "node_modules/lodash/_customOmitClone.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_customOmitClone.js");
    }
}
