<?php

/* node_modules/tar/examples/packer.js */
class __TwigTemplate_7f083e296317d6171f428e49111646f8f22d6cde35077d9211a2db5c1cc5a8cf extends Twig_Template
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
        $__internal_21c3eb6ab076436e2b2e822c371218d0462298306b4f345e4ab2ce4eafa894e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c3eb6ab076436e2b2e822c371218d0462298306b4f345e4ab2ce4eafa894e4->enter($__internal_21c3eb6ab076436e2b2e822c371218d0462298306b4f345e4ab2ce4eafa894e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar/examples/packer.js"));

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
        
        $__internal_21c3eb6ab076436e2b2e822c371218d0462298306b4f345e4ab2ce4eafa894e4->leave($__internal_21c3eb6ab076436e2b2e822c371218d0462298306b4f345e4ab2ce4eafa894e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar/examples/packer.js";
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
", "node_modules/tar/examples/packer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar/examples/packer.js");
    }
}
