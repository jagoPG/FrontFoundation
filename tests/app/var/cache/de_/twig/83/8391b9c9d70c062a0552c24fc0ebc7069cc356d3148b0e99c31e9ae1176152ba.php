<?php

/* node_modules/lodash/_listCacheDelete.js */
class __TwigTemplate_56c9f65423c7a2423ac8cba9f07873ed5e8ffbc46b48155c27a457f52cbc4896 extends Twig_Template
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
        $__internal_9960e9681b2936b767633303245175773592425c2f035866978962d80a788749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9960e9681b2936b767633303245175773592425c2f035866978962d80a788749->enter($__internal_9960e9681b2936b767633303245175773592425c2f035866978962d80a788749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_listCacheDelete.js"));

        // line 1
        echo "var assocIndexOf = require('./_assocIndexOf');

/** Used for built-in method references. */
var arrayProto = Array.prototype;

/** Built-in value references. */
var splice = arrayProto.splice;

/**
 * Removes `key` and its value from the list cache.
 *
 * @private
 * @name delete
 * @memberOf ListCache
 * @param {string} key The key of the value to remove.
 * @returns {boolean} Returns `true` if the entry was removed, else `false`.
 */
function listCacheDelete(key) {
  var data = this.__data__,
      index = assocIndexOf(data, key);

  if (index < 0) {
    return false;
  }
  var lastIndex = data.length - 1;
  if (index == lastIndex) {
    data.pop();
  } else {
    splice.call(data, index, 1);
  }
  --this.size;
  return true;
}

module.exports = listCacheDelete;
";
        
        $__internal_9960e9681b2936b767633303245175773592425c2f035866978962d80a788749->leave($__internal_9960e9681b2936b767633303245175773592425c2f035866978962d80a788749_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_listCacheDelete.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assocIndexOf = require('./_assocIndexOf');

/** Used for built-in method references. */
var arrayProto = Array.prototype;

/** Built-in value references. */
var splice = arrayProto.splice;

/**
 * Removes `key` and its value from the list cache.
 *
 * @private
 * @name delete
 * @memberOf ListCache
 * @param {string} key The key of the value to remove.
 * @returns {boolean} Returns `true` if the entry was removed, else `false`.
 */
function listCacheDelete(key) {
  var data = this.__data__,
      index = assocIndexOf(data, key);

  if (index < 0) {
    return false;
  }
  var lastIndex = data.length - 1;
  if (index == lastIndex) {
    data.pop();
  } else {
    splice.call(data, index, 1);
  }
  --this.size;
  return true;
}

module.exports = listCacheDelete;
", "node_modules/lodash/_listCacheDelete.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_listCacheDelete.js");
    }
}
