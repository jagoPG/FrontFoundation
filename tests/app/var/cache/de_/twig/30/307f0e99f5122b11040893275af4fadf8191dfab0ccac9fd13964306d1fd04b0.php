<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/tables.less */
class __TwigTemplate_440e45d32deaf9483663bd0475c48045a30ac40679c9628adb4cf65ae95f2388 extends Twig_Template
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
        $__internal_829ff5452293d67f987982e5dbf6dd12cac7909a6f8383af132dbc81f9fd3b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829ff5452293d67f987982e5dbf6dd12cac7909a6f8383af132dbc81f9fd3b92->enter($__internal_829ff5452293d67f987982e5dbf6dd12cac7909a6f8383af132dbc81f9fd3b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/tables.less"));

        // line 1
        echo "//
// Tables
// --------------------------------------------------


table {
  max-width: 100%;
  background-color: @table-bg;
}
th {
  text-align: left;
}


// Baseline styles

.table {
  width: 100%;
  margin-bottom: @line-height-computed;
  // Cells
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        padding: @table-cell-padding;
        line-height: @line-height-base;
        vertical-align: top;
        border-top: 1px solid @table-border-color;
      }
    }
  }
  // Bottom align for column headings
  > thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid @table-border-color;
  }
  // Remove top border from thead by default
  > caption + thead,
  > colgroup + thead,
  > thead:first-child {
    > tr:first-child {
      > th,
      > td {
        border-top: 0;
      }
    }
  }
  // Account for multiple tbody instances
  > tbody + tbody {
    border-top: 2px solid @table-border-color;
  }

  // Nesting
  .table {
    background-color: @body-bg;
  }
}


// Condensed table w/ half padding

.table-condensed {
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        padding: @table-condensed-cell-padding;
      }
    }
  }
}


// Bordered version
//
// Add borders all around the table and between all the columns.

.table-bordered {
  border: 1px solid @table-border-color;
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        border: 1px solid @table-border-color;
      }
    }
  }
  > thead > tr {
    > th,
    > td {
      border-bottom-width: 2px;
    }
  }
}


// Zebra-striping
//
// Default zebra-stripe styles (alternating gray and transparent backgrounds)

.table-striped {
  > tbody > tr:nth-child(odd) {
    > td,
    > th {
      background-color: @table-bg-accent;
    }
  }
}


// Hover effect
//
// Placed here since it has to come after the potential zebra striping

.table-hover {
  > tbody > tr:hover {
    > td,
    > th {
      background-color: @table-bg-hover;
    }
  }
}


// Table cell sizing
//
// Reset default table behavior

table col[class*=\"col-\"] {
  position: static; // Prevent border hiding in Firefox and IE9/10 (see https://github.com/twbs/bootstrap/issues/11623)
  float: none;
  display: table-column;
}
table {
  td,
  th {
    &[class*=\"col-\"] {
      float: none;
      display: table-cell;
    }
  }
}


// Table backgrounds
//
// Exact selectors below required to override `.table-striped` and prevent
// inheritance to nested tables.

// Generate the contextual variants
.table-row-variant(active; @table-bg-active);
.table-row-variant(success; @state-success-bg);
.table-row-variant(danger; @state-danger-bg);
.table-row-variant(warning; @state-warning-bg);


// Responsive tables
//
// Wrap your tables in `.table-responsive` and we'll make them mobile friendly
// by enabling horizontal scrolling. Only applies <768px. Everything above that
// will display normally.

