<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/panels.less */
class __TwigTemplate_3dce58ff2a9e8f66ba0a7f991943b6852291fac08e4a4ffebee230876b4a2a93 extends Twig_Template
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
        $__internal_5c2e41d9d3fab632832dc7562649008b0716bfacb4d1d4a87dda15ad63c7cb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2e41d9d3fab632832dc7562649008b0716bfacb4d1d4a87dda15ad63c7cb0f->enter($__internal_5c2e41d9d3fab632832dc7562649008b0716bfacb4d1d4a87dda15ad63c7cb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/panels.less"));

        // line 1
        echo "//
// Panels
// --------------------------------------------------


// Base class
.panel {
  margin-bottom: @line-height-computed;
  background-color: @panel-bg;
  border: 1px solid transparent;
  border-radius: @panel-border-radius;
  .box-shadow(0 1px 1px rgba(0,0,0,.05));
}

// Panel contents
.panel-body {
  padding: 15px;
  .clearfix();
}


// List groups in panels
//
// By default, space out list group content from panel headings to account for
// any kind of custom content between the two.

.panel {
  > .list-group {
    margin-bottom: 0;

    .list-group-item {
      border-width: 1px 0;

      // Remove border radius for top one
      &:first-child {
        .border-top-radius(0);
      }
      // But keep it for the last one
      &:last-child {
        border-bottom: 0;
      }
    }
  }
}
// Collapse space between when there's no additional content.
.panel-heading + .list-group {
  .list-group-item:first-child {
    border-top-width: 0;
  }
}


// Tables in panels
//
// Place a non-bordered `.table` within a panel (not within a `.panel-body`) and
// watch it go full width.

.panel {
  > .table,
  > .table-responsive > .table {
    margin-bottom: 0;
  }
  > .panel-body + .table,
  > .panel-body + .table-responsive {
    border-top: 1px solid @table-border-color;
  }
  > .table > tbody:first-child th,
  > .table > tbody:first-child td {
    border-top: 0;
  }
  > .table-bordered,
  > .table-responsive > .table-bordered {
    border: 0;
    > thead,
    > tbody,
    > tfoot {
      > tr {
        > th:first-child,
        > td:first-child {
          border-left: 0;
        }
        > th:last-child,
        > td:last-child {
          border-right: 0;
        }

        &:last-child > th,
        &:last-child > td {
          border-bottom: 0;
        }
      }
    }
  }
  > .table-responsive {
    border: 0;
    margin-bottom: 0;
  }
}


// Optional heading
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  .border-top-radius(@panel-border-radius - 1);

  > .dropdown .dropdown-toggle {
    color: inherit;
  }
}

// Within heading, strip any `h*` tag of it's default margins for spacing.
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: ceil((@font-size-base * 1.125));
  color: inherit;

  > a {
    color: inherit;
  }
}

// Optional footer (stays gray in every modifier class)
.panel-footer {
  padding: 10px 15px;
  background-color: @panel-footer-bg;
  border-top: 1px solid @panel-inner-border;
  .border-bottom-radius(@panel-border-radius - 1);
}


// Collapsable panels (aka, accordion)
//
// Wrap a series of panels in `.panel-group` to turn them into an accordion with
// the help of our collapse JavaScript plugin.

.panel-group {
  // Tighten up margin so it's only between panels
  .panel {
    margin-bottom: 0;
    border-radius: @panel-border-radius;
    overflow: hidden; // crop contents when collapsed
    + .panel {
      margin-top: 5px;
    }
  }

  .panel-heading {
    border-bottom: 0;
    + .panel-collapse .panel-body {
      border-top: 1px solid @panel-inner-border;
    }
  }
  .panel-footer {
    border-top: 0;
    + .panel-collapse .panel-body {
      border-bottom: 1px solid @panel-inner-border;
    }
  }
}


