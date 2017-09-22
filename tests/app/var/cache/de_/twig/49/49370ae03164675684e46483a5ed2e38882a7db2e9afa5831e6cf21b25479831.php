<?php

/* node_modules/fsevents/node_modules/asynckit/lib/readable_serial.js */
class __TwigTemplate_6f09979f38315e3a123e58dc1c54762a59fe468c99692fbde3384fe9dc4d45c9 extends Twig_Template
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
        $__internal_9e4d89b89a8b7c11a4b7e97c233567a67a2d1c6519fc798055fcd0eda21d8430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4d89b89a8b7c11a4b7e97c233567a67a2d1c6519fc798055fcd0eda21d8430->enter($__internal_9e4d89b89a8b7c11a4b7e97c233567a67a2d1c6519fc798055fcd0eda21d8430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/lib/readable_serial.js"));

        // line 1
        echo "var serial = require('../serial.js');

// API
module.exports = ReadableSerial;

/**
 * Streaming wrapper to `asynckit.serial`
 *
 * @param   {array|object} list - array or object (named list) to iterate over
 * @param   {function} iterator - iterator to run
 * @param   {function} callback - invoked when all elements processed
 * @returns {stream.Readable#}
 */
function ReadableSerial(list, iterator, callback)
{
  if (!(this instanceof ReadableSerial))
  {
    return new ReadableSerial(list, iterator, callback);
  }

  // turn on object mode
  ReadableSerial.super_.call(this, {objectMode: true});

  this._start(serial, list, iterator, callback);
}
";
        
        $__internal_9e4d89b89a8b7c11a4b7e97c233567a67a2d1c6519fc798055fcd0eda21d8430->leave($__internal_9e4d89b89a8b7c11a4b7e97c233567a67a2d1c6519fc798055fcd0eda21d8430_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/lib/readable_serial.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var serial = require('../serial.js');

// API
module.exports = ReadableSerial;

/**
 * Streaming wrapper to `asynckit.serial`
 *
 * @param   {array|object} list - array or object (named list) to iterate over
 * @param   {function} iterator - iterator to run
 * @param   {function} callback - invoked when all elements processed
 * @returns {stream.Readable#}
 */
function ReadableSerial(list, iterator, callback)
{
  if (!(this instanceof ReadableSerial))
  {
    return new ReadableSerial(list, iterator, callback);
  }

  // turn on object mode
  ReadableSerial.super_.call(this, {objectMode: true});

  this._start(serial, list, iterator, callback);
}
", "node_modules/fsevents/node_modules/asynckit/lib/readable_serial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/lib/readable_serial.js");
    }
}
