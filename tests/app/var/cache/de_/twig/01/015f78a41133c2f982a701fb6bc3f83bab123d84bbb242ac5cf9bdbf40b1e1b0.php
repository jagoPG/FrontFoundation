<?php

/* node_modules/lodash/_cloneSet.js */
class __TwigTemplate_161823fb69bc4fa43d4ff5de96b0908d12202704cd073111c21df158b60544e8 extends Twig_Template
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
        $__internal_404950771354187215a8785eadcaaf19d631787ec00f16c943f5bd3a3e910303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404950771354187215a8785eadcaaf19d631787ec00f16c943f5bd3a3e910303->enter($__internal_404950771354187215a8785eadcaaf19d631787ec00f16c943f5bd3a3e910303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_cloneSet.js"));

        // line 1
        echo "var addSetEntry = require('./_addSetEntry'),
    arrayReduce = require('./_arrayReduce'),
    setToArray = require('./_setToArray');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1;

/**
 * Creates a clone of `set`.
 *
 * @private
 * @param {Object} set The set to clone.
 * @param {Function} cloneFunc The function to clone values.
 * @param {boolean} [isDeep] Specify a deep clone.
 * @returns {Object} Returns the cloned set.
 */
function cloneSet(set, isDeep, cloneFunc) {
  var array = isDeep ? cloneFunc(setToArray(set), CLONE_DEEP_FLAG) : setToArray(set);
  return arrayReduce(array, addSetEntry, new set.constructor);
}

module.exports = cloneSet;
";
        
        $__internal_404950771354187215a8785eadcaaf19d631787ec00f16c943f5bd3a3e910303->leave($__internal_404950771354187215a8785eadcaaf19d631787ec00f16c943f5bd3a3e910303_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_cloneSet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var addSetEntry = require('./_addSetEntry'),
    arrayReduce = require('./_arrayReduce'),
    setToArray = require('./_setToArray');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1;

/**
 * Creates a clone of `set`.
 *
 * @private
 * @param {Object} set The set to clone.
 * @param {Function} cloneFunc The function to clone values.
 * @param {boolean} [isDeep] Specify a deep clone.
 * @returns {Object} Returns the cloned set.
 */
function cloneSet(set, isDeep, cloneFunc) {
  var array = isDeep ? cloneFunc(setToArray(set), CLONE_DEEP_FLAG) : setToArray(set);
  return arrayReduce(array, addSetEntry, new set.constructor);
}

module.exports = cloneSet;
", "node_modules/lodash/_cloneSet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_cloneSet.js");
    }
}
