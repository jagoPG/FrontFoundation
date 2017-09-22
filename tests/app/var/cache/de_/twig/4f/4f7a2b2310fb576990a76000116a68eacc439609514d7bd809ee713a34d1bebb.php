<?php

/* node_modules/are-we-there-yet/tracker-stream.js */
class __TwigTemplate_70781d468f24f282bb473fba9488d793579761b8cc0a3e9e543d9ad219801108 extends Twig_Template
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
        $__internal_72c98465ee7becd96a018307d18016fd85fc60743d6861482f1825ec531f8263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72c98465ee7becd96a018307d18016fd85fc60743d6861482f1825ec531f8263->enter($__internal_72c98465ee7becd96a018307d18016fd85fc60743d6861482f1825ec531f8263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/are-we-there-yet/tracker-stream.js"));

        // line 1
        echo "'use strict'
var util = require('util')
var stream = require('readable-stream')
var delegate = require('delegates')
var Tracker = require('./tracker.js')

var TrackerStream = module.exports = function (name, size, options) {
  stream.Transform.call(this, options)
  this.tracker = new Tracker(name, size)
  this.name = name
  this.id = this.tracker.id
  this.tracker.on('change', delegateChange(this))
}
util.inherits(TrackerStream, stream.Transform)

function delegateChange (trackerStream) {
  return function (name, completion, tracker) {
    trackerStream.emit('change', name, completion, trackerStream)
  }
}

TrackerStream.prototype._transform = function (data, encoding, cb) {
  this.tracker.completeWork(data.length ? data.length : 1)
  this.push(data)
  cb()
}

TrackerStream.prototype._flush = function (cb) {
  this.tracker.finish()
  cb()
}

delegate(TrackerStream.prototype, 'tracker')
  .method('completed')
  .method('addWork')
";
        
        $__internal_72c98465ee7becd96a018307d18016fd85fc60743d6861482f1825ec531f8263->leave($__internal_72c98465ee7becd96a018307d18016fd85fc60743d6861482f1825ec531f8263_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/are-we-there-yet/tracker-stream.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var util = require('util')
var stream = require('readable-stream')
var delegate = require('delegates')
var Tracker = require('./tracker.js')

var TrackerStream = module.exports = function (name, size, options) {
  stream.Transform.call(this, options)
  this.tracker = new Tracker(name, size)
  this.name = name
  this.id = this.tracker.id
  this.tracker.on('change', delegateChange(this))
}
util.inherits(TrackerStream, stream.Transform)

function delegateChange (trackerStream) {
  return function (name, completion, tracker) {
    trackerStream.emit('change', name, completion, trackerStream)
  }
}

TrackerStream.prototype._transform = function (data, encoding, cb) {
  this.tracker.completeWork(data.length ? data.length : 1)
  this.push(data)
  cb()
}

TrackerStream.prototype._flush = function (cb) {
  this.tracker.finish()
  cb()
}

delegate(TrackerStream.prototype, 'tracker')
  .method('completed')
  .method('addWork')
", "node_modules/are-we-there-yet/tracker-stream.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/are-we-there-yet/tracker-stream.js");
    }
}
