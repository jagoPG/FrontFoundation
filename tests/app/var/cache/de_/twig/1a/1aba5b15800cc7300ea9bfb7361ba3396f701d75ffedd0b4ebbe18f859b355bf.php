<?php

/* node_modules/lodash/_hashHas.js */
class __TwigTemplate_f28afaf5f0e8890fb527e0b9113babf996792e5aaebf3a8e2edb939e8fc52d51 extends Twig_Template
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
        $__internal_44dff9c9a4ebedb91214f995a39dd2ce38a71c728979cd1cf7228095e37e608b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44dff9c9a4ebedb91214f995a39dd2ce38a71c728979cd1cf7228095e37e608b->enter($__internal_44dff9c9a4ebedb91214f995a39dd2ce38a71c728979cd1cf7228095e37e608b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_hashHas.js"));

        // line 1
        echo "var nativeCreate = require('./_nativeCreate');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Checks if a hash value for `key` exists.
 *
 * @private
 * @name has
 * @memberOf Hash
 * @param {string} key The key of the entry to check.
 * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
 */
function hashHas(key) {
  var data = this.__data__;
  return nativeCreate ? (data[key] !== undefined) : hasOwnProperty.call(data, key);
}

module.exports = hashHas;
";
        
        $__internal_44dff9c9a4ebedb91214f995a39dd2ce38a71c728979cd1cf7228095e37e608b->leave($__internal_44dff9c9a4ebedb91214f995a39dd2ce38a71c728979cd1cf7228095e37e608b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_hashHas.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var nativeCreate = require('./_nativeCreate');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Checks if a hash value for `key` exists.
 *
 * @private
 * @name has
 * @memberOf Hash
 * @param {string} key The key of the entry to check.
 * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
 */
function hashHas(key) {
  var data = this.__data__;
  return nativeCreate ? (data[key] !== undefined) : hasOwnProperty.call(data, key);
}

module.exports = hashHas;
", "node_modules/lodash/_hashHas.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_hashHas.js");
    }
}
