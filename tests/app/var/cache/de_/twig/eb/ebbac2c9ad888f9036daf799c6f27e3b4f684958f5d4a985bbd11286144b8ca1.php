<?php

/* node_modules/lodash/_arrayShuffle.js */
class __TwigTemplate_b17cb4e00ae026f79940cfeafe6e0826a8712c2114fdc93ca57da72b851524d3 extends Twig_Template
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
        $__internal_73ed77f47b420da6e9ae685770b39bb75beded2b550f8843e3704cde77b91852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ed77f47b420da6e9ae685770b39bb75beded2b550f8843e3704cde77b91852->enter($__internal_73ed77f47b420da6e9ae685770b39bb75beded2b550f8843e3704cde77b91852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayShuffle.js"));

        // line 1
        echo "var copyArray = require('./_copyArray'),
    shuffleSelf = require('./_shuffleSelf');

/**
 * A specialized version of `_.shuffle` for arrays.
 *
 * @private
 * @param {Array} array The array to shuffle.
 * @returns {Array} Returns the new shuffled array.
 */
function arrayShuffle(array) {
  return shuffleSelf(copyArray(array));
}

module.exports = arrayShuffle;
";
        
        $__internal_73ed77f47b420da6e9ae685770b39bb75beded2b550f8843e3704cde77b91852->leave($__internal_73ed77f47b420da6e9ae685770b39bb75beded2b550f8843e3704cde77b91852_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayShuffle.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var copyArray = require('./_copyArray'),
    shuffleSelf = require('./_shuffleSelf');

/**
 * A specialized version of `_.shuffle` for arrays.
 *
 * @private
 * @param {Array} array The array to shuffle.
 * @returns {Array} Returns the new shuffled array.
 */
function arrayShuffle(array) {
  return shuffleSelf(copyArray(array));
}

module.exports = arrayShuffle;
", "node_modules/lodash/_arrayShuffle.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayShuffle.js");
    }
}
