<?php

/* node_modules/fsevents/install.js */
class __TwigTemplate_08fc028a089a13dae7086c91396e520a38dbd8db6d2b4a75790b392d19812a0f extends Twig_Template
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
        $__internal_0933193b5e8f3a1ef5004f793ca0fa88c64568322276e2cceee9fb9d9c6b567b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0933193b5e8f3a1ef5004f793ca0fa88c64568322276e2cceee9fb9d9c6b567b->enter($__internal_0933193b5e8f3a1ef5004f793ca0fa88c64568322276e2cceee9fb9d9c6b567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/install.js"));

        // line 1
        echo "if (process.platform === 'darwin') {
  var spawn = require('child_process').spawn;
  var args = ['install', '--fallback-to-build'];
  var options = {stdio: 'inherit'};
  var child = spawn('node-pre-gyp', args, options);
  child.on('close', process.exit);
}";
        
        $__internal_0933193b5e8f3a1ef5004f793ca0fa88c64568322276e2cceee9fb9d9c6b567b->leave($__internal_0933193b5e8f3a1ef5004f793ca0fa88c64568322276e2cceee9fb9d9c6b567b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/install.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("if (process.platform === 'darwin') {
  var spawn = require('child_process').spawn;
  var args = ['install', '--fallback-to-build'];
  var options = {stdio: 'inherit'};
  var child = spawn('node-pre-gyp', args, options);
  child.on('close', process.exit);
}", "node_modules/fsevents/install.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/install.js");
    }
}
