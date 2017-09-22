<?php

/* node_modules/buffer/bin/test.js */
class __TwigTemplate_c8363e1860773f3f9a265af0c04bbdca1fafc1216207ef2afedfe1e99e654b87 extends Twig_Template
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
        $__internal_901f1199d7fa459c3adaaf8d5b2459f6bd4505dbeda44b0729311e48a0bab60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901f1199d7fa459c3adaaf8d5b2459f6bd4505dbeda44b0729311e48a0bab60e->enter($__internal_901f1199d7fa459c3adaaf8d5b2459f6bd4505dbeda44b0729311e48a0bab60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/bin/test.js"));

        // line 1
        echo "#!/usr/bin/env node

var cp = require('child_process')
var fs = require('fs')
var path = require('path')

var shouldRunBrowserTests = !process.env.TRAVIS_PULL_REQUEST ||
  process.env.TRAVIS_PULL_REQUEST === 'false'

var node = cp.spawn('npm', ['run', 'test-node'], { stdio: 'inherit' })
node.on('close', function (code) {
  if (code === 0 && shouldRunBrowserTests) {
    runBrowserTests()
  } else {
    process.exit(code)
  }
})

function runBrowserTests () {
  var zuulYmlPath = path.join(__dirname, '..', '.zuul.yml')

  writeES5ZuulYml()
  cp.spawn('npm', ['run', 'test-browser-es5'], { stdio: 'inherit' })
    .on('close', function (code) {
      if (code !== 0) process.exit(code)
      writeES6ZuulYml()
      cp.spawn('npm', ['run', 'test-browser-es6'], { stdio: 'inherit' })
        .on('close', function (code) {
          process.exit(code)
        })
    })

  function writeES5ZuulYml () {
    fs.writeFileSync(zuulYmlPath, fs.readFileSync(path.join(__dirname, 'zuul-es5.yml')))
  }

  function writeES6ZuulYml () {
    fs.writeFileSync(zuulYmlPath, fs.readFileSync(path.join(__dirname, 'zuul-es6.yml')))
  }
}

";
        
        $__internal_901f1199d7fa459c3adaaf8d5b2459f6bd4505dbeda44b0729311e48a0bab60e->leave($__internal_901f1199d7fa459c3adaaf8d5b2459f6bd4505dbeda44b0729311e48a0bab60e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/bin/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env node

var cp = require('child_process')
var fs = require('fs')
var path = require('path')

var shouldRunBrowserTests = !process.env.TRAVIS_PULL_REQUEST ||
  process.env.TRAVIS_PULL_REQUEST === 'false'

var node = cp.spawn('npm', ['run', 'test-node'], { stdio: 'inherit' })
node.on('close', function (code) {
  if (code === 0 && shouldRunBrowserTests) {
    runBrowserTests()
  } else {
    process.exit(code)
  }
})

function runBrowserTests () {
  var zuulYmlPath = path.join(__dirname, '..', '.zuul.yml')

  writeES5ZuulYml()
  cp.spawn('npm', ['run', 'test-browser-es5'], { stdio: 'inherit' })
    .on('close', function (code) {
      if (code !== 0) process.exit(code)
      writeES6ZuulYml()
      cp.spawn('npm', ['run', 'test-browser-es6'], { stdio: 'inherit' })
        .on('close', function (code) {
          process.exit(code)
        })
    })

  function writeES5ZuulYml () {
    fs.writeFileSync(zuulYmlPath, fs.readFileSync(path.join(__dirname, 'zuul-es5.yml')))
  }

  function writeES6ZuulYml () {
    fs.writeFileSync(zuulYmlPath, fs.readFileSync(path.join(__dirname, 'zuul-es6.yml')))
  }
}

", "node_modules/buffer/bin/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/bin/test.js");
    }
}
