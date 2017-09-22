<?php

/* node_modules/rc/test/ini.js */
class __TwigTemplate_e9f4d0c588adacef20771a1af97cb8049ce4f352b8e72e810e405d65c88a0ed3 extends Twig_Template
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
        $__internal_fe3f7ffee1cc93a9d993d52e01e9aa7a9d88084fc54b23a07a9bce4e7264bb7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3f7ffee1cc93a9d993d52e01e9aa7a9d88084fc54b23a07a9bce4e7264bb7c->enter($__internal_fe3f7ffee1cc93a9d993d52e01e9aa7a9d88084fc54b23a07a9bce4e7264bb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/rc/test/ini.js"));

        // line 1
        echo "var cc =require('../lib/utils')
var INI = require('ini')
var assert = require('assert')

function test(obj) {

  var _json, _ini
  var json = cc.parse (_json = JSON.stringify(obj))
  var ini = cc.parse (_ini = INI.stringify(obj))
  console.log(_ini, _json)
  assert.deepEqual(json, ini)
}


test({hello: true})

";
        
        $__internal_fe3f7ffee1cc93a9d993d52e01e9aa7a9d88084fc54b23a07a9bce4e7264bb7c->leave($__internal_fe3f7ffee1cc93a9d993d52e01e9aa7a9d88084fc54b23a07a9bce4e7264bb7c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/rc/test/ini.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var cc =require('../lib/utils')
var INI = require('ini')
var assert = require('assert')

function test(obj) {

  var _json, _ini
  var json = cc.parse (_json = JSON.stringify(obj))
  var ini = cc.parse (_ini = INI.stringify(obj))
  console.log(_ini, _json)
  assert.deepEqual(json, ini)
}


test({hello: true})

", "node_modules/rc/test/ini.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/rc/test/ini.js");
    }
}
