<?php

/* node_modules/lodash/_createToPairs.js */
class __TwigTemplate_e333e5854bc5e265cf35ac73b596993da2ee2fe9eb60bb684994aee78ccd9fef extends Twig_Template
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
        $__internal_ce46b03cb0585060cf9d112a28102d8603ee2983fe6b863c4ff5e09bcbdaa8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce46b03cb0585060cf9d112a28102d8603ee2983fe6b863c4ff5e09bcbdaa8f8->enter($__internal_ce46b03cb0585060cf9d112a28102d8603ee2983fe6b863c4ff5e09bcbdaa8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createToPairs.js"));

        // line 1
        echo "var baseToPairs = require('./_baseToPairs'),
    getTag = require('./_getTag'),
    mapToArray = require('./_mapToArray'),
    setToPairs = require('./_setToPairs');

/** `Object#toString` result references. */
var mapTag = '[object Map]',
    setTag = '[object Set]';

/**
 * Creates a `_.toPairs` or `_.toPairsIn` function.
 *
 * @private
 * @param {Function} keysFunc The function to get the keys of a given object.
 * @returns {Function} Returns the new pairs function.
 */
function createToPairs(keysFunc) {
  return function(object) {
    var tag = getTag(object);
    if (tag == mapTag) {
      return mapToArray(object);
    }
    if (tag == setTag) {
      return setToPairs(object);
    }
    return baseToPairs(object, keysFunc(object));
  };
}

module.exports = createToPairs;
";
        
        $__internal_ce46b03cb0585060cf9d112a28102d8603ee2983fe6b863c4ff5e09bcbdaa8f8->leave($__internal_ce46b03cb0585060cf9d112a28102d8603ee2983fe6b863c4ff5e09bcbdaa8f8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createToPairs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseToPairs = require('./_baseToPairs'),
    getTag = require('./_getTag'),
    mapToArray = require('./_mapToArray'),
    setToPairs = require('./_setToPairs');

/** `Object#toString` result references. */
var mapTag = '[object Map]',
    setTag = '[object Set]';

/**
 * Creates a `_.toPairs` or `_.toPairsIn` function.
 *
 * @private
 * @param {Function} keysFunc The function to get the keys of a given object.
 * @returns {Function} Returns the new pairs function.
 */
function createToPairs(keysFunc) {
  return function(object) {
    var tag = getTag(object);
    if (tag == mapTag) {
      return mapToArray(object);
    }
    if (tag == setTag) {
      return setToPairs(object);
    }
    return baseToPairs(object, keysFunc(object));
  };
}

module.exports = createToPairs;
", "node_modules/lodash/_createToPairs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createToPairs.js");
    }
}
