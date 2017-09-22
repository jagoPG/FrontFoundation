<?php

/* node_modules/tar/test/parse-discard.js */
class __TwigTemplate_fe502954d361612745dab0144f25dbae380968e3c06fe0c8a647226bbd27e23d extends Twig_Template
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
        $__internal_a7ce41b3793efbc7d782e33d5d5104378f716483ef835558f4d33bf9c860ed69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ce41b3793efbc7d782e33d5d5104378f716483ef835558f4d33bf9c860ed69->enter($__internal_a7ce41b3793efbc7d782e33d5d5104378f716483ef835558f4d33bf9c860ed69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar/test/parse-discard.js"));

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
        
        $__internal_a7ce41b3793efbc7d782e33d5d5104378f716483ef835558f4d33bf9c860ed69->leave($__internal_a7ce41b3793efbc7d782e33d5d5104378f716483ef835558f4d33bf9c860ed69_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar/test/parse-discard.js";
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
", "node_modules/tar/test/parse-discard.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar/test/parse-discard.js");
    }
}
