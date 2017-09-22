<?php

/* node_modules/lodash/_baseEachRight.js */
class __TwigTemplate_8fb9e2d383ae9d5deb79c5d7a3b9dd7b308171bbc0765cfe3f39f7f47a429415 extends Twig_Template
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
        $__internal_59db95820ca98ca6a4e32dc6749018c678d926a881f3d5ef5254545ab88b68b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59db95820ca98ca6a4e32dc6749018c678d926a881f3d5ef5254545ab88b68b3->enter($__internal_59db95820ca98ca6a4e32dc6749018c678d926a881f3d5ef5254545ab88b68b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseEachRight.js"));

        // line 1
        echo "var baseForOwnRight = require('./_baseForOwnRight'),
    createBaseEach = require('./_createBaseEach');

/**
 * The base implementation of `_.forEachRight` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array|Object} Returns `collection`.
 */
var baseEachRight = createBaseEach(baseForOwnRight, true);

module.exports = baseEachRight;
";
        
        $__internal_59db95820ca98ca6a4e32dc6749018c678d926a881f3d5ef5254545ab88b68b3->leave($__internal_59db95820ca98ca6a4e32dc6749018c678d926a881f3d5ef5254545ab88b68b3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseEachRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseForOwnRight = require('./_baseForOwnRight'),
    createBaseEach = require('./_createBaseEach');

/**
 * The base implementation of `_.forEachRight` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array|Object} Returns `collection`.
 */
var baseEachRight = createBaseEach(baseForOwnRight, true);

module.exports = baseEachRight;
", "node_modules/lodash/_baseEachRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseEachRight.js");
    }
}
