<?php

/* node_modules/fsevents/node_modules/dashdash/node_modules/assert-plus/CHANGES.md */
class __TwigTemplate_d8ea25d4c0256ed9e52e7028bd33cb7aa2c97e55664e7ad41d1e736f768ce269 extends Twig_Template
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
        $__internal_3a42bdee490c23a1073e9730c12fc1e583b4b572f7b886810dc7f66c913fda31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a42bdee490c23a1073e9730c12fc1e583b4b572f7b886810dc7f66c913fda31->enter($__internal_3a42bdee490c23a1073e9730c12fc1e583b4b572f7b886810dc7f66c913fda31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/dashdash/node_modules/assert-plus/CHANGES.md"));

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
        
        $__internal_3a42bdee490c23a1073e9730c12fc1e583b4b572f7b886810dc7f66c913fda31->leave($__internal_3a42bdee490c23a1073e9730c12fc1e583b4b572f7b886810dc7f66c913fda31_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/dashdash/node_modules/assert-plus/CHANGES.md";
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
", "node_modules/fsevents/node_modules/dashdash/node_modules/assert-plus/CHANGES.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/dashdash/node_modules/assert-plus/CHANGES.md");
    }
}
