<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/responsive-utilities.less */
class __TwigTemplate_fd25f72de19adde788ed67e652f88531a44905d0f2a3c23a3141be9a14c7d435 extends Twig_Template
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
        $__internal_388ef32d57bf81c6114d5dffb9c518d5f5b9565a2a878ca8ba7b7ce11435561a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388ef32d57bf81c6114d5dffb9c518d5f5b9565a2a878ca8ba7b7ce11435561a->enter($__internal_388ef32d57bf81c6114d5dffb9c518d5f5b9565a2a878ca8ba7b7ce11435561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/responsive-utilities.less"));

        // line 1
        echo "//
// Responsive: Utility classes
// --------------------------------------------------


// IE10 in Windows (Phone) 8
//
// Support for responsive views via media queries is kind of borked in IE10, for
// Surface/desktop in split view and for Windows Phone 8. This particular fix
// must be accompanied by a snippet of JavaScript to sniff the user agent and
// apply some conditional CSS to *only* the Surface/desktop Windows 8. Look at
// our Getting Started page for more information on this bug.
//
// For more information, see the following:
//
// Issue: https://github.com/twbs/bootstrap/issues/10497
// Docs: http://getbootstrap.com/getting-started/#browsers
// Source: http://timkadlec.com/2012/10/ie10-snap-mode-and-responsive-design/

@-ms-viewport {
  width: device-width;
}


// Visibility utilities

.visible-xs {
  .responsive-invisibility();
  @media (max-width: @screen-xs-max) {
    .responsive-visibility();
  }
  &.visible-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-visibility();
    }
  }
  &.visible-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-visibility();
    }
  }
  &.visible-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-visibility();
    }
  }
}
.visible-sm {
  .responsive-invisibility();
  &.visible-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-visibility();
    }
  }
  @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
    .responsive-visibility();
  }
  &.visible-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-visibility();
    }
  }
  &.visible-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-visibility();
    }
  }
}
.visible-md {
  .responsive-invisibility();
  &.visible-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-visibility();
    }
  }
  &.visible-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-visibility();
    }
  }
  @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
    .responsive-visibility();
  }
  &.visible-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-visibility();
    }
  }
}
.visible-lg {
  .responsive-invisibility();
  &.visible-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-visibility();
    }
  }
  &.visible-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-visibility();
    }
  }
  &.visible-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-visibility();
    }
  }
  @media (min-width: @screen-lg-min) {
    .responsive-visibility();
  }
}

.hidden-xs {
  .responsive-visibility();
  @media (max-width: @screen-xs-max) {
    .responsive-invisibility();
  }
  &.hidden-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-invisibility();
    }
  }
}
.hidden-sm {
  .responsive-visibility();
  &.hidden-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-invisibility();
    }
  }
  @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
    .responsive-invisibility();
  }
  &.hidden-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-invisibility();
    }
  }
}
.hidden-md {
  .responsive-visibility();
  &.hidden-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-invisibility();
    }
  }
  @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
    .responsive-invisibility();
  }
  &.hidden-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-invisibility();
    }
  }
}
.hidden-lg {
  .responsive-visibility();
  &.hidden-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-invisibility();
    }
  }
  @media (min-width: @screen-lg-min) {
    .responsive-invisibility();
  }
}

// Print utilities
.visible-print {
  .responsive-invisibility();
}

@media print {
  .visible-print {
    .responsive-visibility();
  }
  .hidden-print {
    .responsive-invisibility();
  }
}
";
        
        $__internal_388ef32d57bf81c6114d5dffb9c518d5f5b9565a2a878ca8ba7b7ce11435561a->leave($__internal_388ef32d57bf81c6114d5dffb9c518d5f5b9565a2a878ca8ba7b7ce11435561a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/responsive-utilities.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Responsive: Utility classes
// --------------------------------------------------


// IE10 in Windows (Phone) 8
//
// Support for responsive views via media queries is kind of borked in IE10, for
// Surface/desktop in split view and for Windows Phone 8. This particular fix
// must be accompanied by a snippet of JavaScript to sniff the user agent and
// apply some conditional CSS to *only* the Surface/desktop Windows 8. Look at
// our Getting Started page for more information on this bug.
//
// For more information, see the following:
//
// Issue: https://github.com/twbs/bootstrap/issues/10497
// Docs: http://getbootstrap.com/getting-started/#browsers
// Source: http://timkadlec.com/2012/10/ie10-snap-mode-and-responsive-design/

@-ms-viewport {
  width: device-width;
}


// Visibility utilities

.visible-xs {
  .responsive-invisibility();
  @media (max-width: @screen-xs-max) {
    .responsive-visibility();
  }
  &.visible-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-visibility();
    }
  }
  &.visible-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-visibility();
    }
  }
  &.visible-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-visibility();
    }
  }
}
.visible-sm {
  .responsive-invisibility();
  &.visible-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-visibility();
    }
  }
  @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
    .responsive-visibility();
  }
  &.visible-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-visibility();
    }
  }
  &.visible-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-visibility();
    }
  }
}
.visible-md {
  .responsive-invisibility();
  &.visible-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-visibility();
    }
  }
  &.visible-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-visibility();
    }
  }
  @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
    .responsive-visibility();
  }
  &.visible-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-visibility();
    }
  }
}
.visible-lg {
  .responsive-invisibility();
  &.visible-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-visibility();
    }
  }
  &.visible-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-visibility();
    }
  }
  &.visible-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-visibility();
    }
  }
  @media (min-width: @screen-lg-min) {
    .responsive-visibility();
  }
}

.hidden-xs {
  .responsive-visibility();
  @media (max-width: @screen-xs-max) {
    .responsive-invisibility();
  }
  &.hidden-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-invisibility();
    }
  }
}
.hidden-sm {
  .responsive-visibility();
  &.hidden-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-invisibility();
    }
  }
  @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
    .responsive-invisibility();
  }
  &.hidden-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-invisibility();
    }
  }
}
.hidden-md {
  .responsive-visibility();
  &.hidden-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-invisibility();
    }
  }
  @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
    .responsive-invisibility();
  }
  &.hidden-lg {
    @media (min-width: @screen-lg-min) {
      .responsive-invisibility();
    }
  }
}
.hidden-lg {
  .responsive-visibility();
  &.hidden-xs {
    @media (max-width: @screen-xs-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-sm {
    @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
      .responsive-invisibility();
    }
  }
  &.hidden-md {
    @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
      .responsive-invisibility();
    }
  }
  @media (min-width: @screen-lg-min) {
    .responsive-invisibility();
  }
}

// Print utilities
.visible-print {
  .responsive-invisibility();
}

@media print {
  .visible-print {
    .responsive-visibility();
  }
  .hidden-print {
    .responsive-invisibility();
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/responsive-utilities.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/responsive-utilities.less");
    }
}
