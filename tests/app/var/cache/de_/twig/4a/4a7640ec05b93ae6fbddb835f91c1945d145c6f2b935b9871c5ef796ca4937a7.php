<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/dropdowns.less */
class __TwigTemplate_b51673c4792cc7f460c94e62c3004b330d377ea7fcaf44cbcc5d417781edb069 extends Twig_Template
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
        $__internal_e528143fb7e98d26e1095aab53c48feae1d9280a3089ac45c64eed91d83f75c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e528143fb7e98d26e1095aab53c48feae1d9280a3089ac45c64eed91d83f75c3->enter($__internal_e528143fb7e98d26e1095aab53c48feae1d9280a3089ac45c64eed91d83f75c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/dropdowns.less"));

        // line 1
        echo "//
// Dropdown menus
// --------------------------------------------------


// Dropdown arrow/caret
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top:   @caret-width-base solid;
  border-right: @caret-width-base solid transparent;
  border-left:  @caret-width-base solid transparent;
}

// The dropdown wrapper (div)
.dropdown {
  position: relative;
}

// Prevent the focus on the dropdown toggle when closing dropdowns
.dropdown-toggle:focus {
  outline: 0;
}

// The dropdown menu (ul)
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: @zindex-dropdown;
  display: none; // none by default, but block on \"open\" of the menu
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0; // override default ul
  list-style: none;
  font-size: @font-size-base;
  background-color: @dropdown-bg;
  border: 1px solid @dropdown-fallback-border; // IE8 fallback
  border: 1px solid @dropdown-border;
  border-radius: @border-radius-base;
  .box-shadow(0 6px 12px rgba(0,0,0,.175));
  background-clip: padding-box;

  // Aligns the dropdown menu to right
  &.pull-right {
    right: 0;
    left: auto;
  }

  // Dividers (basically an hr) within the dropdown
  .divider {
    .nav-divider(@dropdown-divider-bg);
  }

  // Links within the dropdown menu
  > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: @line-height-base;
    color: @dropdown-link-color;
    white-space: nowrap; // prevent links from randomly breaking onto new lines
  }
}

// Hover/Focus state
.dropdown-menu > li > a {
  &:hover,
  &:focus {
    text-decoration: none;
    color: @dropdown-link-hover-color;
    background-color: @dropdown-link-hover-bg;
  }
}

// Active state
.dropdown-menu > .active > a {
  &,
  &:hover,
  &:focus {
    color: @dropdown-link-active-color;
    text-decoration: none;
    outline: 0;
    background-color: @dropdown-link-active-bg;
  }
}

// Disabled state
//
// Gray out text and ensure the hover/focus state remains gray

.dropdown-menu > .disabled > a {
  &,
  &:hover,
  &:focus {
    color: @dropdown-link-disabled-color;
  }
}
// Nuke hover/focus effects
.dropdown-menu > .disabled > a {
  &:hover,
  &:focus {
    text-decoration: none;
    background-color: transparent;
    background-image: none; // Remove CSS gradient
    .reset-filter();
    cursor: not-allowed;
  }
}

// Open state for the dropdown
.open {
  // Show the menu
  > .dropdown-menu {
    display: block;
  }

  // Remove the outline when :focus is triggered
  > a {
    outline: 0;
  }
}

// Dropdown section headers
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: @font-size-small;
  line-height: @line-height-base;
  color: @dropdown-header-color;
}

// Backdrop to catch body clicks on mobile, etc.
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: @zindex-dropdown - 10;
}

// Right aligned dropdowns
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}

// Allow for dropdowns to go bottom up (aka, dropup-menu)
//
// Just add .dropup after the standard .dropdown class and you're set, bro.
// TODO: abstract this so that the navbar fixed styles are not placed here?

.dropup,
.navbar-fixed-bottom .dropdown {
  // Reverse the caret
  .caret {
    border-top: 0;
    border-bottom: @caret-width-base solid;
    content: \"\";
  }
  // Different positioning for bottom up menu
  .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-bottom: 1px;
  }
}


// Component alignment
//
// Reiterate per navbar.less and the modified component alignment there.

