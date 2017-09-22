<?php

/* node_modules/asynckit/lib/async.js */
class __TwigTemplate_31382872311e1ddec4a4b73cb47e3920402299d753523a02426683583fbb132a extends Twig_Template
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
        $__internal_139e8e843c9f04071b2b8e5db10284875546334037c6d4b9e1970cfaf6bc36ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139e8e843c9f04071b2b8e5db10284875546334037c6d4b9e1970cfaf6bc36ce->enter($__internal_139e8e843c9f04071b2b8e5db10284875546334037c6d4b9e1970cfaf6bc36ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/lib/async.js"));

        // line 1
        echo "var defer = require('./defer.js');

// API
module.exports = async;

/**
 * Runs provided callback asynchronously
 * even if callback itself is not
 *
 * @param   {function} callback - callback to invoke
 * @returns {function} - augmented callback
 */
function async(callback)
{
  var isAsync = false;

  // check if async happened
  defer(function() { isAsync = true; });

  return function async_callback(err, result)
  {
    if (isAsync)
    {
      callback(err, result);
    }
    else
    {
      defer(function nextTick_callback()
      {
        callback(err, result);
      });
    }
  };
}
";
        
        $__internal_139e8e843c9f04071b2b8e5db10284875546334037c6d4b9e1970cfaf6bc36ce->leave($__internal_139e8e843c9f04071b2b8e5db10284875546334037c6d4b9e1970cfaf6bc36ce_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/lib/async.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var defer = require('./defer.js');

// API
module.exports = async;

/**
 * Runs provided callback asynchronously
 * even if callback itself is not
 *
 * @param   {function} callback - callback to invoke
 * @returns {function} - augmented callback
 */
function async(callback)
{
  var isAsync = false;

  // check if async happened
  defer(function() { isAsync = true; });

  return function async_callback(err, result)
  {
    if (isAsync)
    {
      callback(err, result);
    }
    else
    {
      defer(function nextTick_callback()
      {
        callback(err, result);
      });
    }
  };
}
", "node_modules/asynckit/lib/async.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/lib/async.js");
    }
}
