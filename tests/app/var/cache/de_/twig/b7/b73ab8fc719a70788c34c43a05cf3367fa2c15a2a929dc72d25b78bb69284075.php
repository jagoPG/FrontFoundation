<?php

/* node_modules/fsevents/node_modules/isstream/isstream.js */
class __TwigTemplate_f8e40c0da8afa9b6891be2f269f21d3869950cc1ee21717c359917af2f7df309 extends Twig_Template
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
        $__internal_3bbcb3cd44c455c89834c003987bc09df5972f160b22f241b49a9ee5ffd3b97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbcb3cd44c455c89834c003987bc09df5972f160b22f241b49a9ee5ffd3b97f->enter($__internal_3bbcb3cd44c455c89834c003987bc09df5972f160b22f241b49a9ee5ffd3b97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/isstream/isstream.js"));

        // line 1
        echo "var stream = require('stream')


function isStream (obj) {
  return obj instanceof stream.Stream
}


function isReadable (obj) {
  return isStream(obj) && typeof obj._read == 'function' && typeof obj._readableState == 'object'
}


function isWritable (obj) {
  return isStream(obj) && typeof obj._write == 'function' && typeof obj._writableState == 'object'
}


function isDuplex (obj) {
  return isReadable(obj) && isWritable(obj)
}


module.exports            = isStream
module.exports.isReadable = isReadable
module.exports.isWritable = isWritable
module.exports.isDuplex   = isDuplex
";
        
        $__internal_3bbcb3cd44c455c89834c003987bc09df5972f160b22f241b49a9ee5ffd3b97f->leave($__internal_3bbcb3cd44c455c89834c003987bc09df5972f160b22f241b49a9ee5ffd3b97f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/isstream/isstream.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var stream = require('stream')


function isStream (obj) {
  return obj instanceof stream.Stream
}


function isReadable (obj) {
  return isStream(obj) && typeof obj._read == 'function' && typeof obj._readableState == 'object'
}


function isWritable (obj) {
  return isStream(obj) && typeof obj._write == 'function' && typeof obj._writableState == 'object'
}


function isDuplex (obj) {
  return isReadable(obj) && isWritable(obj)
}


module.exports            = isStream
module.exports.isReadable = isReadable
module.exports.isWritable = isWritable
module.exports.isDuplex   = isDuplex
", "node_modules/fsevents/node_modules/isstream/isstream.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/isstream/isstream.js");
    }
}
