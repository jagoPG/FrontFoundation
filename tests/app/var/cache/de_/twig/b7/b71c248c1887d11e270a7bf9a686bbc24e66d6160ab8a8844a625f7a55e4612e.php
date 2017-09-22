<?php

/* node_modules/lodash/isUndefined.js */
class __TwigTemplate_6dfe1e2c8366e9069e5b8863e1c02bf42f79c39f8aadc8917aa512791130f06f extends Twig_Template
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
        $__internal_77d13439d766fcbebce5168ee9d895da22ef814981548d0af40acfb69d3d7086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d13439d766fcbebce5168ee9d895da22ef814981548d0af40acfb69d3d7086->enter($__internal_77d13439d766fcbebce5168ee9d895da22ef814981548d0af40acfb69d3d7086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isUndefined.js"));

        // line 1
        echo "/**
 * Checks if `value` is `undefined`.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is `undefined`, else `false`.
 * @example
 *
 * _.isUndefined(void 0);
 * // => true
 *
 * _.isUndefined(null);
 * // => false
 */
function isUndefined(value) {
  return value === undefined;
}

module.exports = isUndefined;
";
        
        $__internal_77d13439d766fcbebce5168ee9d895da22ef814981548d0af40acfb69d3d7086->leave($__internal_77d13439d766fcbebce5168ee9d895da22ef814981548d0af40acfb69d3d7086_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isUndefined.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks if `value` is `undefined`.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is `undefined`, else `false`.
 * @example
 *
 * _.isUndefined(void 0);
 * // => true
 *
 * _.isUndefined(null);
 * // => false
 */
function isUndefined(value) {
  return value === undefined;
}

module.exports = isUndefined;
", "node_modules/lodash/isUndefined.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isUndefined.js");
    }
}
