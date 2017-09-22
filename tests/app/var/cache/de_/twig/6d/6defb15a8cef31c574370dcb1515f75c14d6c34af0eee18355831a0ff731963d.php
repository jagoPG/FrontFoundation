<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/thumbnails.less */
class __TwigTemplate_19135726ea97c5b5c35e00e06adada751744f9ba854d44c403f1ccac03b63996 extends Twig_Template
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
        $__internal_5db67810c71be171436ec8694bbfd848a8a020a10cc734215e6dd2afdcd28b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db67810c71be171436ec8694bbfd848a8a020a10cc734215e6dd2afdcd28b86->enter($__internal_5db67810c71be171436ec8694bbfd848a8a020a10cc734215e6dd2afdcd28b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/thumbnails.less"));

        // line 1
        echo "//
// Thumbnails
// --------------------------------------------------


// Mixin and adjust the regular image class
.thumbnail {
  display: block;
  padding: @thumbnail-padding;
  margin-bottom: @line-height-computed;
  line-height: @line-height-base;
  background-color: @thumbnail-bg;
  border: 1px solid @thumbnail-border;
  border-radius: @thumbnail-border-radius;
  .transition(all .2s ease-in-out);

  > img,
  a > img {
    .img-responsive();
    margin-left: auto;
    margin-right: auto;
  }

  // Add a hover state for linked versions only
  a&:hover,
  a&:focus,
  a&.active {
    border-color: @link-color;
  }

  // Image captions
  .caption {
    padding: @thumbnail-caption-padding;
    color: @thumbnail-caption-color;
  }
}
";
        
        $__internal_5db67810c71be171436ec8694bbfd848a8a020a10cc734215e6dd2afdcd28b86->leave($__internal_5db67810c71be171436ec8694bbfd848a8a020a10cc734215e6dd2afdcd28b86_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/thumbnails.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Thumbnails
// --------------------------------------------------


// Mixin and adjust the regular image class
.thumbnail {
  display: block;
  padding: @thumbnail-padding;
  margin-bottom: @line-height-computed;
  line-height: @line-height-base;
  background-color: @thumbnail-bg;
  border: 1px solid @thumbnail-border;
  border-radius: @thumbnail-border-radius;
  .transition(all .2s ease-in-out);

  > img,
  a > img {
    .img-responsive();
    margin-left: auto;
    margin-right: auto;
  }

  // Add a hover state for linked versions only
  a&:hover,
  a&:focus,
  a&.active {
    border-color: @link-color;
  }

  // Image captions
  .caption {
    padding: @thumbnail-caption-padding;
    color: @thumbnail-caption-color;
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/thumbnails.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/thumbnails.less");
    }
}
