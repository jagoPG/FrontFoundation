<?php

/* node_modules/fsevents/node_modules/http-signature/CHANGES.md */
class __TwigTemplate_b635e6cc05cfcf94fa146686c48167a482da92675aadfdc6ca70c25f9609c7ef extends Twig_Template
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
        $__internal_7c112513ae78e17801447ff5b44b81ce3c5f66fafd620f28729fdf8bca76d81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c112513ae78e17801447ff5b44b81ce3c5f66fafd620f28729fdf8bca76d81c->enter($__internal_7c112513ae78e17801447ff5b44b81ce3c5f66fafd620f28729fdf8bca76d81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/http-signature/CHANGES.md"));

        // line 1
        echo "# node-http-signature changelog

## 1.1.1

- Version of dependency `assert-plus` updated: old version was missing
  some license information
- Corrected examples in `http_signing.md`, added auto-tests to
  automatically validate these examples

## 1.1.0

- Bump version of `sshpk` dependency, remove peerDependency on it since
  it now supports exchanging objects between multiple versions of itself
  where possible

## 1.0.2

- Bump min version of `jsprim` dependency, to include fixes for using
  http-signature with `browserify`

## 1.0.1

- Bump minimum version of `sshpk` dependency, to include fixes for
  whitespace tolerance in key parsing.

## 1.0.0

- First semver release.
- #36: Ensure verifySignature does not leak useful timing information
- #42: Bring the library up to the latest version of the spec (including the 
       request-target changes)
- Support for ECDSA keys and signatures.
- Now uses `sshpk` for key parsing, validation and conversion.
- Fixes for #21, #47, #39 and compatibility with node 0.8

## 0.11.0

- Split up HMAC and Signature verification to avoid vulnerabilities where a
  key intended for use with one can be validated against the other method
  instead.

## 0.10.2

- Updated versions of most dependencies.
- Utility functions exported for PEM => SSH-RSA conversion.
- Improvements to tests and examples.
";
        
        $__internal_7c112513ae78e17801447ff5b44b81ce3c5f66fafd620f28729fdf8bca76d81c->leave($__internal_7c112513ae78e17801447ff5b44b81ce3c5f66fafd620f28729fdf8bca76d81c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/http-signature/CHANGES.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# node-http-signature changelog

## 1.1.1

- Version of dependency `assert-plus` updated: old version was missing
  some license information
- Corrected examples in `http_signing.md`, added auto-tests to
  automatically validate these examples

## 1.1.0

- Bump version of `sshpk` dependency, remove peerDependency on it since
  it now supports exchanging objects between multiple versions of itself
  where possible

## 1.0.2

- Bump min version of `jsprim` dependency, to include fixes for using
  http-signature with `browserify`

## 1.0.1

- Bump minimum version of `sshpk` dependency, to include fixes for
  whitespace tolerance in key parsing.

## 1.0.0

- First semver release.
- #36: Ensure verifySignature does not leak useful timing information
- #42: Bring the library up to the latest version of the spec (including the 
       request-target changes)
- Support for ECDSA keys and signatures.
- Now uses `sshpk` for key parsing, validation and conversion.
- Fixes for #21, #47, #39 and compatibility with node 0.8

## 0.11.0

- Split up HMAC and Signature verification to avoid vulnerabilities where a
  key intended for use with one can be validated against the other method
  instead.

## 0.10.2

- Updated versions of most dependencies.
- Utility functions exported for PEM => SSH-RSA conversion.
- Improvements to tests and examples.
", "node_modules/fsevents/node_modules/http-signature/CHANGES.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/http-signature/CHANGES.md");
    }
}
