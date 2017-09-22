<?php

/* node_modules/asynckit/parallel.js */
class __TwigTemplate_76040dc16d46114994e0e9425daa92e095895394630660f321571b7d6625c494 extends Twig_Template
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
        $__internal_26f45e82c653b51791443f859156c70fb2a579018fb488f68150c8e93c912f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f45e82c653b51791443f859156c70fb2a579018fb488f68150c8e93c912f84->enter($__internal_26f45e82c653b51791443f859156c70fb2a579018fb488f68150c8e93c912f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/parallel.js"));

        // line 1
        echo "var iterate    = require('./lib/iterate.js')
  , initState  = require('./lib/state.js')
  , terminator = require('./lib/terminator.js')
  ;

// Public API
module.exports = parallel;

/**
 * Runs iterator over provided array elements in parallel
 *
 * @param   {array|object} list - array or object (named list) to iterate over
 * @param   {function} iterator - iterator to run
 * @param   {function} callback - invoked when all elements processed
 * @returns {function} - jobs terminator
 */
function parallel(list, iterator, callback)
{
  var state = initState(list);

  while (state.index < (state['keyedList'] || list).length)
  {
    iterate(list, iterator, state, function(error, result)
    {
      if (error)
      {
        callback(error, result);
        return;
      }

      // looks like it's the last one
      if (Object.keys(state.jobs).length === 0)
      {
        callback(null, state.results);
        return;
      }
    });

    state.index++;
  }

  return terminator.bind(state, callback);
}
";
        
        $__internal_26f45e82c653b51791443f859156c70fb2a579018fb488f68150c8e93c912f84->leave($__internal_26f45e82c653b51791443f859156c70fb2a579018fb488f68150c8e93c912f84_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/parallel.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var iterate    = require('./lib/iterate.js')
  , initState  = require('./lib/state.js')
  , terminator = require('./lib/terminator.js')
  ;

// Public API
module.exports = parallel;

/**
 * Runs iterator over provided array elements in parallel
 *
 * @param   {array|object} list - array or object (named list) to iterate over
 * @param   {function} iterator - iterator to run
 * @param   {function} callback - invoked when all elements processed
 * @returns {function} - jobs terminator
 */
function parallel(list, iterator, callback)
{
  var state = initState(list);

  while (state.index < (state['keyedList'] || list).length)
  {
    iterate(list, iterator, state, function(error, result)
    {
      if (error)
      {
        callback(error, result);
        return;
      }

      // looks like it's the last one
      if (Object.keys(state.jobs).length === 0)
      {
        callback(null, state.results);
        return;
      }
    });

    state.index++;
  }

  return terminator.bind(state, callback);
}
", "node_modules/asynckit/parallel.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/parallel.js");
    }
}
