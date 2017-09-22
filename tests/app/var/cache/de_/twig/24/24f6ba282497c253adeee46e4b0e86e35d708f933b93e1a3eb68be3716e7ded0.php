<?php

/* node_modules/readdirp/examples/stream-api-pipe.js */
class __TwigTemplate_2cace0284fe7c35cde0cbca1fb2d81c2b9facb725d921cdbac2959eacbe4d401 extends Twig_Template
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
        $__internal_7a6f27160db845122893c8ef19663809fe750b84c6314225355d1cde63624040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6f27160db845122893c8ef19663809fe750b84c6314225355d1cde63624040->enter($__internal_7a6f27160db845122893c8ef19663809fe750b84c6314225355d1cde63624040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readdirp/examples/stream-api-pipe.js"));

        // line 1
        echo "var readdirp =  require('..')
  , path = require('path')
  , through = require('through2')

// print out all JavaScript files along with their size
readdirp({ root: path.join(__dirname), fileFilter: '*.js' })
  .on('warn', function (err) { console.error('non-fatal error', err); })
  .on('error', function (err) { console.error('fatal error', err); })
  .pipe(through.obj(function (entry, _, cb) { 
    this.push({ path: entry.path, size: entry.stat.size });
    cb();
  }))
  .pipe(through.obj(
    function (res, _, cb) { 
      this.push(JSON.stringify(res) + '\\n');
      cb();
    })
  )
  .pipe(process.stdout);
";
        
        $__internal_7a6f27160db845122893c8ef19663809fe750b84c6314225355d1cde63624040->leave($__internal_7a6f27160db845122893c8ef19663809fe750b84c6314225355d1cde63624040_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readdirp/examples/stream-api-pipe.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var readdirp =  require('..')
  , path = require('path')
  , through = require('through2')

// print out all JavaScript files along with their size
readdirp({ root: path.join(__dirname), fileFilter: '*.js' })
  .on('warn', function (err) { console.error('non-fatal error', err); })
  .on('error', function (err) { console.error('fatal error', err); })
  .pipe(through.obj(function (entry, _, cb) { 
    this.push({ path: entry.path, size: entry.stat.size });
    cb();
  }))
  .pipe(through.obj(
    function (res, _, cb) { 
      this.push(JSON.stringify(res) + '\\n');
      cb();
    })
  )
  .pipe(process.stdout);
", "node_modules/readdirp/examples/stream-api-pipe.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readdirp/examples/stream-api-pipe.js");
    }
}
