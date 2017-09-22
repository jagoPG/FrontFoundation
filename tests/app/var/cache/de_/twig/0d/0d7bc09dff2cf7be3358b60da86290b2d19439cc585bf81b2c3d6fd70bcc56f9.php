<?php

/* node_modules/fsevents/node_modules/getpass/node_modules/assert-plus/CHANGES.md */
class __TwigTemplate_95f8ab182625397acc7358021eb51ef44eb1a8a584aef3019337ce62ba848bbc extends Twig_Template
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
        $__internal_561a827ecf0432c4519064abb28627f6cdf30b7a12472d1e55a0e8d07dfeb6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561a827ecf0432c4519064abb28627f6cdf30b7a12472d1e55a0e8d07dfeb6db->enter($__internal_561a827ecf0432c4519064abb28627f6cdf30b7a12472d1e55a0e8d07dfeb6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/getpass/node_modules/assert-plus/CHANGES.md"));

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
        
        $__internal_561a827ecf0432c4519064abb28627f6cdf30b7a12472d1e55a0e8d07dfeb6db->leave($__internal_561a827ecf0432c4519064abb28627f6cdf30b7a12472d1e55a0e8d07dfeb6db_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/getpass/node_modules/assert-plus/CHANGES.md";
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
", "node_modules/fsevents/node_modules/getpass/node_modules/assert-plus/CHANGES.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/getpass/node_modules/assert-plus/CHANGES.md");
    }
}
