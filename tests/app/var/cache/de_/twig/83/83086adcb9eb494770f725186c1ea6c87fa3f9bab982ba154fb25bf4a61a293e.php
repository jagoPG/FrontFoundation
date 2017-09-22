<?php

/* node_modules/lodash/_baseIsArrayBuffer.js */
class __TwigTemplate_16339b1c82c6238c4b5e0c1aab4974d41f605eb8e8b5b0ef98bf0392c0388e54 extends Twig_Template
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
        $__internal_f55cc771e04d7c1160f06efa8553bdd2b704eda47fac8b6cefe0f038e01e8a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55cc771e04d7c1160f06efa8553bdd2b704eda47fac8b6cefe0f038e01e8a49->enter($__internal_f55cc771e04d7c1160f06efa8553bdd2b704eda47fac8b6cefe0f038e01e8a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseIsArrayBuffer.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

var arrayBufferTag = '[object ArrayBuffer]';

/**
 * The base implementation of `_.isArrayBuffer` without Node.js optimizations.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an array buffer, else `false`.
 */
function baseIsArrayBuffer(value) {
  return isObjectLike(value) && baseGetTag(value) == arrayBufferTag;
}

module.exports = baseIsArrayBuffer;
";
        
        $__internal_f55cc771e04d7c1160f06efa8553bdd2b704eda47fac8b6cefe0f038e01e8a49->leave($__internal_f55cc771e04d7c1160f06efa8553bdd2b704eda47fac8b6cefe0f038e01e8a49_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseIsArrayBuffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

var arrayBufferTag = '[object ArrayBuffer]';

/**
 * The base implementation of `_.isArrayBuffer` without Node.js optimizations.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an array buffer, else `false`.
 */
function baseIsArrayBuffer(value) {
  return isObjectLike(value) && baseGetTag(value) == arrayBufferTag;
}

module.exports = baseIsArrayBuffer;
", "node_modules/lodash/_baseIsArrayBuffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseIsArrayBuffer.js");
    }
}
