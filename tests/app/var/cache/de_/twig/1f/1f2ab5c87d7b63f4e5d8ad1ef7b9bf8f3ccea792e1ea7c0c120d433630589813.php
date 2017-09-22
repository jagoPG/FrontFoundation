<?php

/* node_modules/fsevents/node_modules/npmlog/CHANGELOG.md */
class __TwigTemplate_51f24ed2fc42e48d16a56ab64006ed7375b690c39dc07472fd5f1a2c7025d2d3 extends Twig_Template
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
        $__internal_cf0e786fb914ab1368854502a827b7f5872ea0a23838c69a6b48569ac4d94f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0e786fb914ab1368854502a827b7f5872ea0a23838c69a6b48569ac4d94f06->enter($__internal_cf0e786fb914ab1368854502a827b7f5872ea0a23838c69a6b48569ac4d94f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/npmlog/CHANGELOG.md"));

        // line 1
        echo "### v4.0.2

* Added installation instructions.

### v4.0.1

* Fix bugs where `log.progressEnabled` got out of sync with how `gauge` kept
  track of these things resulting in a progressbar that couldn't be disabled.

### v4.0.0

* Allow creating log levels that are an empty string or 0.

### v3.1.2

* Update to `gauge@1.6.0` adding support for default values for template
  items.

### v3.1.1

* Update to `gauge@1.5.3` to fix to `1.x` compatibility when it comes to
  when a progress bar is enabled.  In `1.x` if you didn't have a TTY the
  progress bar was never shown.  In `2.x` it merely defaults to disabled,
  but you can enable it explicitly if you still want progress updates.

### v3.1.0

* Update to `gauge@2.5.2`:
  * Updates the `signal-exit` dependency which fixes an incompatibility with
    the node profiler.
  * Uses externalizes its ansi code generation in `console-control-strings`
* Make the default progress bar include the last line printed, colored as it
  would be when printing to a tty.

### v3.0.0

* Switch to `gauge@2.0.0`, for better performance, better look.
* Set stderr/stdout blocking if they're tty's, so that we can hide a
  progress bar going to stderr and then safely print to stdout.  Without
  this the two can end up overlapping producing confusing and sometimes
  corrupted output.

### v2.0.0

* Make the `error` event non-fatal so that folks can use it as a prefix.

### v1.0.0

* Add progress bar with `gauge@1.1.0`
";
        
        $__internal_cf0e786fb914ab1368854502a827b7f5872ea0a23838c69a6b48569ac4d94f06->leave($__internal_cf0e786fb914ab1368854502a827b7f5872ea0a23838c69a6b48569ac4d94f06_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/npmlog/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("### v4.0.2

* Added installation instructions.

### v4.0.1

* Fix bugs where `log.progressEnabled` got out of sync with how `gauge` kept
  track of these things resulting in a progressbar that couldn't be disabled.

### v4.0.0

* Allow creating log levels that are an empty string or 0.

### v3.1.2

* Update to `gauge@1.6.0` adding support for default values for template
  items.

### v3.1.1

* Update to `gauge@1.5.3` to fix to `1.x` compatibility when it comes to
  when a progress bar is enabled.  In `1.x` if you didn't have a TTY the
  progress bar was never shown.  In `2.x` it merely defaults to disabled,
  but you can enable it explicitly if you still want progress updates.

### v3.1.0

* Update to `gauge@2.5.2`:
  * Updates the `signal-exit` dependency which fixes an incompatibility with
    the node profiler.
  * Uses externalizes its ansi code generation in `console-control-strings`
* Make the default progress bar include the last line printed, colored as it
  would be when printing to a tty.

### v3.0.0

* Switch to `gauge@2.0.0`, for better performance, better look.
* Set stderr/stdout blocking if they're tty's, so that we can hide a
  progress bar going to stderr and then safely print to stdout.  Without
  this the two can end up overlapping producing confusing and sometimes
  corrupted output.

### v2.0.0

* Make the `error` event non-fatal so that folks can use it as a prefix.

### v1.0.0

* Add progress bar with `gauge@1.1.0`
", "node_modules/fsevents/node_modules/npmlog/CHANGELOG.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/npmlog/CHANGELOG.md");
    }
}
