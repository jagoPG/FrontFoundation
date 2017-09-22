<?php

/* node_modules/lodash/join.js */
class __TwigTemplate_4ae357ee1f47cc35a38c9b81a1e5121e7bac69ca6ccd0a9547acc3443a88c1cc extends Twig_Template
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
        $__internal_b5b79e9831511cbcce12ab096e9e4874700bab45cc171696f4bc39733d9c874f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b79e9831511cbcce12ab096e9e4874700bab45cc171696f4bc39733d9c874f->enter($__internal_b5b79e9831511cbcce12ab096e9e4874700bab45cc171696f4bc39733d9c874f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/join.js"));

        // line 1
        echo "/** Used for built-in method references. */
var arrayProto = Array.prototype;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeJoin = arrayProto.join;

/**
 * Converts all elements in `array` into a string separated by `separator`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to convert.
 * @param {string} [separator=','] The element separator.
 * @returns {string} Returns the joined string.
 * @example
 *
 * _.join(['a', 'b', 'c'], '~');
 * // => 'a~b~c'
 */
function join(array, separator) {
  return array == null ? '' : nativeJoin.call(array, separator);
}

module.exports = join;
";
        
        $__internal_b5b79e9831511cbcce12ab096e9e4874700bab45cc171696f4bc39733d9c874f->leave($__internal_b5b79e9831511cbcce12ab096e9e4874700bab45cc171696f4bc39733d9c874f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/join.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used for built-in method references. */
var arrayProto = Array.prototype;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeJoin = arrayProto.join;

/**
 * Converts all elements in `array` into a string separated by `separator`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to convert.
 * @param {string} [separator=','] The element separator.
 * @returns {string} Returns the joined string.
 * @example
 *
 * _.join(['a', 'b', 'c'], '~');
 * // => 'a~b~c'
 */
function join(array, separator) {
  return array == null ? '' : nativeJoin.call(array, separator);
}

module.exports = join;
", "node_modules/lodash/join.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/join.js");
    }
}
