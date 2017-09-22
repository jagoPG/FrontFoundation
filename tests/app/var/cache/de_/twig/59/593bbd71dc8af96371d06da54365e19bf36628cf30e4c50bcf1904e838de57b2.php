<?php

/* node_modules/lodash/_listCacheSet.js */
class __TwigTemplate_c38a20e7ac1447c0904bb0d6485603f52d3ca96f0b52b595989d593ca30da11b extends Twig_Template
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
        $__internal_fa89bff876c37f14a5160ec2be32c5211c9797884d4c496e3b9af8958bc8f325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa89bff876c37f14a5160ec2be32c5211c9797884d4c496e3b9af8958bc8f325->enter($__internal_fa89bff876c37f14a5160ec2be32c5211c9797884d4c496e3b9af8958bc8f325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_listCacheSet.js"));

        // line 1
        echo "var assocIndexOf = require('./_assocIndexOf');

/**
 * Sets the list cache `key` to `value`.
 *
 * @private
 * @name set
 * @memberOf ListCache
 * @param {string} key The key of the value to set.
 * @param {*} value The value to set.
 * @returns {Object} Returns the list cache instance.
 */
function listCacheSet(key, value) {
  var data = this.__data__,
      index = assocIndexOf(data, key);

  if (index < 0) {
    ++this.size;
    data.push([key, value]);
  } else {
    data[index][1] = value;
  }
  return this;
}

module.exports = listCacheSet;
";
        
        $__internal_fa89bff876c37f14a5160ec2be32c5211c9797884d4c496e3b9af8958bc8f325->leave($__internal_fa89bff876c37f14a5160ec2be32c5211c9797884d4c496e3b9af8958bc8f325_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_listCacheSet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assocIndexOf = require('./_assocIndexOf');

/**
 * Sets the list cache `key` to `value`.
 *
 * @private
 * @name set
 * @memberOf ListCache
 * @param {string} key The key of the value to set.
 * @param {*} value The value to set.
 * @returns {Object} Returns the list cache instance.
 */
function listCacheSet(key, value) {
  var data = this.__data__,
      index = assocIndexOf(data, key);

  if (index < 0) {
    ++this.size;
    data.push([key, value]);
  } else {
    data[index][1] = value;
  }
  return this;
}

module.exports = listCacheSet;
", "node_modules/lodash/_listCacheSet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_listCacheSet.js");
    }
}
