<?php

/* node_modules/lodash/_baseProperty.js */
class __TwigTemplate_797927c5b33bb0392c967355426f660fa6636763b75d4e30f6f678ec091bc45c extends Twig_Template
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
        $__internal_76d2d62cb3a0dece86f94503ce00e7a4c2dc9a3066427a80881bf2085c4104c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d2d62cb3a0dece86f94503ce00e7a4c2dc9a3066427a80881bf2085c4104c8->enter($__internal_76d2d62cb3a0dece86f94503ce00e7a4c2dc9a3066427a80881bf2085c4104c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseProperty.js"));

        // line 1
        echo "/**
 * The base implementation of `_.property` without support for deep paths.
 *
 * @private
 * @param {string} key The key of the property to get.
 * @returns {Function} Returns the new accessor function.
 */
function baseProperty(key) {
  return function(object) {
    return object == null ? undefined : object[key];
  };
}

module.exports = baseProperty;
";
        
        $__internal_76d2d62cb3a0dece86f94503ce00e7a4c2dc9a3066427a80881bf2085c4104c8->leave($__internal_76d2d62cb3a0dece86f94503ce00e7a4c2dc9a3066427a80881bf2085c4104c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseProperty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.property` without support for deep paths.
 *
 * @private
 * @param {string} key The key of the property to get.
 * @returns {Function} Returns the new accessor function.
 */
function baseProperty(key) {
  return function(object) {
    return object == null ? undefined : object[key];
  };
}

module.exports = baseProperty;
", "node_modules/lodash/_baseProperty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseProperty.js");
    }
}
