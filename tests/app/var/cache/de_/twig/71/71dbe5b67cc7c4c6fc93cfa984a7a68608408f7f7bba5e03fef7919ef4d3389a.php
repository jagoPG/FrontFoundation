<?php

/* node_modules/are-we-there-yet/tracker.js */
class __TwigTemplate_c8abacff88bb954dd5d12edb655601d11a833a56841b9d6c043851611563fd5e extends Twig_Template
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
        $__internal_e8a1cbc93f2b1237079e66def9875bbd60c8cc3099024ba5d8ae5bcd7c8bac48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a1cbc93f2b1237079e66def9875bbd60c8cc3099024ba5d8ae5bcd7c8bac48->enter($__internal_e8a1cbc93f2b1237079e66def9875bbd60c8cc3099024ba5d8ae5bcd7c8bac48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/are-we-there-yet/tracker.js"));

        // line 1
        echo "'use strict'
var util = require('util')
var TrackerBase = require('./tracker-base.js')

var Tracker = module.exports = function (name, todo) {
  TrackerBase.call(this, name)
  this.workDone = 0
  this.workTodo = todo || 0
}
util.inherits(Tracker, TrackerBase)

Tracker.prototype.completed = function () {
  return this.workTodo === 0 ? 0 : this.workDone / this.workTodo
}

Tracker.prototype.addWork = function (work) {
  this.workTodo += work
  this.emit('change', this.name, this.completed(), this)
}

Tracker.prototype.completeWork = function (work) {
  this.workDone += work
  if (this.workDone > this.workTodo) this.workDone = this.workTodo
  this.emit('change', this.name, this.completed(), this)
}

Tracker.prototype.finish = function () {
  this.workTodo = this.workDone = 1
  this.emit('change', this.name, 1, this)
}
";
        
        $__internal_e8a1cbc93f2b1237079e66def9875bbd60c8cc3099024ba5d8ae5bcd7c8bac48->leave($__internal_e8a1cbc93f2b1237079e66def9875bbd60c8cc3099024ba5d8ae5bcd7c8bac48_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/are-we-there-yet/tracker.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var util = require('util')
var TrackerBase = require('./tracker-base.js')

var Tracker = module.exports = function (name, todo) {
  TrackerBase.call(this, name)
  this.workDone = 0
  this.workTodo = todo || 0
}
util.inherits(Tracker, TrackerBase)

Tracker.prototype.completed = function () {
  return this.workTodo === 0 ? 0 : this.workDone / this.workTodo
}

Tracker.prototype.addWork = function (work) {
  this.workTodo += work
  this.emit('change', this.name, this.completed(), this)
}

Tracker.prototype.completeWork = function (work) {
  this.workDone += work
  if (this.workDone > this.workTodo) this.workDone = this.workTodo
  this.emit('change', this.name, this.completed(), this)
}

Tracker.prototype.finish = function () {
  this.workTodo = this.workDone = 1
  this.emit('change', this.name, 1, this)
}
", "node_modules/are-we-there-yet/tracker.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/are-we-there-yet/tracker.js");
    }
}
