<?php

/* node_modules/lodash/_apply.js */
class __TwigTemplate_5c76057467c64b1f94e4d4398fa1db2b939c0103235a8afe4d9e398e5f0c0d15 extends Twig_Template
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
        $__internal_594616e526dee02bc983e01110d1319793f12f86fa16c7d436c0c3263bfd6252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594616e526dee02bc983e01110d1319793f12f86fa16c7d436c0c3263bfd6252->enter($__internal_594616e526dee02bc983e01110d1319793f12f86fa16c7d436c0c3263bfd6252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_apply.js"));

        // line 1
        echo "/**
 * A faster alternative to `Function#apply`, this function invokes `func`
 * with the `this` binding of `thisArg` and the arguments of `args`.
 *
 * @private
 * @param {Function} func The function to invoke.
 * @param {*} thisArg The `this` binding of `func`.
 * @param {Array} args The arguments to invoke `func` with.
 * @returns {*} Returns the result of `func`.
 */
function apply(func, thisArg, args) {
  switch (args.length) {
    case 0: return func.call(thisArg);
    case 1: return func.call(thisArg, args[0]);
    case 2: return func.call(thisArg, args[0], args[1]);
    case 3: return func.call(thisArg, args[0], args[1], args[2]);
  }
  return func.apply(thisArg, args);
}

module.exports = apply;
";
        
        $__internal_594616e526dee02bc983e01110d1319793f12f86fa16c7d436c0c3263bfd6252->leave($__internal_594616e526dee02bc983e01110d1319793f12f86fa16c7d436c0c3263bfd6252_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_apply.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A faster alternative to `Function#apply`, this function invokes `func`
 * with the `this` binding of `thisArg` and the arguments of `args`.
 *
 * @private
 * @param {Function} func The function to invoke.
 * @param {*} thisArg The `this` binding of `func`.
 * @param {Array} args The arguments to invoke `func` with.
 * @returns {*} Returns the result of `func`.
 */
function apply(func, thisArg, args) {
  switch (args.length) {
    case 0: return func.call(thisArg);
    case 1: return func.call(thisArg, args[0]);
    case 2: return func.call(thisArg, args[0], args[1]);
    case 3: return func.call(thisArg, args[0], args[1], args[2]);
  }
  return func.apply(thisArg, args);
}

module.exports = apply;
", "node_modules/lodash/_apply.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_apply.js");
    }
}
