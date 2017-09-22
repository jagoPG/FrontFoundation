<?php

/* node_modules/lodash/_mapToArray.js */
class __TwigTemplate_09fad8f49911a65e39e7a378d40d151647b67a97ed9a40141524d019797ec2b9 extends Twig_Template
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
        $__internal_c04b5e597fb28044926d103de5995e013667aebab49c0b3738f55757fa28217a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c04b5e597fb28044926d103de5995e013667aebab49c0b3738f55757fa28217a->enter($__internal_c04b5e597fb28044926d103de5995e013667aebab49c0b3738f55757fa28217a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_mapToArray.js"));

        // line 1
        echo "/**
 * Converts `map` to its key-value pairs.
 *
 * @private
 * @param {Object} map The map to convert.
 * @returns {Array} Returns the key-value pairs.
 */
function mapToArray(map) {
  var index = -1,
      result = Array(map.size);

  map.forEach(function(value, key) {
    result[++index] = [key, value];
  });
  return result;
}

module.exports = mapToArray;
";
        
        $__internal_c04b5e597fb28044926d103de5995e013667aebab49c0b3738f55757fa28217a->leave($__internal_c04b5e597fb28044926d103de5995e013667aebab49c0b3738f55757fa28217a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_mapToArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Converts `map` to its key-value pairs.
 *
 * @private
 * @param {Object} map The map to convert.
 * @returns {Array} Returns the key-value pairs.
 */
function mapToArray(map) {
  var index = -1,
      result = Array(map.size);

  map.forEach(function(value, key) {
    result[++index] = [key, value];
  });
  return result;
}

module.exports = mapToArray;
", "node_modules/lodash/_mapToArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_mapToArray.js");
    }
}
