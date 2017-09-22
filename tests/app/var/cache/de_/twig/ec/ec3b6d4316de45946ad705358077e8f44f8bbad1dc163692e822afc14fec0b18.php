<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/modals.less */
class __TwigTemplate_8d813d9d01ad655ac6d56b765c5fcb34d1abb6f18eda2e132d0c8feb0bf881de extends Twig_Template
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
        $__internal_1ceef841b06103a0be0630a861284048e3af4f9a310c7aa771fb50f88e86985a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceef841b06103a0be0630a861284048e3af4f9a310c7aa771fb50f88e86985a->enter($__internal_1ceef841b06103a0be0630a861284048e3af4f9a310c7aa771fb50f88e86985a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/modals.less"));

        // line 1
        echo "//
// Modals
// --------------------------------------------------

// .modal-open      - body class for killing the scroll
// .modal           - container to scroll within
// .modal-dialog    - positioning shell for the actual modal
// .modal-content   - actual modal w/ bg and corners and shit

// Kill the scroll on the body
.modal-open {
  overflow: hidden;
}

// Container that the modal scrolls within
.modal {
  display: none;
  overflow: auto;
  overflow-y: scroll;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: @zindex-modal-background;

  // When fading in the modal, animate it to slide down
  &.fade .modal-dialog {
    .translate(0, -25%);
    .transition-transform(~\"0.3s ease-out\");
  }
  &.in .modal-dialog { .translate(0, 0)}
}

// Shell div to position the modal with bottom padding
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
  z-index: (@zindex-modal-background + 10);
}

// Actual modal
.modal-content {
  position: relative;
  background-color: @modal-content-bg;
  border: 1px solid @modal-content-fallback-border-color; //old browsers fallback (ie8 etc)
  border: 1px solid @modal-content-border-color;
  border-radius: @border-radius-large;
  .box-shadow(0 3px 9px rgba(0,0,0,.5));
  background-clip: padding-box;
  // Remove focus outline from opened modal
  outline: none;
}

// Modal background
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: (@zindex-modal-background - 10);
  background-color: @modal-backdrop-bg;
  // Fade for backdrop
  &.fade { .opacity(0); }
  &.in { .opacity(.5); }
}

// Modal header
// Top section of the modal w/ title and dismiss
.modal-header {
  padding: @modal-title-padding;
  border-bottom: 1px solid @modal-header-border-color;
  min-height: (@modal-title-padding + @modal-title-line-height);
}
// Close icon
.modal-header .close {
  margin-top: -2px;
}

// Title text within header
.modal-title {
  margin: 0;
  line-height: @modal-title-line-height;
}

// Modal body
// Where all modal content resides (sibling of .modal-header and .modal-footer)
.modal-body {
  position: relative;
  padding: @modal-inner-padding;
}

// Footer (for actions)
.modal-footer {
  margin-top: 15px;
  padding: (@modal-inner-padding - 1) @modal-inner-padding @modal-inner-padding;
  text-align: right; // right align buttons
  border-top: 1px solid @modal-footer-border-color;
  .clearfix(); // clear it in case folks use .pull-* classes on buttons

  // Properly space out buttons
  .btn + .btn {
    margin-left: 5px;
    margin-bottom: 0; // account for input[type=\"submit\"] which gets the bottom margin like all other inputs
  }
  // but override that for button groups
  .btn-group .btn + .btn {
    margin-left: -1px;
  }
  // and override it for block buttons as well
  .btn-block + .btn-block {
    margin-left: 0;
  }
}

// Scale up the modal
@media screen and (min-width: @screen-sm-min) {

  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    .box-shadow(0 5px 15px rgba(0,0,0,.5));
  }

}
";
        
        $__internal_1ceef841b06103a0be0630a861284048e3af4f9a310c7aa771fb50f88e86985a->leave($__internal_1ceef841b06103a0be0630a861284048e3af4f9a310c7aa771fb50f88e86985a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/modals.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Modals
// --------------------------------------------------

// .modal-open      - body class for killing the scroll
// .modal           - container to scroll within
// .modal-dialog    - positioning shell for the actual modal
// .modal-content   - actual modal w/ bg and corners and shit

// Kill the scroll on the body
.modal-open {
  overflow: hidden;
}

// Container that the modal scrolls within
.modal {
  display: none;
  overflow: auto;
  overflow-y: scroll;
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: @zindex-modal-background;

  // When fading in the modal, animate it to slide down
  &.fade .modal-dialog {
    .translate(0, -25%);
    .transition-transform(~\"0.3s ease-out\");
  }
  &.in .modal-dialog { .translate(0, 0)}
}

// Shell div to position the modal with bottom padding
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
  z-index: (@zindex-modal-background + 10);
}

// Actual modal
.modal-content {
  position: relative;
  background-color: @modal-content-bg;
  border: 1px solid @modal-content-fallback-border-color; //old browsers fallback (ie8 etc)
  border: 1px solid @modal-content-border-color;
  border-radius: @border-radius-large;
  .box-shadow(0 3px 9px rgba(0,0,0,.5));
  background-clip: padding-box;
  // Remove focus outline from opened modal
  outline: none;
}

// Modal background
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: (@zindex-modal-background - 10);
  background-color: @modal-backdrop-bg;
  // Fade for backdrop
  &.fade { .opacity(0); }
  &.in { .opacity(.5); }
}

// Modal header
// Top section of the modal w/ title and dismiss
.modal-header {
  padding: @modal-title-padding;
  border-bottom: 1px solid @modal-header-border-color;
  min-height: (@modal-title-padding + @modal-title-line-height);
}
// Close icon
.modal-header .close {
  margin-top: -2px;
}

// Title text within header
.modal-title {
  margin: 0;
  line-height: @modal-title-line-height;
}

// Modal body
// Where all modal content resides (sibling of .modal-header and .modal-footer)
.modal-body {
  position: relative;
  padding: @modal-inner-padding;
}

// Footer (for actions)
.modal-footer {
  margin-top: 15px;
  padding: (@modal-inner-padding - 1) @modal-inner-padding @modal-inner-padding;
  text-align: right; // right align buttons
  border-top: 1px solid @modal-footer-border-color;
  .clearfix(); // clear it in case folks use .pull-* classes on buttons

  // Properly space out buttons
  .btn + .btn {
    margin-left: 5px;
    margin-bottom: 0; // account for input[type=\"submit\"] which gets the bottom margin like all other inputs
  }
  // but override that for button groups
  .btn-group .btn + .btn {
    margin-left: -1px;
  }
  // and override it for block buttons as well
  .btn-block + .btn-block {
    margin-left: 0;
  }
}

// Scale up the modal
@media screen and (min-width: @screen-sm-min) {

  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    .box-shadow(0 5px 15px rgba(0,0,0,.5));
  }

}
", "node_modules/parsleyjs/bower_components/bootstrap/less/modals.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/modals.less");
    }
}
