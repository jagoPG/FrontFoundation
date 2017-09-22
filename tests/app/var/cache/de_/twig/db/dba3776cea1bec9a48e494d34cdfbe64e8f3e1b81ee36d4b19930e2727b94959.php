<?php

/* node_modules/fsevents/node_modules/performance-now/test/performance-now.coffee */
class __TwigTemplate_3f2f2699535d507967820f7f0b9f2f59e909e3dd1afd7e273a2c9dbfabafc193 extends Twig_Template
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
        $__internal_307b68caf713c8340603a6eeb6aeb2d923418b85290954c928888576b2b724ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307b68caf713c8340603a6eeb6aeb2d923418b85290954c928888576b2b724ec->enter($__internal_307b68caf713c8340603a6eeb6aeb2d923418b85290954c928888576b2b724ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/performance-now/test/performance-now.coffee"));

        // line 1
        echo "assert = require \"assert\"

delay = (ms, fn) -> setTimeout fn, ms
now = undefined
describe \"now\", ->
  it \"initially gives a near zero (< 20 ms) time \", ->
    now = require \"../\"
    assert now() < 20
    
  it \"gives a positive time\", ->
    assert now() > 0

  it \"two subsequent calls return an increasing number\", ->
    a = now()
    b = now()      
    assert now() < now()
    
  it \"has less than 10 microseconds overhead\", ->
    Math.abs(now() - now()) < 0.010
  
  it \"can do 1,000,000 calls really quickly\", ->
    now() for i in [0...1000000]
    
  it \"shows that at least 990 ms has passed after a timeout of 1 second\", (done) ->
    a = now()
    delay 1000, ->
      b = now()
      diff = b - a
      return done new Error \"Diff (#{diff}) lower than 990.\" if diff < 990
      return done null

  it \"shows that not more than 1020 ms has passed after a timeout of 1 second\", (done) ->
    a = now()
    delay 1000, ->
      b = now()
      diff = b - a
      return done new Error \"Diff (#{diff}) higher than 1020.\" if diff > 1020
      return done null        ";
        
        $__internal_307b68caf713c8340603a6eeb6aeb2d923418b85290954c928888576b2b724ec->leave($__internal_307b68caf713c8340603a6eeb6aeb2d923418b85290954c928888576b2b724ec_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/performance-now/test/performance-now.coffee";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("assert = require \"assert\"

delay = (ms, fn) -> setTimeout fn, ms
now = undefined
describe \"now\", ->
  it \"initially gives a near zero (< 20 ms) time \", ->
    now = require \"../\"
    assert now() < 20
    
  it \"gives a positive time\", ->
    assert now() > 0

  it \"two subsequent calls return an increasing number\", ->
    a = now()
    b = now()      
    assert now() < now()
    
  it \"has less than 10 microseconds overhead\", ->
    Math.abs(now() - now()) < 0.010
  
  it \"can do 1,000,000 calls really quickly\", ->
    now() for i in [0...1000000]
    
  it \"shows that at least 990 ms has passed after a timeout of 1 second\", (done) ->
    a = now()
    delay 1000, ->
      b = now()
      diff = b - a
      return done new Error \"Diff (#{diff}) lower than 990.\" if diff < 990
      return done null

  it \"shows that not more than 1020 ms has passed after a timeout of 1 second\", (done) ->
    a = now()
    delay 1000, ->
      b = now()
      diff = b - a
      return done new Error \"Diff (#{diff}) higher than 1020.\" if diff > 1020
      return done null        ", "node_modules/fsevents/node_modules/performance-now/test/performance-now.coffee", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/performance-now/test/performance-now.coffee");
    }
}
