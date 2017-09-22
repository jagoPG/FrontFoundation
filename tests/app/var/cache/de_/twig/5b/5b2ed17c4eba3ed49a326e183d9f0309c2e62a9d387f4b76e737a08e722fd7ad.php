<?php

/* node_modules/lodash/_matchesStrictComparable.js */
class __TwigTemplate_c8fdf597b89a2fb272061cf6f9081a1f22a8dfa54e5783d24c3bf84c51957300 extends Twig_Template
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
        $__internal_56fde765d991fee92a6d252566d37876d7c528f5e1e807f2ed172a7a13c5ceed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fde765d991fee92a6d252566d37876d7c528f5e1e807f2ed172a7a13c5ceed->enter($__internal_56fde765d991fee92a6d252566d37876d7c528f5e1e807f2ed172a7a13c5ceed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_matchesStrictComparable.js"));

        // line 1
        echo "/**
 * A specialized version of `matchesProperty` for source values suitable
 * for strict equality comparisons, i.e. `===`.
 *
 * @private
 * @param {string} key The key of the property to get.
 * @param {*} srcValue The value to match.
 * @returns {Function} Returns the new spec function.
 */
function matchesStrictComparable(key, srcValue) {
  return function(object) {
    if (object == null) {
      return false;
    }
    return object[key] === srcValue &&
      (srcValue !== undefined || (key in Object(object)));
  };
}

module.exports = matchesStrictComparable;
";
        
        $__internal_56fde765d991fee92a6d252566d37876d7c528f5e1e807f2ed172a7a13c5ceed->leave($__internal_56fde765d991fee92a6d252566d37876d7c528f5e1e807f2ed172a7a13c5ceed_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_matchesStrictComparable.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `matchesProperty` for source values suitable
 * for strict equality comparisons, i.e. `===`.
 *
 * @private
 * @param {string} key The key of the property to get.
 * @param {*} srcValue The value to match.
 * @returns {Function} Returns the new spec function.
 */
function matchesStrictComparable(key, srcValue) {
  return function(object) {
    if (object == null) {
      return false;
    }
    return object[key] === srcValue &&
      (srcValue !== undefined || (key in Object(object)));
  };
}

module.exports = matchesStrictComparable;
", "node_modules/lodash/_matchesStrictComparable.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_matchesStrictComparable.js");
    }
}
