<?php

/* node_modules/lodash/_copySymbols.js */
class __TwigTemplate_6f2fdba1434403dd247d56a1731b89f6d2f5a8d2ce3458f609b16e40720bab1c extends Twig_Template
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
        $__internal_26f01531bedc7649cd4996816a911505d4ab405d7b3e174e4779752b79703de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f01531bedc7649cd4996816a911505d4ab405d7b3e174e4779752b79703de3->enter($__internal_26f01531bedc7649cd4996816a911505d4ab405d7b3e174e4779752b79703de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_copySymbols.js"));

        // line 1
        echo "var copyObject = require('./_copyObject'),
    getSymbols = require('./_getSymbols');

/**
 * Copies own symbols of `source` to `object`.
 *
 * @private
 * @param {Object} source The object to copy symbols from.
 * @param {Object} [object={}] The object to copy symbols to.
 * @returns {Object} Returns `object`.
 */
function copySymbols(source, object) {
  return copyObject(source, getSymbols(source), object);
}

module.exports = copySymbols;
";
        
        $__internal_26f01531bedc7649cd4996816a911505d4ab405d7b3e174e4779752b79703de3->leave($__internal_26f01531bedc7649cd4996816a911505d4ab405d7b3e174e4779752b79703de3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_copySymbols.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var copyObject = require('./_copyObject'),
    getSymbols = require('./_getSymbols');

/**
 * Copies own symbols of `source` to `object`.
 *
 * @private
 * @param {Object} source The object to copy symbols from.
 * @param {Object} [object={}] The object to copy symbols to.
 * @returns {Object} Returns `object`.
 */
function copySymbols(source, object) {
  return copyObject(source, getSymbols(source), object);
}

module.exports = copySymbols;
", "node_modules/lodash/_copySymbols.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_copySymbols.js");
    }
}
