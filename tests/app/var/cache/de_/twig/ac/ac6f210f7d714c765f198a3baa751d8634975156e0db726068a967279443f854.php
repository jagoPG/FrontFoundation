<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/close.less */
class __TwigTemplate_ee6797e39593053b38d123d66592213b4d0e1d30126f8ef5e3c1b54963ef2277 extends Twig_Template
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
        $__internal_9bcd92d567c587176607a757106334ed5f0e6977c901da34254688485011ad24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bcd92d567c587176607a757106334ed5f0e6977c901da34254688485011ad24->enter($__internal_9bcd92d567c587176607a757106334ed5f0e6977c901da34254688485011ad24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/close.less"));

        // line 1
        echo "//
// Close icons
// --------------------------------------------------


.close {
  float: right;
  font-size: (@font-size-base * 1.5);
  font-weight: @close-font-weight;
  line-height: 1;
  color: @close-color;
  text-shadow: @close-text-shadow;
  .opacity(.2);

  &:hover,
  &:focus {
    color: @close-color;
    text-decoration: none;
    cursor: pointer;
    .opacity(.5);
  }

  // Additional properties for button version
  // iOS requires the button element instead of an anchor tag.
  // If you want the anchor version, it requires `href=\"#\"`.
  button& {
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none;
  }
}
";
        
        $__internal_9bcd92d567c587176607a757106334ed5f0e6977c901da34254688485011ad24->leave($__internal_9bcd92d567c587176607a757106334ed5f0e6977c901da34254688485011ad24_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/close.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Close icons
// --------------------------------------------------


.close {
  float: right;
  font-size: (@font-size-base * 1.5);
  font-weight: @close-font-weight;
  line-height: 1;
  color: @close-color;
  text-shadow: @close-text-shadow;
  .opacity(.2);

  &:hover,
  &:focus {
    color: @close-color;
    text-decoration: none;
    cursor: pointer;
    .opacity(.5);
  }

  // Additional properties for button version
  // iOS requires the button element instead of an anchor tag.
  // If you want the anchor version, it requires `href=\"#\"`.
  button& {
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none;
  }
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/close.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/close.less");
    }
}
