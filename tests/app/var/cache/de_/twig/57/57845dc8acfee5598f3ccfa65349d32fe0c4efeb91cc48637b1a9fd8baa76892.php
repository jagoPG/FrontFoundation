<?php

/* node_modules/es5-ext/CHANGELOG.md */
class __TwigTemplate_f3f0f02c1225c1bfd9cb043b32d5eb2a8e179e5577cbf629398ba5e68d96768d extends Twig_Template
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
        $__internal_f3be708859c24672846633e89d6390f0b2daac74e3fd5ed9a285772de8683def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3be708859c24672846633e89d6390f0b2daac74e3fd5ed9a285772de8683def->enter($__internal_f3be708859c24672846633e89d6390f0b2daac74e3fd5ed9a285772de8683def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/CHANGELOG.md"));

        // line 1
        echo "# Change Log

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

<a name=\"0.10.30\"></a>
## [0.10.30](https://github.com/medikoo/es5-ext/compare/v0.10.29...v0.10.30) (2017-08-25)


### Bug Fixes

* value stringification for error message ([37bb96b](https://github.com/medikoo/es5-ext/commit/37bb96b))



<a name=\"0.10.29\"></a>
## [0.10.29](https://github.com/medikoo/es5-ext/compare/v0.10.28...v0.10.29) (2017-08-18)


### Bug Fixes

* string.repeat after recent regression ([b02fab4](https://github.com/medikoo/es5-ext/commit/b02fab4))



<a name=\"0.10.28\"></a>
## [0.10.28](https://github.com/medikoo/es5-ext/compare/v0.10.27...v0.10.28) (2017-08-18)


### Features

* array.isEmpty method ([b0cfbdd](https://github.com/medikoo/es5-ext/commit/b0cfbdd))
* improve new lines representation ([860fe8b](https://github.com/medikoo/es5-ext/commit/860fe8b))
* Object.ensureArray util ([595c341](https://github.com/medikoo/es5-ext/commit/595c341))
* toShortStringRepresentation util ([6842d06](https://github.com/medikoo/es5-ext/commit/6842d06))



<a name=\"0.10.27\"></a>
## [0.10.27](https://github.com/medikoo/es5-ext/compare/v0.10.26...v0.10.27) (2017-08-11)


### Bug Fixes

* isNumberValue should not crash on non-coercible values ([0db765e](https://github.com/medikoo/es5-ext/commit/0db765e))


### Features

* add Object.ensureFiniteNumber util ([11c67f5](https://github.com/medikoo/es5-ext/commit/11c67f5))
* add Object.isFiniteNumber util ([fe5b55a](https://github.com/medikoo/es5-ext/commit/fe5b55a))



<a name=\"0.10.26\"></a>
## [0.10.26](https://github.com/medikoo/es5-ext/compare/v0.10.25...v0.10.26) (2017-08-02)


### Bug Fixes

* **general:** ensure optionalChaining in index ([3df879a](https://github.com/medikoo/es5-ext/commit/3df879a))



<a name=\"0.10.25\"></a>
## [0.10.25](https://github.com/medikoo/es5-ext/compare/v0.10.24...v0.10.25) (2017-08-02)


### Features

* **general:** optionalChaining utility ([26332b5](https://github.com/medikoo/es5-ext/commit/26332b5))



<a name=\"0.10.24\"></a>
## [0.10.24](https://github.com/medikoo/es5-ext/compare/v0.10.23...v0.10.24) (2017-07-10)


### Features

* resolve global with CSP safe method ([d386449](https://github.com/medikoo/es5-ext/commit/d386449))



<a name=\"0.10.23\"></a>
## [0.10.23](https://github.com/medikoo/es5-ext/compare/v0.10.22...v0.10.23) (2017-06-05)


### Bug Fixes

* **Error.custom:** allow non-string code ([e8db3a0](https://github.com/medikoo/es5-ext/commit/e8db3a0))
* **Error.custom:** improve `ext` argument detection ([0edbfbc](https://github.com/medikoo/es5-ext/commit/0edbfbc))



<a name=\"0.10.22\"></a>
## [0.10.22](https://github.com/medikoo/es5-ext/compare/v0.10.21...v0.10.22) (2017-05-31)


### Bug Fixes

* ensure proper symbols stringification in early implementations ([ce51900](https://github.com/medikoo/es5-ext/commit/ce51900))



<a name=\"0.10.21\"></a>
## [0.10.21](https://github.com/medikoo/es5-ext/compare/v0.10.20...v0.10.21) (2017-05-22)


### Features

* support arrow functions in Function/#/to-tring-tokens.js ([ad3de1e](https://github.com/medikoo/es5-ext/commit/ad3de1e))



<a name=\"0.10.20\"></a>
## [0.10.20](https://github.com/medikoo/es5-ext/compare/v0.10.19...v0.10.20) (2017-05-17)


### Features

* if listed copy not only if own property ([d7e7cef](https://github.com/medikoo/es5-ext/commit/d7e7cef))
* support `ensure` option in Object.copy ([295326f](https://github.com/medikoo/es5-ext/commit/295326f))



<a name=\"0.10.19\"></a>
## [0.10.19](https://github.com/medikoo/es5-ext/compare/v0.10.18...v0.10.19) (2017-05-17)


### Features

* support propertyNames option in Object.copy ([5442279](https://github.com/medikoo/es5-ext/commit/5442279))



<a name=\"0.10.18\"></a>
## [0.10.18](https://github.com/medikoo/es5-ext/compare/v0.10.17...v0.10.18) (2017-05-15)


### Bug Fixes

* take all changes in safeToString ([3c5cd12](https://github.com/medikoo/es5-ext/commit/3c5cd12))



<a name=\"0.10.17\"></a>
## [0.10.17](https://github.com/medikoo/es5-ext/compare/v0.10.16...v0.10.17) (2017-05-15)


### Features

* introduce Object.ensurePromise ([46a2f45](https://github.com/medikoo/es5-ext/commit/46a2f45))
* introduce Object.isPromise ([27aecc8](https://github.com/medikoo/es5-ext/commit/27aecc8))
* introduce safeToString ([0cc6a7b](https://github.com/medikoo/es5-ext/commit/0cc6a7b))



<a name=\"0.10.16\"></a>
## [0.10.16](https://github.com/medikoo/es5-ext/compare/v0.10.15...v0.10.16) (2017-05-09)


### Features

* add String.prototype.count ([2e53241](https://github.com/medikoo/es5-ext/commit/2e53241))


## Changelog for previous versions

See `CHANGES` file";
        
        $__internal_f3be708859c24672846633e89d6390f0b2daac74e3fd5ed9a285772de8683def->leave($__internal_f3be708859c24672846633e89d6390f0b2daac74e3fd5ed9a285772de8683def_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Change Log

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

<a name=\"0.10.30\"></a>
## [0.10.30](https://github.com/medikoo/es5-ext/compare/v0.10.29...v0.10.30) (2017-08-25)


### Bug Fixes

* value stringification for error message ([37bb96b](https://github.com/medikoo/es5-ext/commit/37bb96b))



<a name=\"0.10.29\"></a>
## [0.10.29](https://github.com/medikoo/es5-ext/compare/v0.10.28...v0.10.29) (2017-08-18)


### Bug Fixes

* string.repeat after recent regression ([b02fab4](https://github.com/medikoo/es5-ext/commit/b02fab4))



<a name=\"0.10.28\"></a>
## [0.10.28](https://github.com/medikoo/es5-ext/compare/v0.10.27...v0.10.28) (2017-08-18)


### Features

* array.isEmpty method ([b0cfbdd](https://github.com/medikoo/es5-ext/commit/b0cfbdd))
* improve new lines representation ([860fe8b](https://github.com/medikoo/es5-ext/commit/860fe8b))
* Object.ensureArray util ([595c341](https://github.com/medikoo/es5-ext/commit/595c341))
* toShortStringRepresentation util ([6842d06](https://github.com/medikoo/es5-ext/commit/6842d06))



<a name=\"0.10.27\"></a>
## [0.10.27](https://github.com/medikoo/es5-ext/compare/v0.10.26...v0.10.27) (2017-08-11)


### Bug Fixes

* isNumberValue should not crash on non-coercible values ([0db765e](https://github.com/medikoo/es5-ext/commit/0db765e))


### Features

* add Object.ensureFiniteNumber util ([11c67f5](https://github.com/medikoo/es5-ext/commit/11c67f5))
* add Object.isFiniteNumber util ([fe5b55a](https://github.com/medikoo/es5-ext/commit/fe5b55a))



<a name=\"0.10.26\"></a>
## [0.10.26](https://github.com/medikoo/es5-ext/compare/v0.10.25...v0.10.26) (2017-08-02)


### Bug Fixes

* **general:** ensure optionalChaining in index ([3df879a](https://github.com/medikoo/es5-ext/commit/3df879a))



<a name=\"0.10.25\"></a>
## [0.10.25](https://github.com/medikoo/es5-ext/compare/v0.10.24...v0.10.25) (2017-08-02)


### Features

* **general:** optionalChaining utility ([26332b5](https://github.com/medikoo/es5-ext/commit/26332b5))



<a name=\"0.10.24\"></a>
## [0.10.24](https://github.com/medikoo/es5-ext/compare/v0.10.23...v0.10.24) (2017-07-10)


### Features

* resolve global with CSP safe method ([d386449](https://github.com/medikoo/es5-ext/commit/d386449))



<a name=\"0.10.23\"></a>
## [0.10.23](https://github.com/medikoo/es5-ext/compare/v0.10.22...v0.10.23) (2017-06-05)


### Bug Fixes

* **Error.custom:** allow non-string code ([e8db3a0](https://github.com/medikoo/es5-ext/commit/e8db3a0))
* **Error.custom:** improve `ext` argument detection ([0edbfbc](https://github.com/medikoo/es5-ext/commit/0edbfbc))



<a name=\"0.10.22\"></a>
## [0.10.22](https://github.com/medikoo/es5-ext/compare/v0.10.21...v0.10.22) (2017-05-31)


### Bug Fixes

* ensure proper symbols stringification in early implementations ([ce51900](https://github.com/medikoo/es5-ext/commit/ce51900))



<a name=\"0.10.21\"></a>
## [0.10.21](https://github.com/medikoo/es5-ext/compare/v0.10.20...v0.10.21) (2017-05-22)


### Features

* support arrow functions in Function/#/to-tring-tokens.js ([ad3de1e](https://github.com/medikoo/es5-ext/commit/ad3de1e))



<a name=\"0.10.20\"></a>
## [0.10.20](https://github.com/medikoo/es5-ext/compare/v0.10.19...v0.10.20) (2017-05-17)


### Features

* if listed copy not only if own property ([d7e7cef](https://github.com/medikoo/es5-ext/commit/d7e7cef))
* support `ensure` option in Object.copy ([295326f](https://github.com/medikoo/es5-ext/commit/295326f))



<a name=\"0.10.19\"></a>
## [0.10.19](https://github.com/medikoo/es5-ext/compare/v0.10.18...v0.10.19) (2017-05-17)


### Features

* support propertyNames option in Object.copy ([5442279](https://github.com/medikoo/es5-ext/commit/5442279))



<a name=\"0.10.18\"></a>
## [0.10.18](https://github.com/medikoo/es5-ext/compare/v0.10.17...v0.10.18) (2017-05-15)


### Bug Fixes

* take all changes in safeToString ([3c5cd12](https://github.com/medikoo/es5-ext/commit/3c5cd12))



<a name=\"0.10.17\"></a>
## [0.10.17](https://github.com/medikoo/es5-ext/compare/v0.10.16...v0.10.17) (2017-05-15)


### Features

* introduce Object.ensurePromise ([46a2f45](https://github.com/medikoo/es5-ext/commit/46a2f45))
* introduce Object.isPromise ([27aecc8](https://github.com/medikoo/es5-ext/commit/27aecc8))
* introduce safeToString ([0cc6a7b](https://github.com/medikoo/es5-ext/commit/0cc6a7b))



<a name=\"0.10.16\"></a>
## [0.10.16](https://github.com/medikoo/es5-ext/compare/v0.10.15...v0.10.16) (2017-05-09)


### Features

* add String.prototype.count ([2e53241](https://github.com/medikoo/es5-ext/commit/2e53241))


## Changelog for previous versions

See `CHANGES` file", "node_modules/es5-ext/CHANGELOG.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/CHANGELOG.md");
    }
}
