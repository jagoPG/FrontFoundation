<?php

/* node_modules/fsevents/node_modules/asynckit/lib/streamify.js */
class __TwigTemplate_f9408f9651d24c9fb5603ebfad2c3f02241683aba4c937658efc7a115d7e6f39 extends Twig_Template
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
        $__internal_a6f0f19648ff7890fcc02a7ef8c2c7695ad315e98e10fee40c4b62d47e0d8d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f0f19648ff7890fcc02a7ef8c2c7695ad315e98e10fee40c4b62d47e0d8d1d->enter($__internal_a6f0f19648ff7890fcc02a7ef8c2c7695ad315e98e10fee40c4b62d47e0d8d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/lib/streamify.js"));

        // line 1
        echo "var async = require('./async.js');

// API
module.exports = {
  iterator: wrapIterator,
  callback: wrapCallback
};

/**
 * Wraps iterators with long signature
 *
 * @this    ReadableAsyncKit#
 * @param   {function} iterator - function to wrap
 * @returns {function} - wrapped function
 */
function wrapIterator(iterator)
{
  var stream = this;

  return function(item, key, cb)
  {
    var aborter
      , wrappedCb = async(wrapIteratorCallback.call(stream, cb, key))
      ;

    stream.jobs[key] = wrappedCb;

    // it's either shortcut (item, cb)
    if (iterator.length == 2)
    {
      aborter = iterator(item, wrappedCb);
    }
    // or long format (item, key, cb)
    else
    {
      aborter = iterator(item, key, wrappedCb);
    }

    return aborter;
  };
}

/**
 * Wraps provided callback function
 * allowing to execute snitch function before
 * real callback
 *
 * @this    ReadableAsyncKit#
 * @param   {function} callback - function to wrap
 * @returns {function} - wrapped function
 */
function wrapCallback(callback)
{
  var stream = this;

  var wrapped = function(error, result)
  {
    return finisher.call(stream, error, result, callback);
  };

  return wrapped;
}

/**
 * Wraps provided iterator callback function
 * makes sure snitch only called once,
 * but passes secondary calls to the original callback
 *
 * @this    ReadableAsyncKit#
 * @param   {function} callback - callback to wrap
 * @param   {number|string} key - iteration key
 * @returns {function} wrapped callback
 */
function wrapIteratorCallback(callback, key)
{
  var stream = this;

  return function(error, output)
  {
    // don't repeat yourself
    if (!(key in stream.jobs))
    {
      callback(error, output);
      return;
    }

    // clean up jobs
    delete stream.jobs[key];

    return streamer.call(stream, error, {key: key, value: output}, callback);
  };
}

/**
 * Stream wrapper for iterator callback
 *
 * @this  ReadableAsyncKit#
 * @param {mixed} error - error response
 * @param {mixed} output - iterator output
 * @param {function} callback - callback that expects iterator results
 */
function streamer(error, output, callback)
{
  if (error && !this.error)
  {
    this.error = error;
    this.pause();
    this.emit('error', error);
    // send back value only, as expected
    callback(error, output && output.value);
    return;
  }

  // stream stuff
  this.push(output);

  // back to original track
  // send back value only, as expected
  callback(error, output && output.value);
}

/**
 * Stream wrapper for finishing callback
 *
 * @this  ReadableAsyncKit#
 * @param {mixed} error - error response
 * @param {mixed} output - iterator output
 * @param {function} callback - callback that expects final results
 */
function finisher(error, output, callback)
{
  // signal end of the stream
  // only for successfully finished streams
  if (!error)
  {
    this.push(null);
  }

  // back to original track
  callback(error, output);
}
";
        
        $__internal_a6f0f19648ff7890fcc02a7ef8c2c7695ad315e98e10fee40c4b62d47e0d8d1d->leave($__internal_a6f0f19648ff7890fcc02a7ef8c2c7695ad315e98e10fee40c4b62d47e0d8d1d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/lib/streamify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var async = require('./async.js');

// API
module.exports = {
  iterator: wrapIterator,
  callback: wrapCallback
};

/**
 * Wraps iterators with long signature
 *
 * @this    ReadableAsyncKit#
 * @param   {function} iterator - function to wrap
 * @returns {function} - wrapped function
 */
function wrapIterator(iterator)
{
  var stream = this;

  return function(item, key, cb)
  {
    var aborter
      , wrappedCb = async(wrapIteratorCallback.call(stream, cb, key))
      ;

    stream.jobs[key] = wrappedCb;

    // it's either shortcut (item, cb)
    if (iterator.length == 2)
    {
      aborter = iterator(item, wrappedCb);
    }
    // or long format (item, key, cb)
    else
    {
      aborter = iterator(item, key, wrappedCb);
    }

    return aborter;
  };
}

/**
 * Wraps provided callback function
 * allowing to execute snitch function before
 * real callback
 *
 * @this    ReadableAsyncKit#
 * @param   {function} callback - function to wrap
 * @returns {function} - wrapped function
 */
function wrapCallback(callback)
{
  var stream = this;

  var wrapped = function(error, result)
  {
    return finisher.call(stream, error, result, callback);
  };

  return wrapped;
}

/**
 * Wraps provided iterator callback function
 * makes sure snitch only called once,
 * but passes secondary calls to the original callback
 *
 * @this    ReadableAsyncKit#
 * @param   {function} callback - callback to wrap
 * @param   {number|string} key - iteration key
 * @returns {function} wrapped callback
 */
function wrapIteratorCallback(callback, key)
{
  var stream = this;

  return function(error, output)
  {
    // don't repeat yourself
    if (!(key in stream.jobs))
    {
      callback(error, output);
      return;
    }

    // clean up jobs
    delete stream.jobs[key];

    return streamer.call(stream, error, {key: key, value: output}, callback);
  };
}

/**
 * Stream wrapper for iterator callback
 *
 * @this  ReadableAsyncKit#
 * @param {mixed} error - error response
 * @param {mixed} output - iterator output
 * @param {function} callback - callback that expects iterator results
 */
function streamer(error, output, callback)
{
  if (error && !this.error)
  {
    this.error = error;
    this.pause();
    this.emit('error', error);
    // send back value only, as expected
    callback(error, output && output.value);
    return;
  }

  // stream stuff
  this.push(output);

  // back to original track
  // send back value only, as expected
  callback(error, output && output.value);
}

/**
 * Stream wrapper for finishing callback
 *
 * @this  ReadableAsyncKit#
 * @param {mixed} error - error response
 * @param {mixed} output - iterator output
 * @param {function} callback - callback that expects final results
 */
function finisher(error, output, callback)
{
  // signal end of the stream
  // only for successfully finished streams
  if (!error)
  {
    this.push(null);
  }

  // back to original track
  callback(error, output);
}
", "node_modules/fsevents/node_modules/asynckit/lib/streamify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/lib/streamify.js");
    }
}
