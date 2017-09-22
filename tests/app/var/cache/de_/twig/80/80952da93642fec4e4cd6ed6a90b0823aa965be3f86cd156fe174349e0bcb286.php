<?php

/* node_modules/http-errors/HISTORY.md */
class __TwigTemplate_ca4bbef5454aed2991dd00cfa79e4084b6592a49fe79ded0700fb9892f880a75 extends Twig_Template
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
        $__internal_eca7b2f68619db3e0916df1fdec04ae72ac1613a169f9e7c1d33c95419630663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca7b2f68619db3e0916df1fdec04ae72ac1613a169f9e7c1d33c95419630663->enter($__internal_eca7b2f68619db3e0916df1fdec04ae72ac1613a169f9e7c1d33c95419630663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/http-errors/HISTORY.md"));

        // line 1
        echo "2017-08-04 / 1.6.2
==================

  * deps: depd@1.1.1
    - Remove unnecessary `Buffer` loading

2017-02-20 / 1.6.1
==================

  * deps: setprototypeof@1.0.3
    - Fix shim for old browsers

2017-02-14 / 1.6.0
==================

  * Accept custom 4xx and 5xx status codes in factory
  * Add deprecation message to `\"I'mateapot\"` export
  * Deprecate passing status code as anything except first argument in factory
  * Deprecate using non-error status codes
  * Make `message` property enumerable for `HttpError`s

2016-11-16 / 1.5.1
==================

  * deps: inherits@2.0.3
    - Fix issue loading in browser
  * deps: setprototypeof@1.0.2
  * deps: statuses@'>= 1.3.1 < 2'

2016-05-18 / 1.5.0
==================

  * Support new code `421 Misdirected Request`
  * Use `setprototypeof` module to replace `__proto__` setting
  * deps: statuses@'>= 1.3.0 < 2'
    - Add `421 Misdirected Request`
    - perf: enable strict mode
  * perf: enable strict mode

2016-01-28 / 1.4.0
==================

  * Add `HttpError` export, for `err instanceof createError.HttpError`
  * deps: inherits@2.0.1
  * deps: statuses@'>= 1.2.1 < 2'
    - Fix message for status 451
    - Remove incorrect nginx status code

2015-02-02 / 1.3.1
==================

  * Fix regression where status can be overwritten in `createError` `props`

2015-02-01 / 1.3.0
==================

  * Construct errors using defined constructors from `createError`
  * Fix error names that are not identifiers
    - `createError[\"I'mateapot\"]` is now `createError.ImATeapot`
  * Set a meaningful `name` property on constructed errors

2014-12-09 / 1.2.8
==================

  * Fix stack trace from exported function
  * Remove `arguments.callee` usage

2014-10-14 / 1.2.7
==================

  * Remove duplicate line

2014-10-02 / 1.2.6
==================

  * Fix `expose` to be `true` for `ClientError` constructor

2014-09-28 / 1.2.5
==================

  * deps: statuses@1

2014-09-21 / 1.2.4
==================

  * Fix dependency version to work with old `npm`s

2014-09-21 / 1.2.3
==================

  * deps: statuses@~1.1.0

2014-09-21 / 1.2.2
==================

  * Fix publish error

2014-09-21 / 1.2.1
==================

  * Support Node.js 0.6
  * Use `inherits` instead of `util`

2014-09-09 / 1.2.0
==================

  * Fix the way inheriting functions
  * Support `expose` being provided in properties argument

2014-09-08 / 1.1.0
==================

  * Default status to 500
  * Support provided `error` to extend

2014-09-08 / 1.0.1
==================

  * Fix accepting string message

2014-09-08 / 1.0.0
==================

  * Initial release
";
        
        $__internal_eca7b2f68619db3e0916df1fdec04ae72ac1613a169f9e7c1d33c95419630663->leave($__internal_eca7b2f68619db3e0916df1fdec04ae72ac1613a169f9e7c1d33c95419630663_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/http-errors/HISTORY.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("2017-08-04 / 1.6.2
==================

  * deps: depd@1.1.1
    - Remove unnecessary `Buffer` loading

2017-02-20 / 1.6.1
==================

  * deps: setprototypeof@1.0.3
    - Fix shim for old browsers

2017-02-14 / 1.6.0
==================

  * Accept custom 4xx and 5xx status codes in factory
  * Add deprecation message to `\"I'mateapot\"` export
  * Deprecate passing status code as anything except first argument in factory
  * Deprecate using non-error status codes
  * Make `message` property enumerable for `HttpError`s

2016-11-16 / 1.5.1
==================

  * deps: inherits@2.0.3
    - Fix issue loading in browser
  * deps: setprototypeof@1.0.2
  * deps: statuses@'>= 1.3.1 < 2'

2016-05-18 / 1.5.0
==================

  * Support new code `421 Misdirected Request`
  * Use `setprototypeof` module to replace `__proto__` setting
  * deps: statuses@'>= 1.3.0 < 2'
    - Add `421 Misdirected Request`
    - perf: enable strict mode
  * perf: enable strict mode

2016-01-28 / 1.4.0
==================

  * Add `HttpError` export, for `err instanceof createError.HttpError`
  * deps: inherits@2.0.1
  * deps: statuses@'>= 1.2.1 < 2'
    - Fix message for status 451
    - Remove incorrect nginx status code

2015-02-02 / 1.3.1
==================

  * Fix regression where status can be overwritten in `createError` `props`

2015-02-01 / 1.3.0
==================

  * Construct errors using defined constructors from `createError`
  * Fix error names that are not identifiers
    - `createError[\"I'mateapot\"]` is now `createError.ImATeapot`
  * Set a meaningful `name` property on constructed errors

2014-12-09 / 1.2.8
==================

  * Fix stack trace from exported function
  * Remove `arguments.callee` usage

2014-10-14 / 1.2.7
==================

  * Remove duplicate line

2014-10-02 / 1.2.6
==================

  * Fix `expose` to be `true` for `ClientError` constructor

2014-09-28 / 1.2.5
==================

  * deps: statuses@1

2014-09-21 / 1.2.4
==================

  * Fix dependency version to work with old `npm`s

2014-09-21 / 1.2.3
==================

  * deps: statuses@~1.1.0

2014-09-21 / 1.2.2
==================

  * Fix publish error

2014-09-21 / 1.2.1
==================

  * Support Node.js 0.6
  * Use `inherits` instead of `util`

2014-09-09 / 1.2.0
==================

  * Fix the way inheriting functions
  * Support `expose` being provided in properties argument

2014-09-08 / 1.1.0
==================

  * Default status to 500
  * Support provided `error` to extend

2014-09-08 / 1.0.1
==================

  * Fix accepting string message

2014-09-08 / 1.0.0
==================

  * Initial release
", "node_modules/http-errors/HISTORY.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/http-errors/HISTORY.md");
    }
}
