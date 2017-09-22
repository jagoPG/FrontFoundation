<?php

/* node_modules/lodash/_createInverter.js */
class __TwigTemplate_431fc824d873df40244288b518d6ee919ab28513a6f71b1e125e8533e14dfc68 extends Twig_Template
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
        $__internal_20c04278e0bea2179736ba518e284e07065cbab305fc4adcd64f8660620d7c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c04278e0bea2179736ba518e284e07065cbab305fc4adcd64f8660620d7c0c->enter($__internal_20c04278e0bea2179736ba518e284e07065cbab305fc4adcd64f8660620d7c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createInverter.js"));

        // line 1
        echo "var baseInverter = require('./_baseInverter');

/**
 * Creates a function like `_.invertBy`.
 *
 * @private
 * @param {Function} setter The function to set accumulator values.
 * @param {Function} toIteratee The function to resolve iteratees.
 * @returns {Function} Returns the new inverter function.
 */
function createInverter(setter, toIteratee) {
  return function(object, iteratee) {
    return baseInverter(object, setter, toIteratee(iteratee), {});
  };
}

module.exports = createInverter;
";
        
        $__internal_20c04278e0bea2179736ba518e284e07065cbab305fc4adcd64f8660620d7c0c->leave($__internal_20c04278e0bea2179736ba518e284e07065cbab305fc4adcd64f8660620d7c0c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createInverter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseInverter = require('./_baseInverter');

/**
 * Creates a function like `_.invertBy`.
 *
 * @private
 * @param {Function} setter The function to set accumulator values.
 * @param {Function} toIteratee The function to resolve iteratees.
 * @returns {Function} Returns the new inverter function.
 */
function createInverter(setter, toIteratee) {
  return function(object, iteratee) {
    return baseInverter(object, setter, toIteratee(iteratee), {});
  };
}

module.exports = createInverter;
", "node_modules/lodash/_createInverter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createInverter.js");
    }
}
