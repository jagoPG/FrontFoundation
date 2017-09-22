<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/breadcrumbs.less */
class __TwigTemplate_22ed24b995e65d4377c0f266dda63dea3996821dbe47a2bbdff65883c32358f8 extends Twig_Template
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
        $__internal_8cd896d403b5182e1285c21aa117321318768908c9bf6f0f5d49dd367ca60898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd896d403b5182e1285c21aa117321318768908c9bf6f0f5d49dd367ca60898->enter($__internal_8cd896d403b5182e1285c21aa117321318768908c9bf6f0f5d49dd367ca60898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/breadcrumbs.less"));

        // line 1
        echo "//
// Breadcrumbs
// --------------------------------------------------


.breadcrumb {
  padding: 8px 15px;
  margin-bottom: @line-height-computed;
  list-style: none;
  background-color: @breadcrumb-bg;
  border-radius: @border-radius-base;
  > li {
    display: inline-block;
    + li:before {
      content: \"@{breadcrumb-separator}\\00a0\"; // Unicode space added since inline-block means non-collapsing white-space
      padding: 0 5px;
      color: @breadcrumb-color;
    }
  }
  > .active {
    color: @breadcrumb-active-color;
  }
}
";
        
        $__internal_8cd896d403b5182e1285c21aa117321318768908c9bf6f0f5d49dd367ca60898->leave($__internal_8cd896d403b5182e1285c21aa117321318768908c9bf6f0f5d49dd367ca60898_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/breadcrumbs.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Breadcrumbs
// --------------------------------------------------


.breadcrumb {
  padding: 8px 15px;
  margin-bottom: @line-height-computed;
  list-style: none;
  background-color: @breadcrumb-bg;
  border-radius: @border-radius-base;
  > li {
    display: inline-block;
    + li:before {
      content: \"@{breadcrumb-separator}\\00a0\"; // Unicode space added since inline-block means non-collapsing white-space
      padding: 0 5px;
      color: @breadcrumb-color;
    }
  }
  > .active {
    color: @breadcrumb-active-color;
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/breadcrumbs.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/breadcrumbs.less");
    }
}
