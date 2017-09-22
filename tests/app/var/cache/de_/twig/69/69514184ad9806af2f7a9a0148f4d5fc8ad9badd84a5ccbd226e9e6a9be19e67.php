<?php

/* node_modules/lodash/_baseConformsTo.js */
class __TwigTemplate_789624b3ec5fa1788dafce360b858a4c8169182597cb09782e8affc261d75d04 extends Twig_Template
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
        $__internal_5fd0e0bef7cd5396d9a9813a2d4a4ccab236d835c1e71512542df7bc52f8998c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd0e0bef7cd5396d9a9813a2d4a4ccab236d835c1e71512542df7bc52f8998c->enter($__internal_5fd0e0bef7cd5396d9a9813a2d4a4ccab236d835c1e71512542df7bc52f8998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseConformsTo.js"));

        // line 1
        echo "/**
 * The base implementation of `_.conformsTo` which accepts `props` to check.
 *
 * @private
 * @param {Object} object The object to inspect.
 * @param {Object} source The object of property predicates to conform to.
 * @returns {boolean} Returns `true` if `object` conforms, else `false`.
 */
function baseConformsTo(object, source, props) {
  var length = props.length;
  if (object == null) {
    return !length;
  }
  object = Object(object);
  while (length--) {
    var key = props[length],
        predicate = source[key],
        value = object[key];

    if ((value === undefined && !(key in object)) || !predicate(value)) {
      return false;
    }
  }
  return true;
}

module.exports = baseConformsTo;
";
        
        $__internal_5fd0e0bef7cd5396d9a9813a2d4a4ccab236d835c1e71512542df7bc52f8998c->leave($__internal_5fd0e0bef7cd5396d9a9813a2d4a4ccab236d835c1e71512542df7bc52f8998c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseConformsTo.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.conformsTo` which accepts `props` to check.
 *
 * @private
 * @param {Object} object The object to inspect.
 * @param {Object} source The object of property predicates to conform to.
 * @returns {boolean} Returns `true` if `object` conforms, else `false`.
 */
function baseConformsTo(object, source, props) {
  var length = props.length;
  if (object == null) {
    return !length;
  }
  object = Object(object);
  while (length--) {
    var key = props[length],
        predicate = source[key],
        value = object[key];

    if ((value === undefined && !(key in object)) || !predicate(value)) {
      return false;
    }
  }
  return true;
}

module.exports = baseConformsTo;
", "node_modules/lodash/_baseConformsTo.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseConformsTo.js");
    }
}
