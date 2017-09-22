<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/badges.less */
class __TwigTemplate_6c9021ab1e0bfaeb24ec7ae3c5309714ea1d532b7c363affce890f6b3fd35754 extends Twig_Template
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
        $__internal_d7f152257990ef67de2d34188d0373ac638b707454e729d3fc55cff046d223e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f152257990ef67de2d34188d0373ac638b707454e729d3fc55cff046d223e3->enter($__internal_d7f152257990ef67de2d34188d0373ac638b707454e729d3fc55cff046d223e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/badges.less"));

        // line 1
        echo "//
// Badges
// --------------------------------------------------


// Base classes
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: @font-size-small;
  font-weight: @badge-font-weight;
  color: @badge-color;
  line-height: @badge-line-height;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: @badge-bg;
  border-radius: @badge-border-radius;

  // Empty badges collapse automatically (not available in IE8)
  &:empty {
    display: none;
  }

  // Quick fix for badges in buttons
  .btn & {
    position: relative;
    top: -1px;
  }
}

// Hover state, but only for links
a.badge {
  &:hover,
  &:focus {
    color: @badge-link-hover-color;
    text-decoration: none;
    cursor: pointer;
  }
}

// Account for counters in navs
a.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: @badge-active-color;
  background-color: @badge-active-bg;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
";
        
        $__internal_d7f152257990ef67de2d34188d0373ac638b707454e729d3fc55cff046d223e3->leave($__internal_d7f152257990ef67de2d34188d0373ac638b707454e729d3fc55cff046d223e3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/badges.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Badges
// --------------------------------------------------


// Base classes
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: @font-size-small;
  font-weight: @badge-font-weight;
  color: @badge-color;
  line-height: @badge-line-height;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: @badge-bg;
  border-radius: @badge-border-radius;

  // Empty badges collapse automatically (not available in IE8)
  &:empty {
    display: none;
  }

  // Quick fix for badges in buttons
  .btn & {
    position: relative;
    top: -1px;
  }
}

// Hover state, but only for links
a.badge {
  &:hover,
  &:focus {
    color: @badge-link-hover-color;
    text-decoration: none;
    cursor: pointer;
  }
}

// Account for counters in navs
a.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: @badge-active-color;
  background-color: @badge-active-bg;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/badges.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/badges.less");
    }
}
