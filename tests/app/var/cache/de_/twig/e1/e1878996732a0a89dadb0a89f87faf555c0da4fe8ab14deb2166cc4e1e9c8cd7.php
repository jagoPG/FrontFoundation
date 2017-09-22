<?php

/* node_modules/nan/tools/README.md */
class __TwigTemplate_3169dbef45ec8a04c097c12973bf282cbb76ad327906f663cb90678d27844d98 extends Twig_Template
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
        $__internal_4244affadd47b4e9edc906aa87e07290ee1df0828f432bdacfbe4d715d8d427b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4244affadd47b4e9edc906aa87e07290ee1df0828f432bdacfbe4d715d8d427b->enter($__internal_4244affadd47b4e9edc906aa87e07290ee1df0828f432bdacfbe4d715d8d427b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/nan/tools/README.md"));

        // line 1
        echo "1to2 naively converts source code files from NAN 1 to NAN 2. There will be erroneous conversions,
false positives and missed opportunities. The input files are rewritten in place. Make sure that
you have backups. You will have to manually review the changes afterwards and do some touchups.

```sh
\$ tools/1to2.js

  Usage: 1to2 [options] <file ...>

  Options:

    -h, --help     output usage information
    -V, --version  output the version number
```
";
        
        $__internal_4244affadd47b4e9edc906aa87e07290ee1df0828f432bdacfbe4d715d8d427b->leave($__internal_4244affadd47b4e9edc906aa87e07290ee1df0828f432bdacfbe4d715d8d427b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/nan/tools/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("1to2 naively converts source code files from NAN 1 to NAN 2. There will be erroneous conversions,
false positives and missed opportunities. The input files are rewritten in place. Make sure that
you have backups. You will have to manually review the changes afterwards and do some touchups.

```sh
\$ tools/1to2.js

  Usage: 1to2 [options] <file ...>

  Options:

    -h, --help     output usage information
    -V, --version  output the version number
```
", "node_modules/nan/tools/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/nan/tools/README.md");
    }
}
