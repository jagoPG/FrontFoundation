<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/alerts.less */
class __TwigTemplate_cf52692ea4dd878e15e66e66fe364d26c54972b175f1d239f486dcc6df7402f2 extends Twig_Template
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
        $__internal_82f46dfb431df5f4652c9633710e5232af1cbbaa7d92edb6779a7369dc31f13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f46dfb431df5f4652c9633710e5232af1cbbaa7d92edb6779a7369dc31f13a->enter($__internal_82f46dfb431df5f4652c9633710e5232af1cbbaa7d92edb6779a7369dc31f13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/alerts.less"));

        // line 1
        echo "//
// Alerts
// --------------------------------------------------


// Base styles
// -------------------------

.alert {
  padding: @alert-padding;
  margin-bottom: @line-height-computed;
  border: 1px solid transparent;
  border-radius: @alert-border-radius;

  // Headings for larger alerts
  h4 {
    margin-top: 0;
    // Specified for the h4 to prevent conflicts of changing @headings-color
    color: inherit;
  }
  // Provide class for links that match alerts
  .alert-link {
    font-weight: @alert-link-font-weight;
  }

  // Improve alignment and spacing of inner content
  > p,
  > ul {
    margin-bottom: 0;
  }
  > p + p {
    margin-top: 5px;
  }
}

// Dismissable alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissable {
 padding-right: (@alert-padding + 20);

  // Adjust close link position
  .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
  }
}

// Alternate styles
//
// Generate contextual modifier classes for colorizing the alert.

.alert-success {
  .alert-variant(@alert-success-bg; @alert-success-border; @alert-success-text);
}
.alert-info {
  .alert-variant(@alert-info-bg; @alert-info-border; @alert-info-text);
}
.alert-warning {
  .alert-variant(@alert-warning-bg; @alert-warning-border; @alert-warning-text);
}
.alert-danger {
  .alert-variant(@alert-danger-bg; @alert-danger-border; @alert-danger-text);
}
";
        
        $__internal_82f46dfb431df5f4652c9633710e5232af1cbbaa7d92edb6779a7369dc31f13a->leave($__internal_82f46dfb431df5f4652c9633710e5232af1cbbaa7d92edb6779a7369dc31f13a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/alerts.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Alerts
// --------------------------------------------------


// Base styles
// -------------------------

.alert {
  padding: @alert-padding;
  margin-bottom: @line-height-computed;
  border: 1px solid transparent;
  border-radius: @alert-border-radius;

  // Headings for larger alerts
  h4 {
    margin-top: 0;
    // Specified for the h4 to prevent conflicts of changing @headings-color
    color: inherit;
  }
  // Provide class for links that match alerts
  .alert-link {
    font-weight: @alert-link-font-weight;
  }

  // Improve alignment and spacing of inner content
  > p,
  > ul {
    margin-bottom: 0;
  }
  > p + p {
    margin-top: 5px;
  }
}

// Dismissable alerts
//
// Expand the right padding and account for the close button's positioning.

.alert-dismissable {
 padding-right: (@alert-padding + 20);

  // Adjust close link position
  .close {
    position: relative;
    top: -2px;
    right: -21px;
    color: inherit;
  }
}

// Alternate styles
//
// Generate contextual modifier classes for colorizing the alert.

.alert-success {
  .alert-variant(@alert-success-bg; @alert-success-border; @alert-success-text);
}
.alert-info {
  .alert-variant(@alert-info-bg; @alert-info-border; @alert-info-text);
}
.alert-warning {
  .alert-variant(@alert-warning-bg; @alert-warning-border; @alert-warning-text);
}
.alert-danger {
  .alert-variant(@alert-danger-bg; @alert-danger-border; @alert-danger-text);
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/alerts.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/alerts.less");
    }
}
