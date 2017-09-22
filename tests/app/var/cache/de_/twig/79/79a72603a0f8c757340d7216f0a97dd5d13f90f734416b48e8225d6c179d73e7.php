<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/jumbotron.less */
class __TwigTemplate_8b105097e556d2d86f95ecb658ccc15a8fff338cde95cd49f729eeae83c67998 extends Twig_Template
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
        $__internal_fc2924b56a4069f027ab7451e49bed7574d8fcacfcdbd7d11fdb6f4159792600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2924b56a4069f027ab7451e49bed7574d8fcacfcdbd7d11fdb6f4159792600->enter($__internal_fc2924b56a4069f027ab7451e49bed7574d8fcacfcdbd7d11fdb6f4159792600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/jumbotron.less"));

        // line 1
        echo "//
// Jumbotron
// --------------------------------------------------


.jumbotron {
  padding: @jumbotron-padding;
  margin-bottom: @jumbotron-padding;
  font-size: @jumbotron-font-size;
  font-weight: 200;
  line-height: (@line-height-base * 1.5);
  color: @jumbotron-color;
  background-color: @jumbotron-bg;

  h1,
  .h1 {
    line-height: 1;
    color: @jumbotron-heading-color;
  }
  p {
    line-height: 1.4;
  }

  .container & {
    border-radius: @border-radius-large; // Only round corners at higher resolutions if contained in a container
  }

  .container {
    max-width: 100%;
  }

  @media screen and (min-width: @screen-sm-min) {
    padding-top:    (@jumbotron-padding * 1.6);
    padding-bottom: (@jumbotron-padding * 1.6);

    .container & {
      padding-left:  (@jumbotron-padding * 2);
      padding-right: (@jumbotron-padding * 2);
    }

    h1,
    .h1 {
      font-size: (@font-size-base * 4.5);
    }
  }
}
";
        
        $__internal_fc2924b56a4069f027ab7451e49bed7574d8fcacfcdbd7d11fdb6f4159792600->leave($__internal_fc2924b56a4069f027ab7451e49bed7574d8fcacfcdbd7d11fdb6f4159792600_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/jumbotron.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Jumbotron
// --------------------------------------------------


.jumbotron {
  padding: @jumbotron-padding;
  margin-bottom: @jumbotron-padding;
  font-size: @jumbotron-font-size;
  font-weight: 200;
  line-height: (@line-height-base * 1.5);
  color: @jumbotron-color;
  background-color: @jumbotron-bg;

  h1,
  .h1 {
    line-height: 1;
    color: @jumbotron-heading-color;
  }
  p {
    line-height: 1.4;
  }

  .container & {
    border-radius: @border-radius-large; // Only round corners at higher resolutions if contained in a container
  }

  .container {
    max-width: 100%;
  }

  @media screen and (min-width: @screen-sm-min) {
    padding-top:    (@jumbotron-padding * 1.6);
    padding-bottom: (@jumbotron-padding * 1.6);

    .container & {
      padding-left:  (@jumbotron-padding * 2);
      padding-right: (@jumbotron-padding * 2);
    }

    h1,
    .h1 {
      font-size: (@font-size-base * 4.5);
    }
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/jumbotron.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/jumbotron.less");
    }
}
