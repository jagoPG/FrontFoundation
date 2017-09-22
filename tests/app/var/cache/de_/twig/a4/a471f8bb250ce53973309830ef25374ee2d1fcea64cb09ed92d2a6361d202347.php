<?php

/* node_modules/lodash/valuesIn.js */
class __TwigTemplate_939cb28748522ec9affdcb07847e7f7c82a618299c29dfa5e60eb319cc00bfe4 extends Twig_Template
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
        $__internal_c865106a426b7a63ba79b77094d0e5312755fb2253851c2fefe864c6ea6976f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c865106a426b7a63ba79b77094d0e5312755fb2253851c2fefe864c6ea6976f8->enter($__internal_c865106a426b7a63ba79b77094d0e5312755fb2253851c2fefe864c6ea6976f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/valuesIn.js"));

        // line 1
        echo "var baseValues = require('./_baseValues'),
    keysIn = require('./keysIn');

/**
 * Creates an array of the own and inherited enumerable string keyed property
 * values of `object`.
 *
 * **Note:** Non-object values are coerced to objects.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Object
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of property values.
 * @example
 *
 * function Foo() {
 *   this.a = 1;
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.valuesIn(new Foo);
 * // => [1, 2, 3] (iteration order is not guaranteed)
 */
function valuesIn(object) {
  return object == null ? [] : baseValues(object, keysIn(object));
}

module.exports = valuesIn;
";
        
        $__internal_c865106a426b7a63ba79b77094d0e5312755fb2253851c2fefe864c6ea6976f8->leave($__internal_c865106a426b7a63ba79b77094d0e5312755fb2253851c2fefe864c6ea6976f8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/valuesIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseValues = require('./_baseValues'),
    keysIn = require('./keysIn');

/**
 * Creates an array of the own and inherited enumerable string keyed property
 * values of `object`.
 *
 * **Note:** Non-object values are coerced to objects.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Object
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of property values.
 * @example
 *
 * function Foo() {
 *   this.a = 1;
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.valuesIn(new Foo);
 * // => [1, 2, 3] (iteration order is not guaranteed)
 */
function valuesIn(object) {
  return object == null ? [] : baseValues(object, keysIn(object));
}

module.exports = valuesIn;
", "node_modules/lodash/valuesIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/valuesIn.js");
    }
}
