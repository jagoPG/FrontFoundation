<?php

/* node_modules/asynckit/lib/readable_serial_ordered.js */
class __TwigTemplate_6cdbb77dcad8d70a20ffab7f8c276b11d728c8ca7fc71042ebb203570054cf49 extends Twig_Template
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
        $__internal_5299d1df8ffe91b65858835abb9ef022968cfba781d4a0d2e3a6355c34c0c934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5299d1df8ffe91b65858835abb9ef022968cfba781d4a0d2e3a6355c34c0c934->enter($__internal_5299d1df8ffe91b65858835abb9ef022968cfba781d4a0d2e3a6355c34c0c934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/lib/readable_serial_ordered.js"));

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
        
        $__internal_5299d1df8ffe91b65858835abb9ef022968cfba781d4a0d2e3a6355c34c0c934->leave($__internal_5299d1df8ffe91b65858835abb9ef022968cfba781d4a0d2e3a6355c34c0c934_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/lib/readable_serial_ordered.js";
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
", "node_modules/asynckit/lib/readable_serial_ordered.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/lib/readable_serial_ordered.js");
    }
}
