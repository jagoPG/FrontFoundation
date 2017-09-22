<?php

/* node_modules/verror/CONTRIBUTING.md */
class __TwigTemplate_cf8941aa75f532b91cb908edf6bc6282e2b062d04e22579fe713489512396aae extends Twig_Template
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
        $__internal_36bc458f80bc02d9820790788bd29c03ed9e75629c05b13c704905aed6e505c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36bc458f80bc02d9820790788bd29c03ed9e75629c05b13c704905aed6e505c3->enter($__internal_36bc458f80bc02d9820790788bd29c03ed9e75629c05b13c704905aed6e505c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/verror/CONTRIBUTING.md"));

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
        
        $__internal_36bc458f80bc02d9820790788bd29c03ed9e75629c05b13c704905aed6e505c3->leave($__internal_36bc458f80bc02d9820790788bd29c03ed9e75629c05b13c704905aed6e505c3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/verror/CONTRIBUTING.md";
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
", "node_modules/verror/CONTRIBUTING.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/verror/CONTRIBUTING.md");
    }
}
