<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/list-group.less */
class __TwigTemplate_a0650fd0dd136990ab8b26e34ec2f0a48a20dcd96a668e688f7d63aff89f69ba extends Twig_Template
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
        $__internal_4d97db353844309a48a8efda9106bec974513375b070f431a39bcafe2664a133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d97db353844309a48a8efda9106bec974513375b070f431a39bcafe2664a133->enter($__internal_4d97db353844309a48a8efda9106bec974513375b070f431a39bcafe2664a133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/list-group.less"));

        // line 1
        echo "//
// List groups
// --------------------------------------------------

// Base class
//
// Easily usable on <ul>, <ol>, or <div>.
.list-group {
  // No need to set list-style: none; since .list-group-item is block level
  margin-bottom: 20px;
  padding-left: 0; // reset padding because ul and ol
}

// Individual list items
// -------------------------

.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  // Place the border on the list items and negative margin up for better styling
  margin-bottom: -1px;
  background-color: @list-group-bg;
  border: 1px solid @list-group-border;

  // Round the first and last items
  &:first-child {
    .border-top-radius(@list-group-border-radius);
  }
  &:last-child {
    margin-bottom: 0;
    .border-bottom-radius(@list-group-border-radius);
  }

  // Align badges within list items
  > .badge {
    float: right;
  }
  > .badge + .badge {
    margin-right: 5px;
  }
}

// Linked list items
a.list-group-item {
  color: @list-group-link-color;

  .list-group-item-heading {
    color: @list-group-link-heading-color;
  }

  // Hover state
  &:hover,
  &:focus {
    text-decoration: none;
    background-color: @list-group-hover-bg;
  }

  // Active class on item itself, not parent
  &.active,
  &.active:hover,
  &.active:focus {
    z-index: 2; // Place active items above their siblings for proper border styling
    color: @list-group-active-color;
    background-color: @list-group-active-bg;
    border-color: @list-group-active-border;

    // Force color to inherit for custom content
    .list-group-item-heading {
      color: inherit;
    }
    .list-group-item-text {
      color: lighten(@list-group-active-bg, 40%);
    }
  }
}

// Custom content options
// -------------------------

.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
";
        
        $__internal_4d97db353844309a48a8efda9106bec974513375b070f431a39bcafe2664a133->leave($__internal_4d97db353844309a48a8efda9106bec974513375b070f431a39bcafe2664a133_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/list-group.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// List groups
// --------------------------------------------------

// Base class
//
// Easily usable on <ul>, <ol>, or <div>.
.list-group {
  // No need to set list-style: none; since .list-group-item is block level
  margin-bottom: 20px;
  padding-left: 0; // reset padding because ul and ol
}

// Individual list items
// -------------------------

.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  // Place the border on the list items and negative margin up for better styling
  margin-bottom: -1px;
  background-color: @list-group-bg;
  border: 1px solid @list-group-border;

  // Round the first and last items
  &:first-child {
    .border-top-radius(@list-group-border-radius);
  }
  &:last-child {
    margin-bottom: 0;
    .border-bottom-radius(@list-group-border-radius);
  }

  // Align badges within list items
  > .badge {
    float: right;
  }
  > .badge + .badge {
    margin-right: 5px;
  }
}

// Linked list items
a.list-group-item {
  color: @list-group-link-color;

  .list-group-item-heading {
    color: @list-group-link-heading-color;
  }

  // Hover state
  &:hover,
  &:focus {
    text-decoration: none;
    background-color: @list-group-hover-bg;
  }

  // Active class on item itself, not parent
  &.active,
  &.active:hover,
  &.active:focus {
    z-index: 2; // Place active items above their siblings for proper border styling
    color: @list-group-active-color;
    background-color: @list-group-active-bg;
    border-color: @list-group-active-border;

    // Force color to inherit for custom content
    .list-group-item-heading {
      color: inherit;
    }
    .list-group-item-text {
      color: lighten(@list-group-active-bg, 40%);
    }
  }
}

// Custom content options
// -------------------------

.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/list-group.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/list-group.less");
    }
}
