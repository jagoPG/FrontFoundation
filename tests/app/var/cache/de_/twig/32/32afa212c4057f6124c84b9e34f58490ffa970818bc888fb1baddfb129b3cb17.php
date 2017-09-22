<?php

/* node_modules/lodash/toPlainObject.js */
class __TwigTemplate_e61723da6f4eefdff6b4451ce20d72b8111ec6e8ea9aba6191fda694d2d10512 extends Twig_Template
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
        $__internal_517797c3e8a10befcb55d03cd90808817c87edcf8c2555589b33555527441b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517797c3e8a10befcb55d03cd90808817c87edcf8c2555589b33555527441b6a->enter($__internal_517797c3e8a10befcb55d03cd90808817c87edcf8c2555589b33555527441b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toPlainObject.js"));

        // line 1
        echo "var copyObject = require('./_copyObject'),
    keysIn = require('./keysIn');

/**
 * Converts `value` to a plain object flattening inherited enumerable string
 * keyed properties of `value` to own properties of the plain object.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {Object} Returns the converted plain object.
 * @example
 *
 * function Foo() {
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.assign({ 'a': 1 }, new Foo);
 * // => { 'a': 1, 'b': 2 }
 *
 * _.assign({ 'a': 1 }, _.toPlainObject(new Foo));
 * // => { 'a': 1, 'b': 2, 'c': 3 }
 */
function toPlainObject(value) {
  return copyObject(value, keysIn(value));
}

module.exports = toPlainObject;
";
        
        $__internal_517797c3e8a10befcb55d03cd90808817c87edcf8c2555589b33555527441b6a->leave($__internal_517797c3e8a10befcb55d03cd90808817c87edcf8c2555589b33555527441b6a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toPlainObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var copyObject = require('./_copyObject'),
    keysIn = require('./keysIn');

/**
 * Converts `value` to a plain object flattening inherited enumerable string
 * keyed properties of `value` to own properties of the plain object.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {Object} Returns the converted plain object.
 * @example
 *
 * function Foo() {
 *   this.b = 2;
 * }
 *
 * Foo.prototype.c = 3;
 *
 * _.assign({ 'a': 1 }, new Foo);
 * // => { 'a': 1, 'b': 2 }
 *
 * _.assign({ 'a': 1 }, _.toPlainObject(new Foo));
 * // => { 'a': 1, 'b': 2, 'c': 3 }
 */
function toPlainObject(value) {
  return copyObject(value, keysIn(value));
}

module.exports = toPlainObject;
", "node_modules/lodash/toPlainObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toPlainObject.js");
    }
}
