<?php

/* node_modules/lodash/_baseGet.js */
class __TwigTemplate_f511f7a8144db1e2e2d1850b075e85663f672b2e2b7d5be6fc57e33bc8166e34 extends Twig_Template
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
        $__internal_987d519664be13d0fcb173d2cc8fb6ec064396487606e5159845abf7a3515acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987d519664be13d0fcb173d2cc8fb6ec064396487606e5159845abf7a3515acf->enter($__internal_987d519664be13d0fcb173d2cc8fb6ec064396487606e5159845abf7a3515acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseGet.js"));

        // line 1
        echo "var castPath = require('./_castPath'),
    toKey = require('./_toKey');

/**
 * The base implementation of `_.get` without support for default values.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array|string} path The path of the property to get.
 * @returns {*} Returns the resolved value.
 */
function baseGet(object, path) {
  path = castPath(path, object);

  var index = 0,
      length = path.length;

  while (object != null && index < length) {
    object = object[toKey(path[index++])];
  }
  return (index && index == length) ? object : undefined;
}

module.exports = baseGet;
";
        
        $__internal_987d519664be13d0fcb173d2cc8fb6ec064396487606e5159845abf7a3515acf->leave($__internal_987d519664be13d0fcb173d2cc8fb6ec064396487606e5159845abf7a3515acf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseGet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var castPath = require('./_castPath'),
    toKey = require('./_toKey');

/**
 * The base implementation of `_.get` without support for default values.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array|string} path The path of the property to get.
 * @returns {*} Returns the resolved value.
 */
function baseGet(object, path) {
  path = castPath(path, object);

  var index = 0,
      length = path.length;

  while (object != null && index < length) {
    object = object[toKey(path[index++])];
  }
  return (index && index == length) ? object : undefined;
}

module.exports = baseGet;
", "node_modules/lodash/_baseGet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseGet.js");
    }
}
