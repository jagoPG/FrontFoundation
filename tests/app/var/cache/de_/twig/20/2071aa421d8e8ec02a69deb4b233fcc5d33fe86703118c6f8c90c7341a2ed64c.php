<?php

/* node_modules/lodash/at.js */
class __TwigTemplate_6f61999f7107d461c4c5c4096593a35cc7e94aa0d3e48f538ed714ccd579df63 extends Twig_Template
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
        $__internal_cacc62ca4ac395b8bac938b6ed201d9dcd5d215ab151a4ea20dacf75fea2d10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cacc62ca4ac395b8bac938b6ed201d9dcd5d215ab151a4ea20dacf75fea2d10b->enter($__internal_cacc62ca4ac395b8bac938b6ed201d9dcd5d215ab151a4ea20dacf75fea2d10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/at.js"));

        // line 1
        echo "var baseAt = require('./_baseAt'),
    flatRest = require('./_flatRest');

/**
 * Creates an array of values corresponding to `paths` of `object`.
 *
 * @static
 * @memberOf _
 * @since 1.0.0
 * @category Object
 * @param {Object} object The object to iterate over.
 * @param {...(string|string[])} [paths] The property paths to pick.
 * @returns {Array} Returns the picked values.
 * @example
 *
 * var object = { 'a': [{ 'b': { 'c': 3 } }, 4] };
 *
 * _.at(object, ['a[0].b.c', 'a[1]']);
 * // => [3, 4]
 */
var at = flatRest(baseAt);

module.exports = at;
";
        
        $__internal_cacc62ca4ac395b8bac938b6ed201d9dcd5d215ab151a4ea20dacf75fea2d10b->leave($__internal_cacc62ca4ac395b8bac938b6ed201d9dcd5d215ab151a4ea20dacf75fea2d10b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/at.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseAt = require('./_baseAt'),
    flatRest = require('./_flatRest');

/**
 * Creates an array of values corresponding to `paths` of `object`.
 *
 * @static
 * @memberOf _
 * @since 1.0.0
 * @category Object
 * @param {Object} object The object to iterate over.
 * @param {...(string|string[])} [paths] The property paths to pick.
 * @returns {Array} Returns the picked values.
 * @example
 *
 * var object = { 'a': [{ 'b': { 'c': 3 } }, 4] };
 *
 * _.at(object, ['a[0].b.c', 'a[1]']);
 * // => [3, 4]
 */
var at = flatRest(baseAt);

module.exports = at;
", "node_modules/lodash/at.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/at.js");
    }
}
