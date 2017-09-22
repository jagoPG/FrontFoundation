<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/labels.less */
class __TwigTemplate_101439b2fe26736dbe026aeecc311bbcbfd20cfac595b657523125d9abc48951 extends Twig_Template
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
        $__internal_06bd20eede2e0f370cc55d833ffda8d5b3c4a505f0c5c571f474f5aeddba7621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bd20eede2e0f370cc55d833ffda8d5b3c4a505f0c5c571f474f5aeddba7621->enter($__internal_06bd20eede2e0f370cc55d833ffda8d5b3c4a505f0c5c571f474f5aeddba7621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/labels.less"));

        // line 1
        echo "//
// Labels
// --------------------------------------------------

.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: @label-color;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;

  // Add hover effects, but only for links
  &[href] {
    &:hover,
    &:focus {
      color: @label-link-hover-color;
      text-decoration: none;
      cursor: pointer;
    }
  }

  // Empty labels collapse automatically (not available in IE8)
  &:empty {
    display: none;
  }

  // Quick fix for labels in buttons
  .btn & {
    position: relative;
    top: -1px;
  }
}

// Colors
// Contextual variations (linked labels get darker on :hover)

.label-default {
  .label-variant(@label-default-bg);
}

.label-primary {
  .label-variant(@label-primary-bg);
}

.label-success {
  .label-variant(@label-success-bg);
}

.label-info {
  .label-variant(@label-info-bg);
}

.label-warning {
  .label-variant(@label-warning-bg);
}

.label-danger {
  .label-variant(@label-danger-bg);
}
";
        
        $__internal_06bd20eede2e0f370cc55d833ffda8d5b3c4a505f0c5c571f474f5aeddba7621->leave($__internal_06bd20eede2e0f370cc55d833ffda8d5b3c4a505f0c5c571f474f5aeddba7621_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/labels.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Labels
// --------------------------------------------------

.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: @label-color;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em;

  // Add hover effects, but only for links
  &[href] {
    &:hover,
    &:focus {
      color: @label-link-hover-color;
      text-decoration: none;
      cursor: pointer;
    }
  }

  // Empty labels collapse automatically (not available in IE8)
  &:empty {
    display: none;
  }

  // Quick fix for labels in buttons
  .btn & {
    position: relative;
    top: -1px;
  }
}

// Colors
// Contextual variations (linked labels get darker on :hover)

.label-default {
  .label-variant(@label-default-bg);
}

.label-primary {
  .label-variant(@label-primary-bg);
}

.label-success {
  .label-variant(@label-success-bg);
}

.label-info {
  .label-variant(@label-info-bg);
}

.label-warning {
  .label-variant(@label-warning-bg);
}

.label-danger {
  .label-variant(@label-danger-bg);
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/labels.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/labels.less");
    }
}
