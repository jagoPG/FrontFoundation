<?php

/* node_modules/isstream/isstream.js */
class __TwigTemplate_06b90ed70b3918b1f63cf4fbd1651d682f68dd93316b733704c39cb32348759f extends Twig_Template
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
        $__internal_22adb80184cf8ab75fa36ed0633aaca6c0005f704d1f5f2400731a6c8bb2a7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22adb80184cf8ab75fa36ed0633aaca6c0005f704d1f5f2400731a6c8bb2a7b5->enter($__internal_22adb80184cf8ab75fa36ed0633aaca6c0005f704d1f5f2400731a6c8bb2a7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isstream/isstream.js"));

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
        
        $__internal_22adb80184cf8ab75fa36ed0633aaca6c0005f704d1f5f2400731a6c8bb2a7b5->leave($__internal_22adb80184cf8ab75fa36ed0633aaca6c0005f704d1f5f2400731a6c8bb2a7b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isstream/isstream.js";
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
", "node_modules/isstream/isstream.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isstream/isstream.js");
    }
}
