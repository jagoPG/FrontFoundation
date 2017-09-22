<?php

/* node_modules/lodash/_addMapEntry.js */
class __TwigTemplate_57b2a626a241d005d5f4fefe6f19a774f960ec7844f24f9d32f564db3965652c extends Twig_Template
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
        $__internal_2f2e4afbe46b462cc7a0f6cddf61131905b6ea04f5909eeed8e971569b9620a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2e4afbe46b462cc7a0f6cddf61131905b6ea04f5909eeed8e971569b9620a2->enter($__internal_2f2e4afbe46b462cc7a0f6cddf61131905b6ea04f5909eeed8e971569b9620a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_addMapEntry.js"));

        // line 1
        echo "/**
 * Adds the key-value `pair` to `map`.
 *
 * @private
 * @param {Object} map The map to modify.
 * @param {Array} pair The key-value pair to add.
 * @returns {Object} Returns `map`.
 */
function addMapEntry(map, pair) {
  // Don't return `map.set` because it's not chainable in IE 11.
  map.set(pair[0], pair[1]);
  return map;
}

module.exports = addMapEntry;
";
        
        $__internal_2f2e4afbe46b462cc7a0f6cddf61131905b6ea04f5909eeed8e971569b9620a2->leave($__internal_2f2e4afbe46b462cc7a0f6cddf61131905b6ea04f5909eeed8e971569b9620a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_addMapEntry.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Adds the key-value `pair` to `map`.
 *
 * @private
 * @param {Object} map The map to modify.
 * @param {Array} pair The key-value pair to add.
 * @returns {Object} Returns `map`.
 */
function addMapEntry(map, pair) {
  // Don't return `map.set` because it's not chainable in IE 11.
  map.set(pair[0], pair[1]);
  return map;
}

module.exports = addMapEntry;
", "node_modules/lodash/_addMapEntry.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_addMapEntry.js");
    }
}
