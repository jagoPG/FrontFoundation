<?php

/* node_modules/tar/examples/extracter.js */
class __TwigTemplate_8ea99795a218ea8037deb7441f94cf32d1e06b6eebe99c2e78ca79a8a6a52815 extends Twig_Template
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
        $__internal_407630725ca036820eb6f52b1bae7d476260f58f30523940d225cde20290d1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407630725ca036820eb6f52b1bae7d476260f58f30523940d225cde20290d1ef->enter($__internal_407630725ca036820eb6f52b1bae7d476260f58f30523940d225cde20290d1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar/examples/extracter.js"));

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
        
        $__internal_407630725ca036820eb6f52b1bae7d476260f58f30523940d225cde20290d1ef->leave($__internal_407630725ca036820eb6f52b1bae7d476260f58f30523940d225cde20290d1ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar/examples/extracter.js";
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
", "node_modules/tar/examples/extracter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar/examples/extracter.js");
    }
}
