<?php

/* node_modules/fsevents/node_modules/asynckit/stream.js */
class __TwigTemplate_d21d8f00b5bdfb01e09736164ae980c0fae34ac94982998fd7a2d18c1d8190fa extends Twig_Template
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
        $__internal_e3efc05fcbbe80dda236f79c6ed84656d69dccbb92b0bdbdd37a181f974a2920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3efc05fcbbe80dda236f79c6ed84656d69dccbb92b0bdbdd37a181f974a2920->enter($__internal_e3efc05fcbbe80dda236f79c6ed84656d69dccbb92b0bdbdd37a181f974a2920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/stream.js"));

        // line 1
        echo "var inherits              = require('util').inherits
  , Readable              = require('stream').Readable
  , ReadableAsyncKit      = require('./lib/readable_asynckit.js')
  , ReadableParallel      = require('./lib/readable_parallel.js')
  , ReadableSerial        = require('./lib/readable_serial.js')
  , ReadableSerialOrdered = require('./lib/readable_serial_ordered.js')
  ;

// API
module.exports =
{
  parallel      : ReadableParallel,
  serial        : ReadableSerial,
  serialOrdered : ReadableSerialOrdered, 
};

inherits(ReadableAsyncKit, Readable);

inherits(ReadableParallel, ReadableAsyncKit);
inherits(ReadableSerial, ReadableAsyncKit);
inherits(ReadableSerialOrdered, ReadableAsyncKit);
";
        
        $__internal_e3efc05fcbbe80dda236f79c6ed84656d69dccbb92b0bdbdd37a181f974a2920->leave($__internal_e3efc05fcbbe80dda236f79c6ed84656d69dccbb92b0bdbdd37a181f974a2920_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/stream.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inherits              = require('util').inherits
  , Readable              = require('stream').Readable
  , ReadableAsyncKit      = require('./lib/readable_asynckit.js')
  , ReadableParallel      = require('./lib/readable_parallel.js')
  , ReadableSerial        = require('./lib/readable_serial.js')
  , ReadableSerialOrdered = require('./lib/readable_serial_ordered.js')
  ;

// API
module.exports =
{
  parallel      : ReadableParallel,
  serial        : ReadableSerial,
  serialOrdered : ReadableSerialOrdered, 
};

inherits(ReadableAsyncKit, Readable);

inherits(ReadableParallel, ReadableAsyncKit);
inherits(ReadableSerial, ReadableAsyncKit);
inherits(ReadableSerialOrdered, ReadableAsyncKit);
", "node_modules/fsevents/node_modules/asynckit/stream.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/stream.js");
    }
}
