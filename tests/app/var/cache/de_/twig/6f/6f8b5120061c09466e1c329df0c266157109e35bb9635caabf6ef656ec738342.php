<?php

/* node_modules/asynckit/lib/readable_serial.js */
class __TwigTemplate_e429c12bfc21604c94a2f3206f0a492947c94adc5c62f1a7a735cf217a2ea093 extends Twig_Template
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
        $__internal_51e8c927f60bb8cbd68b4a19ebc5ac41b531deaf3d348467e22f9c64dce2a5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e8c927f60bb8cbd68b4a19ebc5ac41b531deaf3d348467e22f9c64dce2a5a8->enter($__internal_51e8c927f60bb8cbd68b4a19ebc5ac41b531deaf3d348467e22f9c64dce2a5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/lib/readable_serial.js"));

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
        
        $__internal_51e8c927f60bb8cbd68b4a19ebc5ac41b531deaf3d348467e22f9c64dce2a5a8->leave($__internal_51e8c927f60bb8cbd68b4a19ebc5ac41b531deaf3d348467e22f9c64dce2a5a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/lib/readable_serial.js";
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
", "node_modules/asynckit/lib/readable_serial.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/lib/readable_serial.js");
    }
}
