<?php

/* node_modules/lodash/isWeakMap.js */
class __TwigTemplate_563294f34e9d8d952adc34632e8fcb8a12e6d81564dc5dd85daad5c5fbc9e5fc extends Twig_Template
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
        $__internal_632e1f1ac22046973fdbdd1fe9f6170599ecde1674d7f8c018ce8e58ffe51fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632e1f1ac22046973fdbdd1fe9f6170599ecde1674d7f8c018ce8e58ffe51fd0->enter($__internal_632e1f1ac22046973fdbdd1fe9f6170599ecde1674d7f8c018ce8e58ffe51fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isWeakMap.js"));

        // line 1
        echo "var getTag = require('./_getTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var weakMapTag = '[object WeakMap]';

/**
 * Checks if `value` is classified as a `WeakMap` object.
 *
 * @static
 * @memberOf _
 * @since 4.3.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a weak map, else `false`.
 * @example
 *
 * _.isWeakMap(new WeakMap);
 * // => true
 *
 * _.isWeakMap(new Map);
 * // => false
 */
function isWeakMap(value) {
  return isObjectLike(value) && getTag(value) == weakMapTag;
}

module.exports = isWeakMap;
";
        
        $__internal_632e1f1ac22046973fdbdd1fe9f6170599ecde1674d7f8c018ce8e58ffe51fd0->leave($__internal_632e1f1ac22046973fdbdd1fe9f6170599ecde1674d7f8c018ce8e58ffe51fd0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isWeakMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getTag = require('./_getTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var weakMapTag = '[object WeakMap]';

/**
 * Checks if `value` is classified as a `WeakMap` object.
 *
 * @static
 * @memberOf _
 * @since 4.3.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a weak map, else `false`.
 * @example
 *
 * _.isWeakMap(new WeakMap);
 * // => true
 *
 * _.isWeakMap(new Map);
 * // => false
 */
function isWeakMap(value) {
  return isObjectLike(value) && getTag(value) == weakMapTag;
}

module.exports = isWeakMap;
", "node_modules/lodash/isWeakMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isWeakMap.js");
    }
}
