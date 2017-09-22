<?php

/* node_modules/uglify-to-browserify/index.js */
class __TwigTemplate_feb7c09cb775b9a81078116cd8835c0bd88b345614b21a91ce696bb08d200a71 extends Twig_Template
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
        $__internal_0021c665cb1da93bfa679cb412678147a1bf563f0fe60486d55eef2722755ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0021c665cb1da93bfa679cb412678147a1bf563f0fe60486d55eef2722755ea2->enter($__internal_0021c665cb1da93bfa679cb412678147a1bf563f0fe60486d55eef2722755ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uglify-to-browserify/index.js"));

        // line 1
        echo "'use strict'

var fs = require('fs')
var PassThrough = require('stream').PassThrough
var Transform = require('stream').Transform

if (typeof Transform === 'undefined') {
  throw new Error('UglifyJS only supports browserify when using node >= 0.10.x')
}

var cache = {}
module.exports = transform
function transform(file) {
  if (!/tools\\/node\\.js\$/.test(file.replace(/\\\\/g,'/'))) return new PassThrough();
  if (cache[file]) return makeStream(cache[file])
  var uglify = require(file)
  var src = 'var sys = require(\"util\");\\nvar MOZ_SourceMap = require(\"source-map\");\\nvar UglifyJS = exports;\\n' + uglify.FILES.map(function (path) { return fs.readFileSync(path, 'utf8') }).join('\\n')

  var ast = uglify.parse(src)
  ast.figure_out_scope()

  var variables = ast.variables
    .map(function (node, name) {
      return name
    })

  src += '\\n\\n' + variables.map(function (v) { return 'exports.' + v + ' = ' + v + ';' }).join('\\n') + '\\n\\n'

  src += 'exports.AST_Node.warn_function = function (txt) { if (typeof console != \"undefined\" && typeof console.warn === \"function\") console.warn(txt) }\\n\\n'

  src += 'exports.minify = ' + uglify.minify.toString() + ';\\n\\n'
  src += 'exports.describe_ast = ' + uglify.describe_ast.toString() + ';'

  // TODO: remove once https://github.com/substack/node-browserify/issues/631 is resolved
  src = src.replace(/\"for\"/g, '\"fo\" + \"r\"')

  cache[file] = src
  return makeStream(src);
}

function makeStream(src) {
  var res = new Transform();
  res._transform = function (chunk, encoding, callback) { callback() }
  res._flush = function (callback) {
    res.push(src)
    callback()
  }
  return res;
}
";
        
        $__internal_0021c665cb1da93bfa679cb412678147a1bf563f0fe60486d55eef2722755ea2->leave($__internal_0021c665cb1da93bfa679cb412678147a1bf563f0fe60486d55eef2722755ea2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uglify-to-browserify/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'

var fs = require('fs')
var PassThrough = require('stream').PassThrough
var Transform = require('stream').Transform

if (typeof Transform === 'undefined') {
  throw new Error('UglifyJS only supports browserify when using node >= 0.10.x')
}

var cache = {}
module.exports = transform
function transform(file) {
  if (!/tools\\/node\\.js\$/.test(file.replace(/\\\\/g,'/'))) return new PassThrough();
  if (cache[file]) return makeStream(cache[file])
  var uglify = require(file)
  var src = 'var sys = require(\"util\");\\nvar MOZ_SourceMap = require(\"source-map\");\\nvar UglifyJS = exports;\\n' + uglify.FILES.map(function (path) { return fs.readFileSync(path, 'utf8') }).join('\\n')

  var ast = uglify.parse(src)
  ast.figure_out_scope()

  var variables = ast.variables
    .map(function (node, name) {
      return name
    })

  src += '\\n\\n' + variables.map(function (v) { return 'exports.' + v + ' = ' + v + ';' }).join('\\n') + '\\n\\n'

  src += 'exports.AST_Node.warn_function = function (txt) { if (typeof console != \"undefined\" && typeof console.warn === \"function\") console.warn(txt) }\\n\\n'

  src += 'exports.minify = ' + uglify.minify.toString() + ';\\n\\n'
  src += 'exports.describe_ast = ' + uglify.describe_ast.toString() + ';'

  // TODO: remove once https://github.com/substack/node-browserify/issues/631 is resolved
  src = src.replace(/\"for\"/g, '\"fo\" + \"r\"')

  cache[file] = src
  return makeStream(src);
}

function makeStream(src) {
  var res = new Transform();
  res._transform = function (chunk, encoding, callback) { callback() }
  res._flush = function (callback) {
    res.push(src)
    callback()
  }
  return res;
}
", "node_modules/uglify-to-browserify/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uglify-to-browserify/index.js");
    }
}
