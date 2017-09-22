<?php

/* node_modules/lodash/_baseDelay.js */
class __TwigTemplate_4031632034df3d69a402eeb0ad87458526440c62547ca2e7bd178a067e74b21d extends Twig_Template
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
        $__internal_2ef27fdf6489657a7d551805c2f55baeae70401f17314cbd42caed2fcc35dd5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef27fdf6489657a7d551805c2f55baeae70401f17314cbd42caed2fcc35dd5d->enter($__internal_2ef27fdf6489657a7d551805c2f55baeae70401f17314cbd42caed2fcc35dd5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseDelay.js"));

        // line 1
        echo "/** Error message constants. */
var FUNC_ERROR_TEXT = 'Expected a function';

/**
 * The base implementation of `_.delay` and `_.defer` which accepts `args`
 * to provide to `func`.
 *
 * @private
 * @param {Function} func The function to delay.
 * @param {number} wait The number of milliseconds to delay invocation.
 * @param {Array} args The arguments to provide to `func`.
 * @returns {number|Object} Returns the timer id or timeout object.
 */
function baseDelay(func, wait, args) {
  if (typeof func != 'function') {
    throw new TypeError(FUNC_ERROR_TEXT);
  }
  return setTimeout(function() { func.apply(undefined, args); }, wait);
}

module.exports = baseDelay;
";
        
        $__internal_2ef27fdf6489657a7d551805c2f55baeae70401f17314cbd42caed2fcc35dd5d->leave($__internal_2ef27fdf6489657a7d551805c2f55baeae70401f17314cbd42caed2fcc35dd5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseDelay.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Error message constants. */
var FUNC_ERROR_TEXT = 'Expected a function';

/**
 * The base implementation of `_.delay` and `_.defer` which accepts `args`
 * to provide to `func`.
 *
 * @private
 * @param {Function} func The function to delay.
 * @param {number} wait The number of milliseconds to delay invocation.
 * @param {Array} args The arguments to provide to `func`.
 * @returns {number|Object} Returns the timer id or timeout object.
 */
function baseDelay(func, wait, args) {
  if (typeof func != 'function') {
    throw new TypeError(FUNC_ERROR_TEXT);
  }
  return setTimeout(function() { func.apply(undefined, args); }, wait);
}

module.exports = baseDelay;
", "node_modules/lodash/_baseDelay.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseDelay.js");
    }
}
