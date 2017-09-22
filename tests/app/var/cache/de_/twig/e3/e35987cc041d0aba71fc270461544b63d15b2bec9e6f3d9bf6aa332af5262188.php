<?php

/* node_modules/babel-loader/lib/utils/read.js */
class __TwigTemplate_bfab19ca179a7efe438fd6197e963e80e3d621097f62803c485942ee8f2073c0 extends Twig_Template
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
        $__internal_32e98938936274dea9cd2a978277b046097d252d9c8527f62d1637b6745df300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e98938936274dea9cd2a978277b046097d252d9c8527f62d1637b6745df300->enter($__internal_32e98938936274dea9cd2a978277b046097d252d9c8527f62d1637b6745df300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-loader/lib/utils/read.js"));

        // line 1
        echo "\"use strict\";

var path = require(\"path\");

module.exports = function readBabelConfig(fileSystem, filename) {
  if (path.basename(filename) === \"package.json\") {
    var pkg = require(filename);

    return JSON.stringify(pkg.babel);
  }

  // Webpack `fs` return Buffer
  return fileSystem.readFileSync(filename).toString(\"utf8\");
};";
        
        $__internal_32e98938936274dea9cd2a978277b046097d252d9c8527f62d1637b6745df300->leave($__internal_32e98938936274dea9cd2a978277b046097d252d9c8527f62d1637b6745df300_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-loader/lib/utils/read.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var path = require(\"path\");

module.exports = function readBabelConfig(fileSystem, filename) {
  if (path.basename(filename) === \"package.json\") {
    var pkg = require(filename);

    return JSON.stringify(pkg.babel);
  }

  // Webpack `fs` return Buffer
  return fileSystem.readFileSync(filename).toString(\"utf8\");
};", "node_modules/babel-loader/lib/utils/read.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-loader/lib/utils/read.js");
    }
}
