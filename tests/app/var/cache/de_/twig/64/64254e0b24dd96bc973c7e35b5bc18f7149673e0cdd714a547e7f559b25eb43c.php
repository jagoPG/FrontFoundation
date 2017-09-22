<?php

/* node_modules/lodash/_escapeStringChar.js */
class __TwigTemplate_c8ed4ed844b8e079836aafe1a435fe90a9e36704065c0e20e9b03c00805fcd21 extends Twig_Template
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
        $__internal_f59691faeea3df21c47637775592cea6631e81c7c6461d664601d24fd717fb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59691faeea3df21c47637775592cea6631e81c7c6461d664601d24fd717fb40->enter($__internal_f59691faeea3df21c47637775592cea6631e81c7c6461d664601d24fd717fb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_escapeStringChar.js"));

        // line 1
        echo "/** Used to escape characters for inclusion in compiled string literals. */
var stringEscapes = {
  '\\\\': '\\\\',
  \"'\": \"'\",
  '\\n': 'n',
  '\\r': 'r',
  '\\u2028': 'u2028',
  '\\u2029': 'u2029'
};

/**
 * Used by `_.template` to escape characters for inclusion in compiled string literals.
 *
 * @private
 * @param {string} chr The matched character to escape.
 * @returns {string} Returns the escaped character.
 */
function escapeStringChar(chr) {
  return '\\\\' + stringEscapes[chr];
}

module.exports = escapeStringChar;
";
        
        $__internal_f59691faeea3df21c47637775592cea6631e81c7c6461d664601d24fd717fb40->leave($__internal_f59691faeea3df21c47637775592cea6631e81c7c6461d664601d24fd717fb40_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_escapeStringChar.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to escape characters for inclusion in compiled string literals. */
var stringEscapes = {
  '\\\\': '\\\\',
  \"'\": \"'\",
  '\\n': 'n',
  '\\r': 'r',
  '\\u2028': 'u2028',
  '\\u2029': 'u2029'
};

/**
 * Used by `_.template` to escape characters for inclusion in compiled string literals.
 *
 * @private
 * @param {string} chr The matched character to escape.
 * @returns {string} Returns the escaped character.
 */
function escapeStringChar(chr) {
  return '\\\\' + stringEscapes[chr];
}

module.exports = escapeStringChar;
", "node_modules/lodash/_escapeStringChar.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_escapeStringChar.js");
    }
}
