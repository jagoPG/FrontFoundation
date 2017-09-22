<?php

/* node_modules/lodash/_castArrayLikeObject.js */
class __TwigTemplate_b388c56f68fb638a6bf2fcc7d4d8658f55861fa06427a545579368f42738f667 extends Twig_Template
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
        $__internal_c91d531ad688c11ad66c548db34eeedad83ef78ab51914dd1e51e5482d718bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c91d531ad688c11ad66c548db34eeedad83ef78ab51914dd1e51e5482d718bb2->enter($__internal_c91d531ad688c11ad66c548db34eeedad83ef78ab51914dd1e51e5482d718bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_castArrayLikeObject.js"));

        // line 1
        echo "var isArrayLikeObject = require('./isArrayLikeObject');

/**
 * Casts `value` to an empty array if it's not an array like object.
 *
 * @private
 * @param {*} value The value to inspect.
 * @returns {Array|Object} Returns the cast array-like object.
 */
function castArrayLikeObject(value) {
  return isArrayLikeObject(value) ? value : [];
}

module.exports = castArrayLikeObject;
";
        
        $__internal_c91d531ad688c11ad66c548db34eeedad83ef78ab51914dd1e51e5482d718bb2->leave($__internal_c91d531ad688c11ad66c548db34eeedad83ef78ab51914dd1e51e5482d718bb2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_castArrayLikeObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isArrayLikeObject = require('./isArrayLikeObject');

/**
 * Casts `value` to an empty array if it's not an array like object.
 *
 * @private
 * @param {*} value The value to inspect.
 * @returns {Array|Object} Returns the cast array-like object.
 */
function castArrayLikeObject(value) {
  return isArrayLikeObject(value) ? value : [];
}

module.exports = castArrayLikeObject;
", "node_modules/lodash/_castArrayLikeObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_castArrayLikeObject.js");
    }
}
