<?php

/* node_modules/miller-rabin/bin/miller-rabin */
class __TwigTemplate_6d226aba2e8bb76d32caecfd3ed9e4bba534d6ff225aa7dbdab1372dbfecb3dd extends Twig_Template
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
        $__internal_e3ecc4a59cf519e101c5ce72f710e054793f8bb918512cdc283a9c45831685d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ecc4a59cf519e101c5ce72f710e054793f8bb918512cdc283a9c45831685d3->enter($__internal_e3ecc4a59cf519e101c5ce72f710e054793f8bb918512cdc283a9c45831685d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/miller-rabin/bin/miller-rabin"));

        // line 1
        echo "#!/usr/bin/env node
var bn = require('bn.js');
var fs = require('fs');
var mr = require('../').create();

var num = '';
if (process.argv[2]) {
  num += fs.readFileSync(process.argv[2]);
  start(num);
} else {
  process.stdin.on('data', function(chunk) {
    num += chunk.toString().replace(/[^0-9a-f]/gi, '');
  });
  process.stdin.once('end', function() {
    start(num);
  });
}

function start(text) {
  var num = new bn(text, 16);

  var divisor = mr.getDivisor(num);
  if (!divisor)
    process.exit(1);
  if (divisor.cmpn(1) === 0)
    process.exit(0);

  console.log(divisor.toString(16));
}
";
        
        $__internal_e3ecc4a59cf519e101c5ce72f710e054793f8bb918512cdc283a9c45831685d3->leave($__internal_e3ecc4a59cf519e101c5ce72f710e054793f8bb918512cdc283a9c45831685d3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/miller-rabin/bin/miller-rabin";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node
var bn = require('bn.js');
var fs = require('fs');
var mr = require('../').create();

var num = '';
if (process.argv[2]) {
  num += fs.readFileSync(process.argv[2]);
  start(num);
} else {
  process.stdin.on('data', function(chunk) {
    num += chunk.toString().replace(/[^0-9a-f]/gi, '');
  });
  process.stdin.once('end', function() {
    start(num);
  });
}

function start(text) {
  var num = new bn(text, 16);

  var divisor = mr.getDivisor(num);
  if (!divisor)
    process.exit(1);
  if (divisor.cmpn(1) === 0)
    process.exit(0);

  console.log(divisor.toString(16));
}
", "node_modules/miller-rabin/bin/miller-rabin", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/miller-rabin/bin/miller-rabin");
    }
}
