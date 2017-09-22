<?php

/* node_modules/are-we-there-yet/tracker-base.js */
class __TwigTemplate_f6766d5bb50ae04675c07026e1922e538d7fc28c26a83eed238c885a224a2a22 extends Twig_Template
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
        $__internal_cf9089ae24caf6318dfc915c2f56da91a7de961d211743ea59b32857b710effd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9089ae24caf6318dfc915c2f56da91a7de961d211743ea59b32857b710effd->enter($__internal_cf9089ae24caf6318dfc915c2f56da91a7de961d211743ea59b32857b710effd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/are-we-there-yet/tracker-base.js"));

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
        
        $__internal_cf9089ae24caf6318dfc915c2f56da91a7de961d211743ea59b32857b710effd->leave($__internal_cf9089ae24caf6318dfc915c2f56da91a7de961d211743ea59b32857b710effd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/are-we-there-yet/tracker-base.js";
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
", "node_modules/are-we-there-yet/tracker-base.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/are-we-there-yet/tracker-base.js");
    }
}
