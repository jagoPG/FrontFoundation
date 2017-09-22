<?php

/* node_modules/extsprintf/README.md */
class __TwigTemplate_f72cf7d929a15e54ffd56d417bb2526bc2f41c6caa464960b2b8e811381b1bee extends Twig_Template
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
        $__internal_4feff2f117011451016d5aff1a58dbd2bd6aa219d84dd0eeb0ebab94b613612b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4feff2f117011451016d5aff1a58dbd2bd6aa219d84dd0eeb0ebab94b613612b->enter($__internal_4feff2f117011451016d5aff1a58dbd2bd6aa219d84dd0eeb0ebab94b613612b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/extsprintf/README.md"));

        // line 1
        echo "# extsprintf: extended POSIX-style sprintf

Stripped down version of s[n]printf(3c).  We make a best effort to throw an
exception when given a format string we don't understand, rather than ignoring
it, so that we won't break existing programs if/when we go implement the rest
of this.

This implementation currently supports specifying

* field alignment ('-' flag),
* zero-pad ('0' flag)
* always show numeric sign ('+' flag),
* field width
* conversions for strings, decimal integers, and floats (numbers).
* argument size specifiers.  These are all accepted but ignored, since
  Javascript has no notion of the physical size of an argument.

Everything else is currently unsupported, most notably: precision, unsigned
numbers, non-decimal numbers, and characters.

Besides the usual POSIX conversions, this implementation supports:

* `%j`: pretty-print a JSON object (using node's \"inspect\")
* `%r`: pretty-print an Error object

# Example

First, install it:

    # npm install extsprintf

Now, use it:

    var mod_extsprintf = require('extsprintf');
    console.log(mod_extsprintf.sprintf('hello %25s', 'world'));

outputs:

    hello                     world

# Also supported

**printf**: same args as sprintf, but prints the result to stdout

**fprintf**: same args as sprintf, preceded by a Node stream.  Prints the result
to the given stream.
";
        
        $__internal_4feff2f117011451016d5aff1a58dbd2bd6aa219d84dd0eeb0ebab94b613612b->leave($__internal_4feff2f117011451016d5aff1a58dbd2bd6aa219d84dd0eeb0ebab94b613612b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/extsprintf/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# extsprintf: extended POSIX-style sprintf

Stripped down version of s[n]printf(3c).  We make a best effort to throw an
exception when given a format string we don't understand, rather than ignoring
it, so that we won't break existing programs if/when we go implement the rest
of this.

This implementation currently supports specifying

* field alignment ('-' flag),
* zero-pad ('0' flag)
* always show numeric sign ('+' flag),
* field width
* conversions for strings, decimal integers, and floats (numbers).
* argument size specifiers.  These are all accepted but ignored, since
  Javascript has no notion of the physical size of an argument.

Everything else is currently unsupported, most notably: precision, unsigned
numbers, non-decimal numbers, and characters.

Besides the usual POSIX conversions, this implementation supports:

* `%j`: pretty-print a JSON object (using node's \"inspect\")
* `%r`: pretty-print an Error object

# Example

First, install it:

    # npm install extsprintf

Now, use it:

    var mod_extsprintf = require('extsprintf');
    console.log(mod_extsprintf.sprintf('hello %25s', 'world'));

outputs:

    hello                     world

# Also supported

**printf**: same args as sprintf, but prints the result to stdout

**fprintf**: same args as sprintf, preceded by a Node stream.  Prints the result
to the given stream.
", "node_modules/extsprintf/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/extsprintf/README.md");
    }
}
