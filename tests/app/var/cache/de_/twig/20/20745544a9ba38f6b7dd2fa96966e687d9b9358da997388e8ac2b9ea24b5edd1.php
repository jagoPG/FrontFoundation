<?php

/* node_modules/rc/test/test.js */
class __TwigTemplate_6c78cdbc31692150996bff264643c97b394afb18fa9f9b1b8f5dc2778860a073 extends Twig_Template
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
        $__internal_5725d54b5b06e1e1aedc2a19f5fa7df3d8cffec4657a90e90fab44323a840120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5725d54b5b06e1e1aedc2a19f5fa7df3d8cffec4657a90e90fab44323a840120->enter($__internal_5725d54b5b06e1e1aedc2a19f5fa7df3d8cffec4657a90e90fab44323a840120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/rc/test/test.js"));

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
        
        $__internal_5725d54b5b06e1e1aedc2a19f5fa7df3d8cffec4657a90e90fab44323a840120->leave($__internal_5725d54b5b06e1e1aedc2a19f5fa7df3d8cffec4657a90e90fab44323a840120_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/rc/test/test.js";
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
", "node_modules/rc/test/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/rc/test/test.js");
    }
}
