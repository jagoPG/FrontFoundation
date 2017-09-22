<?php

/* node_modules/through/test/async.js */
class __TwigTemplate_b6dd18076ee14191b54f4d6d9e85f5a6dbd361c2e19eaa9fcf818695f0c6ebe6 extends Twig_Template
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
        $__internal_464a7ff70b1ee01c90006fe3700f487709095a8fb8628365ff4573b1b3f1a52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464a7ff70b1ee01c90006fe3700f487709095a8fb8628365ff4573b1b3f1a52b->enter($__internal_464a7ff70b1ee01c90006fe3700f487709095a8fb8628365ff4573b1b3f1a52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/through/test/async.js"));

        // line 1
        echo "var from = require('from')
var through = require('../')

var tape = require('tape')

tape('simple async example', function (t) {
 
  var n = 0, expected = [1,2,3,4,5], actual = []
  from(expected)
  .pipe(through(function(data) {
    this.pause()
    n ++
    setTimeout(function(){
      console.log('pushing data', data)
      this.push(data)
      this.resume()
    }.bind(this), 300)
  })).pipe(through(function(data) {
    console.log('pushing data second time', data);
    this.push(data)
  })).on('data', function (d) {
    actual.push(d)
  }).on('end', function() {
    t.deepEqual(actual, expected)
    t.end()
  })

})
";
        
        $__internal_464a7ff70b1ee01c90006fe3700f487709095a8fb8628365ff4573b1b3f1a52b->leave($__internal_464a7ff70b1ee01c90006fe3700f487709095a8fb8628365ff4573b1b3f1a52b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/through/test/async.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var from = require('from')
var through = require('../')

var tape = require('tape')

tape('simple async example', function (t) {
 
  var n = 0, expected = [1,2,3,4,5], actual = []
  from(expected)
  .pipe(through(function(data) {
    this.pause()
    n ++
    setTimeout(function(){
      console.log('pushing data', data)
      this.push(data)
      this.resume()
    }.bind(this), 300)
  })).pipe(through(function(data) {
    console.log('pushing data second time', data);
    this.push(data)
  })).on('data', function (d) {
    actual.push(d)
  }).on('end', function() {
    t.deepEqual(actual, expected)
    t.end()
  })

})
", "node_modules/through/test/async.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/through/test/async.js");
    }
}