// Contextual variations
.panel-default {
  .panel-variant(@panel-default-border; @panel-default-text; @panel-default-heading-bg; @panel-default-border);
}
.panel-primary {
  .panel-variant(@panel-primary-border; @panel-primary-text; @panel-primary-heading-bg; @panel-primary-border);
}
.panel-success {
  .panel-variant(@panel-success-border; @panel-success-text; @panel-success-heading-bg; @panel-success-border);
}
.panel-warning {
  .panel-variant(@panel-warning-border; @panel-warning-text; @panel-warning-heading-bg; @panel-warning-border);
}
.panel-danger {
  .panel-variant(@panel-danger-border; @panel-danger-text; @panel-danger-heading-bg; @panel-danger-border);
}
.panel-info {
  .panel-variant(@panel-info-border; @panel-info-text; @panel-info-heading-bg; @panel-info-border);
}
";
        
        $__internal_5c2e41d9d3fab632832dc7562649008b0716bfacb4d1d4a87dda15ad63c7cb0f->leave($__internal_5c2e41d9d3fab632832dc7562649008b0716bfacb4d1d4a87dda15ad63c7cb0f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/panels.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Panels
// --------------------------------------------------


// Base class
.panel {
  margin-bottom: @line-height-computed;
  background-color: @panel-bg;
  border: 1px solid transparent;
  border-radius: @panel-border-radius;
  .box-shadow(0 1px 1px rgba(0,0,0,.05));
}

// Panel contents
.panel-body {
  padding: 15px;
  .clearfix();
}


// List groups in panels
//
// By default, space out list group content from panel headings to account for
// any kind of custom content between the two.

.panel {
  > .list-group {
    margin-bottom: 0;

    .list-group-item {
      border-width: 1px 0;

      // Remove border radius for top one
      &:first-child {
        .border-top-radius(0);
      }
      // But keep it for the last one
      &:last-child {
        border-bottom: 0;
      }
    }
  }
}
// Collapse space between when there's no additional content.
.panel-heading + .list-group {
  .list-group-item:first-child {
    border-top-width: 0;
  }
}


// Tables in panels
//
// Place a non-bordered `.table` within a panel (not within a `.panel-body`) and
// watch it go full width.

.panel {
  > .table,
  > .table-responsive > .table {
    margin-bottom: 0;
  }
  > .panel-body + .table,
  > .panel-body + .table-responsive {
    border-top: 1px solid @table-border-color;
  }
  > .table > tbody:first-child th,
  > .table > tbody:first-child td {
    border-top: 0;
  }
  > .table-bordered,
  > .table-responsive > .table-bordered {
    border: 0;
    > thead,
    > tbody,
    > tfoot {
      > tr {
        > th:first-child,
        > td:first-child {
          border-left: 0;
        }
        > th:last-child,
        > td:last-child {
          border-right: 0;
        }

        &:last-child > th,
        &:last-child > td {
          border-bottom: 0;
        }
      }
    }
  }
  > .table-responsive {
    border: 0;
    margin-bottom: 0;
  }
}


// Optional heading
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  .border-top-radius(@panel-border-radius - 1);

  > .dropdown .dropdown-toggle {
    color: inherit;
  }
}

// Within heading, strip any `h*` tag of it's default margins for spacing.
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: ceil((@font-size-base * 1.125));
  color: inherit;

  > a {
    color: inherit;
  }
}

// Optional footer (stays gray in every modifier class)
.panel-footer {
  padding: 10px 15px;
  background-color: @panel-footer-bg;
  border-top: 1px solid @panel-inner-border;
  .border-bottom-radius(@panel-border-radius - 1);
}


// Collapsable panels (aka, accordion)
//
// Wrap a series of panels in `.panel-group` to turn them into an accordion with
// the help of our collapse JavaScript plugin.

.panel-group {
  // Tighten up margin so it's only between panels
  .panel {
    margin-bottom: 0;
    border-radius: @panel-border-radius;
    overflow: hidden; // crop contents when collapsed
    + .panel {
      margin-top: 5px;
    }
  }

  .panel-heading {
    border-bottom: 0;
    + .panel-collapse .panel-body {
      border-top: 1px solid @panel-inner-border;
    }
  }
  .panel-footer {
    border-top: 0;
    + .panel-collapse .panel-body {
      border-bottom: 1px solid @panel-inner-border;
    }
  }
}


// Contextual variations
.panel-default {
  .panel-variant(@panel-default-border; @panel-default-text; @panel-default-heading-bg; @panel-default-border);
}
.panel-primary {
  .panel-variant(@panel-primary-border; @panel-primary-text; @panel-primary-heading-bg; @panel-primary-border);
}
.panel-success {
  .panel-variant(@panel-success-border; @panel-success-text; @panel-success-heading-bg; @panel-success-border);
}
.panel-warning {
  .panel-variant(@panel-warning-border; @panel-warning-text; @panel-warning-heading-bg; @panel-warning-border);
}
.panel-danger {
  .panel-variant(@panel-danger-border; @panel-danger-text; @panel-danger-heading-bg; @panel-danger-border);
}
.panel-info {
  .panel-variant(@panel-info-border; @panel-info-text; @panel-info-heading-bg; @panel-info-border);
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/panels.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/panels.less");
    }
}