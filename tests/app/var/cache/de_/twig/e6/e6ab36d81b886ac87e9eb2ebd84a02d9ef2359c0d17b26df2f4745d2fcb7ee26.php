<?php

/* node_modules/fsevents/node_modules/rc/test/test.js */
class __TwigTemplate_3c9ceca62b101f8c5f7a3beea69203080a8e72b594084aeaee35ee495ef09d5d extends Twig_Template
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
        $__internal_3d09a1c3ce0f0e54aa2cdb440da77df5fd43d7a2faa7b8ebfea8a7dae3021eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d09a1c3ce0f0e54aa2cdb440da77df5fd43d7a2faa7b8ebfea8a7dae3021eae->enter($__internal_3d09a1c3ce0f0e54aa2cdb440da77df5fd43d7a2faa7b8ebfea8a7dae3021eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/test/test.js"));

        // line 1
        echo "
var n = 'rc'+Math.random()
var assert = require('assert')

process.env[n+'_envOption'] = 42

var config = require('../')(n, {
  option: true
})

console.log(config)

assert.equal(config.option, true)
assert.equal(config.envOption, 42)

var customArgv = require('../')(n, {
  option: true
}, { // nopt-like argv
  option: false,
  envOption: 24,
  argv: {
    remain: [],
    cooked: ['--no-option', '--envOption', '24'],
    original: ['--no-option', '--envOption=24']
  }
})

console.log(customArgv)

assert.equal(customArgv.option, false)
assert.equal(customArgv.envOption, 24)

var fs = require('fs')
var path = require('path')
var jsonrc = path.resolve('.' + n + 'rc');

fs.writeFileSync(jsonrc, [
  '{',
    '// json overrides default',
    '\"option\": false,',
    '/* env overrides json */',
    '\"envOption\": 24',
  '}'
].join('\\n'));

var commentedJSON = require('../')(n, {
  option: true
})

fs.unlinkSync(jsonrc);

console.log(commentedJSON)

assert.equal(commentedJSON.option, false)
assert.equal(commentedJSON.envOption, 42)

assert.equal(commentedJSON.config, jsonrc)
assert.equal(commentedJSON.configs.length, 1)
assert.equal(commentedJSON.configs[0], jsonrc)
";
        
        $__internal_3d09a1c3ce0f0e54aa2cdb440da77df5fd43d7a2faa7b8ebfea8a7dae3021eae->leave($__internal_3d09a1c3ce0f0e54aa2cdb440da77df5fd43d7a2faa7b8ebfea8a7dae3021eae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/test/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
var n = 'rc'+Math.random()
var assert = require('assert')

process.env[n+'_envOption'] = 42

var config = require('../')(n, {
  option: true
})

console.log(config)

assert.equal(config.option, true)
assert.equal(config.envOption, 42)

var customArgv = require('../')(n, {
  option: true
}, { // nopt-like argv
  option: false,
  envOption: 24,
  argv: {
    remain: [],
    cooked: ['--no-option', '--envOption', '24'],
    original: ['--no-option', '--envOption=24']
  }
})

console.log(customArgv)

assert.equal(customArgv.option, false)
assert.equal(customArgv.envOption, 24)

var fs = require('fs')
var path = require('path')
var jsonrc = path.resolve('.' + n + 'rc');

fs.writeFileSync(jsonrc, [
  '{',
    '// json overrides default',
    '\"option\": false,',
    '/* env overrides json */',
    '\"envOption\": 24',
  '}'
].join('\\n'));

var commentedJSON = require('../')(n, {
  option: true
})

fs.unlinkSync(jsonrc);

console.log(commentedJSON)

assert.equal(commentedJSON.option, false)
assert.equal(commentedJSON.envOption, 42)

assert.equal(commentedJSON.config, jsonrc)
assert.equal(commentedJSON.configs.length, 1)
assert.equal(commentedJSON.configs[0], jsonrc)
", "node_modules/fsevents/node_modules/rc/test/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/test/test.js");
    }
}
