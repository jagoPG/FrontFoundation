<?php

/* node_modules/async/unmemoize.js */
class __TwigTemplate_93de0067ca25d4288f34e1f654e5c55f1582c73ff0f469dad134ccba797e8231 extends Twig_Template
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
        $__internal_a997cd5faa0597bfc3c1066d80e5920c0a9c189f2c1607cd468e20f6ab21856e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a997cd5faa0597bfc3c1066d80e5920c0a9c189f2c1607cd468e20f6ab21856e->enter($__internal_a997cd5faa0597bfc3c1066d80e5920c0a9c189f2c1607cd468e20f6ab21856e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async/unmemoize.js"));

        // line 1
        echo "\"use strict\";

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = unmemoize;
/**
 * Undoes a [memoize]{@link module:Utils.memoize}d function, reverting it to the original,
 * unmemoized form. Handy for testing.
 *
 * @name unmemoize
 * @static
 * @memberOf module:Utils
 * @method
 * @see [async.memoize]{@link module:Utils.memoize}
 * @category Util
 * @param {AsyncFunction} fn - the memoized function
 * @returns {AsyncFunction} a function that calls the original unmemoized function
 */
function unmemoize(fn) {
    return function () {
        return (fn.unmemoized || fn).apply(null, arguments);
    };
}
module.exports = exports[\"default\"];";
        
        $__internal_a997cd5faa0597bfc3c1066d80e5920c0a9c189f2c1607cd468e20f6ab21856e->leave($__internal_a997cd5faa0597bfc3c1066d80e5920c0a9c189f2c1607cd468e20f6ab21856e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async/unmemoize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

Object.defineProperty(exports, \"__esModule\", {
    value: true
});
exports.default = unmemoize;
/**
 * Undoes a [memoize]{@link module:Utils.memoize}d function, reverting it to the original,
 * unmemoized form. Handy for testing.
 *
 * @name unmemoize
 * @static
 * @memberOf module:Utils
 * @method
 * @see [async.memoize]{@link module:Utils.memoize}
 * @category Util
 * @param {AsyncFunction} fn - the memoized function
 * @returns {AsyncFunction} a function that calls the original unmemoized function
 */
function unmemoize(fn) {
    return function () {
        return (fn.unmemoized || fn).apply(null, arguments);
    };
}
module.exports = exports[\"default\"];", "node_modules/async/unmemoize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async/unmemoize.js");
    }
}
