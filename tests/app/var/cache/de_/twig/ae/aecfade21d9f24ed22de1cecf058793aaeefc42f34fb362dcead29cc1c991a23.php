<?php

/* node_modules/are-we-there-yet/CHANGES.md~ */
class __TwigTemplate_05bd32736501cf30230f89e0f1b609d945cfbcba16b9a197e9b8b7ec21b810f0 extends Twig_Template
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
        $__internal_70456bf98cfd4c088338775dbdddb55b7f1a4f9674c8763769fe5eb602837446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70456bf98cfd4c088338775dbdddb55b7f1a4f9674c8763769fe5eb602837446->enter($__internal_70456bf98cfd4c088338775dbdddb55b7f1a4f9674c8763769fe5eb602837446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/are-we-there-yet/CHANGES.md~"));

        // line 1
        echo "Hi, figured we could actually use a changelog now:

## 1.1.3 2017-04-21

* Improve documentation and limit files included in the distribution.

## 1.1.2 2016-03-15

* Add tracker group cycle detection and tests for it

## 1.1.1 2016-01-29

* Fix a typo in stream completion tracker

## 1.1.0 2016-01-29

* Rewrote completion percent computation to be low impact– no more walking a
  tree of completion groups every time we need this info.  Previously, with
  medium sized tree of completion groups, even a relatively modest number of
  calls to the top level `completed()` method would result in absurd numbers
  of calls overall as it walked down the tree. We now, instead, keep track as
  we bubble up changes, so the computation is limited to when data changes and
  to the depth of that one branch, instead of _every_ node. (Plus, we were already
  incurring _this_ cost, since we already bubbled out changes.)
* Moved different tracker types out to their own files.
* Made tests test for TOO MANY events too.
* Standarized the source code formatting
";
        
        $__internal_70456bf98cfd4c088338775dbdddb55b7f1a4f9674c8763769fe5eb602837446->leave($__internal_70456bf98cfd4c088338775dbdddb55b7f1a4f9674c8763769fe5eb602837446_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/are-we-there-yet/CHANGES.md~";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hi, figured we could actually use a changelog now:

## 1.1.3 2017-04-21

* Improve documentation and limit files included in the distribution.

## 1.1.2 2016-03-15

* Add tracker group cycle detection and tests for it

## 1.1.1 2016-01-29

* Fix a typo in stream completion tracker

## 1.1.0 2016-01-29

* Rewrote completion percent computation to be low impact– no more walking a
  tree of completion groups every time we need this info.  Previously, with
  medium sized tree of completion groups, even a relatively modest number of
  calls to the top level `completed()` method would result in absurd numbers
  of calls overall as it walked down the tree. We now, instead, keep track as
  we bubble up changes, so the computation is limited to when data changes and
  to the depth of that one branch, instead of _every_ node. (Plus, we were already
  incurring _this_ cost, since we already bubbled out changes.)
* Moved different tracker types out to their own files.
* Made tests test for TOO MANY events too.
* Standarized the source code formatting
", "node_modules/are-we-there-yet/CHANGES.md~", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/are-we-there-yet/CHANGES.md~");
    }
}
