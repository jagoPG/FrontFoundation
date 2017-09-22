<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/pagination.less */
class __TwigTemplate_a5c5eebfc96e96734ebf83058a614f22ed6d8974d1518e7ad8fafdc9a1a73a16 extends Twig_Template
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
        $__internal_9c15ea5cf5b38f3bd0193af039e1475e56cf0cb08b640804007057bbf1afdce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c15ea5cf5b38f3bd0193af039e1475e56cf0cb08b640804007057bbf1afdce4->enter($__internal_9c15ea5cf5b38f3bd0193af039e1475e56cf0cb08b640804007057bbf1afdce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/pagination.less"));

        // line 1
        echo "//
// Pagination (multiple pages)
// --------------------------------------------------
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: @line-height-computed 0;
  border-radius: @border-radius-base;

  > li {
    display: inline; // Remove list-style and block-level defaults
    > a,
    > span {
      position: relative;
      float: left; // Collapse white-space
      padding: @padding-base-vertical @padding-base-horizontal;
      line-height: @line-height-base;
      text-decoration: none;
      background-color: @pagination-bg;
      border: 1px solid @pagination-border;
      margin-left: -1px;
    }
    &:first-child {
      > a,
      > span {
        margin-left: 0;
        .border-left-radius(@border-radius-base);
      }
    }
    &:last-child {
      > a,
      > span {
        .border-right-radius(@border-radius-base);
      }
    }
  }

  > li > a,
  > li > span {
    &:hover,
    &:focus {
      background-color: @pagination-hover-bg;
    }
  }

  > .active > a,
  > .active > span {
    &,
    &:hover,
    &:focus {
      z-index: 2;
      color: @pagination-active-color;
      background-color: @pagination-active-bg;
      border-color: @pagination-active-bg;
      cursor: default;
    }
  }

  > .disabled {
    > span,
    > span:hover,
    > span:focus,
    > a,
    > a:hover,
    > a:focus {
      color: @pagination-disabled-color;
      background-color: @pagination-bg;
      border-color: @pagination-border;
      cursor: not-allowed;
    }
  }
}

// Sizing
// --------------------------------------------------

// Large
.pagination-lg {
  .pagination-size(@padding-large-vertical; @padding-large-horizontal; @font-size-large; @border-radius-large);
}

// Small
.pagination-sm {
  .pagination-size(@padding-small-vertical; @padding-small-horizontal; @font-size-small; @border-radius-small);
}
";
        
        $__internal_9c15ea5cf5b38f3bd0193af039e1475e56cf0cb08b640804007057bbf1afdce4->leave($__internal_9c15ea5cf5b38f3bd0193af039e1475e56cf0cb08b640804007057bbf1afdce4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/pagination.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Pagination (multiple pages)
// --------------------------------------------------
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: @line-height-computed 0;
  border-radius: @border-radius-base;

  > li {
    display: inline; // Remove list-style and block-level defaults
    > a,
    > span {
      position: relative;
      float: left; // Collapse white-space
      padding: @padding-base-vertical @padding-base-horizontal;
      line-height: @line-height-base;
      text-decoration: none;
      background-color: @pagination-bg;
      border: 1px solid @pagination-border;
      margin-left: -1px;
    }
    &:first-child {
      > a,
      > span {
        margin-left: 0;
        .border-left-radius(@border-radius-base);
      }
    }
    &:last-child {
      > a,
      > span {
        .border-right-radius(@border-radius-base);
      }
    }
  }

  > li > a,
  > li > span {
    &:hover,
    &:focus {
      background-color: @pagination-hover-bg;
    }
  }

  > .active > a,
  > .active > span {
    &,
    &:hover,
    &:focus {
      z-index: 2;
      color: @pagination-active-color;
      background-color: @pagination-active-bg;
      border-color: @pagination-active-bg;
      cursor: default;
    }
  }

  > .disabled {
    > span,
    > span:hover,
    > span:focus,
    > a,
    > a:hover,
    > a:focus {
      color: @pagination-disabled-color;
      background-color: @pagination-bg;
      border-color: @pagination-border;
      cursor: not-allowed;
    }
  }
}

// Sizing
// --------------------------------------------------

// Large
.pagination-lg {
  .pagination-size(@padding-large-vertical; @padding-large-horizontal; @font-size-large; @border-radius-large);
}

// Small
.pagination-sm {
  .pagination-size(@padding-small-vertical; @padding-small-horizontal; @font-size-small; @border-radius-small);
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/pagination.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/pagination.less");
    }
}
