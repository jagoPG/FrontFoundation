<?php

/* node_modules/npmlog/CHANGELOG.md */
class __TwigTemplate_e7391cf4f92c194f11ba6bcb4ebf6b83a1668f13037388547f8df74e2fcb9c7b extends Twig_Template
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
        $__internal_8b72ec55a62a2ad80ac1999c89e733b5e03166e99845f459112603b10f69186b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b72ec55a62a2ad80ac1999c89e733b5e03166e99845f459112603b10f69186b->enter($__internal_8b72ec55a62a2ad80ac1999c89e733b5e03166e99845f459112603b10f69186b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/npmlog/CHANGELOG.md"));

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
        
        $__internal_8b72ec55a62a2ad80ac1999c89e733b5e03166e99845f459112603b10f69186b->leave($__internal_8b72ec55a62a2ad80ac1999c89e733b5e03166e99845f459112603b10f69186b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/npmlog/CHANGELOG.md";
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
", "node_modules/npmlog/CHANGELOG.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/npmlog/CHANGELOG.md");
    }
}
