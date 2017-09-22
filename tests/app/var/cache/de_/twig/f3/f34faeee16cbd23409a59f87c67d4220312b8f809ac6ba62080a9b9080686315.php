<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/grid.less */
class __TwigTemplate_4122a692b00b6445faa70573d4e69a13c3b6e2c3d453b83351fcdc7dcaf8232a extends Twig_Template
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
        $__internal_ee8dd3ef183fa15e4869eea1d49899382e2f0c2be1cae8214d4554035c99e4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8dd3ef183fa15e4869eea1d49899382e2f0c2be1cae8214d4554035c99e4b7->enter($__internal_ee8dd3ef183fa15e4869eea1d49899382e2f0c2be1cae8214d4554035c99e4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/grid.less"));

        // line 1
        echo "//
// Grid system
// --------------------------------------------------

// Set the container width, and override it for fixed navbars in media queries
.container {
  .container-fixed();

  @media (min-width: @screen-sm) {
    width: @container-sm;
  }
  @media (min-width: @screen-md) {
    width: @container-md;
  }
  @media (min-width: @screen-lg-min) {
    width: @container-lg;
  }
}

// mobile first defaults
.row {
  .make-row();
}

// Common styles for small and large grid columns
.make-grid-columns();


// Extra small grid
//
// Columns, offsets, pushes, and pulls for extra small devices like
// smartphones.

.make-grid-columns-float(xs);
.make-grid(@grid-columns, xs, width);
.make-grid(@grid-columns, xs, pull);
.make-grid(@grid-columns, xs, push);
.make-grid(@grid-columns, xs, offset);


// Small grid
//
// Columns, offsets, pushes, and pulls for the small device range, from phones
// to tablets.

@media (min-width: @screen-sm-min) {
  .make-grid-columns-float(sm);
  .make-grid(@grid-columns, sm, width);
  .make-grid(@grid-columns, sm, pull);
  .make-grid(@grid-columns, sm, push);
  .make-grid(@grid-columns, sm, offset);
}


// Medium grid
//
// Columns, offsets, pushes, and pulls for the desktop device range.

@media (min-width: @screen-md-min) {
  .make-grid-columns-float(md);
  .make-grid(@grid-columns, md, width);
  .make-grid(@grid-columns, md, pull);
  .make-grid(@grid-columns, md, push);
  .make-grid(@grid-columns, md, offset);
}


// Large grid
//
// Columns, offsets, pushes, and pulls for the large desktop device range.

@media (min-width: @screen-lg-min) {
  .make-grid-columns-float(lg);
  .make-grid(@grid-columns, lg, width);
  .make-grid(@grid-columns, lg, pull);
  .make-grid(@grid-columns, lg, push);
  .make-grid(@grid-columns, lg, offset);
}

";
        
        $__internal_ee8dd3ef183fa15e4869eea1d49899382e2f0c2be1cae8214d4554035c99e4b7->leave($__internal_ee8dd3ef183fa15e4869eea1d49899382e2f0c2be1cae8214d4554035c99e4b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/grid.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Grid system
// --------------------------------------------------

// Set the container width, and override it for fixed navbars in media queries
.container {
  .container-fixed();

  @media (min-width: @screen-sm) {
    width: @container-sm;
  }
  @media (min-width: @screen-md) {
    width: @container-md;
  }
  @media (min-width: @screen-lg-min) {
    width: @container-lg;
  }
}

// mobile first defaults
.row {
  .make-row();
}

// Common styles for small and large grid columns
.make-grid-columns();


// Extra small grid
//
// Columns, offsets, pushes, and pulls for extra small devices like
// smartphones.

.make-grid-columns-float(xs);
.make-grid(@grid-columns, xs, width);
.make-grid(@grid-columns, xs, pull);
.make-grid(@grid-columns, xs, push);
.make-grid(@grid-columns, xs, offset);


// Small grid
//
// Columns, offsets, pushes, and pulls for the small device range, from phones
// to tablets.

@media (min-width: @screen-sm-min) {
  .make-grid-columns-float(sm);
  .make-grid(@grid-columns, sm, width);
  .make-grid(@grid-columns, sm, pull);
  .make-grid(@grid-columns, sm, push);
  .make-grid(@grid-columns, sm, offset);
}


// Medium grid
//
// Columns, offsets, pushes, and pulls for the desktop device range.

@media (min-width: @screen-md-min) {
  .make-grid-columns-float(md);
  .make-grid(@grid-columns, md, width);
  .make-grid(@grid-columns, md, pull);
  .make-grid(@grid-columns, md, push);
  .make-grid(@grid-columns, md, offset);
}


// Large grid
//
// Columns, offsets, pushes, and pulls for the large desktop device range.

@media (min-width: @screen-lg-min) {
  .make-grid-columns-float(lg);
  .make-grid(@grid-columns, lg, width);
  .make-grid(@grid-columns, lg, pull);
  .make-grid(@grid-columns, lg, push);
  .make-grid(@grid-columns, lg, offset);
}

", "node_modules/parsleyjs/bower_components/bootstrap/less/grid.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/grid.less");
    }
}
