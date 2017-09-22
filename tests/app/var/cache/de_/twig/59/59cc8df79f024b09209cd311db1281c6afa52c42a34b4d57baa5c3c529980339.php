<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/scaffolding.less */
class __TwigTemplate_bdee4cf9265321409e6eec6b7cd51ba6e8e1f03775f548c187ef16eb07a5fb76 extends Twig_Template
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
        $__internal_212919ef29ba3acd9abdf8d6277b4423d576ff65a5047fda5e4d8231f8ddc474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212919ef29ba3acd9abdf8d6277b4423d576ff65a5047fda5e4d8231f8ddc474->enter($__internal_212919ef29ba3acd9abdf8d6277b4423d576ff65a5047fda5e4d8231f8ddc474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/scaffolding.less"));

        // line 1
        echo "//
// Scaffolding
// --------------------------------------------------


// Reset the box-sizing

*,
*:before,
*:after {
  .box-sizing(border-box);
}


// Body reset

html {
  font-size: 62.5%;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
}

body {
  font-family: @font-family-base;
  font-size: @font-size-base;
  line-height: @line-height-base;
  color: @text-color;
  background-color: @body-bg;
}

// Reset fonts for relevant elements
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}


// Links

a {
  color: @link-color;
  text-decoration: none;

  &:hover,
  &:focus {
    color: @link-hover-color;
    text-decoration: underline;
  }

  &:focus {
    .tab-focus();
  }
}


// Images

img {
  vertical-align: middle;
}

// Responsive images (ensure images don't scale beyond their parents)
.img-responsive {
  .img-responsive();
}

// Rounded corners
.img-rounded {
  border-radius: @border-radius-large;
}

// Image thumbnails
//
// Heads up! This is mixin-ed into thumbnails.less for `.thumbnail`.
.img-thumbnail {
  padding: @thumbnail-padding;
  line-height: @line-height-base;
  background-color: @thumbnail-bg;
  border: 1px solid @thumbnail-border;
  border-radius: @thumbnail-border-radius;
  .transition(all .2s ease-in-out);

  // Keep them at most 100% wide
  .img-responsive(inline-block);
}

// Perfect circle
.img-circle {
  border-radius: 50%; // set radius in percents
}


// Horizontal rules

hr {
  margin-top:    @line-height-computed;
  margin-bottom: @line-height-computed;
  border: 0;
  border-top: 1px solid @hr-border;
}


// Only display content to screen readers
//
// See: http://a11yproject.com/posts/how-to-hide-content/

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}
";
        
        $__internal_212919ef29ba3acd9abdf8d6277b4423d576ff65a5047fda5e4d8231f8ddc474->leave($__internal_212919ef29ba3acd9abdf8d6277b4423d576ff65a5047fda5e4d8231f8ddc474_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/scaffolding.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Scaffolding
// --------------------------------------------------


// Reset the box-sizing

*,
*:before,
*:after {
  .box-sizing(border-box);
}


// Body reset

html {
  font-size: 62.5%;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
}

body {
  font-family: @font-family-base;
  font-size: @font-size-base;
  line-height: @line-height-base;
  color: @text-color;
  background-color: @body-bg;
}

// Reset fonts for relevant elements
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}


// Links

a {
  color: @link-color;
  text-decoration: none;

  &:hover,
  &:focus {
    color: @link-hover-color;
    text-decoration: underline;
  }

  &:focus {
    .tab-focus();
  }
}


// Images

img {
  vertical-align: middle;
}

// Responsive images (ensure images don't scale beyond their parents)
.img-responsive {
  .img-responsive();
}

// Rounded corners
.img-rounded {
  border-radius: @border-radius-large;
}

// Image thumbnails
//
// Heads up! This is mixin-ed into thumbnails.less for `.thumbnail`.
.img-thumbnail {
  padding: @thumbnail-padding;
  line-height: @line-height-base;
  background-color: @thumbnail-bg;
  border: 1px solid @thumbnail-border;
  border-radius: @thumbnail-border-radius;
  .transition(all .2s ease-in-out);

  // Keep them at most 100% wide
  .img-responsive(inline-block);
}

// Perfect circle
.img-circle {
  border-radius: 50%; // set radius in percents
}


// Horizontal rules

hr {
  margin-top:    @line-height-computed;
  margin-bottom: @line-height-computed;
  border: 0;
  border-top: 1px solid @hr-border;
}


// Only display content to screen readers
//
// See: http://a11yproject.com/posts/how-to-hide-content/

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/scaffolding.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/scaffolding.less");
    }
}
