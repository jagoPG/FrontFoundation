<?php

/* node_modules/isexe/windows.js */
class __TwigTemplate_555126ffa5d497739e5858d2de6912d0d33d29ea3605ad43e4acba2e1d3a30c9 extends Twig_Template
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
        $__internal_d3a112bb3c43f6a295db5e34f65dee28bd193fcdb4130648abd3636948b83c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a112bb3c43f6a295db5e34f65dee28bd193fcdb4130648abd3636948b83c6f->enter($__internal_d3a112bb3c43f6a295db5e34f65dee28bd193fcdb4130648abd3636948b83c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/isexe/windows.js"));

        // line 1
        echo "module.exports = isexe
isexe.sync = sync

var fs = require('fs')

function checkPathExt (path, options) {
  var pathext = options.pathExt !== undefined ?
    options.pathExt : process.env.PATHEXT

  if (!pathext) {
    return true
  }

  pathext = pathext.split(';')
  if (pathext.indexOf('') !== -1) {
    return true
  }
  for (var i = 0; i < pathext.length; i++) {
    var p = pathext[i].toLowerCase()
    if (p && path.substr(-p.length).toLowerCase() === p) {
      return true
    }
  }
  return false
}

function checkStat (stat, path, options) {
  if (!stat.isSymbolicLink() && !stat.isFile()) {
    return false
  }
  return checkPathExt(path, options)
}

function isexe (path, options, cb) {
  fs.stat(path, function (er, stat) {
    cb(er, er ? false : checkStat(stat, path, options))
  })
}

function sync (path, options) {
  return checkStat(fs.statSync(path), path, options)
}
";
        
        $__internal_d3a112bb3c43f6a295db5e34f65dee28bd193fcdb4130648abd3636948b83c6f->leave($__internal_d3a112bb3c43f6a295db5e34f65dee28bd193fcdb4130648abd3636948b83c6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/isexe/windows.js";
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

function checkPathExt (path, options) {
  var pathext = options.pathExt !== undefined ?
    options.pathExt : process.env.PATHEXT

  if (!pathext) {
    return true
  }

  pathext = pathext.split(';')
  if (pathext.indexOf('') !== -1) {
    return true
  }
  for (var i = 0; i < pathext.length; i++) {
    var p = pathext[i].toLowerCase()
    if (p && path.substr(-p.length).toLowerCase() === p) {
      return true
    }
  }
  return false
}

function checkStat (stat, path, options) {
  if (!stat.isSymbolicLink() && !stat.isFile()) {
    return false
  }
  return checkPathExt(path, options)
}

function isexe (path, options, cb) {
  fs.stat(path, function (er, stat) {
    cb(er, er ? false : checkStat(stat, path, options))
  })
}

function sync (path, options) {
  return checkStat(fs.statSync(path), path, options)
}
", "node_modules/isexe/windows.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/isexe/windows.js");
    }
}
