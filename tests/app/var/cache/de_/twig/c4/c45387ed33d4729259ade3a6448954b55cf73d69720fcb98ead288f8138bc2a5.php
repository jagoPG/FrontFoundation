<?php

/* node_modules/fsevents/node_modules/jsprim/node_modules/assert-plus/CHANGES.md */
class __TwigTemplate_6a3072ca76fe3ed29f4a3ffbb441520c07ff4b7014fb082500cd23f87d71cc3b extends Twig_Template
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
        $__internal_95627aac9308dad545de591a8c4de7f2fff90fc9725ae23d253e591ba34e0556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95627aac9308dad545de591a8c4de7f2fff90fc9725ae23d253e591ba34e0556->enter($__internal_95627aac9308dad545de591a8c4de7f2fff90fc9725ae23d253e591ba34e0556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/jsprim/node_modules/assert-plus/CHANGES.md"));

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
        
        $__internal_95627aac9308dad545de591a8c4de7f2fff90fc9725ae23d253e591ba34e0556->leave($__internal_95627aac9308dad545de591a8c4de7f2fff90fc9725ae23d253e591ba34e0556_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/jsprim/node_modules/assert-plus/CHANGES.md";
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
", "node_modules/fsevents/node_modules/jsprim/node_modules/assert-plus/CHANGES.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/jsprim/node_modules/assert-plus/CHANGES.md");
    }
}
