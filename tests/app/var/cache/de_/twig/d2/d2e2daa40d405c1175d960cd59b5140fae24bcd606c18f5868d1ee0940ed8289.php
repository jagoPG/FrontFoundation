<?php

/* node_modules/lodash/_hashGet.js */
class __TwigTemplate_927271c2f1ca06d861dc5c4df921b59f4ad0079ca0637b764bfdbd1f82c492c3 extends Twig_Template
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
        $__internal_75383d092ee608b2c99f35faebcf3964fe25c57ab80ec003d38546fff3d909f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75383d092ee608b2c99f35faebcf3964fe25c57ab80ec003d38546fff3d909f8->enter($__internal_75383d092ee608b2c99f35faebcf3964fe25c57ab80ec003d38546fff3d909f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_hashGet.js"));

        // line 1
        echo "var nativeCreate = require('./_nativeCreate');

/** Used to stand-in for `undefined` hash values. */
var HASH_UNDEFINED = '__lodash_hash_undefined__';

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Gets the hash value for `key`.
 *
 * @private
 * @name get
 * @memberOf Hash
 * @param {string} key The key of the value to get.
 * @returns {*} Returns the entry value.
 */
function hashGet(key) {
  var data = this.__data__;
  if (nativeCreate) {
    var result = data[key];
    return result === HASH_UNDEFINED ? undefined : result;
  }
  return hasOwnProperty.call(data, key) ? data[key] : undefined;
}

module.exports = hashGet;
";
        
        $__internal_75383d092ee608b2c99f35faebcf3964fe25c57ab80ec003d38546fff3d909f8->leave($__internal_75383d092ee608b2c99f35faebcf3964fe25c57ab80ec003d38546fff3d909f8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_hashGet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var nativeCreate = require('./_nativeCreate');

/** Used to stand-in for `undefined` hash values. */
var HASH_UNDEFINED = '__lodash_hash_undefined__';

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Gets the hash value for `key`.
 *
 * @private
 * @name get
 * @memberOf Hash
 * @param {string} key The key of the value to get.
 * @returns {*} Returns the entry value.
 */
function hashGet(key) {
  var data = this.__data__;
  if (nativeCreate) {
    var result = data[key];
    return result === HASH_UNDEFINED ? undefined : result;
  }
  return hasOwnProperty.call(data, key) ? data[key] : undefined;
}

module.exports = hashGet;
", "node_modules/lodash/_hashGet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_hashGet.js");
    }
}
