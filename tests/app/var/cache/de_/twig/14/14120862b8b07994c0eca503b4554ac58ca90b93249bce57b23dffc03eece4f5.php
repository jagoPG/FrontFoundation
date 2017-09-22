<?php

/* node_modules/lodash/fp/_convertBrowser.js */
class __TwigTemplate_c95c3b8b6f3ca00a6e04547ce8e068af0417774b431d4f4a4853fd55644d9c7f extends Twig_Template
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
        $__internal_e664c9c9b5c74e9fbcb43005dd1809d70bc983b30bf0dcbf84c292e1b54fa675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e664c9c9b5c74e9fbcb43005dd1809d70bc983b30bf0dcbf84c292e1b54fa675->enter($__internal_e664c9c9b5c74e9fbcb43005dd1809d70bc983b30bf0dcbf84c292e1b54fa675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/_convertBrowser.js"));

        // line 1
        echo "var baseConvert = require('./_baseConvert');

/**
 * Converts `lodash` to an immutable auto-curried iteratee-first data-last
 * version with conversion `options` applied.
 *
 * @param {Function} lodash The lodash function to convert.
 * @param {Object} [options] The options object. See `baseConvert` for more details.
 * @returns {Function} Returns the converted `lodash`.
 */
function browserConvert(lodash, options) {
  return baseConvert(lodash, lodash, options);
}

if (typeof _ == 'function' && typeof _.runInContext == 'function') {
  _ = browserConvert(_.runInContext());
}
module.exports = browserConvert;
";
        
        $__internal_e664c9c9b5c74e9fbcb43005dd1809d70bc983b30bf0dcbf84c292e1b54fa675->leave($__internal_e664c9c9b5c74e9fbcb43005dd1809d70bc983b30bf0dcbf84c292e1b54fa675_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/_convertBrowser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseConvert = require('./_baseConvert');

/**
 * Converts `lodash` to an immutable auto-curried iteratee-first data-last
 * version with conversion `options` applied.
 *
 * @param {Function} lodash The lodash function to convert.
 * @param {Object} [options] The options object. See `baseConvert` for more details.
 * @returns {Function} Returns the converted `lodash`.
 */
function browserConvert(lodash, options) {
  return baseConvert(lodash, lodash, options);
}

if (typeof _ == 'function' && typeof _.runInContext == 'function') {
  _ = browserConvert(_.runInContext());
}
module.exports = browserConvert;
", "node_modules/lodash/fp/_convertBrowser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/_convertBrowser.js");
    }
}
