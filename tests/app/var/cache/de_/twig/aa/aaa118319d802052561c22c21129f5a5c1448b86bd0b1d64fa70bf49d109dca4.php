<?php

/* node_modules/fsevents/node_modules/sshpk/node_modules/assert-plus/CHANGES.md */
class __TwigTemplate_5daac6b07d719fe1f4b4c479dafd3d38b99f548c0b3723fe9504dac4a3ff9ddf extends Twig_Template
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
        $__internal_be28b3135dfe933f17ca3e8c1f306df652f2efe2ef898817881e6b35088fc45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be28b3135dfe933f17ca3e8c1f306df652f2efe2ef898817881e6b35088fc45d->enter($__internal_be28b3135dfe933f17ca3e8c1f306df652f2efe2ef898817881e6b35088fc45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/sshpk/node_modules/assert-plus/CHANGES.md"));

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
        
        $__internal_be28b3135dfe933f17ca3e8c1f306df652f2efe2ef898817881e6b35088fc45d->leave($__internal_be28b3135dfe933f17ca3e8c1f306df652f2efe2ef898817881e6b35088fc45d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/sshpk/node_modules/assert-plus/CHANGES.md";
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
", "node_modules/fsevents/node_modules/sshpk/node_modules/assert-plus/CHANGES.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/sshpk/node_modules/assert-plus/CHANGES.md");
    }
}
