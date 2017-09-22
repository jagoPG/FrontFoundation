<?php

/* node_modules/is-regex/CHANGELOG.md */
class __TwigTemplate_4aa803961a6b820701d25faea499e2a4cf81e1fdc049975d07d469157ed8b619 extends Twig_Template
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
        $__internal_daaf0d0dd7dda2ad545ded69c3a94b83eaae4bacd31bb5478bcade0cd4f2324e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daaf0d0dd7dda2ad545ded69c3a94b83eaae4bacd31bb5478bcade0cd4f2324e->enter($__internal_daaf0d0dd7dda2ad545ded69c3a94b83eaae4bacd31bb5478bcade0cd4f2324e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-regex/CHANGELOG.md"));

        // line 1
        echo "1.0.4 / 2016-02-18
=================
  * [Fix] ensure that `lastIndex` is not mutated (#3)
  * [Refactor] when try/catch is needed, bail early if the value lacks an own `lastIndex` data property
  * [Refactor] use an early return instead of a ternary
  * [Refactor] bail earlier when the value is falsy
  * Switch from vb.teelaun.ch to versionbadg.es for the npm version badge SVG
  * [Dev Deps] update `tape`, `jscs`, `editorconfig-tools`, `eslint`, `semver`, `replace`, `nsp`, `covert`, `@ljharb/eslint-config`
  * [Tests] on all the node and io.js versions; improve test matri
  * [Tests] Fix tests for faked @@toStringTag

1.0.3 / 2015-01-29
=================
  * If @@toStringTag is not present, use the old-school Object#toString test.

1.0.2 / 2015-01-29
=================
  * Improve optimization by separating the try/catch, and bailing out early when not typeof \"object\".

1.0.1 / 2015-01-28
=================
  * Update `jscs`, `tape`, `covert`
  * Use RegExp#exec to test if something is a regex, which works even with ES6 @@toStringTag.

1.0.0 / 2014-05-19
=================
  * Initial release.
";
        
        $__internal_daaf0d0dd7dda2ad545ded69c3a94b83eaae4bacd31bb5478bcade0cd4f2324e->leave($__internal_daaf0d0dd7dda2ad545ded69c3a94b83eaae4bacd31bb5478bcade0cd4f2324e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-regex/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("1.0.4 / 2016-02-18
=================
  * [Fix] ensure that `lastIndex` is not mutated (#3)
  * [Refactor] when try/catch is needed, bail early if the value lacks an own `lastIndex` data property
  * [Refactor] use an early return instead of a ternary
  * [Refactor] bail earlier when the value is falsy
  * Switch from vb.teelaun.ch to versionbadg.es for the npm version badge SVG
  * [Dev Deps] update `tape`, `jscs`, `editorconfig-tools`, `eslint`, `semver`, `replace`, `nsp`, `covert`, `@ljharb/eslint-config`
  * [Tests] on all the node and io.js versions; improve test matri
  * [Tests] Fix tests for faked @@toStringTag

1.0.3 / 2015-01-29
=================
  * If @@toStringTag is not present, use the old-school Object#toString test.

1.0.2 / 2015-01-29
=================
  * Improve optimization by separating the try/catch, and bailing out early when not typeof \"object\".

1.0.1 / 2015-01-28
=================
  * Update `jscs`, `tape`, `covert`
  * Use RegExp#exec to test if something is a regex, which works even with ES6 @@toStringTag.

1.0.0 / 2014-05-19
=================
  * Initial release.
", "node_modules/is-regex/CHANGELOG.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-regex/CHANGELOG.md");
    }
}
