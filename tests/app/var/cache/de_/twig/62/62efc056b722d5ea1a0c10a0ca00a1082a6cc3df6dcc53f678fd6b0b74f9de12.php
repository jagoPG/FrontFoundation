<?php

/* node_modules/fsevents/node_modules/are-we-there-yet/CHANGES.md~ */
class __TwigTemplate_a32264729d331d0550257c08d7c5db4df823c95953853f59382ade89c120858d extends Twig_Template
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
        $__internal_f47cf0ff0e08d5e6e080fd4654de2a119bbae077781f6bc40b12156116ffcc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47cf0ff0e08d5e6e080fd4654de2a119bbae077781f6bc40b12156116ffcc3d->enter($__internal_f47cf0ff0e08d5e6e080fd4654de2a119bbae077781f6bc40b12156116ffcc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/are-we-there-yet/CHANGES.md~"));

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
        
        $__internal_f47cf0ff0e08d5e6e080fd4654de2a119bbae077781f6bc40b12156116ffcc3d->leave($__internal_f47cf0ff0e08d5e6e080fd4654de2a119bbae077781f6bc40b12156116ffcc3d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/are-we-there-yet/CHANGES.md~";
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
", "node_modules/fsevents/node_modules/are-we-there-yet/CHANGES.md~", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/are-we-there-yet/CHANGES.md~");
    }
}
