<?php

/* node_modules/es6-symbol/CHANGES */
class __TwigTemplate_d85e7281be60374bc93bf43ea40163892723877fb51d110b6ad2a30a240862f1 extends Twig_Template
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
        $__internal_711269428700a50ccde673434eb79f749ce1627e3bb1980a09d7c06c4b9efd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711269428700a50ccde673434eb79f749ce1627e3bb1980a09d7c06c4b9efd68->enter($__internal_711269428700a50ccde673434eb79f749ce1627e3bb1980a09d7c06c4b9efd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-symbol/CHANGES"));

        // line 1
        echo "v3.1.1  --  2017.03.15
* Improve documentation
* Improve error messages
* Update dependencies

v3.1.0  --  2016.06.03
* Fix internals of symbol detection
* Ensure Symbol.prototype[Symbol.toPrimitive] in all cases returns primitive value
  (fixes Node v6 support)
* Create native symbols whenver possible

v3.0.2  --  2015.12.12
* Fix definition flow, so uneven state of Symbol implementation doesn't crash initialization of
  polyfill. See #13

v3.0.1  --  2015.10.22
* Workaround for IE11 bug (reported in #12)

v3.0.0  --  2015.10.02
* Reuse native symbols (e.g. iterator, toStringTag etc.) in a polyfill if they're available
  Otherwise polyfill symbols may not be recognized by other functions
* Improve documentation

v2.0.1  --  2015.01.28
* Fix Symbol.prototype[Symbol.isPrimitive] implementation
* Improve validation within Symbol.prototype.toString and
  Symbol.prototype.valueOf

v2.0.0  --  2015.01.28
* Update up to changes in specification:
  * Implement `for` and `keyFor`
  * Remove `Symbol.create` and `Symbol.isRegExp`
  * Add `Symbol.match`, `Symbol.replace`, `Symbol.search`, `Symbol.species` and
    `Symbol.split`
* Rename `validSymbol` to `validateSymbol`
* Improve documentation
* Remove dead test modules

v1.0.0  --  2015.01.26
* Fix enumerability for symbol properties set normally (e.g. obj[symbol] = value)
* Introduce initialization via hidden constructor
* Fix isSymbol handling of polyfill values when native Symbol is present
* Fix spelling of LICENSE
* Configure lint scripts

v0.1.1  --  2014.10.07
* Fix isImplemented, so it returns true in case of polyfill
* Improve documentations

v0.1.0  --  2014.04.28
* Assure strictly npm dependencies
* Update to use latest versions of dependencies
* Fix implementation detection so it doesn't crash on `String(symbol)`
* throw on `new Symbol()` (as decided by TC39)

v0.0.0  --  2013.11.15
* Initial (dev) version";
        
        $__internal_711269428700a50ccde673434eb79f749ce1627e3bb1980a09d7c06c4b9efd68->leave($__internal_711269428700a50ccde673434eb79f749ce1627e3bb1980a09d7c06c4b9efd68_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-symbol/CHANGES";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("v3.1.1  --  2017.03.15
* Improve documentation
* Improve error messages
* Update dependencies

v3.1.0  --  2016.06.03
* Fix internals of symbol detection
* Ensure Symbol.prototype[Symbol.toPrimitive] in all cases returns primitive value
  (fixes Node v6 support)
* Create native symbols whenver possible

v3.0.2  --  2015.12.12
* Fix definition flow, so uneven state of Symbol implementation doesn't crash initialization of
  polyfill. See #13

v3.0.1  --  2015.10.22
* Workaround for IE11 bug (reported in #12)

v3.0.0  --  2015.10.02
* Reuse native symbols (e.g. iterator, toStringTag etc.) in a polyfill if they're available
  Otherwise polyfill symbols may not be recognized by other functions
* Improve documentation

v2.0.1  --  2015.01.28
* Fix Symbol.prototype[Symbol.isPrimitive] implementation
* Improve validation within Symbol.prototype.toString and
  Symbol.prototype.valueOf

v2.0.0  --  2015.01.28
* Update up to changes in specification:
  * Implement `for` and `keyFor`
  * Remove `Symbol.create` and `Symbol.isRegExp`
  * Add `Symbol.match`, `Symbol.replace`, `Symbol.search`, `Symbol.species` and
    `Symbol.split`
* Rename `validSymbol` to `validateSymbol`
* Improve documentation
* Remove dead test modules

v1.0.0  --  2015.01.26
* Fix enumerability for symbol properties set normally (e.g. obj[symbol] = value)
* Introduce initialization via hidden constructor
* Fix isSymbol handling of polyfill values when native Symbol is present
* Fix spelling of LICENSE
* Configure lint scripts

v0.1.1  --  2014.10.07
* Fix isImplemented, so it returns true in case of polyfill
* Improve documentations

v0.1.0  --  2014.04.28
* Assure strictly npm dependencies
* Update to use latest versions of dependencies
* Fix implementation detection so it doesn't crash on `String(symbol)`
* throw on `new Symbol()` (as decided by TC39)

v0.0.0  --  2013.11.15
* Initial (dev) version", "node_modules/es6-symbol/CHANGES", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-symbol/CHANGES");
    }
}
