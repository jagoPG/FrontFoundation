<?php

/* node_modules/fsevents/node_modules/are-we-there-yet/tracker-base.js */
class __TwigTemplate_f15ae1541c1b1f3a481766d789003b5afbffe75126979e5b1e6b33e1de448243 extends Twig_Template
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
        $__internal_60d43afc5ba00b6d6eb4606544ba7a9754f17d17b9a605b5c4b4e0847ab2c506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d43afc5ba00b6d6eb4606544ba7a9754f17d17b9a605b5c4b4e0847ab2c506->enter($__internal_60d43afc5ba00b6d6eb4606544ba7a9754f17d17b9a605b5c4b4e0847ab2c506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/are-we-there-yet/tracker-base.js"));

        // line 1
        echo "'use strict'
var EventEmitter = require('events').EventEmitter
var util = require('util')

var trackerId = 0
var TrackerBase = module.exports = function (name) {
  EventEmitter.call(this)
  this.id = ++trackerId
  this.name = name
}
util.inherits(TrackerBase, EventEmitter)
";
        
        $__internal_60d43afc5ba00b6d6eb4606544ba7a9754f17d17b9a605b5c4b4e0847ab2c506->leave($__internal_60d43afc5ba00b6d6eb4606544ba7a9754f17d17b9a605b5c4b4e0847ab2c506_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/are-we-there-yet/tracker-base.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var EventEmitter = require('events').EventEmitter
var util = require('util')

var trackerId = 0
var TrackerBase = module.exports = function (name) {
  EventEmitter.call(this)
  this.id = ++trackerId
  this.name = name
}
util.inherits(TrackerBase, EventEmitter)
", "node_modules/fsevents/node_modules/are-we-there-yet/tracker-base.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/are-we-there-yet/tracker-base.js");
    }
}
