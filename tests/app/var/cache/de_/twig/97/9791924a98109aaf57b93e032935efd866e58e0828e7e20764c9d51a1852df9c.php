<?php

/* node_modules/parsleyjs/bower_components/uwidget/uwidget.less */
class __TwigTemplate_bb2362d7f5612986367000b025296db80204d4f3590ad450227ff35a40a406ed extends Twig_Template
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
        $__internal_e33b1cd4b94296236cf3a3b74fa9068170b8970c8dc7c494b28125c77ba2bf5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33b1cd4b94296236cf3a3b74fa9068170b8970c8dc7c494b28125c77ba2bf5c->enter($__internal_e33b1cd4b94296236cf3a3b74fa9068170b8970c8dc7c494b28125c77ba2bf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/uwidget/uwidget.less"));

        // line 1
        echo "@lightgrey: #999;
@extralightgrey: #f5f5f5;
@border: #e5e5e5;
@black: #111;

.uwidget {
  border: 1px solid @border;

  .uwidget-actions {
    display: block;
    height: 22px;
    background-color: @extralightgrey;

    .filters {
      float:right;
    }
  }

  .uwidget-info {
    display: block;
    height: 15px;
    color: @lightgrey;
    font-size: 10px;
    text-align: right;
    background-color: @extralightgrey;

    a, a:hover, a:visited {
      color: @lightgrey;
      text-decoration: none;
    }
  }

  ul.uwidget-container {
    display: block;
    margin: 0;
    padding: 2px;
    list-style: none;
    text-align: justify;
    overflow-x: hidden;
    overflow-y: scroll;

    li {
      position: relative;
      display: block;
      margin-bottom: -1px;
      padding: 8px;
      border-bottom: 1px solid @border;

      &:last-child {
        border: none;
      }
    }
  }
}
";
        
        $__internal_e33b1cd4b94296236cf3a3b74fa9068170b8970c8dc7c494b28125c77ba2bf5c->leave($__internal_e33b1cd4b94296236cf3a3b74fa9068170b8970c8dc7c494b28125c77ba2bf5c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/uwidget/uwidget.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("@lightgrey: #999;
@extralightgrey: #f5f5f5;
@border: #e5e5e5;
@black: #111;

.uwidget {
  border: 1px solid @border;

  .uwidget-actions {
    display: block;
    height: 22px;
    background-color: @extralightgrey;

    .filters {
      float:right;
    }
  }

  .uwidget-info {
    display: block;
    height: 15px;
    color: @lightgrey;
    font-size: 10px;
    text-align: right;
    background-color: @extralightgrey;

    a, a:hover, a:visited {
      color: @lightgrey;
      text-decoration: none;
    }
  }

  ul.uwidget-container {
    display: block;
    margin: 0;
    padding: 2px;
    list-style: none;
    text-align: justify;
    overflow-x: hidden;
    overflow-y: scroll;

    li {
      position: relative;
      display: block;
      margin-bottom: -1px;
      padding: 8px;
      border-bottom: 1px solid @border;

      &:last-child {
        border: none;
      }
    }
  }
}
", "node_modules/parsleyjs/bower_components/uwidget/uwidget.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/uwidget/uwidget.less");
    }
}
