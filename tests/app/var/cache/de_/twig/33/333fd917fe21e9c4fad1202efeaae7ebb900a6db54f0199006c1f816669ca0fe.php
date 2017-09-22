<?php

/* node_modules/lodash/_baseUnset.js */
class __TwigTemplate_88be93bf038fea1d068de0ef3e702f5d942307f233ef670f4cec8e835aa93e68 extends Twig_Template
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
        $__internal_611d68421b15b59a40194ae75b5c9028833676f2f9bd67c7b882abfd15c439f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_611d68421b15b59a40194ae75b5c9028833676f2f9bd67c7b882abfd15c439f7->enter($__internal_611d68421b15b59a40194ae75b5c9028833676f2f9bd67c7b882abfd15c439f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseUnset.js"));

        // line 1
        echo "var castPath = require('./_castPath'),
    last = require('./last'),
    parent = require('./_parent'),
    toKey = require('./_toKey');

/**
 * The base implementation of `_.unset`.
 *
 * @private
 * @param {Object} object The object to modify.
 * @param {Array|string} path The property path to unset.
 * @returns {boolean} Returns `true` if the property is deleted, else `false`.
 */
function baseUnset(object, path) {
  path = castPath(path, object);
  object = parent(object, path);
  return object == null || delete object[toKey(last(path))];
}

module.exports = baseUnset;
";
        
        $__internal_611d68421b15b59a40194ae75b5c9028833676f2f9bd67c7b882abfd15c439f7->leave($__internal_611d68421b15b59a40194ae75b5c9028833676f2f9bd67c7b882abfd15c439f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseUnset.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var castPath = require('./_castPath'),
    last = require('./last'),
    parent = require('./_parent'),
    toKey = require('./_toKey');

/**
 * The base implementation of `_.unset`.
 *
 * @private
 * @param {Object} object The object to modify.
 * @param {Array|string} path The property path to unset.
 * @returns {boolean} Returns `true` if the property is deleted, else `false`.
 */
function baseUnset(object, path) {
  path = castPath(path, object);
  object = parent(object, path);
  return object == null || delete object[toKey(last(path))];
}

module.exports = baseUnset;
", "node_modules/lodash/_baseUnset.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseUnset.js");
    }
}
