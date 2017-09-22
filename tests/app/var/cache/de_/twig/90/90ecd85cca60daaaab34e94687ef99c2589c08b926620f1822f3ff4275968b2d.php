<?php

/* node_modules/fsevents/node_modules/asynckit/lib/async.js */
class __TwigTemplate_ef13a2cd6a8709e473754a94f367f4bc7ccadb2562c915657094ea5c5ed65351 extends Twig_Template
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
        $__internal_2ba21cea4341f6517d1924ff59adfa13e65384aab5086e160a951491f88f6a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba21cea4341f6517d1924ff59adfa13e65384aab5086e160a951491f88f6a65->enter($__internal_2ba21cea4341f6517d1924ff59adfa13e65384aab5086e160a951491f88f6a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/lib/async.js"));

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
        
        $__internal_2ba21cea4341f6517d1924ff59adfa13e65384aab5086e160a951491f88f6a65->leave($__internal_2ba21cea4341f6517d1924ff59adfa13e65384aab5086e160a951491f88f6a65_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/lib/async.js";
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
", "node_modules/fsevents/node_modules/asynckit/lib/async.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/lib/async.js");
    }
}
