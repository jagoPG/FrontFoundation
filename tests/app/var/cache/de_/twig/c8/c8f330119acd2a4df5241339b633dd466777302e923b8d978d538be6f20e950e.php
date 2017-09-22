<?php

/* node_modules/lodash/_createCompounder.js */
class __TwigTemplate_0a25bbd66d9a71c11c3aeb417498d3818e3cb7fd1fe8ead2ddd5b6e2a3fdb174 extends Twig_Template
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
        $__internal_fc9f3651e2eb1b8a6314ac4b7f415edc0c82efe267521f969bed0a703630de9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc9f3651e2eb1b8a6314ac4b7f415edc0c82efe267521f969bed0a703630de9d->enter($__internal_fc9f3651e2eb1b8a6314ac4b7f415edc0c82efe267521f969bed0a703630de9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createCompounder.js"));

        // line 1
        echo "var arrayReduce = require('./_arrayReduce'),
    deburr = require('./deburr'),
    words = require('./words');

/** Used to compose unicode capture groups. */
var rsApos = \"['\\u2019]\";

/** Used to match apostrophes. */
var reApos = RegExp(rsApos, 'g');

/**
 * Creates a function like `_.camelCase`.
 *
 * @private
 * @param {Function} callback The function to combine each word.
 * @returns {Function} Returns the new compounder function.
 */
function createCompounder(callback) {
  return function(string) {
    return arrayReduce(words(deburr(string).replace(reApos, '')), callback, '');
  };
}

module.exports = createCompounder;
";
        
        $__internal_fc9f3651e2eb1b8a6314ac4b7f415edc0c82efe267521f969bed0a703630de9d->leave($__internal_fc9f3651e2eb1b8a6314ac4b7f415edc0c82efe267521f969bed0a703630de9d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createCompounder.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayReduce = require('./_arrayReduce'),
    deburr = require('./deburr'),
    words = require('./words');

/** Used to compose unicode capture groups. */
var rsApos = \"['\\u2019]\";

/** Used to match apostrophes. */
var reApos = RegExp(rsApos, 'g');

/**
 * Creates a function like `_.camelCase`.
 *
 * @private
 * @param {Function} callback The function to combine each word.
 * @returns {Function} Returns the new compounder function.
 */
function createCompounder(callback) {
  return function(string) {
    return arrayReduce(words(deburr(string).replace(reApos, '')), callback, '');
  };
}

module.exports = createCompounder;
", "node_modules/lodash/_createCompounder.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createCompounder.js");
    }
}
