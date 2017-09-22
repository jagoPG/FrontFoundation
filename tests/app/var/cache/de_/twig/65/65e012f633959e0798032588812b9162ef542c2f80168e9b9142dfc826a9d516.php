<?php

/* node_modules/fsevents/node_modules/ajv/scripts/bundle.js */
class __TwigTemplate_917a643bc5c0806425db4b64400fb7856051d193b80a23c98d16772e90bbd5a4 extends Twig_Template
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
        $__internal_ea842ff7328a05f3337fc9dfdf1391238f83a0b5601dcc21135161248dbd2341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea842ff7328a05f3337fc9dfdf1391238f83a0b5601dcc21135161248dbd2341->enter($__internal_ea842ff7328a05f3337fc9dfdf1391238f83a0b5601dcc21135161248dbd2341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/scripts/bundle.js"));

        // line 1
        echo "'use strict';

var fs = require('fs')
  , path = require('path')
  , browserify = require('browserify')
  , uglify = require('uglify-js');

var pkg = process.argv[2]
  , standalone = process.argv[3]
  , compress = process.argv[4];

var packageDir = path.join(__dirname, '..');
if (pkg != '.') packageDir = path.join(packageDir, 'node_modules', pkg);

var json = require(path.join(packageDir, 'package.json'));

var distDir = path.join(__dirname, '..', 'dist');
if (!fs.existsSync(distDir)) fs.mkdirSync(distDir);

var bOpts = {};
if (standalone) bOpts.standalone = standalone;

browserify(bOpts)
.require(path.join(packageDir, json.main), {expose: json.name})
.bundle(function (err, buf) {
  if (err) {
    console.error('browserify error:', err);
    process.exit(1);
  }

  var outputFile = path.join(distDir, json.name);
  var outputBundle = outputFile + '.bundle.js';
  fs.writeFileSync(outputBundle, buf);
  var uglifyOpts = {
    warnings: true,
    compress: {},
    output: {
      preamble: '/* ' + json.name + ' ' + json.version + ': ' + json.description + ' */'
    }
  };
  if (compress) {
    var compressOpts = compress.split(',');
    for (var i=0; i<compressOpts.length; ++i) {
      var pair = compressOpts[i].split('=');
      uglifyOpts.compress[pair[0]] = pair.length < 1 || pair[1] != 'false';
    }
  }
  if (standalone) uglifyOpts.outSourceMap = json.name + '.min.js.map';

  var result = uglify.minify(outputBundle, uglifyOpts);
  fs.writeFileSync(outputFile + '.min.js', result.code);
  if (result.map) fs.writeFileSync(outputFile + '.min.js.map', result.map);
  if (!standalone) fs.unlinkSync(outputBundle);
});
";
        
        $__internal_ea842ff7328a05f3337fc9dfdf1391238f83a0b5601dcc21135161248dbd2341->leave($__internal_ea842ff7328a05f3337fc9dfdf1391238f83a0b5601dcc21135161248dbd2341_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/scripts/bundle.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var fs = require('fs')
  , path = require('path')
  , browserify = require('browserify')
  , uglify = require('uglify-js');

var pkg = process.argv[2]
  , standalone = process.argv[3]
  , compress = process.argv[4];

var packageDir = path.join(__dirname, '..');
if (pkg != '.') packageDir = path.join(packageDir, 'node_modules', pkg);

var json = require(path.join(packageDir, 'package.json'));

var distDir = path.join(__dirname, '..', 'dist');
if (!fs.existsSync(distDir)) fs.mkdirSync(distDir);

var bOpts = {};
if (standalone) bOpts.standalone = standalone;

browserify(bOpts)
.require(path.join(packageDir, json.main), {expose: json.name})
.bundle(function (err, buf) {
  if (err) {
    console.error('browserify error:', err);
    process.exit(1);
  }

  var outputFile = path.join(distDir, json.name);
  var outputBundle = outputFile + '.bundle.js';
  fs.writeFileSync(outputBundle, buf);
  var uglifyOpts = {
    warnings: true,
    compress: {},
    output: {
      preamble: '/* ' + json.name + ' ' + json.version + ': ' + json.description + ' */'
    }
  };
  if (compress) {
    var compressOpts = compress.split(',');
    for (var i=0; i<compressOpts.length; ++i) {
      var pair = compressOpts[i].split('=');
      uglifyOpts.compress[pair[0]] = pair.length < 1 || pair[1] != 'false';
    }
  }
  if (standalone) uglifyOpts.outSourceMap = json.name + '.min.js.map';

  var result = uglify.minify(outputBundle, uglifyOpts);
  fs.writeFileSync(outputFile + '.min.js', result.code);
  if (result.map) fs.writeFileSync(outputFile + '.min.js.map', result.map);
  if (!standalone) fs.unlinkSync(outputBundle);
});
", "node_modules/fsevents/node_modules/ajv/scripts/bundle.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/scripts/bundle.js");
    }
}
