<?php

/* node_modules/stream-http/test/browser/cookie.js */
class __TwigTemplate_f0ad30ff3e8c65ccb5347a5e535995acddeea7bb2565b33a6a1cf528939172eb extends Twig_Template
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
        $__internal_2d4c5b5fd8cf125671d9b5ced9532b2db5131b57c5e942fd3cd34fc0f0d06a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4c5b5fd8cf125671d9b5ced9532b2db5131b57c5e942fd3cd34fc0f0d06a04->enter($__internal_2d4c5b5fd8cf125671d9b5ced9532b2db5131b57c5e942fd3cd34fc0f0d06a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/cookie.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var test = require('tape')

var http = require('../..')

test('cookie', function (t) {
  var cookie = 'hello=world'
  window.document.cookie = cookie

  http.get({
    path: '/cookie',
    withCredentials: false
  }, function (res) {
    var buffers = []

    res.on('end', function () {
      t.ok(new Buffer(cookie).equals(Buffer.concat(buffers)), 'hello cookie echoed')
      t.end()
    })

    res.on('data', function (data) {
      buffers.push(data)
    })
  })
})
";
        
        $__internal_2d4c5b5fd8cf125671d9b5ced9532b2db5131b57c5e942fd3cd34fc0f0d06a04->leave($__internal_2d4c5b5fd8cf125671d9b5ced9532b2db5131b57c5e942fd3cd34fc0f0d06a04_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/cookie.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Buffer = require('buffer').Buffer
var test = require('tape')

var http = require('../..')

test('cookie', function (t) {
  var cookie = 'hello=world'
  window.document.cookie = cookie

  http.get({
    path: '/cookie',
    withCredentials: false
  }, function (res) {
    var buffers = []

    res.on('end', function () {
      t.ok(new Buffer(cookie).equals(Buffer.concat(buffers)), 'hello cookie echoed')
      t.end()
    })

    res.on('data', function (data) {
      buffers.push(data)
    })
  })
})
", "node_modules/stream-http/test/browser/cookie.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/cookie.js");
    }
}
