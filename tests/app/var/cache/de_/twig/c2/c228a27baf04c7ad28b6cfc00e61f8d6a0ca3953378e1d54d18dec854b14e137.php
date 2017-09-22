<?php

/* node_modules/lodash/uniqueId.js */
class __TwigTemplate_477f6f72944ce13530324ed6ce3e365d74569c6e10ba262e5d09c7afef575019 extends Twig_Template
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
        $__internal_5328d1be52a7a824a091d47321d16db53f84f06d586a9b8754e5ba44ae83b898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5328d1be52a7a824a091d47321d16db53f84f06d586a9b8754e5ba44ae83b898->enter($__internal_5328d1be52a7a824a091d47321d16db53f84f06d586a9b8754e5ba44ae83b898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/uniqueId.js"));

        // line 1
        echo "var toString = require('./toString');

/** Used to generate unique IDs. */
var idCounter = 0;

/**
 * Generates a unique ID. If `prefix` is given, the ID is appended to it.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Util
 * @param {string} [prefix=''] The value to prefix the ID with.
 * @returns {string} Returns the unique ID.
 * @example
 *
 * _.uniqueId('contact_');
 * // => 'contact_104'
 *
 * _.uniqueId();
 * // => '105'
 */
function uniqueId(prefix) {
  var id = ++idCounter;
  return toString(prefix) + id;
}

module.exports = uniqueId;
";
        
        $__internal_5328d1be52a7a824a091d47321d16db53f84f06d586a9b8754e5ba44ae83b898->leave($__internal_5328d1be52a7a824a091d47321d16db53f84f06d586a9b8754e5ba44ae83b898_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/uniqueId.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toString = require('./toString');

/** Used to generate unique IDs. */
var idCounter = 0;

/**
 * Generates a unique ID. If `prefix` is given, the ID is appended to it.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Util
 * @param {string} [prefix=''] The value to prefix the ID with.
 * @returns {string} Returns the unique ID.
 * @example
 *
 * _.uniqueId('contact_');
 * // => 'contact_104'
 *
 * _.uniqueId();
 * // => '105'
 */
function uniqueId(prefix) {
  var id = ++idCounter;
  return toString(prefix) + id;
}

module.exports = uniqueId;
", "node_modules/lodash/uniqueId.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/uniqueId.js");
    }
}
