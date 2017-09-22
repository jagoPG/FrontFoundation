<?php

/* node_modules/fsevents/node_modules/tar/examples/packer.js */
class __TwigTemplate_79cd14de8cdab20d6a1f4f4ca6f137c2890b85fe2276a9e2770d9e3b45710b75 extends Twig_Template
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
        $__internal_7e91927ea370fbc5088afdbc6531647446a299615c6313aead482014d96f8d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e91927ea370fbc5088afdbc6531647446a299615c6313aead482014d96f8d46->enter($__internal_7e91927ea370fbc5088afdbc6531647446a299615c6313aead482014d96f8d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tar/examples/packer.js"));

        // line 1
        echo "var tar = require(\"../tar.js\")
  , fstream = require(\"fstream\")
  , fs = require(\"fs\")

var dirDest = fs.createWriteStream('dir.tar')


function onError(err) {
  console.error('An error occurred:', err)
}

function onEnd() {
  console.log('Packed!')
}

var packer = tar.Pack({ noProprietary: true })
  .on('error', onError)
  .on('end', onEnd);

// This must be a \"directory\"
fstream.Reader({ path: __dirname, type: \"Directory\" })
  .on('error', onError)
  .pipe(packer)
  .pipe(dirDest)
";
        
        $__internal_7e91927ea370fbc5088afdbc6531647446a299615c6313aead482014d96f8d46->leave($__internal_7e91927ea370fbc5088afdbc6531647446a299615c6313aead482014d96f8d46_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tar/examples/packer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tar = require(\"../tar.js\")
  , fstream = require(\"fstream\")
  , fs = require(\"fs\")

var dirDest = fs.createWriteStream('dir.tar')


function onError(err) {
  console.error('An error occurred:', err)
}

function onEnd() {
  console.log('Packed!')
}

var packer = tar.Pack({ noProprietary: true })
  .on('error', onError)
  .on('end', onEnd);

// This must be a \"directory\"
fstream.Reader({ path: __dirname, type: \"Directory\" })
  .on('error', onError)
  .pipe(packer)
  .pipe(dirDest)
", "node_modules/fsevents/node_modules/tar/examples/packer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tar/examples/packer.js");
    }
}
