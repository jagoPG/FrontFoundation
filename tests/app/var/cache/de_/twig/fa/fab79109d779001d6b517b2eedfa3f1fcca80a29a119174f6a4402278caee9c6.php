<?php

/* node_modules/fsevents/node_modules/asynckit/lib/readable_asynckit.js */
class __TwigTemplate_2b502144d3fb63dccaf9f9ca7c5dae5185256fefaa4780c278e5eef5d66dd244 extends Twig_Template
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
        $__internal_288e1795d016a79ae23674a2ab08b2e5ecddc3de19b0b0e5a14bedce2793ddcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288e1795d016a79ae23674a2ab08b2e5ecddc3de19b0b0e5a14bedce2793ddcf->enter($__internal_288e1795d016a79ae23674a2ab08b2e5ecddc3de19b0b0e5a14bedce2793ddcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/lib/readable_asynckit.js"));

        // line 1
        echo "var streamify = require('./streamify.js')
  , defer     = require('./defer.js')
  ;

// API
module.exports = ReadableAsyncKit;

/**
 * Base constructor for all streams
 * used to hold properties/methods
 */
function ReadableAsyncKit()
{
  ReadableAsyncKit.super_.apply(this, arguments);

  // list of active jobs
  this.jobs = {};

  // add stream methods
  this.destroy = destroy;
  this._start  = _start;
  this._read   = _read;
}

/**
 * Destroys readable stream,
 * by aborting outstanding jobs
 *
 * @returns {void}
 */
function destroy()
{
  if (this.destroyed)
  {
    return;
  }

  this.destroyed = true;

  if (typeof this.terminator == 'function')
  {
    this.terminator();
  }
}

/**
 * Starts provided jobs in async manner
 *
 * @private
 */
function _start()
{
  // first argument – runner function
  var runner = arguments[0]
    // take away first argument
    , args   = Array.prototype.slice.call(arguments, 1)
      // second argument - input data
    , input  = args[0]
      // last argument - result callback
    , endCb  = streamify.callback.call(this, args[args.length - 1])
    ;

  args[args.length - 1] = endCb;
  // third argument - iterator
  args[1] = streamify.iterator.call(this, args[1]);

  // allow time for proper setup
  defer(function()
  {
    if (!this.destroyed)
    {
      this.terminator = runner.apply(null, args);
    }
    else
    {
      endCb(null, Array.isArray(input) ? [] : {});
    }
  }.bind(this));
}


/**
 * Implement _read to comply with Readable streams
 * Doesn't really make sense for flowing object mode
 *
 * @private
 */
function _read()
{

}
";
        
        $__internal_288e1795d016a79ae23674a2ab08b2e5ecddc3de19b0b0e5a14bedce2793ddcf->leave($__internal_288e1795d016a79ae23674a2ab08b2e5ecddc3de19b0b0e5a14bedce2793ddcf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/lib/readable_asynckit.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var streamify = require('./streamify.js')
  , defer     = require('./defer.js')
  ;

// API
module.exports = ReadableAsyncKit;

/**
 * Base constructor for all streams
 * used to hold properties/methods
 */
function ReadableAsyncKit()
{
  ReadableAsyncKit.super_.apply(this, arguments);

  // list of active jobs
  this.jobs = {};

  // add stream methods
  this.destroy = destroy;
  this._start  = _start;
  this._read   = _read;
}

/**
 * Destroys readable stream,
 * by aborting outstanding jobs
 *
 * @returns {void}
 */
function destroy()
{
  if (this.destroyed)
  {
    return;
  }

  this.destroyed = true;

  if (typeof this.terminator == 'function')
  {
    this.terminator();
  }
}

/**
 * Starts provided jobs in async manner
 *
 * @private
 */
function _start()
{
  // first argument – runner function
  var runner = arguments[0]
    // take away first argument
    , args   = Array.prototype.slice.call(arguments, 1)
      // second argument - input data
    , input  = args[0]
      // last argument - result callback
    , endCb  = streamify.callback.call(this, args[args.length - 1])
    ;

  args[args.length - 1] = endCb;
  // third argument - iterator
  args[1] = streamify.iterator.call(this, args[1]);

  // allow time for proper setup
  defer(function()
  {
    if (!this.destroyed)
    {
      this.terminator = runner.apply(null, args);
    }
    else
    {
      endCb(null, Array.isArray(input) ? [] : {});
    }
  }.bind(this));
}


/**
 * Implement _read to comply with Readable streams
 * Doesn't really make sense for flowing object mode
 *
 * @private
 */
function _read()
{

}
", "node_modules/fsevents/node_modules/asynckit/lib/readable_asynckit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/lib/readable_asynckit.js");
    }
}
