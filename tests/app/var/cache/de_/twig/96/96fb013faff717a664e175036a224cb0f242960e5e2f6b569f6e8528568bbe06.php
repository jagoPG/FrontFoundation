<?php

/* node_modules/fsevents/node_modules/asynckit/lib/defer.js */
class __TwigTemplate_c9ba30b23d1636cd8bc61bad14094e43df616b7cdad3439799d92a352eb58a86 extends Twig_Template
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
        $__internal_9545a4c8937aecd5be2513973cd85098537057b7e9b19ad31201944e7454057b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9545a4c8937aecd5be2513973cd85098537057b7e9b19ad31201944e7454057b->enter($__internal_9545a4c8937aecd5be2513973cd85098537057b7e9b19ad31201944e7454057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/lib/defer.js"));

        // line 1
        echo "module.exports = defer;

/**
 * Runs provided function on next iteration of the event loop
 *
 * @param {function} fn - function to run
 */
function defer(fn)
{
  var nextTick = typeof setImmediate == 'function'
    ? setImmediate
    : (
      typeof process == 'object' && typeof process.nextTick == 'function'
      ? process.nextTick
      : null
    );

  if (nextTick)
  {
    nextTick(fn);
  }
  else
  {
    setTimeout(fn, 0);
  }
}
";
        
        $__internal_9545a4c8937aecd5be2513973cd85098537057b7e9b19ad31201944e7454057b->leave($__internal_9545a4c8937aecd5be2513973cd85098537057b7e9b19ad31201944e7454057b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/lib/defer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = defer;

/**
 * Runs provided function on next iteration of the event loop
 *
 * @param {function} fn - function to run
 */
function defer(fn)
{
  var nextTick = typeof setImmediate == 'function'
    ? setImmediate
    : (
      typeof process == 'object' && typeof process.nextTick == 'function'
      ? process.nextTick
      : null
    );

  if (nextTick)
  {
    nextTick(fn);
  }
  else
  {
    setTimeout(fn, 0);
  }
}
", "node_modules/fsevents/node_modules/asynckit/lib/defer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/lib/defer.js");
    }
}
