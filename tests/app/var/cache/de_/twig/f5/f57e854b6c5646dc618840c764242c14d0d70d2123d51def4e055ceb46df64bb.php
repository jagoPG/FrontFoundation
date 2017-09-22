<?php

/* node_modules/readdirp/examples/stream-api.js */
class __TwigTemplate_d5fb96e722f004e7f5b2534a76185dbe1d7c3ead5f07e51669fa51bf262defb0 extends Twig_Template
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
        $__internal_1153ef9a0999507b198b50a812a0e8cf66849cb9c79b63466ff4441e2fe4521e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1153ef9a0999507b198b50a812a0e8cf66849cb9c79b63466ff4441e2fe4521e->enter($__internal_1153ef9a0999507b198b50a812a0e8cf66849cb9c79b63466ff4441e2fe4521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/readdirp/examples/stream-api.js"));

        // line 1
        echo "var readdirp =  require('..')
  , path = require('path');

readdirp({ root: path.join(__dirname), fileFilter: '*.js' })
  .on('warn', function (err) { 
    console.error('something went wrong when processing an entry', err); 
  })
  .on('error', function (err) { 
    console.error('something went fatally wrong and the stream was aborted', err); 
  })
  .on('data', function (entry) { 
    console.log('%s is ready for processing', entry.path);
    // process entry here
  });

";
        
        $__internal_1153ef9a0999507b198b50a812a0e8cf66849cb9c79b63466ff4441e2fe4521e->leave($__internal_1153ef9a0999507b198b50a812a0e8cf66849cb9c79b63466ff4441e2fe4521e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/readdirp/examples/stream-api.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var readdirp =  require('..')
  , path = require('path');

readdirp({ root: path.join(__dirname), fileFilter: '*.js' })
  .on('warn', function (err) { 
    console.error('something went wrong when processing an entry', err); 
  })
  .on('error', function (err) { 
    console.error('something went fatally wrong and the stream was aborted', err); 
  })
  .on('data', function (entry) { 
    console.log('%s is ready for processing', entry.path);
    // process entry here
  });

", "node_modules/readdirp/examples/stream-api.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/readdirp/examples/stream-api.js");
    }
}
