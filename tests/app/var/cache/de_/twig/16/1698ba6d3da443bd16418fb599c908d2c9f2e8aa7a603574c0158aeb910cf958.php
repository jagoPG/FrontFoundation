<?php

/* node_modules/fsevents/node_modules/asynckit/lib/readable_parallel.js */
class __TwigTemplate_c21a09ddd99c0b3e4db9e94386f1a87cf3185cbedbdcf3a2be68674274ed4a53 extends Twig_Template
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
        $__internal_1031f796578e5c0a25dbb7b3a317bae09241c3fecf790ece2428aca258dafc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1031f796578e5c0a25dbb7b3a317bae09241c3fecf790ece2428aca258dafc5f->enter($__internal_1031f796578e5c0a25dbb7b3a317bae09241c3fecf790ece2428aca258dafc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/lib/readable_parallel.js"));

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
        
        $__internal_1031f796578e5c0a25dbb7b3a317bae09241c3fecf790ece2428aca258dafc5f->leave($__internal_1031f796578e5c0a25dbb7b3a317bae09241c3fecf790ece2428aca258dafc5f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/lib/readable_parallel.js";
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
", "node_modules/fsevents/node_modules/asynckit/lib/readable_parallel.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/lib/readable_parallel.js");
    }
}
