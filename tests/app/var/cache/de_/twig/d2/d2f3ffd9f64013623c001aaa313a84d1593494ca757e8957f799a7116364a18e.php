<?php

/* node_modules/parsleyjs/UPGRADE-2.2.md */
class __TwigTemplate_90f6f8b468a1656d0dad820ad7af0427555cf36fd80aae1c3d2e0adc121c27a5 extends Twig_Template
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
        $__internal_fe7729bf3162351411d8b5b730d8a3ab8738b7dd558f7af601051962dac0648e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7729bf3162351411d8b5b730d8a3ab8738b7dd558f7af601051962dac0648e->enter($__internal_fe7729bf3162351411d8b5b730d8a3ab8738b7dd558f7af601051962dac0648e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/UPGRADE-2.2.md"));

        // line 1
        echo "# UPGRADE FROM 2.1.x to 2.2.0

## Where's parsley.remote?

Both versions (remote and basic) of Parsley have been merged. There is now a single version that is remote & promise aware, and it is lighter than both of the 2.1.x versions.

## Compatibility

2.2.0 version should be compatible with 2.1.x except that you need to include `es5-shim` if you need compatibility with IE8.

Please check the console for **deprecation notices** and adapt your code accordingly.

Note that `type=\"number\"` now follows HTML5 spec. In particular, commas are no longer accepted. (#1037)

## Source changes

Parsley's source is now in EcmaScript 6.

The `i18n` folder is now part of the `dist` folder.
";
        
        $__internal_fe7729bf3162351411d8b5b730d8a3ab8738b7dd558f7af601051962dac0648e->leave($__internal_fe7729bf3162351411d8b5b730d8a3ab8738b7dd558f7af601051962dac0648e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/UPGRADE-2.2.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# UPGRADE FROM 2.1.x to 2.2.0

## Where's parsley.remote?

Both versions (remote and basic) of Parsley have been merged. There is now a single version that is remote & promise aware, and it is lighter than both of the 2.1.x versions.

## Compatibility

2.2.0 version should be compatible with 2.1.x except that you need to include `es5-shim` if you need compatibility with IE8.

Please check the console for **deprecation notices** and adapt your code accordingly.

Note that `type=\"number\"` now follows HTML5 spec. In particular, commas are no longer accepted. (#1037)

## Source changes

Parsley's source is now in EcmaScript 6.

The `i18n` folder is now part of the `dist` folder.
", "node_modules/parsleyjs/UPGRADE-2.2.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/UPGRADE-2.2.md");
    }
}
