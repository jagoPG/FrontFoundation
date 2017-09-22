<?php

/* node_modules/fsevents/node_modules/asynckit/lib/terminator.js */
class __TwigTemplate_6b1a77a85351d3262a7b8313574dded973eadcb0cf05c0a112e8d4d419f614bb extends Twig_Template
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
        $__internal_5775479becbdcd56967ea7291f958b3b45ad517f7a3d1451f28ee8527de14cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5775479becbdcd56967ea7291f958b3b45ad517f7a3d1451f28ee8527de14cfa->enter($__internal_5775479becbdcd56967ea7291f958b3b45ad517f7a3d1451f28ee8527de14cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/lib/terminator.js"));

        // line 1
        echo "var abort = require('./abort.js')
  , async = require('./async.js')
  ;

// API
module.exports = terminator;

/**
 * Terminates jobs in the attached state context
 *
 * @this  AsyncKitState#
 * @param {function} callback - final callback to invoke after termination
 */
function terminator(callback)
{
  if (!Object.keys(this.jobs).length)
  {
    return;
  }

  // fast forward iteration index
  this.index = this.size;

  // abort jobs
  abort(this);

  // send back results we have so far
  async(callback)(null, this.results);
}
";
        
        $__internal_5775479becbdcd56967ea7291f958b3b45ad517f7a3d1451f28ee8527de14cfa->leave($__internal_5775479becbdcd56967ea7291f958b3b45ad517f7a3d1451f28ee8527de14cfa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/lib/terminator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var abort = require('./abort.js')
  , async = require('./async.js')
  ;

// API
module.exports = terminator;

/**
 * Terminates jobs in the attached state context
 *
 * @this  AsyncKitState#
 * @param {function} callback - final callback to invoke after termination
 */
function terminator(callback)
{
  if (!Object.keys(this.jobs).length)
  {
    return;
  }

  // fast forward iteration index
  this.index = this.size;

  // abort jobs
  abort(this);

  // send back results we have so far
  async(callback)(null, this.results);
}
", "node_modules/fsevents/node_modules/asynckit/lib/terminator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/lib/terminator.js");
    }
}
