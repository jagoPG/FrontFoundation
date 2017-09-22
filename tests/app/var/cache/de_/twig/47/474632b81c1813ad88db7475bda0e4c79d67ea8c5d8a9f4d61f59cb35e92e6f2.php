<?php

/* node_modules/babel-loader/lib/utils/relative.js */
class __TwigTemplate_33eae25a438de6cd87bf4eeff4d634531b18fdbae42857098187bb57bd26d150 extends Twig_Template
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
        $__internal_8805900b77d4d8f454ce79e3551d2b69d3c2730af38fbfa51d5d23501b5930b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8805900b77d4d8f454ce79e3551d2b69d3c2730af38fbfa51d5d23501b5930b3->enter($__internal_8805900b77d4d8f454ce79e3551d2b69d3c2730af38fbfa51d5d23501b5930b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-loader/lib/utils/relative.js"));

        // line 1
        echo "\"use strict\";

var path = require(\"path\");

module.exports = function relative(sourceRoot, filename) {
  var rootPath = sourceRoot.replace(/\\\\/g, \"/\").split(\"/\")[1];
  var fileRootPath = filename.replace(/\\\\/g, \"/\").split(\"/\")[1];

  // If the file is in a completely different root folder use the absolute path of file.
  if (rootPath && rootPath !== fileRootPath) {
    return filename;
  }

  return path.relative(sourceRoot, filename);
};";
        
        $__internal_8805900b77d4d8f454ce79e3551d2b69d3c2730af38fbfa51d5d23501b5930b3->leave($__internal_8805900b77d4d8f454ce79e3551d2b69d3c2730af38fbfa51d5d23501b5930b3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-loader/lib/utils/relative.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var path = require(\"path\");

module.exports = function relative(sourceRoot, filename) {
  var rootPath = sourceRoot.replace(/\\\\/g, \"/\").split(\"/\")[1];
  var fileRootPath = filename.replace(/\\\\/g, \"/\").split(\"/\")[1];

  // If the file is in a completely different root folder use the absolute path of file.
  if (rootPath && rootPath !== fileRootPath) {
    return filename;
  }

  return path.relative(sourceRoot, filename);
};", "node_modules/babel-loader/lib/utils/relative.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-loader/lib/utils/relative.js");
    }
}
