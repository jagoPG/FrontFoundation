<?php

/* node_modules/asynckit/stream.js */
class __TwigTemplate_32ae6e67851d4c1a2d1cf5ff5d1d37a7339b3308549dc7ec28b8d07716502670 extends Twig_Template
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
        $__internal_3f0ce7cd314e1a0132162ceeb4459b12e7f9a7da85d6777923a65b0ab7a3ee5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0ce7cd314e1a0132162ceeb4459b12e7f9a7da85d6777923a65b0ab7a3ee5e->enter($__internal_3f0ce7cd314e1a0132162ceeb4459b12e7f9a7da85d6777923a65b0ab7a3ee5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/stream.js"));

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
        
        $__internal_3f0ce7cd314e1a0132162ceeb4459b12e7f9a7da85d6777923a65b0ab7a3ee5e->leave($__internal_3f0ce7cd314e1a0132162ceeb4459b12e7f9a7da85d6777923a65b0ab7a3ee5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/stream.js";
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
", "node_modules/asynckit/stream.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/stream.js");
    }
}
