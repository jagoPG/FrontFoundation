<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/input-groups.less */
class __TwigTemplate_2a5d6a53a832ce21ef1f7ff42c5e2a5fe6b33930fee7177c42290d519bf86888 extends Twig_Template
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
        $__internal_f5f5a018752a5e59671260ac784b68606bc2046272947a85758bab88416ba47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f5a018752a5e59671260ac784b68606bc2046272947a85758bab88416ba47c->enter($__internal_f5f5a018752a5e59671260ac784b68606bc2046272947a85758bab88416ba47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/input-groups.less"));

        // line 1
        echo "//
// Input groups
// --------------------------------------------------

// Base styles
// -------------------------
.input-group {
  position: relative; // For dropdowns
  display: table;
  border-collapse: separate; // prevent input groups from inheriting border styles from table cells when placed within a table

  // Undo padding and float of grid classes
  &[class*=\"col-\"] {
    float: none;
    padding-left: 0;
    padding-right: 0;
  }

  .form-control {
    width: 100%;
    margin-bottom: 0;
  }
}

// Sizing options
//
// Remix the default form control sizing classes into new ones for easier
// manipulation.

.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn { .input-lg(); }
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn { .input-sm(); }


// Display as table-cell
// -------------------------
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;

  &:not(:first-child):not(:last-child) {
    border-radius: 0;
  }
}
// Addon and addon wrapper for buttons
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle; // Match the inputs
}

// Text input groups
// -------------------------
.input-group-addon {
  padding: @padding-base-vertical @padding-base-horizontal;
  font-size: @font-size-base;
  font-weight: normal;
  line-height: 1;
  color: @input-color;
  text-align: center;
  background-color: @input-group-addon-bg;
  border: 1px solid @input-group-addon-border-color;
  border-radius: @border-radius-base;

  // Sizing
  &.input-sm {
    padding: @padding-small-vertical @padding-small-horizontal;
    font-size: @font-size-small;
    border-radius: @border-radius-small;
  }
  &.input-lg {
    padding: @padding-large-vertical @padding-large-horizontal;
    font-size: @font-size-large;
    border-radius: @border-radius-large;
  }

  // Nuke default margins from checkboxes and radios to vertically center within.
  input[type=\"radio\"],
  input[type=\"checkbox\"] {
    margin-top: 0;
  }
}

// Reset rounded corners
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
  .border-right-radius(0);
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child) {
  .border-left-radius(0);
}
.input-group-addon:last-child {
  border-left: 0;
}

// Button input groups
// -------------------------
.input-group-btn {
  position: relative;
  white-space: nowrap;

  // Negative margin to only have a 1px border between the two
  &:first-child > .btn {
    margin-right: -1px;
  }
  &:last-child > .btn {
    margin-left: -1px;
  }
}
.input-group-btn > .btn {
  position: relative;
  // Jankily prevent input button groups from wrapping
  + .btn {
    margin-left: -4px;
  }
  // Bring the \"active\" button to the front
  &:hover,
  &:active {
    z-index: 2;
  }
}
";
        
        $__internal_f5f5a018752a5e59671260ac784b68606bc2046272947a85758bab88416ba47c->leave($__internal_f5f5a018752a5e59671260ac784b68606bc2046272947a85758bab88416ba47c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/input-groups.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Input groups
// --------------------------------------------------

// Base styles
// -------------------------
.input-group {
  position: relative; // For dropdowns
  display: table;
  border-collapse: separate; // prevent input groups from inheriting border styles from table cells when placed within a table

  // Undo padding and float of grid classes
  &[class*=\"col-\"] {
    float: none;
    padding-left: 0;
    padding-right: 0;
  }

  .form-control {
    width: 100%;
    margin-bottom: 0;
  }
}

// Sizing options
//
// Remix the default form control sizing classes into new ones for easier
// manipulation.

.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn { .input-lg(); }
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn { .input-sm(); }


// Display as table-cell
// -------------------------
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;

  &:not(:first-child):not(:last-child) {
    border-radius: 0;
  }
}
// Addon and addon wrapper for buttons
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle; // Match the inputs
}

// Text input groups
// -------------------------
.input-group-addon {
  padding: @padding-base-vertical @padding-base-horizontal;
  font-size: @font-size-base;
  font-weight: normal;
  line-height: 1;
  color: @input-color;
  text-align: center;
  background-color: @input-group-addon-bg;
  border: 1px solid @input-group-addon-border-color;
  border-radius: @border-radius-base;

  // Sizing
  &.input-sm {
    padding: @padding-small-vertical @padding-small-horizontal;
    font-size: @font-size-small;
    border-radius: @border-radius-small;
  }
  &.input-lg {
    padding: @padding-large-vertical @padding-large-horizontal;
    font-size: @font-size-large;
    border-radius: @border-radius-large;
  }

  // Nuke default margins from checkboxes and radios to vertically center within.
  input[type=\"radio\"],
  input[type=\"checkbox\"] {
    margin-top: 0;
  }
}

// Reset rounded corners
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle) {
  .border-right-radius(0);
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child) {
  .border-left-radius(0);
}
.input-group-addon:last-child {
  border-left: 0;
}

// Button input groups
// -------------------------
.input-group-btn {
  position: relative;
  white-space: nowrap;

  // Negative margin to only have a 1px border between the two
  &:first-child > .btn {
    margin-right: -1px;
  }
  &:last-child > .btn {
    margin-left: -1px;
  }
}
.input-group-btn > .btn {
  position: relative;
  // Jankily prevent input button groups from wrapping
  + .btn {
    margin-left: -4px;
  }
  // Bring the \"active\" button to the front
  &:hover,
  &:active {
    z-index: 2;
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/input-groups.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/input-groups.less");
    }
}
