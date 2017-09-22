<?php

/* node_modules/uglifyjs-webpack-plugin/lib/post_install.js */
class __TwigTemplate_f8cab3e7c511b7fb71bfdd3144980ed88b0df1b13cfba67dcaa05d063fcd8bbc extends Twig_Template
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
        $__internal_90d75f35ca86ada9e803d5d2db2967028875ace9ebad7fe4ff74894617590e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d75f35ca86ada9e803d5d2db2967028875ace9ebad7fe4ff74894617590e1d->enter($__internal_90d75f35ca86ada9e803d5d2db2967028875ace9ebad7fe4ff74894617590e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglifyjs-webpack-plugin/lib/post_install.js"));

        // line 1
        echo "/* eslint-disable */
// adapted based on rackt/history (MIT)
// Node 0.10+
var execSync = require('child_process').execSync;
var fs = require('fs');

// Node 0.10 check
if (!execSync) {
  execSync = require('sync-exec');
}

function exec(command) {
  execSync(command, {
    stdio: [0, 1, 2]
  });
}

fs.stat('dist', function(error, stat) {
  // Skip building on Travis
  if (process.env.TRAVIS) {
    return;
  }

  if (error || !stat.isDirectory()) {
    // Create a directory to avoid getting stuck
    // in postinstall loop
    fs.mkdirSync('dist');
    exec('npm install --only=dev');
    exec('npm run build');
  }
});
";
        
        $__internal_90d75f35ca86ada9e803d5d2db2967028875ace9ebad7fe4ff74894617590e1d->leave($__internal_90d75f35ca86ada9e803d5d2db2967028875ace9ebad7fe4ff74894617590e1d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglifyjs-webpack-plugin/lib/post_install.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint-disable */
// adapted based on rackt/history (MIT)
// Node 0.10+
var execSync = require('child_process').execSync;
var fs = require('fs');

// Node 0.10 check
if (!execSync) {
  execSync = require('sync-exec');
}

function exec(command) {
  execSync(command, {
    stdio: [0, 1, 2]
  });
}

fs.stat('dist', function(error, stat) {
  // Skip building on Travis
  if (process.env.TRAVIS) {
    return;
  }

  if (error || !stat.isDirectory()) {
    // Create a directory to avoid getting stuck
    // in postinstall loop
    fs.mkdirSync('dist');
    exec('npm install --only=dev');
    exec('npm run build');
  }
});
", "node_modules/uglifyjs-webpack-plugin/lib/post_install.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglifyjs-webpack-plugin/lib/post_install.js");
    }
}
