<?php

/* node_modules/timers-browserify/CHANGELOG.md */
class __TwigTemplate_0362f93c72c6e87fabb5425f306a59ded61142aa0c9045acd04d4e77bf6ed9a0 extends Twig_Template
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
        $__internal_1d473e04e1d4d068727379d31765b2adaeb49e22d5e64c62b3c2097e0c3a7140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d473e04e1d4d068727379d31765b2adaeb49e22d5e64c62b3c2097e0c3a7140->enter($__internal_1d473e04e1d4d068727379d31765b2adaeb49e22d5e64c62b3c2097e0c3a7140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/timers-browserify/CHANGELOG.md"));

        // line 1
        echo "# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## 2.0.4 - 2017-08-14

### Fixed

* Revert `setImmediate` and `clearImmediate` changes from 2.0.3 because they
  appear to break Webpack.

### 2.0.3 - 2017-07-31

### Fixed

* `setImmediate` and `clearImmediate` are indirected through the `global` module
  for better coverage of esoteric environments.

## 2.0.2 - 2016-10-19

### Added

* `.npmignore` now excludes example scripts, reducing package size

## 2.0.1 - 2016-06-21

### Fixed
* `clearTimeout` and `clearInterval` no longer throws when passed null or
  undefined instead of the timeout token.

## 2.0.0 - 2016-03-28

### Changed
* `setImmediate` and `clearImmediate` now use the `setimmediate` module which
  has better cross-browser coverage.  In particular, it resolves a crash in
  Safari.  The `setimmediate` module adds these methods to the global
  immediately, so a major version bump seems safest.

## 1.4.2 - 2015-12-08

### Added
* Metadata used by `jspm` in `package.json`

## 1.4.1 - 2015-05-10

### Changed
* Update `process` dependency

## 1.4.0 - 2015-02-23

### Added
* Link to `timers-browserify-full`, which offers a larger, but much more exact,
  version of Node's `timers` library

### Changed
* `setTimeout` and `setInterval` return objects with the same API as the Node
  implementation, instead of just IDs

### Fixed
* `active` implementation actually has an effect, as in Node
* Replaced usages of `apply` that break in IE 8

## 1.3.0 - 2015-02-04

### Changed
* Prefer native versions of `setImmediate` and `clearImmediate` if they exist

## 1.2.0 - 2015-01-02

### Changed
* Update `process` dependency

## 1.1.0 - 2014-08-26

### Added
* `clearImmediate` available to undo `setImmediate`

## 1.0.3 - 2014-06-30

### Fixed
* Resume returning opaque IDs from `setTimeout` and `setInterval`

## 1.0.2 - 2014-06-30

### Fixed
* Pass `window` explicitly to `setTimeout` and others to resolve an error in
  Chrome

## 1.0.1 - 2013-12-28

### Changed
* Replaced `setimmediate` dependency with `process` for the `nextTick` shim

## 1.0.0 - 2013-12-10

### Added
* Guard against undefined globals like `setTimeout` in some environments

## 0.0.0 - 2012-05-30

### Added
* Basic functionality for initial release
";
        
        $__internal_1d473e04e1d4d068727379d31765b2adaeb49e22d5e64c62b3c2097e0c3a7140->leave($__internal_1d473e04e1d4d068727379d31765b2adaeb49e22d5e64c62b3c2097e0c3a7140_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/timers-browserify/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## 2.0.4 - 2017-08-14

### Fixed

* Revert `setImmediate` and `clearImmediate` changes from 2.0.3 because they
  appear to break Webpack.

### 2.0.3 - 2017-07-31

### Fixed

* `setImmediate` and `clearImmediate` are indirected through the `global` module
  for better coverage of esoteric environments.

## 2.0.2 - 2016-10-19

### Added

* `.npmignore` now excludes example scripts, reducing package size

## 2.0.1 - 2016-06-21

### Fixed
* `clearTimeout` and `clearInterval` no longer throws when passed null or
  undefined instead of the timeout token.

## 2.0.0 - 2016-03-28

### Changed
* `setImmediate` and `clearImmediate` now use the `setimmediate` module which
  has better cross-browser coverage.  In particular, it resolves a crash in
  Safari.  The `setimmediate` module adds these methods to the global
  immediately, so a major version bump seems safest.

## 1.4.2 - 2015-12-08

### Added
* Metadata used by `jspm` in `package.json`

## 1.4.1 - 2015-05-10

### Changed
* Update `process` dependency

## 1.4.0 - 2015-02-23

### Added
* Link to `timers-browserify-full`, which offers a larger, but much more exact,
  version of Node's `timers` library

### Changed
* `setTimeout` and `setInterval` return objects with the same API as the Node
  implementation, instead of just IDs

### Fixed
* `active` implementation actually has an effect, as in Node
* Replaced usages of `apply` that break in IE 8

## 1.3.0 - 2015-02-04

### Changed
* Prefer native versions of `setImmediate` and `clearImmediate` if they exist

## 1.2.0 - 2015-01-02

### Changed
* Update `process` dependency

## 1.1.0 - 2014-08-26

### Added
* `clearImmediate` available to undo `setImmediate`

## 1.0.3 - 2014-06-30

### Fixed
* Resume returning opaque IDs from `setTimeout` and `setInterval`

## 1.0.2 - 2014-06-30

### Fixed
* Pass `window` explicitly to `setTimeout` and others to resolve an error in
  Chrome

## 1.0.1 - 2013-12-28

### Changed
* Replaced `setimmediate` dependency with `process` for the `nextTick` shim

## 1.0.0 - 2013-12-10

### Added
* Guard against undefined globals like `setTimeout` in some environments

## 0.0.0 - 2012-05-30

### Added
* Basic functionality for initial release
", "node_modules/timers-browserify/CHANGELOG.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/timers-browserify/CHANGELOG.md");
    }
}
