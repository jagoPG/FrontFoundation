<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/progress-bars.less */
class __TwigTemplate_bfbff69517244d4a9c7c7df71482233eb3d67377e7c35b9199215dede0211181 extends Twig_Template
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
        $__internal_fc3d748e2eba3175122eb914c7b00dd4d88734a4ebfab961f56b6070ca3d8d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3d748e2eba3175122eb914c7b00dd4d88734a4ebfab961f56b6070ca3d8d4f->enter($__internal_fc3d748e2eba3175122eb914c7b00dd4d88734a4ebfab961f56b6070ca3d8d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/progress-bars.less"));

        // line 1
        echo "//
// Progress bars
// --------------------------------------------------


// Bar animations
// -------------------------

// WebKit
@-webkit-keyframes progress-bar-stripes {
  from  { background-position: 40px 0; }
  to    { background-position: 0 0; }
}

// Spec and IE10+
@keyframes progress-bar-stripes {
  from  { background-position: 40px 0; }
  to    { background-position: 0 0; }
}



// Bar itself
// -------------------------

// Outer container
.progress {
  overflow: hidden;
  height: @line-height-computed;
  margin-bottom: @line-height-computed;
  background-color: @progress-bg;
  border-radius: @border-radius-base;
  .box-shadow(inset 0 1px 2px rgba(0,0,0,.1));
}

// Bar of progress
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: @font-size-small;
  line-height: @line-height-computed;
  color: @progress-bar-color;
  text-align: center;
  background-color: @progress-bar-bg;
  .box-shadow(inset 0 -1px 0 rgba(0,0,0,.15));
  .transition(width .6s ease);
}

// Striped bars
.progress-striped .progress-bar {
  #gradient > .striped();
  background-size: 40px 40px;
}

// Call animation for the active one
.progress.active .progress-bar {
  .animation(progress-bar-stripes 2s linear infinite);
}



// Variations
// -------------------------

.progress-bar-success {
  .progress-bar-variant(@progress-bar-success-bg);
}

.progress-bar-info {
  .progress-bar-variant(@progress-bar-info-bg);
}

.progress-bar-warning {
  .progress-bar-variant(@progress-bar-warning-bg);
}

.progress-bar-danger {
  .progress-bar-variant(@progress-bar-danger-bg);
}
";
        
        $__internal_fc3d748e2eba3175122eb914c7b00dd4d88734a4ebfab961f56b6070ca3d8d4f->leave($__internal_fc3d748e2eba3175122eb914c7b00dd4d88734a4ebfab961f56b6070ca3d8d4f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/progress-bars.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Progress bars
// --------------------------------------------------


// Bar animations
// -------------------------

// WebKit
@-webkit-keyframes progress-bar-stripes {
  from  { background-position: 40px 0; }
  to    { background-position: 0 0; }
}

// Spec and IE10+
@keyframes progress-bar-stripes {
  from  { background-position: 40px 0; }
  to    { background-position: 0 0; }
}



// Bar itself
// -------------------------

// Outer container
.progress {
  overflow: hidden;
  height: @line-height-computed;
  margin-bottom: @line-height-computed;
  background-color: @progress-bg;
  border-radius: @border-radius-base;
  .box-shadow(inset 0 1px 2px rgba(0,0,0,.1));
}

// Bar of progress
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: @font-size-small;
  line-height: @line-height-computed;
  color: @progress-bar-color;
  text-align: center;
  background-color: @progress-bar-bg;
  .box-shadow(inset 0 -1px 0 rgba(0,0,0,.15));
  .transition(width .6s ease);
}

// Striped bars
.progress-striped .progress-bar {
  #gradient > .striped();
  background-size: 40px 40px;
}

// Call animation for the active one
.progress.active .progress-bar {
  .animation(progress-bar-stripes 2s linear infinite);
}



// Variations
// -------------------------

.progress-bar-success {
  .progress-bar-variant(@progress-bar-success-bg);
}

.progress-bar-info {
  .progress-bar-variant(@progress-bar-info-bg);
}

.progress-bar-warning {
  .progress-bar-variant(@progress-bar-warning-bg);
}

.progress-bar-danger {
  .progress-bar-variant(@progress-bar-danger-bg);
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/progress-bars.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/progress-bars.less");
    }
}
