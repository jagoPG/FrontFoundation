<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/component-animations.less */
class __TwigTemplate_6520cad81cded036a4a5e1106211e3bfe124b55f9baaa3a3b97a4870df3f0c62 extends Twig_Template
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
        $__internal_4b1b1383b55a2ba1582f7bcf50860dbcb59df8412f5df22ca3b66fcb5b54dd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b1b1383b55a2ba1582f7bcf50860dbcb59df8412f5df22ca3b66fcb5b54dd8a->enter($__internal_4b1b1383b55a2ba1582f7bcf50860dbcb59df8412f5df22ca3b66fcb5b54dd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/component-animations.less"));

        // line 1
        echo "//
// Component animations
// --------------------------------------------------

// Heads up!
//
// We don't use the `.opacity()` mixin here since it causes a bug with text
// fields in IE7-8. Source: https://github.com/twitter/bootstrap/pull/3552.

.fade {
  opacity: 0;
  .transition(opacity .15s linear);
  &.in {
    opacity: 1;
  }
}

.collapse {
  display: none;
  &.in {
    display: block;
  }
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  .transition(height .35s ease);
}
";
        
        $__internal_4b1b1383b55a2ba1582f7bcf50860dbcb59df8412f5df22ca3b66fcb5b54dd8a->leave($__internal_4b1b1383b55a2ba1582f7bcf50860dbcb59df8412f5df22ca3b66fcb5b54dd8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/component-animations.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Component animations
// --------------------------------------------------

// Heads up!
//
// We don't use the `.opacity()` mixin here since it causes a bug with text
// fields in IE7-8. Source: https://github.com/twitter/bootstrap/pull/3552.

.fade {
  opacity: 0;
  .transition(opacity .15s linear);
  &.in {
    opacity: 1;
  }
}

.collapse {
  display: none;
  &.in {
    display: block;
  }
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  .transition(height .35s ease);
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/component-animations.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/component-animations.less");
    }
}
