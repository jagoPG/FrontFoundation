<?php

/* node_modules/lodash/shuffle.js */
class __TwigTemplate_c5be711b54d14cb9de33132640476190c36b8c2041da78b1aa8c586ed8764efe extends Twig_Template
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
        $__internal_08baf9633260b17effb6a3ce5bb230f096fd057552929fe09c17f1fc54a1fdc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08baf9633260b17effb6a3ce5bb230f096fd057552929fe09c17f1fc54a1fdc0->enter($__internal_08baf9633260b17effb6a3ce5bb230f096fd057552929fe09c17f1fc54a1fdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/shuffle.js"));

        // line 1
        echo "var arrayShuffle = require('./_arrayShuffle'),
    baseShuffle = require('./_baseShuffle'),
    isArray = require('./isArray');

/**
 * Creates an array of shuffled values, using a version of the
 * [Fisher-Yates shuffle](https://en.wikipedia.org/wiki/Fisher-Yates_shuffle).
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Collection
 * @param {Array|Object} collection The collection to shuffle.
 * @returns {Array} Returns the new shuffled array.
 * @example
 *
 * _.shuffle([1, 2, 3, 4]);
 * // => [4, 1, 3, 2]
 */
function shuffle(collection) {
  var func = isArray(collection) ? arrayShuffle : baseShuffle;
  return func(collection);
}

module.exports = shuffle;
";
        
        $__internal_08baf9633260b17effb6a3ce5bb230f096fd057552929fe09c17f1fc54a1fdc0->leave($__internal_08baf9633260b17effb6a3ce5bb230f096fd057552929fe09c17f1fc54a1fdc0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/shuffle.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayShuffle = require('./_arrayShuffle'),
    baseShuffle = require('./_baseShuffle'),
    isArray = require('./isArray');

/**
 * Creates an array of shuffled values, using a version of the
 * [Fisher-Yates shuffle](https://en.wikipedia.org/wiki/Fisher-Yates_shuffle).
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Collection
 * @param {Array|Object} collection The collection to shuffle.
 * @returns {Array} Returns the new shuffled array.
 * @example
 *
 * _.shuffle([1, 2, 3, 4]);
 * // => [4, 1, 3, 2]
 */
function shuffle(collection) {
  var func = isArray(collection) ? arrayShuffle : baseShuffle;
  return func(collection);
}

module.exports = shuffle;
", "node_modules/lodash/shuffle.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/shuffle.js");
    }
}
