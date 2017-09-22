<?php

/* node_modules/lodash/invert.js */
class __TwigTemplate_814e9c5ca00e3b4d4d33d7174d1b8b92155d1687e067439b5a456efd6792e7d4 extends Twig_Template
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
        $__internal_cc1b5bfd95be8d807ecab45cb1b300b5b6eaba2d99a616bcbef9ae577c91458f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1b5bfd95be8d807ecab45cb1b300b5b6eaba2d99a616bcbef9ae577c91458f->enter($__internal_cc1b5bfd95be8d807ecab45cb1b300b5b6eaba2d99a616bcbef9ae577c91458f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/invert.js"));

        // line 1
        echo "var constant = require('./constant'),
    createInverter = require('./_createInverter'),
    identity = require('./identity');

/**
 * Creates an object composed of the inverted keys and values of `object`.
 * If `object` contains duplicate values, subsequent values overwrite
 * property assignments of previous values.
 *
 * @static
 * @memberOf _
 * @since 0.7.0
 * @category Object
 * @param {Object} object The object to invert.
 * @returns {Object} Returns the new inverted object.
 * @example
 *
 * var object = { 'a': 1, 'b': 2, 'c': 1 };
 *
 * _.invert(object);
 * // => { '1': 'c', '2': 'b' }
 */
var invert = createInverter(function(result, value, key) {
  result[value] = key;
}, constant(identity));

module.exports = invert;
";
        
        $__internal_cc1b5bfd95be8d807ecab45cb1b300b5b6eaba2d99a616bcbef9ae577c91458f->leave($__internal_cc1b5bfd95be8d807ecab45cb1b300b5b6eaba2d99a616bcbef9ae577c91458f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/invert.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var constant = require('./constant'),
    createInverter = require('./_createInverter'),
    identity = require('./identity');

/**
 * Creates an object composed of the inverted keys and values of `object`.
 * If `object` contains duplicate values, subsequent values overwrite
 * property assignments of previous values.
 *
 * @static
 * @memberOf _
 * @since 0.7.0
 * @category Object
 * @param {Object} object The object to invert.
 * @returns {Object} Returns the new inverted object.
 * @example
 *
 * var object = { 'a': 1, 'b': 2, 'c': 1 };
 *
 * _.invert(object);
 * // => { '1': 'c', '2': 'b' }
 */
var invert = createInverter(function(result, value, key) {
  result[value] = key;
}, constant(identity));

module.exports = invert;
", "node_modules/lodash/invert.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/invert.js");
    }
}
