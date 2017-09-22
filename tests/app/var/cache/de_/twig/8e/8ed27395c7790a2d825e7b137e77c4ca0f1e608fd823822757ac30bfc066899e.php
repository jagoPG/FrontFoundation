<?php

/* node_modules/lodash/_basePick.js */
class __TwigTemplate_8381ec42838c268031e9dd5bba2315069d87c2203aa8642b269748e7ccabc640 extends Twig_Template
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
        $__internal_42b02b87c2904beeab1b02224e33554e3d6140196e1befc2ecd93a6a8196f65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b02b87c2904beeab1b02224e33554e3d6140196e1befc2ecd93a6a8196f65b->enter($__internal_42b02b87c2904beeab1b02224e33554e3d6140196e1befc2ecd93a6a8196f65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_basePick.js"));

        // line 1
        echo "var basePickBy = require('./_basePickBy'),
    hasIn = require('./hasIn');

/**
 * The base implementation of `_.pick` without support for individual
 * property identifiers.
 *
 * @private
 * @param {Object} object The source object.
 * @param {string[]} paths The property paths to pick.
 * @returns {Object} Returns the new object.
 */
function basePick(object, paths) {
  return basePickBy(object, paths, function(value, path) {
    return hasIn(object, path);
  });
}

module.exports = basePick;
";
        
        $__internal_42b02b87c2904beeab1b02224e33554e3d6140196e1befc2ecd93a6a8196f65b->leave($__internal_42b02b87c2904beeab1b02224e33554e3d6140196e1befc2ecd93a6a8196f65b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_basePick.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var basePickBy = require('./_basePickBy'),
    hasIn = require('./hasIn');

/**
 * The base implementation of `_.pick` without support for individual
 * property identifiers.
 *
 * @private
 * @param {Object} object The source object.
 * @param {string[]} paths The property paths to pick.
 * @returns {Object} Returns the new object.
 */
function basePick(object, paths) {
  return basePickBy(object, paths, function(value, path) {
    return hasIn(object, path);
  });
}

module.exports = basePick;
", "node_modules/lodash/_basePick.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_basePick.js");
    }
}
