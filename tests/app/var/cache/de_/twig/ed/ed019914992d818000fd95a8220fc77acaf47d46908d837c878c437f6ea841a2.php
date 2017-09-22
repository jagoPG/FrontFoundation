<?php

/* node_modules/lodash/bindAll.js */
class __TwigTemplate_4a8ca784d8eaf6821a16d195818f579422bc849d689ed07b1b1e390a10588afb extends Twig_Template
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
        $__internal_397b575c9dab9040d2f6d75ae725115692226abdd34ff4e40cee1feca330f9d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397b575c9dab9040d2f6d75ae725115692226abdd34ff4e40cee1feca330f9d8->enter($__internal_397b575c9dab9040d2f6d75ae725115692226abdd34ff4e40cee1feca330f9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/bindAll.js"));

        // line 1
        echo "var arrayEach = require('./_arrayEach'),
    baseAssignValue = require('./_baseAssignValue'),
    bind = require('./bind'),
    flatRest = require('./_flatRest'),
    toKey = require('./_toKey');

/**
 * Binds methods of an object to the object itself, overwriting the existing
 * method.
 *
 * **Note:** This method doesn't set the \"length\" property of bound functions.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Util
 * @param {Object} object The object to bind and assign the bound methods to.
 * @param {...(string|string[])} methodNames The object method names to bind.
 * @returns {Object} Returns `object`.
 * @example
 *
 * var view = {
 *   'label': 'docs',
 *   'click': function() {
 *     console.log('clicked ' + this.label);
 *   }
 * };
 *
 * _.bindAll(view, ['click']);
 * jQuery(element).on('click', view.click);
 * // => Logs 'clicked docs' when clicked.
 */
var bindAll = flatRest(function(object, methodNames) {
  arrayEach(methodNames, function(key) {
    key = toKey(key);
    baseAssignValue(object, key, bind(object[key], object));
  });
  return object;
});

module.exports = bindAll;
";
        
        $__internal_397b575c9dab9040d2f6d75ae725115692226abdd34ff4e40cee1feca330f9d8->leave($__internal_397b575c9dab9040d2f6d75ae725115692226abdd34ff4e40cee1feca330f9d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/bindAll.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayEach = require('./_arrayEach'),
    baseAssignValue = require('./_baseAssignValue'),
    bind = require('./bind'),
    flatRest = require('./_flatRest'),
    toKey = require('./_toKey');

/**
 * Binds methods of an object to the object itself, overwriting the existing
 * method.
 *
 * **Note:** This method doesn't set the \"length\" property of bound functions.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Util
 * @param {Object} object The object to bind and assign the bound methods to.
 * @param {...(string|string[])} methodNames The object method names to bind.
 * @returns {Object} Returns `object`.
 * @example
 *
 * var view = {
 *   'label': 'docs',
 *   'click': function() {
 *     console.log('clicked ' + this.label);
 *   }
 * };
 *
 * _.bindAll(view, ['click']);
 * jQuery(element).on('click', view.click);
 * // => Logs 'clicked docs' when clicked.
 */
var bindAll = flatRest(function(object, methodNames) {
  arrayEach(methodNames, function(key) {
    key = toKey(key);
    baseAssignValue(object, key, bind(object[key], object));
  });
  return object;
});

module.exports = bindAll;
", "node_modules/lodash/bindAll.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/bindAll.js");
    }
}
