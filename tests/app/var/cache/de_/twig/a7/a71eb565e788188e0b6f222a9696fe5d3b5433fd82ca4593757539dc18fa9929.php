<?php

/* node_modules/require-main-filename/test.js */
class __TwigTemplate_2a6528a78e4b7ac134f59383be68f7aca7cd9a67d427d0ccc03e353b1c0b65cf extends Twig_Template
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
        $__internal_cd32fca02bc152226df31a4a609695268a7daa3d62fc8ba1bd3fb91be152bfac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd32fca02bc152226df31a4a609695268a7daa3d62fc8ba1bd3fb91be152bfac->enter($__internal_cd32fca02bc152226df31a4a609695268a7daa3d62fc8ba1bd3fb91be152bfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/require-main-filename/test.js"));

        // line 1
        echo "/* global describe, it */

var requireMainFilename = require('./')

require('tap').mochaGlobals()
require('chai').should()

describe('require-main-filename', function () {
  it('returns require.main.filename in normal circumstances', function () {
    requireMainFilename().should.match(/test\\.js/)
  })

  it('should use children[0].filename when running on iisnode', function () {
    var main = {
      filename: 'D:\\\\Program Files (x86)\\\\iisnode\\\\interceptor.js',
      children: [ {filename: 'D:\\\\home\\\\site\\\\wwwroot\\\\server.js'} ]
    }
    requireMainFilename({
      main: main
    }).should.match(/server\\.js/)
  })

  it('should not use children[0] if no children exist', function () {
    var main = {
      filename: 'D:\\\\Program Files (x86)\\\\iisnode\\\\interceptor.js',
      children: []
    }
    requireMainFilename({
      main: main
    }).should.match(/interceptor\\.js/)
  })

  it('should default to process.cwd() if require.main is undefined', function () {
    requireMainFilename({}).should.match(/require-main-filename/)
  })
})
";
        
        $__internal_cd32fca02bc152226df31a4a609695268a7daa3d62fc8ba1bd3fb91be152bfac->leave($__internal_cd32fca02bc152226df31a4a609695268a7daa3d62fc8ba1bd3fb91be152bfac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/require-main-filename/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* global describe, it */

var requireMainFilename = require('./')

require('tap').mochaGlobals()
require('chai').should()

describe('require-main-filename', function () {
  it('returns require.main.filename in normal circumstances', function () {
    requireMainFilename().should.match(/test\\.js/)
  })

  it('should use children[0].filename when running on iisnode', function () {
    var main = {
      filename: 'D:\\\\Program Files (x86)\\\\iisnode\\\\interceptor.js',
      children: [ {filename: 'D:\\\\home\\\\site\\\\wwwroot\\\\server.js'} ]
    }
    requireMainFilename({
      main: main
    }).should.match(/server\\.js/)
  })

  it('should not use children[0] if no children exist', function () {
    var main = {
      filename: 'D:\\\\Program Files (x86)\\\\iisnode\\\\interceptor.js',
      children: []
    }
    requireMainFilename({
      main: main
    }).should.match(/interceptor\\.js/)
  })

  it('should default to process.cwd() if require.main is undefined', function () {
    requireMainFilename({}).should.match(/require-main-filename/)
  })
})
", "node_modules/require-main-filename/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/require-main-filename/test.js");
    }
}
