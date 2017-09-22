<?php

/* node_modules/lodash/_hasPath.js */
class __TwigTemplate_3f57af7689c265893788f78e5b4efae5d5d17f4de5200a0cdb3a6925923a5072 extends Twig_Template
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
        $__internal_d4bcf1514906a640b3ead34d15847fa21c467de15456f215c60495ddb2ce2e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bcf1514906a640b3ead34d15847fa21c467de15456f215c60495ddb2ce2e1b->enter($__internal_d4bcf1514906a640b3ead34d15847fa21c467de15456f215c60495ddb2ce2e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_hasPath.js"));

        // line 1
        echo "var castPath = require('./_castPath'),
    isArguments = require('./isArguments'),
    isArray = require('./isArray'),
    isIndex = require('./_isIndex'),
    isLength = require('./isLength'),
    toKey = require('./_toKey');

/**
 * Checks if `path` exists on `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array|string} path The path to check.
 * @param {Function} hasFunc The function to check properties.
 * @returns {boolean} Returns `true` if `path` exists, else `false`.
 */
function hasPath(object, path, hasFunc) {
  path = castPath(path, object);

  var index = -1,
      length = path.length,
      result = false;

  while (++index < length) {
    var key = toKey(path[index]);
    if (!(result = object != null && hasFunc(object, key))) {
      break;
    }
    object = object[key];
  }
  if (result || ++index != length) {
    return result;
  }
  length = object == null ? 0 : object.length;
  return !!length && isLength(length) && isIndex(key, length) &&
    (isArray(object) || isArguments(object));
}

module.exports = hasPath;
";
        
        $__internal_d4bcf1514906a640b3ead34d15847fa21c467de15456f215c60495ddb2ce2e1b->leave($__internal_d4bcf1514906a640b3ead34d15847fa21c467de15456f215c60495ddb2ce2e1b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_hasPath.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var castPath = require('./_castPath'),
    isArguments = require('./isArguments'),
    isArray = require('./isArray'),
    isIndex = require('./_isIndex'),
    isLength = require('./isLength'),
    toKey = require('./_toKey');

/**
 * Checks if `path` exists on `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array|string} path The path to check.
 * @param {Function} hasFunc The function to check properties.
 * @returns {boolean} Returns `true` if `path` exists, else `false`.
 */
function hasPath(object, path, hasFunc) {
  path = castPath(path, object);

  var index = -1,
      length = path.length,
      result = false;

  while (++index < length) {
    var key = toKey(path[index]);
    if (!(result = object != null && hasFunc(object, key))) {
      break;
    }
    object = object[key];
  }
  if (result || ++index != length) {
    return result;
  }
  length = object == null ? 0 : object.length;
  return !!length && isLength(length) && isIndex(key, length) &&
    (isArray(object) || isArguments(object));
}

module.exports = hasPath;
", "node_modules/lodash/_hasPath.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_hasPath.js");
    }
}
