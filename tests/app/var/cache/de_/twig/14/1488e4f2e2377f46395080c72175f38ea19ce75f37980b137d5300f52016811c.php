<?php

/* node_modules/lodash/_baseAt.js */
class __TwigTemplate_be3542d49d1be7cae6a93aab67ef8a24e78c13da1066c4eef6a0ea3adce2c73f extends Twig_Template
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
        $__internal_9b8cd0152f1a28328eb1c7d1a4832bb382729b2fc2cca5a6e5c581359fd69606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8cd0152f1a28328eb1c7d1a4832bb382729b2fc2cca5a6e5c581359fd69606->enter($__internal_9b8cd0152f1a28328eb1c7d1a4832bb382729b2fc2cca5a6e5c581359fd69606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseAt.js"));

        // line 1
        echo "var get = require('./get');

/**
 * The base implementation of `_.at` without support for individual paths.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {string[]} paths The property paths to pick.
 * @returns {Array} Returns the picked elements.
 */
function baseAt(object, paths) {
  var index = -1,
      length = paths.length,
      result = Array(length),
      skip = object == null;

  while (++index < length) {
    result[index] = skip ? undefined : get(object, paths[index]);
  }
  return result;
}

module.exports = baseAt;
";
        
        $__internal_9b8cd0152f1a28328eb1c7d1a4832bb382729b2fc2cca5a6e5c581359fd69606->leave($__internal_9b8cd0152f1a28328eb1c7d1a4832bb382729b2fc2cca5a6e5c581359fd69606_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseAt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var get = require('./get');

/**
 * The base implementation of `_.at` without support for individual paths.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {string[]} paths The property paths to pick.
 * @returns {Array} Returns the picked elements.
 */
function baseAt(object, paths) {
  var index = -1,
      length = paths.length,
      result = Array(length),
      skip = object == null;

  while (++index < length) {
    result[index] = skip ? undefined : get(object, paths[index]);
  }
  return result;
}

module.exports = baseAt;
", "node_modules/lodash/_baseAt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseAt.js");
    }
}
