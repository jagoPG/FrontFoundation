<?php

/* node_modules/sha.js/bin.js */
class __TwigTemplate_0ff8b320d540d1f47859303aca3a046cc07d32355bedb1b46d766286aa609fd5 extends Twig_Template
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
        $__internal_fcc171d485824e26b7ca6e0942e04c86f29c2bd9266cf5bf5a70c6439fb1d6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc171d485824e26b7ca6e0942e04c86f29c2bd9266cf5bf5a70c6439fb1d6d3->enter($__internal_fcc171d485824e26b7ca6e0942e04c86f29c2bd9266cf5bf5a70c6439fb1d6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sha.js/bin.js"));

        // line 1
        echo "#! /usr/bin/env node

var createHash = require('./browserify')
var argv = process.argv.slice(2)

function pipe (algorithm, s) {
  var start = Date.now()
  var hash = createHash(algorithm || 'sha1')

  s.on('data', function (data) {
    hash.update(data)
  })

  s.on('end', function () {
    if (process.env.DEBUG) {
      return console.log(hash.digest('hex'), Date.now() - start)
    }

    console.log(hash.digest('hex'))
  })
}

function usage () {
  console.error('sha.js [algorithm=sha1] [filename] # hash filename with algorithm')
  console.error('input | sha.js [algorithm=sha1]    # hash stdin with algorithm')
  console.error('sha.js --help                      # display this message')
}

if (!process.stdin.isTTY) {
  pipe(argv[0], process.stdin)

} else if (argv.length) {
  if (/--help|-h/.test(argv[0])) {
    usage()

  } else {
    var filename = argv.pop()
    var algorithm = argv.pop()
    pipe(algorithm, require('fs').createReadStream(filename))
  }
} else {
  usage()
}
";
        
        $__internal_fcc171d485824e26b7ca6e0942e04c86f29c2bd9266cf5bf5a70c6439fb1d6d3->leave($__internal_fcc171d485824e26b7ca6e0942e04c86f29c2bd9266cf5bf5a70c6439fb1d6d3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sha.js/bin.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#! /usr/bin/env node

var createHash = require('./browserify')
var argv = process.argv.slice(2)

function pipe (algorithm, s) {
  var start = Date.now()
  var hash = createHash(algorithm || 'sha1')

  s.on('data', function (data) {
    hash.update(data)
  })

  s.on('end', function () {
    if (process.env.DEBUG) {
      return console.log(hash.digest('hex'), Date.now() - start)
    }

    console.log(hash.digest('hex'))
  })
}

function usage () {
  console.error('sha.js [algorithm=sha1] [filename] # hash filename with algorithm')
  console.error('input | sha.js [algorithm=sha1]    # hash stdin with algorithm')
  console.error('sha.js --help                      # display this message')
}

if (!process.stdin.isTTY) {
  pipe(argv[0], process.stdin)

} else if (argv.length) {
  if (/--help|-h/.test(argv[0])) {
    usage()

  } else {
    var filename = argv.pop()
    var algorithm = argv.pop()
    pipe(algorithm, require('fs').createReadStream(filename))
  }
} else {
  usage()
}
", "node_modules/sha.js/bin.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sha.js/bin.js");
    }
}
