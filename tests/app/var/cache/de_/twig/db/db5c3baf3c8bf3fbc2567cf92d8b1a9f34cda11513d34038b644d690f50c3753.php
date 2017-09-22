<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/buttons.less */
class __TwigTemplate_b76a4aeb6ef38b0ec42b6ec47155c7136f1063f7de7c6dff0b0a6b420c043bfd extends Twig_Template
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
        $__internal_6350ce47340b6af297f977fc9e1e0a4a2dcb7f6aa3b93f2935d288352b967ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6350ce47340b6af297f977fc9e1e0a4a2dcb7f6aa3b93f2935d288352b967ce6->enter($__internal_6350ce47340b6af297f977fc9e1e0a4a2dcb7f6aa3b93f2935d288352b967ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/buttons.less"));

        // line 1
        echo "//
// Buttons
// --------------------------------------------------


// Base styles
// --------------------------------------------------

.btn {
  display: inline-block;
  margin-bottom: 0; // For input.btn
  font-weight: @btn-font-weight;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  background-image: none; // Reset unusual Firefox-on-Android default style; see https://github.com/necolas/normalize.css/issues/214
  border: 1px solid transparent;
  white-space: nowrap;
  .button-size(@padding-base-vertical; @padding-base-horizontal; @font-size-base; @line-height-base; @border-radius-base);
  .user-select(none);

  &:focus {
    .tab-focus();
  }

  &:hover,
  &:focus {
    color: @btn-default-color;
    text-decoration: none;
  }

  &:active,
  &.active {
    outline: 0;
    background-image: none;
    .box-shadow(inset 0 3px 5px rgba(0,0,0,.125));
  }

  &.disabled,
  &[disabled],
  fieldset[disabled] & {
    cursor: not-allowed;
    pointer-events: none; // Future-proof disabling of clicks
    .opacity(.65);
    .box-shadow(none);
  }
}


// Alternate buttons
// --------------------------------------------------

.btn-default {
  .button-variant(@btn-default-color; @btn-default-bg; @btn-default-border);
}
.btn-primary {
  .button-variant(@btn-primary-color; @btn-primary-bg; @btn-primary-border);
}
// Warning appears as orange
.btn-warning {
  .button-variant(@btn-warning-color; @btn-warning-bg; @btn-warning-border);
}
// Danger and error appear as red
.btn-danger {
  .button-variant(@btn-danger-color; @btn-danger-bg; @btn-danger-border);
}
// Success appears as green
.btn-success {
  .button-variant(@btn-success-color; @btn-success-bg; @btn-success-border);
}
// Info appears as blue-green
.btn-info {
  .button-variant(@btn-info-color; @btn-info-bg; @btn-info-border);
}


// Link buttons
// -------------------------

// Make a button look and behave like a link
.btn-link {
  color: @link-color;
  font-weight: normal;
  cursor: pointer;
  border-radius: 0;

  &,
  &:active,
  &[disabled],
  fieldset[disabled] & {
    background-color: transparent;
    .box-shadow(none);
  }
  &,
  &:hover,
  &:focus,
  &:active {
    border-color: transparent;
  }
  &:hover,
  &:focus {
    color: @link-hover-color;
    text-decoration: underline;
    background-color: transparent;
  }
  &[disabled],
  fieldset[disabled] & {
    &:hover,
    &:focus {
      color: @btn-link-disabled-color;
      text-decoration: none;
    }
  }
}


// Button Sizes
// --------------------------------------------------

.btn-lg {
  // line-height: ensure even-numbered height of button next to large input
  .button-size(@padding-large-vertical; @padding-large-horizontal; @font-size-large; @line-height-large; @border-radius-large);
}
.btn-sm {
  // line-height: ensure proper height of button next to small input
  .button-size(@padding-small-vertical; @padding-small-horizontal; @font-size-small; @line-height-small; @border-radius-small);
}
.btn-xs {
  .button-size(@padding-xs-vertical; @padding-xs-horizontal; @font-size-small; @line-height-small; @border-radius-small);
}


// Block button
// --------------------------------------------------

.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

// Vertically space out multiple block buttons
.btn-block + .btn-block {
  margin-top: 5px;
}

// Specificity overrides
input[type=\"submit\"],
input[type=\"reset\"],
input[type=\"button\"] {
  &.btn-block {
    width: 100%;
  }
}
";
        
        $__internal_6350ce47340b6af297f977fc9e1e0a4a2dcb7f6aa3b93f2935d288352b967ce6->leave($__internal_6350ce47340b6af297f977fc9e1e0a4a2dcb7f6aa3b93f2935d288352b967ce6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/buttons.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Buttons
// --------------------------------------------------


// Base styles
// --------------------------------------------------

.btn {
  display: inline-block;
  margin-bottom: 0; // For input.btn
  font-weight: @btn-font-weight;
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  background-image: none; // Reset unusual Firefox-on-Android default style; see https://github.com/necolas/normalize.css/issues/214
  border: 1px solid transparent;
  white-space: nowrap;
  .button-size(@padding-base-vertical; @padding-base-horizontal; @font-size-base; @line-height-base; @border-radius-base);
  .user-select(none);

  &:focus {
    .tab-focus();
  }

  &:hover,
  &:focus {
    color: @btn-default-color;
    text-decoration: none;
  }

  &:active,
  &.active {
    outline: 0;
    background-image: none;
    .box-shadow(inset 0 3px 5px rgba(0,0,0,.125));
  }

  &.disabled,
  &[disabled],
  fieldset[disabled] & {
    cursor: not-allowed;
    pointer-events: none; // Future-proof disabling of clicks
    .opacity(.65);
    .box-shadow(none);
  }
}


// Alternate buttons
// --------------------------------------------------

.btn-default {
  .button-variant(@btn-default-color; @btn-default-bg; @btn-default-border);
}
.btn-primary {
  .button-variant(@btn-primary-color; @btn-primary-bg; @btn-primary-border);
}
// Warning appears as orange
.btn-warning {
  .button-variant(@btn-warning-color; @btn-warning-bg; @btn-warning-border);
}
// Danger and error appear as red
.btn-danger {
  .button-variant(@btn-danger-color; @btn-danger-bg; @btn-danger-border);
}
// Success appears as green
.btn-success {
  .button-variant(@btn-success-color; @btn-success-bg; @btn-success-border);
}
// Info appears as blue-green
.btn-info {
  .button-variant(@btn-info-color; @btn-info-bg; @btn-info-border);
}


// Link buttons
// -------------------------

// Make a button look and behave like a link
.btn-link {
  color: @link-color;
  font-weight: normal;
  cursor: pointer;
  border-radius: 0;

  &,
  &:active,
  &[disabled],
  fieldset[disabled] & {
    background-color: transparent;
    .box-shadow(none);
  }
  &,
  &:hover,
  &:focus,
  &:active {
    border-color: transparent;
  }
  &:hover,
  &:focus {
    color: @link-hover-color;
    text-decoration: underline;
    background-color: transparent;
  }
  &[disabled],
  fieldset[disabled] & {
    &:hover,
    &:focus {
      color: @btn-link-disabled-color;
      text-decoration: none;
    }
  }
}


// Button Sizes
// --------------------------------------------------

.btn-lg {
  // line-height: ensure even-numbered height of button next to large input
  .button-size(@padding-large-vertical; @padding-large-horizontal; @font-size-large; @line-height-large; @border-radius-large);
}
.btn-sm {
  // line-height: ensure proper height of button next to small input
  .button-size(@padding-small-vertical; @padding-small-horizontal; @font-size-small; @line-height-small; @border-radius-small);
}
.btn-xs {
  .button-size(@padding-xs-vertical; @padding-xs-horizontal; @font-size-small; @line-height-small; @border-radius-small);
}


// Block button
// --------------------------------------------------

.btn-block {
  display: block;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

// Vertically space out multiple block buttons
.btn-block + .btn-block {
  margin-top: 5px;
}

// Specificity overrides
input[type=\"submit\"],
input[type=\"reset\"],
input[type=\"button\"] {
  &.btn-block {
    width: 100%;
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/buttons.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/buttons.less");
    }
}
