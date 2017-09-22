<?php

/* node_modules/lodash/fromPairs.js */
class __TwigTemplate_df7d436e833d4585650d8d42e7cdb657caa9534925359dc4b902180b1cdb9de9 extends Twig_Template
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
        $__internal_9cc26aa23b7534568430802ee0b189b3385b66d78c65b58085f925e8ae94eaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc26aa23b7534568430802ee0b189b3385b66d78c65b58085f925e8ae94eaf0->enter($__internal_9cc26aa23b7534568430802ee0b189b3385b66d78c65b58085f925e8ae94eaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fromPairs.js"));

        // line 1
        echo "/**
 * The inverse of `_.toPairs`; this method returns an object composed
 * from key-value `pairs`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} pairs The key-value pairs.
 * @returns {Object} Returns the new object.
 * @example
 *
 * _.fromPairs([['a', 1], ['b', 2]]);
 * // => { 'a': 1, 'b': 2 }
 */
function fromPairs(pairs) {
  var index = -1,
      length = pairs == null ? 0 : pairs.length,
      result = {};

  while (++index < length) {
    var pair = pairs[index];
    result[pair[0]] = pair[1];
  }
  return result;
}

module.exports = fromPairs;
";
        
        $__internal_9cc26aa23b7534568430802ee0b189b3385b66d78c65b58085f925e8ae94eaf0->leave($__internal_9cc26aa23b7534568430802ee0b189b3385b66d78c65b58085f925e8ae94eaf0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fromPairs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The inverse of `_.toPairs`; this method returns an object composed
 * from key-value `pairs`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} pairs The key-value pairs.
 * @returns {Object} Returns the new object.
 * @example
 *
 * _.fromPairs([['a', 1], ['b', 2]]);
 * // => { 'a': 1, 'b': 2 }
 */
function fromPairs(pairs) {
  var index = -1,
      length = pairs == null ? 0 : pairs.length,
      result = {};

  while (++index < length) {
    var pair = pairs[index];
    result[pair[0]] = pair[1];
  }
  return result;
}

module.exports = fromPairs;
", "node_modules/lodash/fromPairs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fromPairs.js");
    }
}
