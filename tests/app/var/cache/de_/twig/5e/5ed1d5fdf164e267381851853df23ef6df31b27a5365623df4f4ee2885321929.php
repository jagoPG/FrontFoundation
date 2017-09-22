<?php

/* node_modules/readdirp/examples/callback-api.js */
class __TwigTemplate_b77d3bf1911425a8d1a20bdeb00d5c743863896c536eaeeae94cddb07b7f17c6 extends Twig_Template
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
        $__internal_0a08f96e6625c8d7bfba3fb9fdb28213f1713a1a67f5c764c10b72c05c5ea913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a08f96e6625c8d7bfba3fb9fdb28213f1713a1a67f5c764c10b72c05c5ea913->enter($__internal_0a08f96e6625c8d7bfba3fb9fdb28213f1713a1a67f5c764c10b72c05c5ea913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readdirp/examples/callback-api.js"));

        // line 1
        echo "var readdirp = require('..'); 

readdirp({ root: '.', fileFilter: '*.js' }, function (errors, res) {
  if (errors) {
    errors.forEach(function (err) {
      console.error('Error: ', err);
    });
  }
  console.log('all javascript files', res);
});
";
        
        $__internal_0a08f96e6625c8d7bfba3fb9fdb28213f1713a1a67f5c764c10b72c05c5ea913->leave($__internal_0a08f96e6625c8d7bfba3fb9fdb28213f1713a1a67f5c764c10b72c05c5ea913_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readdirp/examples/callback-api.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var readdirp = require('..'); 

readdirp({ root: '.', fileFilter: '*.js' }, function (errors, res) {
  if (errors) {
    errors.forEach(function (err) {
      console.error('Error: ', err);
    });
  }
  console.log('all javascript files', res);
});
", "node_modules/readdirp/examples/callback-api.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readdirp/examples/callback-api.js");
    }
}
