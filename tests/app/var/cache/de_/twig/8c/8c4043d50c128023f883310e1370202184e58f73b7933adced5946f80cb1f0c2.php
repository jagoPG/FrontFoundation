<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/tooltip.less */
class __TwigTemplate_a28f4f77d93a7f370b12527eb34241377fdadf19f1f7a6528002806868f19d07 extends Twig_Template
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
        $__internal_e643d77cacd566fa2ff3cbd4ad3448462cabb8ebe8726bef6e76f9c2878347e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e643d77cacd566fa2ff3cbd4ad3448462cabb8ebe8726bef6e76f9c2878347e8->enter($__internal_e643d77cacd566fa2ff3cbd4ad3448462cabb8ebe8726bef6e76f9c2878347e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/tooltip.less"));

        // line 1
        echo "//
// Tooltips
// --------------------------------------------------


// Base class
.tooltip {
  position: absolute;
  z-index: @zindex-tooltip;
  display: block;
  visibility: visible;
  font-size: @font-size-small;
  line-height: 1.4;
  .opacity(0);

  &.in     { .opacity(.9); }
  &.top    { margin-top:  -3px; padding: @tooltip-arrow-width 0; }
  &.right  { margin-left:  3px; padding: 0 @tooltip-arrow-width; }
  &.bottom { margin-top:   3px; padding: @tooltip-arrow-width 0; }
  &.left   { margin-left: -3px; padding: 0 @tooltip-arrow-width; }
}

// Wrapper for the tooltip content
.tooltip-inner {
  max-width: @tooltip-max-width;
  padding: 3px 8px;
  color: @tooltip-color;
  text-align: center;
  text-decoration: none;
  background-color: @tooltip-bg;
  border-radius: @border-radius-base;
}

// Arrows
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip {
  &.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width 0;
    border-top-color: @tooltip-arrow-color;
  }
  &.top-left .tooltip-arrow {
    bottom: 0;
    left: @tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width 0;
    border-top-color: @tooltip-arrow-color;
  }
  &.top-right .tooltip-arrow {
    bottom: 0;
    right: @tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width 0;
    border-top-color: @tooltip-arrow-color;
  }
  &.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width @tooltip-arrow-width 0;
    border-right-color: @tooltip-arrow-color;
  }
  &.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-left-color: @tooltip-arrow-color;
  }
  &.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -@tooltip-arrow-width;
    border-width: 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-bottom-color: @tooltip-arrow-color;
  }
  &.bottom-left .tooltip-arrow {
    top: 0;
    left: @tooltip-arrow-width;
    border-width: 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-bottom-color: @tooltip-arrow-color;
  }
  &.bottom-right .tooltip-arrow {
    top: 0;
    right: @tooltip-arrow-width;
    border-width: 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-bottom-color: @tooltip-arrow-color;
  }
}
";
        
        $__internal_e643d77cacd566fa2ff3cbd4ad3448462cabb8ebe8726bef6e76f9c2878347e8->leave($__internal_e643d77cacd566fa2ff3cbd4ad3448462cabb8ebe8726bef6e76f9c2878347e8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/tooltip.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Tooltips
// --------------------------------------------------


// Base class
.tooltip {
  position: absolute;
  z-index: @zindex-tooltip;
  display: block;
  visibility: visible;
  font-size: @font-size-small;
  line-height: 1.4;
  .opacity(0);

  &.in     { .opacity(.9); }
  &.top    { margin-top:  -3px; padding: @tooltip-arrow-width 0; }
  &.right  { margin-left:  3px; padding: 0 @tooltip-arrow-width; }
  &.bottom { margin-top:   3px; padding: @tooltip-arrow-width 0; }
  &.left   { margin-left: -3px; padding: 0 @tooltip-arrow-width; }
}

// Wrapper for the tooltip content
.tooltip-inner {
  max-width: @tooltip-max-width;
  padding: 3px 8px;
  color: @tooltip-color;
  text-align: center;
  text-decoration: none;
  background-color: @tooltip-bg;
  border-radius: @border-radius-base;
}

// Arrows
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip {
  &.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width 0;
    border-top-color: @tooltip-arrow-color;
  }
  &.top-left .tooltip-arrow {
    bottom: 0;
    left: @tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width 0;
    border-top-color: @tooltip-arrow-color;
  }
  &.top-right .tooltip-arrow {
    bottom: 0;
    right: @tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width 0;
    border-top-color: @tooltip-arrow-color;
  }
  &.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width @tooltip-arrow-width @tooltip-arrow-width 0;
    border-right-color: @tooltip-arrow-color;
  }
  &.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -@tooltip-arrow-width;
    border-width: @tooltip-arrow-width 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-left-color: @tooltip-arrow-color;
  }
  &.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -@tooltip-arrow-width;
    border-width: 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-bottom-color: @tooltip-arrow-color;
  }
  &.bottom-left .tooltip-arrow {
    top: 0;
    left: @tooltip-arrow-width;
    border-width: 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-bottom-color: @tooltip-arrow-color;
  }
  &.bottom-right .tooltip-arrow {
    top: 0;
    right: @tooltip-arrow-width;
    border-width: 0 @tooltip-arrow-width @tooltip-arrow-width;
    border-bottom-color: @tooltip-arrow-color;
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/tooltip.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/tooltip.less");
    }
}
