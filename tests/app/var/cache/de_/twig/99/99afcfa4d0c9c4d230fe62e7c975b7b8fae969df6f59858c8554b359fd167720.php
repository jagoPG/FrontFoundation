<?php

/* node_modules/lodash/_hashSet.js */
class __TwigTemplate_a22a832304966a6f3bcad04d15376883116a6664d047180512cc37c66040cf93 extends Twig_Template
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
        $__internal_d8c40f4f5c1dcee706d7753aafd8970d4f9d7e0ceb9a92ad0f2abea325749d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c40f4f5c1dcee706d7753aafd8970d4f9d7e0ceb9a92ad0f2abea325749d11->enter($__internal_d8c40f4f5c1dcee706d7753aafd8970d4f9d7e0ceb9a92ad0f2abea325749d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_hashSet.js"));

        // line 1
        echo "var nativeCreate = require('./_nativeCreate');

/** Used to stand-in for `undefined` hash values. */
var HASH_UNDEFINED = '__lodash_hash_undefined__';

/**
 * Sets the hash `key` to `value`.
 *
 * @private
 * @name set
 * @memberOf Hash
 * @param {string} key The key of the value to set.
 * @param {*} value The value to set.
 * @returns {Object} Returns the hash instance.
 */
function hashSet(key, value) {
  var data = this.__data__;
  this.size += this.has(key) ? 0 : 1;
  data[key] = (nativeCreate && value === undefined) ? HASH_UNDEFINED : value;
  return this;
}

module.exports = hashSet;
";
        
        $__internal_d8c40f4f5c1dcee706d7753aafd8970d4f9d7e0ceb9a92ad0f2abea325749d11->leave($__internal_d8c40f4f5c1dcee706d7753aafd8970d4f9d7e0ceb9a92ad0f2abea325749d11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_hashSet.js";
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

/**
 * Sets the hash `key` to `value`.
 *
 * @private
 * @name set
 * @memberOf Hash
 * @param {string} key The key of the value to set.
 * @param {*} value The value to set.
 * @returns {Object} Returns the hash instance.
 */
function hashSet(key, value) {
  var data = this.__data__;
  this.size += this.has(key) ? 0 : 1;
  data[key] = (nativeCreate && value === undefined) ? HASH_UNDEFINED : value;
  return this;
}

module.exports = hashSet;
", "node_modules/lodash/_hashSet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_hashSet.js");
    }
}
