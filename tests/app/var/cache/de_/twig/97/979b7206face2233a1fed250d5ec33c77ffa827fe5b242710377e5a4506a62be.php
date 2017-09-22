<?php

/* node_modules/fsevents/node_modules/rc/test/ini.js */
class __TwigTemplate_09b5948afcd0d98b618cd6fac2ae06082314016390a7f6ddace9ae26affadf04 extends Twig_Template
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
        $__internal_ea420bbce4cc8829837932da9eb226fe345dcdf58173d2a3cd682d624f4673de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea420bbce4cc8829837932da9eb226fe345dcdf58173d2a3cd682d624f4673de->enter($__internal_ea420bbce4cc8829837932da9eb226fe345dcdf58173d2a3cd682d624f4673de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/test/ini.js"));

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
        
        $__internal_ea420bbce4cc8829837932da9eb226fe345dcdf58173d2a3cd682d624f4673de->leave($__internal_ea420bbce4cc8829837932da9eb226fe345dcdf58173d2a3cd682d624f4673de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/test/ini.js";
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

", "node_modules/fsevents/node_modules/rc/test/ini.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/test/ini.js");
    }
}
