<?php

/* node_modules/lodash/_basePropertyDeep.js */
class __TwigTemplate_071023e613eaf753f5ec359664e65fe96a4e507b937beb0eb2554ac79482ceda extends Twig_Template
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
        $__internal_4b7aca1397a969e76be7e071d03efc8864a9cc7b6f4b316b7761ab0524089172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7aca1397a969e76be7e071d03efc8864a9cc7b6f4b316b7761ab0524089172->enter($__internal_4b7aca1397a969e76be7e071d03efc8864a9cc7b6f4b316b7761ab0524089172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_basePropertyDeep.js"));

        // line 1
        echo "var baseGet = require('./_baseGet');

/**
 * A specialized version of `baseProperty` which supports deep paths.
 *
 * @private
 * @param {Array|string} path The path of the property to get.
 * @returns {Function} Returns the new accessor function.
 */
function basePropertyDeep(path) {
  return function(object) {
    return baseGet(object, path);
  };
}

module.exports = basePropertyDeep;
";
        
        $__internal_4b7aca1397a969e76be7e071d03efc8864a9cc7b6f4b316b7761ab0524089172->leave($__internal_4b7aca1397a969e76be7e071d03efc8864a9cc7b6f4b316b7761ab0524089172_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_basePropertyDeep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGet = require('./_baseGet');

/**
 * A specialized version of `baseProperty` which supports deep paths.
 *
 * @private
 * @param {Array|string} path The path of the property to get.
 * @returns {Function} Returns the new accessor function.
 */
function basePropertyDeep(path) {
  return function(object) {
    return baseGet(object, path);
  };
}

module.exports = basePropertyDeep;
", "node_modules/lodash/_basePropertyDeep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_basePropertyDeep.js");
    }
}
