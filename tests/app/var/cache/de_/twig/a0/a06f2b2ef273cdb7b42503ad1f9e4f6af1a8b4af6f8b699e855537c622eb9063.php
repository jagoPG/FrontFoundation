<?php

/* node_modules/lodash/_baseConforms.js */
class __TwigTemplate_90334f5bb0480bab90b7a58575150d4c3aceaee6f183732798ae89a13cbc5b37 extends Twig_Template
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
        $__internal_1619c8a7b37eaca25c46be9381ffe765b3a1bcfd6b9dbecd4289c2cc86c7c369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1619c8a7b37eaca25c46be9381ffe765b3a1bcfd6b9dbecd4289c2cc86c7c369->enter($__internal_1619c8a7b37eaca25c46be9381ffe765b3a1bcfd6b9dbecd4289c2cc86c7c369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseConforms.js"));

        // line 1
        echo "var baseConformsTo = require('./_baseConformsTo'),
    keys = require('./keys');

/**
 * The base implementation of `_.conforms` which doesn't clone `source`.
 *
 * @private
 * @param {Object} source The object of property predicates to conform to.
 * @returns {Function} Returns the new spec function.
 */
function baseConforms(source) {
  var props = keys(source);
  return function(object) {
    return baseConformsTo(object, source, props);
  };
}

module.exports = baseConforms;
";
        
        $__internal_1619c8a7b37eaca25c46be9381ffe765b3a1bcfd6b9dbecd4289c2cc86c7c369->leave($__internal_1619c8a7b37eaca25c46be9381ffe765b3a1bcfd6b9dbecd4289c2cc86c7c369_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseConforms.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseConformsTo = require('./_baseConformsTo'),
    keys = require('./keys');

/**
 * The base implementation of `_.conforms` which doesn't clone `source`.
 *
 * @private
 * @param {Object} source The object of property predicates to conform to.
 * @returns {Function} Returns the new spec function.
 */
function baseConforms(source) {
  var props = keys(source);
  return function(object) {
    return baseConformsTo(object, source, props);
  };
}

module.exports = baseConforms;
", "node_modules/lodash/_baseConforms.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseConforms.js");
    }
}
