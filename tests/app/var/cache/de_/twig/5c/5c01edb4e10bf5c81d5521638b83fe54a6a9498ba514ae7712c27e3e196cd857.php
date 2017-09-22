<?php

/* node_modules/isexe/mode.js */
class __TwigTemplate_8c814ea5121e723bb33e12afcb6eb3eafa32248f33bcb2b9d627507312544ff5 extends Twig_Template
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
        $__internal_b067b537a7d0b385677058e886c5298258848e37128c60c00d3a855897051bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b067b537a7d0b385677058e886c5298258848e37128c60c00d3a855897051bd3->enter($__internal_b067b537a7d0b385677058e886c5298258848e37128c60c00d3a855897051bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isexe/mode.js"));

        // line 1
        echo "module.exports = isexe
isexe.sync = sync

var fs = require('fs')

function isexe (path, options, cb) {
  fs.stat(path, function (er, stat) {
    cb(er, er ? false : checkStat(stat, options))
  })
}

function sync (path, options) {
  return checkStat(fs.statSync(path), options)
}

function checkStat (stat, options) {
  return stat.isFile() && checkMode(stat, options)
}

function checkMode (stat, options) {
  var mod = stat.mode
  var uid = stat.uid
  var gid = stat.gid

  var myUid = options.uid !== undefined ?
    options.uid : process.getuid && process.getuid()
  var myGid = options.gid !== undefined ?
    options.gid : process.getgid && process.getgid()

  var u = parseInt('100', 8)
  var g = parseInt('010', 8)
  var o = parseInt('001', 8)
  var ug = u | g

  var ret = (mod & o) ||
    (mod & g) && gid === myGid ||
    (mod & u) && uid === myUid ||
    (mod & ug) && myUid === 0

  return ret
}
";
        
        $__internal_b067b537a7d0b385677058e886c5298258848e37128c60c00d3a855897051bd3->leave($__internal_b067b537a7d0b385677058e886c5298258848e37128c60c00d3a855897051bd3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isexe/mode.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = isexe
isexe.sync = sync

var fs = require('fs')

function isexe (path, options, cb) {
  fs.stat(path, function (er, stat) {
    cb(er, er ? false : checkStat(stat, options))
  })
}

function sync (path, options) {
  return checkStat(fs.statSync(path), options)
}

function checkStat (stat, options) {
  return stat.isFile() && checkMode(stat, options)
}

function checkMode (stat, options) {
  var mod = stat.mode
  var uid = stat.uid
  var gid = stat.gid

  var myUid = options.uid !== undefined ?
    options.uid : process.getuid && process.getuid()
  var myGid = options.gid !== undefined ?
    options.gid : process.getgid && process.getgid()

  var u = parseInt('100', 8)
  var g = parseInt('010', 8)
  var o = parseInt('001', 8)
  var ug = u | g

  var ret = (mod & o) ||
    (mod & g) && gid === myGid ||
    (mod & u) && uid === myUid ||
    (mod & ug) && myUid === 0

  return ret
}
", "node_modules/isexe/mode.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isexe/mode.js");
    }
}
