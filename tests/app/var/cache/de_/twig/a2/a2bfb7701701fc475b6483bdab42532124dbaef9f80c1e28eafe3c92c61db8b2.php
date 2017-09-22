<?php

/* node_modules/fsevents/node_modules/are-we-there-yet/tracker-stream.js */
class __TwigTemplate_55122168540db5428b8b35a845e97ee24e0b67e4c8d9c33ac1429ebd042ae53b extends Twig_Template
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
        $__internal_3635a41d5d793bb2c6d3a7830ee0cc99bc4b6131ef3cc1f2e83fe2f2bc105094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3635a41d5d793bb2c6d3a7830ee0cc99bc4b6131ef3cc1f2e83fe2f2bc105094->enter($__internal_3635a41d5d793bb2c6d3a7830ee0cc99bc4b6131ef3cc1f2e83fe2f2bc105094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/are-we-there-yet/tracker-stream.js"));

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
        
        $__internal_3635a41d5d793bb2c6d3a7830ee0cc99bc4b6131ef3cc1f2e83fe2f2bc105094->leave($__internal_3635a41d5d793bb2c6d3a7830ee0cc99bc4b6131ef3cc1f2e83fe2f2bc105094_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/are-we-there-yet/tracker-stream.js";
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
", "node_modules/fsevents/node_modules/are-we-there-yet/tracker-stream.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/are-we-there-yet/tracker-stream.js");
    }
}
