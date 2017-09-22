<?php

/* node_modules/babel-loader/lib/resolve-rc.js */
class __TwigTemplate_ba5b10306a3c542632d3d12885ab00d36ca90058791213a962bfb9bb1ee4615b extends Twig_Template
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
        $__internal_9c8c0c05c639d84f095242d34c3eef7dab294d21a571597811686b58e5cba45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8c0c05c639d84f095242d34c3eef7dab294d21a571597811686b58e5cba45f->enter($__internal_9c8c0c05c639d84f095242d34c3eef7dab294d21a571597811686b58e5cba45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-loader/lib/resolve-rc.js"));

        // line 1
        echo "\"use strict\";

var path = require(\"path\");
var exists = require(\"./utils/exists\");

module.exports = function find(fileSystem, start) {
  var _arr = [\".babelrc\", \".babelrc.js\", \"package.json\"];

  for (var _i = 0; _i < _arr.length; _i++) {
    var fileName = _arr[_i];
    var file = path.join(start, fileName);

    if (exists(fileSystem, file)) {
      if (fileName !== \"package.json\" || typeof require(file).babel === \"object\") {
        return file;
      }
    }
  }

  var up = path.dirname(start);

  // Reached root
  if (up !== start) {
    return find(fileSystem, up);
  }
};";
        
        $__internal_9c8c0c05c639d84f095242d34c3eef7dab294d21a571597811686b58e5cba45f->leave($__internal_9c8c0c05c639d84f095242d34c3eef7dab294d21a571597811686b58e5cba45f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-loader/lib/resolve-rc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var path = require(\"path\");
var exists = require(\"./utils/exists\");

module.exports = function find(fileSystem, start) {
  var _arr = [\".babelrc\", \".babelrc.js\", \"package.json\"];

  for (var _i = 0; _i < _arr.length; _i++) {
    var fileName = _arr[_i];
    var file = path.join(start, fileName);

    if (exists(fileSystem, file)) {
      if (fileName !== \"package.json\" || typeof require(file).babel === \"object\") {
        return file;
      }
    }
  }

  var up = path.dirname(start);

  // Reached root
  if (up !== start) {
    return find(fileSystem, up);
  }
};", "node_modules/babel-loader/lib/resolve-rc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-loader/lib/resolve-rc.js");
    }
}
