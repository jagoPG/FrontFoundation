<?php

/* node_modules/asynckit/lib/terminator.js */
class __TwigTemplate_f2a952f2cec7f4bb3888c3a448a93964af3b006cff8994f410dc9825f5700b99 extends Twig_Template
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
        $__internal_bf91bdb92b21b7958aaeb95fe4e70d9194289b20846f0793849667a820013931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf91bdb92b21b7958aaeb95fe4e70d9194289b20846f0793849667a820013931->enter($__internal_bf91bdb92b21b7958aaeb95fe4e70d9194289b20846f0793849667a820013931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/lib/terminator.js"));

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
        
        $__internal_bf91bdb92b21b7958aaeb95fe4e70d9194289b20846f0793849667a820013931->leave($__internal_bf91bdb92b21b7958aaeb95fe4e70d9194289b20846f0793849667a820013931_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/lib/terminator.js";
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
", "node_modules/asynckit/lib/terminator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/lib/terminator.js");
    }
}
