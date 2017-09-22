<?php

/* node_modules/lodash/values.js */
class __TwigTemplate_8ea2b9b05f516bf638d420a355453b58f55f4d2e59973f0bad98e2563043f50a extends Twig_Template
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
        $__internal_15cc9a6f118a57dd514b9a71e1478b14dd4ae9426008daecb2009abb7398e811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15cc9a6f118a57dd514b9a71e1478b14dd4ae9426008daecb2009abb7398e811->enter($__internal_15cc9a6f118a57dd514b9a71e1478b14dd4ae9426008daecb2009abb7398e811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/values.js"));

        // line 1
        echo "var baseValues = require('./_baseValues'),
    keys = require('./keys');

/**
 * Creates an array of the own enumerable string keyed property values of `object`.
 *
 * **Note:** Non-object values are coerced to objects.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
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
 * _.values(new Foo);
 * // => [1, 2] (iteration order is not guaranteed)
 *
 * _.values('hi');
 * // => ['h', 'i']
 */
function values(object) {
  return object == null ? [] : baseValues(object, keys(object));
}

module.exports = values;
";
        
        $__internal_15cc9a6f118a57dd514b9a71e1478b14dd4ae9426008daecb2009abb7398e811->leave($__internal_15cc9a6f118a57dd514b9a71e1478b14dd4ae9426008daecb2009abb7398e811_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/values.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseValues = require('./_baseValues'),
    keys = require('./keys');

/**
 * Creates an array of the own enumerable string keyed property values of `object`.
 *
 * **Note:** Non-object values are coerced to objects.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
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
 * _.values(new Foo);
 * // => [1, 2] (iteration order is not guaranteed)
 *
 * _.values('hi');
 * // => ['h', 'i']
 */
function values(object) {
  return object == null ? [] : baseValues(object, keys(object));
}

module.exports = values;
", "node_modules/lodash/values.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/values.js");
    }
}
