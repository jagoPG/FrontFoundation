<?php

/* node_modules/lodash/_cloneRegExp.js */
class __TwigTemplate_88420a2adb1d441351421f157530c45f51dafdbbc4aa471c9cfa5b6c36fde5b7 extends Twig_Template
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
        $__internal_fb0930dae0bd1b654562cb7bf42e41a3f8d7cb5574f90683c1521d28ab2e0356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0930dae0bd1b654562cb7bf42e41a3f8d7cb5574f90683c1521d28ab2e0356->enter($__internal_fb0930dae0bd1b654562cb7bf42e41a3f8d7cb5574f90683c1521d28ab2e0356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_cloneRegExp.js"));

        // line 1
        echo "/** Used to match `RegExp` flags from their coerced string values. */
var reFlags = /\\w*\$/;

/**
 * Creates a clone of `regexp`.
 *
 * @private
 * @param {Object} regexp The regexp to clone.
 * @returns {Object} Returns the cloned regexp.
 */
function cloneRegExp(regexp) {
  var result = new regexp.constructor(regexp.source, reFlags.exec(regexp));
  result.lastIndex = regexp.lastIndex;
  return result;
}

module.exports = cloneRegExp;
";
        
        $__internal_fb0930dae0bd1b654562cb7bf42e41a3f8d7cb5574f90683c1521d28ab2e0356->leave($__internal_fb0930dae0bd1b654562cb7bf42e41a3f8d7cb5574f90683c1521d28ab2e0356_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_cloneRegExp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/** Used to match `RegExp` flags from their coerced string values. */
var reFlags = /\\w*\$/;

/**
 * Creates a clone of `regexp`.
 *
 * @private
 * @param {Object} regexp The regexp to clone.
 * @returns {Object} Returns the cloned regexp.
 */
function cloneRegExp(regexp) {
  var result = new regexp.constructor(regexp.source, reFlags.exec(regexp));
  result.lastIndex = regexp.lastIndex;
  return result;
}

module.exports = cloneRegExp;
", "node_modules/lodash/_cloneRegExp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_cloneRegExp.js");
    }
}
