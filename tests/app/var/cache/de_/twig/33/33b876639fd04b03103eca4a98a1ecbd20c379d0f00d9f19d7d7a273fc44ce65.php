<?php

/* node_modules/assert-plus/CHANGES.md */
class __TwigTemplate_3bfc1c53d1be170bc0e6f7640aa3e3a9b06c742a88fc0e424dc9471fc69c8d27 extends Twig_Template
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
        $__internal_20775d29610280be4b6ede469e49a1e60d1420349653268d69a32357041ae057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20775d29610280be4b6ede469e49a1e60d1420349653268d69a32357041ae057->enter($__internal_20775d29610280be4b6ede469e49a1e60d1420349653268d69a32357041ae057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/assert-plus/CHANGES.md"));

        // line 1
        echo "# assert-plus Changelog

## 1.0.0

- *BREAKING* assert.number (and derivatives) now accept Infinity as valid input
- Add assert.finite check.  Previous assert.number callers should use this if
  they expect Infinity inputs to throw.

## 0.2.0

- Fix `assert.object(null)` so it throws
- Fix optional/arrayOf exports for non-type-of asserts
- Add optiona/arrayOf exports for Stream/Date/Regex/uuid
- Add basic unit test coverage
";
        
        $__internal_20775d29610280be4b6ede469e49a1e60d1420349653268d69a32357041ae057->leave($__internal_20775d29610280be4b6ede469e49a1e60d1420349653268d69a32357041ae057_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/assert-plus/CHANGES.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# assert-plus Changelog

## 1.0.0

- *BREAKING* assert.number (and derivatives) now accept Infinity as valid input
- Add assert.finite check.  Previous assert.number callers should use this if
  they expect Infinity inputs to throw.

## 0.2.0

- Fix `assert.object(null)` so it throws
- Fix optional/arrayOf exports for non-type-of asserts
- Add optiona/arrayOf exports for Stream/Date/Regex/uuid
- Add basic unit test coverage
", "node_modules/assert-plus/CHANGES.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/assert-plus/CHANGES.md");
    }
}
