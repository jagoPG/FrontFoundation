<?php

/* node_modules/fsevents/node_modules/asynckit/lib/readable_serial_ordered.js */
class __TwigTemplate_59b6f884419b44b4407fa3fd29a8af1718ac1e6c5042dc1b732d3d96da9230ab extends Twig_Template
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
        $__internal_61bcd13f34db2f8d02bb0838174b07d5978b05b8321bed3b12c65e8bd0bff168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61bcd13f34db2f8d02bb0838174b07d5978b05b8321bed3b12c65e8bd0bff168->enter($__internal_61bcd13f34db2f8d02bb0838174b07d5978b05b8321bed3b12c65e8bd0bff168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/lib/readable_serial_ordered.js"));

        // line 1
        echo "var serialOrdered = require('../serialOrdered.js');

// API
module.exports = ReadableSerialOrdered;
// expose sort helpers
module.exports.ascending  = serialOrdered.ascending;
module.exports.descending = serialOrdered.descending;

/**
 * Streaming wrapper to `asynckit.serialOrdered`
 *
 * @param   {array|object} list - array or object (named list) to iterate over
 * @param   {function} iterator - iterator to run
 * @param   {function} sortMethod - custom sort function
 * @param   {function} callback - invoked when all elements processed
 * @returns {stream.Readable#}
 */
function ReadableSerialOrdered(list, iterator, sortMethod, callback)
{
  if (!(this instanceof ReadableSerialOrdered))
  {
    return new ReadableSerialOrdered(list, iterator, sortMethod, callback);
  }

  // turn on object mode
  ReadableSerialOrdered.super_.call(this, {objectMode: true});

  this._start(serialOrdered, list, iterator, sortMethod, callback);
}
";
        
        $__internal_61bcd13f34db2f8d02bb0838174b07d5978b05b8321bed3b12c65e8bd0bff168->leave($__internal_61bcd13f34db2f8d02bb0838174b07d5978b05b8321bed3b12c65e8bd0bff168_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/lib/readable_serial_ordered.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var serialOrdered = require('../serialOrdered.js');

// API
module.exports = ReadableSerialOrdered;
// expose sort helpers
module.exports.ascending  = serialOrdered.ascending;
module.exports.descending = serialOrdered.descending;

/**
 * Streaming wrapper to `asynckit.serialOrdered`
 *
 * @param   {array|object} list - array or object (named list) to iterate over
 * @param   {function} iterator - iterator to run
 * @param   {function} sortMethod - custom sort function
 * @param   {function} callback - invoked when all elements processed
 * @returns {stream.Readable#}
 */
function ReadableSerialOrdered(list, iterator, sortMethod, callback)
{
  if (!(this instanceof ReadableSerialOrdered))
  {
    return new ReadableSerialOrdered(list, iterator, sortMethod, callback);
  }

  // turn on object mode
  ReadableSerialOrdered.super_.call(this, {objectMode: true});

  this._start(serialOrdered, list, iterator, sortMethod, callback);
}
", "node_modules/fsevents/node_modules/asynckit/lib/readable_serial_ordered.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/lib/readable_serial_ordered.js");
    }
}
