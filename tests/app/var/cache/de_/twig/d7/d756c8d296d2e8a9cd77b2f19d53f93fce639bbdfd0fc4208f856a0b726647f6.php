<?php

/* node_modules/fsevents/node_modules/tar/test/parse-discard.js */
class __TwigTemplate_2faa0c109c4195ea90f4bd5df2384d1574c3dbc77add07b6d138aaae47cc34dc extends Twig_Template
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
        $__internal_a723787e4c9015942f008cf39724849f41a97ddf3b1e723cb4b2a51882688609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a723787e4c9015942f008cf39724849f41a97ddf3b1e723cb4b2a51882688609->enter($__internal_a723787e4c9015942f008cf39724849f41a97ddf3b1e723cb4b2a51882688609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tar/test/parse-discard.js"));

        // line 1
        echo "var tap = require(\"tap\")
  , tar = require(\"../tar.js\")
  , fs = require(\"fs\")
  , path = require(\"path\")
  , file = path.resolve(__dirname, \"fixtures/c.tar\")

tap.test(\"parser test\", function (t) {
  var parser = tar.Parse()
  var total = 0
  var dataTotal = 0

  parser.on(\"end\", function () {

    t.equals(total-513,dataTotal,'should have discarded only c.txt')

    t.end()
  })

  fs.createReadStream(file)
    .pipe(parser)
    .on('entry',function(entry){
      if(entry.path === 'c.txt') entry.abort()
      
      total += entry.size;
      entry.on('data',function(data){
        dataTotal += data.length        
      })
    })
})
";
        
        $__internal_a723787e4c9015942f008cf39724849f41a97ddf3b1e723cb4b2a51882688609->leave($__internal_a723787e4c9015942f008cf39724849f41a97ddf3b1e723cb4b2a51882688609_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tar/test/parse-discard.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tap = require(\"tap\")
  , tar = require(\"../tar.js\")
  , fs = require(\"fs\")
  , path = require(\"path\")
  , file = path.resolve(__dirname, \"fixtures/c.tar\")

tap.test(\"parser test\", function (t) {
  var parser = tar.Parse()
  var total = 0
  var dataTotal = 0

  parser.on(\"end\", function () {

    t.equals(total-513,dataTotal,'should have discarded only c.txt')

    t.end()
  })

  fs.createReadStream(file)
    .pipe(parser)
    .on('entry',function(entry){
      if(entry.path === 'c.txt') entry.abort()
      
      total += entry.size;
      entry.on('data',function(data){
        dataTotal += data.length        
      })
    })
})
", "node_modules/fsevents/node_modules/tar/test/parse-discard.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tar/test/parse-discard.js");
    }
}
