<?php

/* node_modules/lodash/_getValue.js */
class __TwigTemplate_f2e6d06d92c5dae0e6f41a153cbd0284e164b0c6e29f4eb9b53debf578329d38 extends Twig_Template
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
        $__internal_b1561856c8b5b07e446c55e764f92ca1495f3fd0c159e27572a2c09495e820e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1561856c8b5b07e446c55e764f92ca1495f3fd0c159e27572a2c09495e820e8->enter($__internal_b1561856c8b5b07e446c55e764f92ca1495f3fd0c159e27572a2c09495e820e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getValue.js"));

        // line 1
        echo "/**
 * Gets the value at `key` of `object`.
 *
 * @private
 * @param {Object} [object] The object to query.
 * @param {string} key The key of the property to get.
 * @returns {*} Returns the property value.
 */
function getValue(object, key) {
  return object == null ? undefined : object[key];
}

module.exports = getValue;
";
        
        $__internal_b1561856c8b5b07e446c55e764f92ca1495f3fd0c159e27572a2c09495e820e8->leave($__internal_b1561856c8b5b07e446c55e764f92ca1495f3fd0c159e27572a2c09495e820e8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getValue.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Gets the value at `key` of `object`.
 *
 * @private
 * @param {Object} [object] The object to query.
 * @param {string} key The key of the property to get.
 * @returns {*} Returns the property value.
 */
function getValue(object, key) {
  return object == null ? undefined : object[key];
}

module.exports = getValue;
", "node_modules/lodash/_getValue.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getValue.js");
    }
}
