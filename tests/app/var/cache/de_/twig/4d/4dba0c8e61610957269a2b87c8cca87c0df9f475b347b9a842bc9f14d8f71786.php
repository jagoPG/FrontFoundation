<?php

/* node_modules/lodash/_isKeyable.js */
class __TwigTemplate_c5c278a7c43407506884c6957ae4e0671e6edbb15db1d074d1791db131e77f93 extends Twig_Template
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
        $__internal_6ec316cb827f6bdb1c69d4d996fef06d6277f8dc164bdd74b0c27433f3de3068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec316cb827f6bdb1c69d4d996fef06d6277f8dc164bdd74b0c27433f3de3068->enter($__internal_6ec316cb827f6bdb1c69d4d996fef06d6277f8dc164bdd74b0c27433f3de3068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_isKeyable.js"));

        // line 1
        echo "/**
 * Checks if `value` is suitable for use as unique object key.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is suitable, else `false`.
 */
function isKeyable(value) {
  var type = typeof value;
  return (type == 'string' || type == 'number' || type == 'symbol' || type == 'boolean')
    ? (value !== '__proto__')
    : (value === null);
}

module.exports = isKeyable;
";
        
        $__internal_6ec316cb827f6bdb1c69d4d996fef06d6277f8dc164bdd74b0c27433f3de3068->leave($__internal_6ec316cb827f6bdb1c69d4d996fef06d6277f8dc164bdd74b0c27433f3de3068_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_isKeyable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks if `value` is suitable for use as unique object key.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is suitable, else `false`.
 */
function isKeyable(value) {
  var type = typeof value;
  return (type == 'string' || type == 'number' || type == 'symbol' || type == 'boolean')
    ? (value !== '__proto__')
    : (value === null);
}

module.exports = isKeyable;
", "node_modules/lodash/_isKeyable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_isKeyable.js");
    }
}
