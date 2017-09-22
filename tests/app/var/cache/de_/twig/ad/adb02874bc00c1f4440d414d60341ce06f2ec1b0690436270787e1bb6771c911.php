<?php

/* node_modules/jsprim/CONTRIBUTING.md */
class __TwigTemplate_a2fb1953e1df050ebc2bbe9077a5f9b9f69230af6c047bc9ff3a31c3fbb1c248 extends Twig_Template
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
        $__internal_22795a0e2886300fcb4d0a0d132726175dbac87cbc5eb9bf65c0abbfcad4d37a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22795a0e2886300fcb4d0a0d132726175dbac87cbc5eb9bf65c0abbfcad4d37a->enter($__internal_22795a0e2886300fcb4d0a0d132726175dbac87cbc5eb9bf65c0abbfcad4d37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jsprim/CONTRIBUTING.md"));

        // line 1
        echo "# Contributing

This repository uses [cr.joyent.us](https://cr.joyent.us) (Gerrit) for new
changes.  Anyone can submit changes.  To get started, see the [cr.joyent.us user
guide](https://github.com/joyent/joyent-gerrit/blob/master/docs/user/README.md).
This repo does not use GitHub pull requests.

See the [Joyent Engineering
Guidelines](https://github.com/joyent/eng/blob/master/docs/index.md) for general
best practices expected in this repository.

Contributions should be \"make prepush\" clean.  The \"prepush\" target runs the
\"check\" target, which requires these separate tools:

* https://github.com/davepacheco/jsstyle
* https://github.com/davepacheco/javascriptlint

If you're changing something non-trivial or user-facing, you may want to submit
an issue first.
";
        
        $__internal_22795a0e2886300fcb4d0a0d132726175dbac87cbc5eb9bf65c0abbfcad4d37a->leave($__internal_22795a0e2886300fcb4d0a0d132726175dbac87cbc5eb9bf65c0abbfcad4d37a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jsprim/CONTRIBUTING.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Contributing

This repository uses [cr.joyent.us](https://cr.joyent.us) (Gerrit) for new
changes.  Anyone can submit changes.  To get started, see the [cr.joyent.us user
guide](https://github.com/joyent/joyent-gerrit/blob/master/docs/user/README.md).
This repo does not use GitHub pull requests.

See the [Joyent Engineering
Guidelines](https://github.com/joyent/eng/blob/master/docs/index.md) for general
best practices expected in this repository.

Contributions should be \"make prepush\" clean.  The \"prepush\" target runs the
\"check\" target, which requires these separate tools:

* https://github.com/davepacheco/jsstyle
* https://github.com/davepacheco/javascriptlint

If you're changing something non-trivial or user-facing, you may want to submit
an issue first.
", "node_modules/jsprim/CONTRIBUTING.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jsprim/CONTRIBUTING.md");
    }
}
