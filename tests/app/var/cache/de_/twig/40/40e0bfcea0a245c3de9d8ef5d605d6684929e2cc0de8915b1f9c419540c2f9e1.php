<?php

/* node_modules/asynckit/lib/readable_parallel.js */
class __TwigTemplate_677ef0ba9f043bab54346451da02fdc1d5bb6543a1f849422b64712403d5d60d extends Twig_Template
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
        $__internal_466121fe753914320d65351f76e32007c39745f9e3f51a6dedff3926336eaa43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466121fe753914320d65351f76e32007c39745f9e3f51a6dedff3926336eaa43->enter($__internal_466121fe753914320d65351f76e32007c39745f9e3f51a6dedff3926336eaa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/lib/readable_parallel.js"));

        // line 1
        echo "var parallel = require('../parallel.js');

// API
module.exports = ReadableParallel;

/**
 * Streaming wrapper to `asynckit.parallel`
 *
 * @param   {array|object} list - array or object (named list) to iterate over
 * @param   {function} iterator - iterator to run
 * @param   {function} callback - invoked when all elements processed
 * @returns {stream.Readable#}
 */
function ReadableParallel(list, iterator, callback)
{
  if (!(this instanceof ReadableParallel))
  {
    return new ReadableParallel(list, iterator, callback);
  }

  // turn on object mode
  ReadableParallel.super_.call(this, {objectMode: true});

  this._start(parallel, list, iterator, callback);
}
";
        
        $__internal_466121fe753914320d65351f76e32007c39745f9e3f51a6dedff3926336eaa43->leave($__internal_466121fe753914320d65351f76e32007c39745f9e3f51a6dedff3926336eaa43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/lib/readable_parallel.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parallel = require('../parallel.js');

// API
module.exports = ReadableParallel;

/**
 * Streaming wrapper to `asynckit.parallel`
 *
 * @param   {array|object} list - array or object (named list) to iterate over
 * @param   {function} iterator - iterator to run
 * @param   {function} callback - invoked when all elements processed
 * @returns {stream.Readable#}
 */
function ReadableParallel(list, iterator, callback)
{
  if (!(this instanceof ReadableParallel))
  {
    return new ReadableParallel(list, iterator, callback);
  }

  // turn on object mode
  ReadableParallel.super_.call(this, {objectMode: true});

  this._start(parallel, list, iterator, callback);
}
", "node_modules/asynckit/lib/readable_parallel.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/lib/readable_parallel.js");
    }
}
