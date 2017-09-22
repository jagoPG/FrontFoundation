<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/wells.less */
class __TwigTemplate_3d675c474d6671c580a3e6ea580817cdecf6f4f32c47bd708a76fb9dc7d94bf3 extends Twig_Template
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
        $__internal_ed1b4a39a0078ee2b63bad0bd40dda0bd9d398cacc5acf33a8cec8f522f6d8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1b4a39a0078ee2b63bad0bd40dda0bd9d398cacc5acf33a8cec8f522f6d8f0->enter($__internal_ed1b4a39a0078ee2b63bad0bd40dda0bd9d398cacc5acf33a8cec8f522f6d8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/wells.less"));

        // line 1
        echo "//
// Wells
// --------------------------------------------------


// Base class
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: @well-bg;
  border: 1px solid darken(@well-bg, 7%);
  border-radius: @border-radius-base;
  .box-shadow(inset 0 1px 1px rgba(0,0,0,.05));
  blockquote {
    border-color: #ddd;
    border-color: rgba(0,0,0,.15);
  }
}

// Sizes
.well-lg {
  padding: 24px;
  border-radius: @border-radius-large;
}
.well-sm {
  padding: 9px;
  border-radius: @border-radius-small;
}
";
        
        $__internal_ed1b4a39a0078ee2b63bad0bd40dda0bd9d398cacc5acf33a8cec8f522f6d8f0->leave($__internal_ed1b4a39a0078ee2b63bad0bd40dda0bd9d398cacc5acf33a8cec8f522f6d8f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/wells.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Wells
// --------------------------------------------------


// Base class
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: @well-bg;
  border: 1px solid darken(@well-bg, 7%);
  border-radius: @border-radius-base;
  .box-shadow(inset 0 1px 1px rgba(0,0,0,.05));
  blockquote {
    border-color: #ddd;
    border-color: rgba(0,0,0,.15);
  }
}

// Sizes
.well-lg {
  padding: 24px;
  border-radius: @border-radius-large;
}
.well-sm {
  padding: 9px;
  border-radius: @border-radius-small;
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/wells.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/wells.less");
    }
}
