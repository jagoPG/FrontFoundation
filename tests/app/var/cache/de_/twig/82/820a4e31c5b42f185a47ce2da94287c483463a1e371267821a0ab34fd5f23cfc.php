<?php

/* node_modules/asynckit/lib/readable_asynckit.js */
class __TwigTemplate_cd1b03fa4c7736c25e335bfe70a141f880d276ad153687f8740d9482e1da8399 extends Twig_Template
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
        $__internal_32c7243a5352b5f701b9a810acce87e715bbe12f5b3ca6a796963fce195097ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32c7243a5352b5f701b9a810acce87e715bbe12f5b3ca6a796963fce195097ea->enter($__internal_32c7243a5352b5f701b9a810acce87e715bbe12f5b3ca6a796963fce195097ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/lib/readable_asynckit.js"));

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
        
        $__internal_32c7243a5352b5f701b9a810acce87e715bbe12f5b3ca6a796963fce195097ea->leave($__internal_32c7243a5352b5f701b9a810acce87e715bbe12f5b3ca6a796963fce195097ea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/lib/readable_asynckit.js";
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
", "node_modules/asynckit/lib/readable_asynckit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/lib/readable_asynckit.js");
    }
}
