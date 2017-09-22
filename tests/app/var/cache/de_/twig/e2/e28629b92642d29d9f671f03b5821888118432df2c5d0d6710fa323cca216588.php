<?php

/* node_modules/uglify-to-browserify/test/index.js */
class __TwigTemplate_ff1cccd84f2d64a5a3977809f5d37f3c55b71e741db77f3f0d3831ffa7657aef extends Twig_Template
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
        $__internal_49e81945eafc685ca69870d61a45ef4e2d02929064f5a6fd4fa98ca789ad5f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e81945eafc685ca69870d61a45ef4e2d02929064f5a6fd4fa98ca789ad5f94->enter($__internal_49e81945eafc685ca69870d61a45ef4e2d02929064f5a6fd4fa98ca789ad5f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglify-to-browserify/test/index.js"));

        // line 1
        echo "var fs = require('fs')
var br = require('../')
var test = fs.readFileSync(require.resolve('uglify-js/test/run-tests.js'), 'utf8')
  .replace(/^#.*\\n/, '')

var transform = br(require.resolve('uglify-js'))
transform.pipe(fs.createWriteStream(__dirname + '/output.js'))
  .on('close', function () {
    Function('module,require', test)({
      filename: require.resolve('uglify-js/test/run-tests.js')
    },
      function (name) {
        if (name === '../tools/node') {
          return require('./output.js')
        } else if (/^[a-z]+\$/.test(name)) {
          return require(name)
        } else {
          throw new Error('I didn\\'t expect you to require ' + name)
        }
      })
  })
transform.end(fs.readFileSync(require.resolve('uglify-js'), 'utf8'))";
        
        $__internal_49e81945eafc685ca69870d61a45ef4e2d02929064f5a6fd4fa98ca789ad5f94->leave($__internal_49e81945eafc685ca69870d61a45ef4e2d02929064f5a6fd4fa98ca789ad5f94_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglify-to-browserify/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var fs = require('fs')
var br = require('../')
var test = fs.readFileSync(require.resolve('uglify-js/test/run-tests.js'), 'utf8')
  .replace(/^#.*\\n/, '')

var transform = br(require.resolve('uglify-js'))
transform.pipe(fs.createWriteStream(__dirname + '/output.js'))
  .on('close', function () {
    Function('module,require', test)({
      filename: require.resolve('uglify-js/test/run-tests.js')
    },
      function (name) {
        if (name === '../tools/node') {
          return require('./output.js')
        } else if (/^[a-z]+\$/.test(name)) {
          return require(name)
        } else {
          throw new Error('I didn\\'t expect you to require ' + name)
        }
      })
  })
transform.end(fs.readFileSync(require.resolve('uglify-js'), 'utf8'))", "node_modules/uglify-to-browserify/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglify-to-browserify/test/index.js");
    }
}