@media (min-width: @grid-float-breakpoint) {
  .navbar-right {
    .dropdown-menu {
      .pull-right > .dropdown-menu();
    }
  }
}

";
        
        $__internal_e528143fb7e98d26e1095aab53c48feae1d9280a3089ac45c64eed91d83f75c3->leave($__internal_e528143fb7e98d26e1095aab53c48feae1d9280a3089ac45c64eed91d83f75c3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/dropdowns.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Dropdown menus
// --------------------------------------------------


// Dropdown arrow/caret
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top:   @caret-width-base solid;
  border-right: @caret-width-base solid transparent;
  border-left:  @caret-width-base solid transparent;
}

// The dropdown wrapper (div)
.dropdown {
  position: relative;
}

// Prevent the focus on the dropdown toggle when closing dropdowns
.dropdown-toggle:focus {
  outline: 0;
}

// The dropdown menu (ul)
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: @zindex-dropdown;
  display: none; // none by default, but block on \"open\" of the menu
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0; // override default ul
  list-style: none;
  font-size: @font-size-base;
  background-color: @dropdown-bg;
  border: 1px solid @dropdown-fallback-border; // IE8 fallback
  border: 1px solid @dropdown-border;
  border-radius: @border-radius-base;
  .box-shadow(0 6px 12px rgba(0,0,0,.175));
  background-clip: padding-box;

  // Aligns the dropdown menu to right
  &.pull-right {
    right: 0;
    left: auto;
  }

  // Dividers (basically an hr) within the dropdown
  .divider {
    .nav-divider(@dropdown-divider-bg);
  }

  // Links within the dropdown menu
  > li > a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: normal;
    line-height: @line-height-base;
    color: @dropdown-link-color;
    white-space: nowrap; // prevent links from randomly breaking onto new lines
  }
}

// Hover/Focus state
.dropdown-menu > li > a {
  &:hover,
  &:focus {
    text-decoration: none;
    color: @dropdown-link-hover-color;
    background-color: @dropdown-link-hover-bg;
  }
}

// Active state
.dropdown-menu > .active > a {
  &,
  &:hover,
  &:focus {
    color: @dropdown-link-active-color;
    text-decoration: none;
    outline: 0;
    background-color: @dropdown-link-active-bg;
  }
}

// Disabled state
//
// Gray out text and ensure the hover/focus state remains gray

.dropdown-menu > .disabled > a {
  &,
  &:hover,
  &:focus {
    color: @dropdown-link-disabled-color;
  }
}
// Nuke hover/focus effects
.dropdown-menu > .disabled > a {
  &:hover,
  &:focus {
    text-decoration: none;
    background-color: transparent;
    background-image: none; // Remove CSS gradient
    .reset-filter();
    cursor: not-allowed;
  }
}

// Open state for the dropdown
.open {
  // Show the menu
  > .dropdown-menu {
    display: block;
  }

  // Remove the outline when :focus is triggered
  > a {
    outline: 0;
  }
}

// Dropdown section headers
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: @font-size-small;
  line-height: @line-height-base;
  color: @dropdown-header-color;
}

// Backdrop to catch body clicks on mobile, etc.
.dropdown-backdrop {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  z-index: @zindex-dropdown - 10;
}

// Right aligned dropdowns
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}

// Allow for dropdowns to go bottom up (aka, dropup-menu)
//
// Just add .dropup after the standard .dropdown class and you're set, bro.
// TODO: abstract this so that the navbar fixed styles are not placed here?

.dropup,
.navbar-fixed-bottom .dropdown {
  // Reverse the caret
  .caret {
    border-top: 0;
    border-bottom: @caret-width-base solid;
    content: \"\";
  }
  // Different positioning for bottom up menu
  .dropdown-menu {
    top: auto;
    bottom: 100%;
    margin-bottom: 1px;
  }
}


// Component alignment
//
// Reiterate per navbar.less and the modified component alignment there.

@media (min-width: @grid-float-breakpoint) {
  .navbar-right {
    .dropdown-menu {
      .pull-right > .dropdown-menu();
    }
  }
}

", "node_modules/parsleyjs/bower_components/bootstrap/less/dropdowns.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/dropdowns.less");
    }
}
