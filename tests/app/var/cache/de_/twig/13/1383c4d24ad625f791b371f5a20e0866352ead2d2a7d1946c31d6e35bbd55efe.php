<?php

/* node_modules/babel-loader/lib/utils/exists.js */
class __TwigTemplate_cf033fd71177f951422e6782afd16413792450adb78399b17c3f6c274bb01e47 extends Twig_Template
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
        $__internal_f157ba0ea236b25c7c9a27e9dc1ba1420c2509441474c45289fd2f5ca4416429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f157ba0ea236b25c7c9a27e9dc1ba1420c2509441474c45289fd2f5ca4416429->enter($__internal_f157ba0ea236b25c7c9a27e9dc1ba1420c2509441474c45289fd2f5ca4416429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-loader/lib/utils/exists.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (fileSystem, filename) {
  var exists = false;

  try {
    exists = fileSystem.statSync(filename).isFile();
  } catch (err) {
    if (err.code !== \"ENOENT\") throw err;
  }

  return exists;
};";
        
        $__internal_f157ba0ea236b25c7c9a27e9dc1ba1420c2509441474c45289fd2f5ca4416429->leave($__internal_f157ba0ea236b25c7c9a27e9dc1ba1420c2509441474c45289fd2f5ca4416429_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-loader/lib/utils/exists.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (fileSystem, filename) {
  var exists = false;

  try {
    exists = fileSystem.statSync(filename).isFile();
  } catch (err) {
    if (err.code !== \"ENOENT\") throw err;
  }

  return exists;
};", "node_modules/babel-loader/lib/utils/exists.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-loader/lib/utils/exists.js");
    }
}
