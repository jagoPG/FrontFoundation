<?php

/* node_modules/fsevents/node_modules/tar/examples/extracter.js */
class __TwigTemplate_d8bdd1dae5a330de7b9599326108509ecc6d34ea8f130e635f77a349d492b6b6 extends Twig_Template
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
        $__internal_ebedc0a5241f8c6342f7db7f9ddf7f551395161c8cce5e5add390febc35366b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebedc0a5241f8c6342f7db7f9ddf7f551395161c8cce5e5add390febc35366b0->enter($__internal_ebedc0a5241f8c6342f7db7f9ddf7f551395161c8cce5e5add390febc35366b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tar/examples/extracter.js"));

        // line 1
        echo "var tar = require(\"../tar.js\")
  , fs = require(\"fs\")


function onError(err) {
  console.error('An error occurred:', err)
}

function onEnd() {
  console.log('Extracted!')
}

var extractor = tar.Extract({path: __dirname + \"/extract\"})
  .on('error', onError)
  .on('end', onEnd);

fs.createReadStream(__dirname + \"/../test/fixtures/c.tar\")
  .on('error', onError)
  .pipe(extractor);
";
        
        $__internal_ebedc0a5241f8c6342f7db7f9ddf7f551395161c8cce5e5add390febc35366b0->leave($__internal_ebedc0a5241f8c6342f7db7f9ddf7f551395161c8cce5e5add390febc35366b0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tar/examples/extracter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tar = require(\"../tar.js\")
  , fs = require(\"fs\")


function onError(err) {
  console.error('An error occurred:', err)
}

function onEnd() {
  console.log('Extracted!')
}

var extractor = tar.Extract({path: __dirname + \"/extract\"})
  .on('error', onError)
  .on('end', onEnd);

fs.createReadStream(__dirname + \"/../test/fixtures/c.tar\")
  .on('error', onError)
  .pipe(extractor);
", "node_modules/fsevents/node_modules/tar/examples/extracter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tar/examples/extracter.js");
    }
}
