<?php

/* node_modules/fsevents/node_modules/json-stringify-safe/CHANGELOG.md */
class __TwigTemplate_0570a54be2a40e1ae5f7184ffa9dff81d53ae736d661a3c8fd1a415ada952845 extends Twig_Template
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
        $__internal_93c89c9f1a21a3d65a1e92a7f8164ed3efecaa0bfb1c8fa2dedaf310171a0fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c89c9f1a21a3d65a1e92a7f8164ed3efecaa0bfb1c8fa2dedaf310171a0fb2->enter($__internal_93c89c9f1a21a3d65a1e92a7f8164ed3efecaa0bfb1c8fa2dedaf310171a0fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stringify-safe/CHANGELOG.md"));

        // line 1
        echo "## Unreleased
- Fixes stringify to only take ancestors into account when checking
  circularity.  
  It previously assumed every visited object was circular which led to [false
  positives][issue9].  
  Uses the tiny serializer I wrote for [Must.js][must] a year and a half ago.
- Fixes calling the `replacer` function in the proper context (`thisArg`).
- Fixes calling the `cycleReplacer` function in the proper context (`thisArg`).
- Speeds serializing by a factor of
  Big-O(h-my-god-it-linearly-searched-every-object) it had ever seen. Searching
  only the ancestors for a circular references speeds up things considerably.

[must]: https://github.com/moll/js-must
[issue9]: https://github.com/isaacs/json-stringify-safe/issues/9
";
        
        $__internal_93c89c9f1a21a3d65a1e92a7f8164ed3efecaa0bfb1c8fa2dedaf310171a0fb2->leave($__internal_93c89c9f1a21a3d65a1e92a7f8164ed3efecaa0bfb1c8fa2dedaf310171a0fb2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stringify-safe/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("## Unreleased
- Fixes stringify to only take ancestors into account when checking
  circularity.  
  It previously assumed every visited object was circular which led to [false
  positives][issue9].  
  Uses the tiny serializer I wrote for [Must.js][must] a year and a half ago.
- Fixes calling the `replacer` function in the proper context (`thisArg`).
- Fixes calling the `cycleReplacer` function in the proper context (`thisArg`).
- Speeds serializing by a factor of
  Big-O(h-my-god-it-linearly-searched-every-object) it had ever seen. Searching
  only the ancestors for a circular references speeds up things considerably.

[must]: https://github.com/moll/js-must
[issue9]: https://github.com/isaacs/json-stringify-safe/issues/9
", "node_modules/fsevents/node_modules/json-stringify-safe/CHANGELOG.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stringify-safe/CHANGELOG.md");
    }
}
