<?php

/* node_modules/lodash/_parent.js */
class __TwigTemplate_64d419fed8762b0c356fcc2487023939888c05bc197f405c38ca81a9740bf03a extends Twig_Template
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
        $__internal_1cc701105ebfac30c5899e5ee08745cb8ed2f2079d5d771f3f9288f93b164e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc701105ebfac30c5899e5ee08745cb8ed2f2079d5d771f3f9288f93b164e29->enter($__internal_1cc701105ebfac30c5899e5ee08745cb8ed2f2079d5d771f3f9288f93b164e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_parent.js"));

        // line 1
        echo "var baseGet = require('./_baseGet'),
    baseSlice = require('./_baseSlice');

/**
 * Gets the parent value at `path` of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array} path The path to get the parent value of.
 * @returns {*} Returns the parent value.
 */
function parent(object, path) {
  return path.length < 2 ? object : baseGet(object, baseSlice(path, 0, -1));
}

module.exports = parent;
";
        
        $__internal_1cc701105ebfac30c5899e5ee08745cb8ed2f2079d5d771f3f9288f93b164e29->leave($__internal_1cc701105ebfac30c5899e5ee08745cb8ed2f2079d5d771f3f9288f93b164e29_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_parent.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGet = require('./_baseGet'),
    baseSlice = require('./_baseSlice');

/**
 * Gets the parent value at `path` of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array} path The path to get the parent value of.
 * @returns {*} Returns the parent value.
 */
function parent(object, path) {
  return path.length < 2 ? object : baseGet(object, baseSlice(path, 0, -1));
}

module.exports = parent;
", "node_modules/lodash/_parent.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_parent.js");
    }
}
