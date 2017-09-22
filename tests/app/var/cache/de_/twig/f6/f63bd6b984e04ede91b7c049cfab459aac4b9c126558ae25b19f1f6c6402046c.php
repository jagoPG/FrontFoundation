<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/popovers.less */
class __TwigTemplate_0c241e7a9e6168a33b9c048edc925e3bc424376cdaabf967bc56040db248555d extends Twig_Template
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
        $__internal_01662e9292b32ec8592371f0713cef244aa2a4e40d9f3869b97f269c70aa6896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01662e9292b32ec8592371f0713cef244aa2a4e40d9f3869b97f269c70aa6896->enter($__internal_01662e9292b32ec8592371f0713cef244aa2a4e40d9f3869b97f269c70aa6896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/popovers.less"));

        // line 1
        echo "//
// Popovers
// --------------------------------------------------


.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: @zindex-popover;
  display: none;
  max-width: @popover-max-width;
  padding: 1px;
  text-align: left; // Reset given new insertion method
  background-color: @popover-bg;
  background-clip: padding-box;
  border: 1px solid @popover-fallback-border-color;
  border: 1px solid @popover-border-color;
  border-radius: @border-radius-large;
  .box-shadow(0 5px 10px rgba(0,0,0,.2));

  // Overrides for proper insertion
  white-space: normal;

  // Offset the popover to account for the popover arrow
  &.top     { margin-top: -10px; }
  &.right   { margin-left: 10px; }
  &.bottom  { margin-top: 10px; }
  &.left    { margin-left: -10px; }
}

.popover-title {
  margin: 0; // reset heading margin
  padding: 8px 14px;
  font-size: @font-size-base;
  font-weight: normal;
  line-height: 18px;
  background-color: @popover-title-bg;
  border-bottom: 1px solid darken(@popover-title-bg, 5%);
  border-radius: 5px 5px 0 0;
}

.popover-content {
  padding: 9px 14px;
}

// Arrows
//
// .arrow is outer, .arrow:after is inner

.popover .arrow {
  &,
  &:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
  }
}
.popover .arrow {
  border-width: @popover-arrow-outer-width;
}
.popover .arrow:after {
  border-width: @popover-arrow-width;
  content: \"\";
}

.popover {
  &.top .arrow {
    left: 50%;
    margin-left: -@popover-arrow-outer-width;
    border-bottom-width: 0;
    border-top-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-top-color: @popover-arrow-outer-color;
    bottom: -@popover-arrow-outer-width;
    &:after {
      content: \" \";
      bottom: 1px;
      margin-left: -@popover-arrow-width;
      border-bottom-width: 0;
      border-top-color: @popover-arrow-color;
    }
  }
  &.right .arrow {
    top: 50%;
    left: -@popover-arrow-outer-width;
    margin-top: -@popover-arrow-outer-width;
    border-left-width: 0;
    border-right-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-right-color: @popover-arrow-outer-color;
    &:after {
      content: \" \";
      left: 1px;
      bottom: -@popover-arrow-width;
      border-left-width: 0;
      border-right-color: @popover-arrow-color;
    }
  }
  &.bottom .arrow {
    left: 50%;
    margin-left: -@popover-arrow-outer-width;
    border-top-width: 0;
    border-bottom-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-bottom-color: @popover-arrow-outer-color;
    top: -@popover-arrow-outer-width;
    &:after {
      content: \" \";
      top: 1px;
      margin-left: -@popover-arrow-width;
      border-top-width: 0;
      border-bottom-color: @popover-arrow-color;
    }
  }

  &.left .arrow {
    top: 50%;
    right: -@popover-arrow-outer-width;
    margin-top: -@popover-arrow-outer-width;
    border-right-width: 0;
    border-left-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-left-color: @popover-arrow-outer-color;
    &:after {
      content: \" \";
      right: 1px;
      border-right-width: 0;
      border-left-color: @popover-arrow-color;
      bottom: -@popover-arrow-width;
    }
  }

}
";
        
        $__internal_01662e9292b32ec8592371f0713cef244aa2a4e40d9f3869b97f269c70aa6896->leave($__internal_01662e9292b32ec8592371f0713cef244aa2a4e40d9f3869b97f269c70aa6896_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/popovers.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Popovers
// --------------------------------------------------


.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: @zindex-popover;
  display: none;
  max-width: @popover-max-width;
  padding: 1px;
  text-align: left; // Reset given new insertion method
  background-color: @popover-bg;
  background-clip: padding-box;
  border: 1px solid @popover-fallback-border-color;
  border: 1px solid @popover-border-color;
  border-radius: @border-radius-large;
  .box-shadow(0 5px 10px rgba(0,0,0,.2));

  // Overrides for proper insertion
  white-space: normal;

  // Offset the popover to account for the popover arrow
  &.top     { margin-top: -10px; }
  &.right   { margin-left: 10px; }
  &.bottom  { margin-top: 10px; }
  &.left    { margin-left: -10px; }
}

.popover-title {
  margin: 0; // reset heading margin
  padding: 8px 14px;
  font-size: @font-size-base;
  font-weight: normal;
  line-height: 18px;
  background-color: @popover-title-bg;
  border-bottom: 1px solid darken(@popover-title-bg, 5%);
  border-radius: 5px 5px 0 0;
}

.popover-content {
  padding: 9px 14px;
}

// Arrows
//
// .arrow is outer, .arrow:after is inner

.popover .arrow {
  &,
  &:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
  }
}
.popover .arrow {
  border-width: @popover-arrow-outer-width;
}
.popover .arrow:after {
  border-width: @popover-arrow-width;
  content: \"\";
}

.popover {
  &.top .arrow {
    left: 50%;
    margin-left: -@popover-arrow-outer-width;
    border-bottom-width: 0;
    border-top-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-top-color: @popover-arrow-outer-color;
    bottom: -@popover-arrow-outer-width;
    &:after {
      content: \" \";
      bottom: 1px;
      margin-left: -@popover-arrow-width;
      border-bottom-width: 0;
      border-top-color: @popover-arrow-color;
    }
  }
  &.right .arrow {
    top: 50%;
    left: -@popover-arrow-outer-width;
    margin-top: -@popover-arrow-outer-width;
    border-left-width: 0;
    border-right-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-right-color: @popover-arrow-outer-color;
    &:after {
      content: \" \";
      left: 1px;
      bottom: -@popover-arrow-width;
      border-left-width: 0;
      border-right-color: @popover-arrow-color;
    }
  }
  &.bottom .arrow {
    left: 50%;
    margin-left: -@popover-arrow-outer-width;
    border-top-width: 0;
    border-bottom-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-bottom-color: @popover-arrow-outer-color;
    top: -@popover-arrow-outer-width;
    &:after {
      content: \" \";
      top: 1px;
      margin-left: -@popover-arrow-width;
      border-top-width: 0;
      border-bottom-color: @popover-arrow-color;
    }
  }

  &.left .arrow {
    top: 50%;
    right: -@popover-arrow-outer-width;
    margin-top: -@popover-arrow-outer-width;
    border-right-width: 0;
    border-left-color: @popover-arrow-outer-fallback-color; // IE8 fallback
    border-left-color: @popover-arrow-outer-color;
    &:after {
      content: \" \";
      right: 1px;
      border-right-width: 0;
      border-left-color: @popover-arrow-color;
      bottom: -@popover-arrow-width;
    }
  }

}
", "node_modules/parsleyjs/bower_components/bootstrap/less/popovers.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/popovers.less");
    }
}
