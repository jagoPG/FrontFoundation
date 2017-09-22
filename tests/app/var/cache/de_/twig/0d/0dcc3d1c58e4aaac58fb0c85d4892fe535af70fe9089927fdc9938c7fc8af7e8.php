<?php

/* node_modules/fsevents/node_modules/extsprintf/README.md */
class __TwigTemplate_b41dab39dc3eaad7da66a60e0bbb5cf7d3177360ce740f123ded322396b36d67 extends Twig_Template
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
        $__internal_764b0b271f619864c52b12a614bcf48e911ba5112318c9f159752d571a070ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764b0b271f619864c52b12a614bcf48e911ba5112318c9f159752d571a070ada->enter($__internal_764b0b271f619864c52b12a614bcf48e911ba5112318c9f159752d571a070ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/extsprintf/README.md"));

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
";
        
        $__internal_764b0b271f619864c52b12a614bcf48e911ba5112318c9f159752d571a070ada->leave($__internal_764b0b271f619864c52b12a614bcf48e911ba5112318c9f159752d571a070ada_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/extsprintf/README.md";
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
", "node_modules/fsevents/node_modules/extsprintf/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/extsprintf/README.md");
    }
}
