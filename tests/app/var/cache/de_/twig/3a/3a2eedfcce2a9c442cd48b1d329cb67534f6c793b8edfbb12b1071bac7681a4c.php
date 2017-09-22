<?php

/* node_modules/ipaddr.js/Cakefile */
class __TwigTemplate_759902e2943b6b4f2d2fb8244fdbaf2b27f6f6def8847b0926c7e618fa0d478b extends Twig_Template
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
        $__internal_3b69a895820bcf441ddef3f99933478dfe9f9b0e4225b323e5998a2891813949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b69a895820bcf441ddef3f99933478dfe9f9b0e4225b323e5998a2891813949->enter($__internal_3b69a895820bcf441ddef3f99933478dfe9f9b0e4225b323e5998a2891813949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ipaddr.js/Cakefile"));

        // line 1
        echo "fs           = require 'fs'
CoffeeScript = require 'coffee-script'
nodeunit     = require 'nodeunit'
UglifyJS     = require 'uglify-js'

task 'build', 'build the JavaScript files from CoffeeScript source', build = (cb) ->
  source = fs.readFileSync 'src/ipaddr.coffee', 'utf-8'
  fs.writeFileSync 'lib/ipaddr.js', CoffeeScript.compile source.toString()

  invoke 'test'
  invoke 'compress'

task 'test', 'run the bundled tests', (cb) ->
  nodeunit.reporters.default.run ['test']

task 'compress', 'uglify the resulting javascript', (cb) ->
  source = fs.readFileSync 'lib/ipaddr.js', 'utf-8'
  fs.writeFileSync('ipaddr.min.js', UglifyJS.minify(source).code)
";
        
        $__internal_3b69a895820bcf441ddef3f99933478dfe9f9b0e4225b323e5998a2891813949->leave($__internal_3b69a895820bcf441ddef3f99933478dfe9f9b0e4225b323e5998a2891813949_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ipaddr.js/Cakefile";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("fs           = require 'fs'
CoffeeScript = require 'coffee-script'
nodeunit     = require 'nodeunit'
UglifyJS     = require 'uglify-js'

task 'build', 'build the JavaScript files from CoffeeScript source', build = (cb) ->
  source = fs.readFileSync 'src/ipaddr.coffee', 'utf-8'
  fs.writeFileSync 'lib/ipaddr.js', CoffeeScript.compile source.toString()

  invoke 'test'
  invoke 'compress'

task 'test', 'run the bundled tests', (cb) ->
  nodeunit.reporters.default.run ['test']

task 'compress', 'uglify the resulting javascript', (cb) ->
  source = fs.readFileSync 'lib/ipaddr.js', 'utf-8'
  fs.writeFileSync('ipaddr.min.js', UglifyJS.minify(source).code)
", "node_modules/ipaddr.js/Cakefile", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ipaddr.js/Cakefile");
    }
}