@media (max-width: @screen-xs-max) {
  .table-responsive {
    width: 100%;
    margin-bottom: (@line-height-computed * 0.75);
    overflow-y: hidden;
    overflow-x: scroll;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid @table-border-color;
    -webkit-overflow-scrolling: touch;

    // Tighten up spacing
    > .table {
      margin-bottom: 0;

      // Ensure the content doesn't wrap
      > thead,
      > tbody,
      > tfoot {
        > tr {
          > th,
          > td {
            white-space: nowrap;
          }
        }
      }
    }

    // Special overrides for the bordered tables
    > .table-bordered {
      border: 0;

      // Nuke the appropriate borders so that the parent can handle them
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
        }
      }

      // Only nuke the last row's bottom-border in `tbody` and `tfoot` since
      // chances are there will be only one `tr` in a `thead` and that would
      // remove the border altogether.
      > tbody,
      > tfoot {
        > tr:last-child {
          > th,
          > td {
            border-bottom: 0;
          }
        }
      }

    }
  }
}
";
        
        $__internal_829ff5452293d67f987982e5dbf6dd12cac7909a6f8383af132dbc81f9fd3b92->leave($__internal_829ff5452293d67f987982e5dbf6dd12cac7909a6f8383af132dbc81f9fd3b92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/tables.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Tables
// --------------------------------------------------


table {
  max-width: 100%;
  background-color: @table-bg;
}
th {
  text-align: left;
}


// Baseline styles

.table {
  width: 100%;
  margin-bottom: @line-height-computed;
  // Cells
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        padding: @table-cell-padding;
        line-height: @line-height-base;
        vertical-align: top;
        border-top: 1px solid @table-border-color;
      }
    }
  }
  // Bottom align for column headings
  > thead > tr > th {
    vertical-align: bottom;
    border-bottom: 2px solid @table-border-color;
  }
  // Remove top border from thead by default
  > caption + thead,
  > colgroup + thead,
  > thead:first-child {
    > tr:first-child {
      > th,
      > td {
        border-top: 0;
      }
    }
  }
  // Account for multiple tbody instances
  > tbody + tbody {
    border-top: 2px solid @table-border-color;
  }

  // Nesting
  .table {
    background-color: @body-bg;
  }
}


// Condensed table w/ half padding

.table-condensed {
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        padding: @table-condensed-cell-padding;
      }
    }
  }
}


// Bordered version
//
// Add borders all around the table and between all the columns.

.table-bordered {
  border: 1px solid @table-border-color;
  > thead,
  > tbody,
  > tfoot {
    > tr {
      > th,
      > td {
        border: 1px solid @table-border-color;
      }
    }
  }
  > thead > tr {
    > th,
    > td {
      border-bottom-width: 2px;
    }
  }
}


// Zebra-striping
//
// Default zebra-stripe styles (alternating gray and transparent backgrounds)

.table-striped {
  > tbody > tr:nth-child(odd) {
    > td,
    > th {
      background-color: @table-bg-accent;
    }
  }
}


// Hover effect
//
// Placed here since it has to come after the potential zebra striping

.table-hover {
  > tbody > tr:hover {
    > td,
    > th {
      background-color: @table-bg-hover;
    }
  }
}


// Table cell sizing
//
// Reset default table behavior

table col[class*=\"col-\"] {
  position: static; // Prevent border hiding in Firefox and IE9/10 (see https://github.com/twbs/bootstrap/issues/11623)
  float: none;
  display: table-column;
}
table {
  td,
  th {
    &[class*=\"col-\"] {
      float: none;
      display: table-cell;
    }
  }
}


// Table backgrounds
//
// Exact selectors below required to override `.table-striped` and prevent
// inheritance to nested tables.

// Generate the contextual variants
.table-row-variant(active; @table-bg-active);
.table-row-variant(success; @state-success-bg);
.table-row-variant(danger; @state-danger-bg);
.table-row-variant(warning; @state-warning-bg);


// Responsive tables
//
// Wrap your tables in `.table-responsive` and we'll make them mobile friendly
// by enabling horizontal scrolling. Only applies <768px. Everything above that
// will display normally.

@media (max-width: @screen-xs-max) {
  .table-responsive {
    width: 100%;
    margin-bottom: (@line-height-computed * 0.75);
    overflow-y: hidden;
    overflow-x: scroll;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid @table-border-color;
    -webkit-overflow-scrolling: touch;

    // Tighten up spacing
    > .table {
      margin-bottom: 0;

      // Ensure the content doesn't wrap
      > thead,
      > tbody,
      > tfoot {
        > tr {
          > th,
          > td {
            white-space: nowrap;
          }
        }
      }
    }

    // Special overrides for the bordered tables
    > .table-bordered {
      border: 0;

      // Nuke the appropriate borders so that the parent can handle them
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
        }
      }

      // Only nuke the last row's bottom-border in `tbody` and `tfoot` since
      // chances are there will be only one `tr` in a `thead` and that would
      // remove the border altogether.
      > tbody,
      > tfoot {
        > tr:last-child {
          > th,
          > td {
            border-bottom: 0;
          }
        }
      }

    }
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/tables.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/tables.less");
    }
}
