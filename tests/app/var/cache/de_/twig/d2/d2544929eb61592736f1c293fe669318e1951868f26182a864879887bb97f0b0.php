<?php

/* node_modules/gauge/plumbing.js */
class __TwigTemplate_f2f3cc9aae12669ce1d997e48faae948fb4e32d74fde86af202e1a9328c47fc1 extends Twig_Template
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
        $__internal_88f73875d7b91b5c7ea105f1b21830f008c8b5f4b758fdc958348fdbe41fc4b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f73875d7b91b5c7ea105f1b21830f008c8b5f4b758fdc958348fdbe41fc4b8->enter($__internal_88f73875d7b91b5c7ea105f1b21830f008c8b5f4b758fdc958348fdbe41fc4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gauge/plumbing.js"));

        // line 1
        echo "'use strict'
var consoleControl = require('console-control-strings')
var renderTemplate = require('./render-template.js')
var validate = require('aproba')

var Plumbing = module.exports = function (theme, template, width) {
  if (!width) width = 80
  validate('OAN', [theme, template, width])
  this.showing = false
  this.theme = theme
  this.width = width
  this.template = template
}
Plumbing.prototype = {}

Plumbing.prototype.setTheme = function (theme) {
  validate('O', [theme])
  this.theme = theme
}

Plumbing.prototype.setTemplate = function (template) {
  validate('A', [template])
  this.template = template
}

Plumbing.prototype.setWidth = function (width) {
  validate('N', [width])
  this.width = width
}

Plumbing.prototype.hide = function () {
  return consoleControl.gotoSOL() + consoleControl.eraseLine()
}

Plumbing.prototype.hideCursor = consoleControl.hideCursor

Plumbing.prototype.showCursor = consoleControl.showCursor

Plumbing.prototype.show = function (status) {
  var values = Object.create(this.theme)
  for (var key in status) {
    values[key] = status[key]
  }

  return renderTemplate(this.width, this.template, values).trim() +
         consoleControl.color('reset') +
         consoleControl.eraseLine() + consoleControl.gotoSOL()
}
";
        
        $__internal_88f73875d7b91b5c7ea105f1b21830f008c8b5f4b758fdc958348fdbe41fc4b8->leave($__internal_88f73875d7b91b5c7ea105f1b21830f008c8b5f4b758fdc958348fdbe41fc4b8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gauge/plumbing.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
var consoleControl = require('console-control-strings')
var renderTemplate = require('./render-template.js')
var validate = require('aproba')

var Plumbing = module.exports = function (theme, template, width) {
  if (!width) width = 80
  validate('OAN', [theme, template, width])
  this.showing = false
  this.theme = theme
  this.width = width
  this.template = template
}
Plumbing.prototype = {}

Plumbing.prototype.setTheme = function (theme) {
  validate('O', [theme])
  this.theme = theme
}

Plumbing.prototype.setTemplate = function (template) {
  validate('A', [template])
  this.template = template
}

Plumbing.prototype.setWidth = function (width) {
  validate('N', [width])
  this.width = width
}

Plumbing.prototype.hide = function () {
  return consoleControl.gotoSOL() + consoleControl.eraseLine()
}

Plumbing.prototype.hideCursor = consoleControl.hideCursor

Plumbing.prototype.showCursor = consoleControl.showCursor

Plumbing.prototype.show = function (status) {
  var values = Object.create(this.theme)
  for (var key in status) {
    values[key] = status[key]
  }

  return renderTemplate(this.width, this.template, values).trim() +
         consoleControl.color('reset') +
         consoleControl.eraseLine() + consoleControl.gotoSOL()
}
", "node_modules/gauge/plumbing.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gauge/plumbing.js");
    }
}
