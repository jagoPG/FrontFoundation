<?php

/* node_modules/lodash/_addSetEntry.js */
class __TwigTemplate_42259f1688ac5aaeeb29280a7c47764d279938077a94fbfa145606b196faa022 extends Twig_Template
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
        $__internal_bf0a98dc0ded9f3adeff097f5427bd96021f3f807d9c1fb18c05d171c1bd5c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0a98dc0ded9f3adeff097f5427bd96021f3f807d9c1fb18c05d171c1bd5c9d->enter($__internal_bf0a98dc0ded9f3adeff097f5427bd96021f3f807d9c1fb18c05d171c1bd5c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_addSetEntry.js"));

        // line 1
        echo "/**
 * Adds `value` to `set`.
 *
 * @private
 * @param {Object} set The set to modify.
 * @param {*} value The value to add.
 * @returns {Object} Returns `set`.
 */
function addSetEntry(set, value) {
  // Don't return `set.add` because it's not chainable in IE 11.
  set.add(value);
  return set;
}

module.exports = addSetEntry;
";
        
        $__internal_bf0a98dc0ded9f3adeff097f5427bd96021f3f807d9c1fb18c05d171c1bd5c9d->leave($__internal_bf0a98dc0ded9f3adeff097f5427bd96021f3f807d9c1fb18c05d171c1bd5c9d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_addSetEntry.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Adds `value` to `set`.
 *
 * @private
 * @param {Object} set The set to modify.
 * @param {*} value The value to add.
 * @returns {Object} Returns `set`.
 */
function addSetEntry(set, value) {
  // Don't return `set.add` because it's not chainable in IE 11.
  set.add(value);
  return set;
}

module.exports = addSetEntry;
", "node_modules/lodash/_addSetEntry.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_addSetEntry.js");
    }
}
