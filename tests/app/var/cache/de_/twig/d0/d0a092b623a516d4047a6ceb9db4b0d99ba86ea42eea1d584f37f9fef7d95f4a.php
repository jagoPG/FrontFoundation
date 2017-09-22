<?php

/* node_modules/parsleyjs/doc/assets/help.less */
class __TwigTemplate_8f9c7cc31b34e32838a720479bc841c953d92fc9e47e8dc26b834161014e63f0 extends Twig_Template
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
        $__internal_48e1369c9a1c28adc453f3a6cd3b838ae31c81e6fa832873ccb44f01b0c8e113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e1369c9a1c28adc453f3a6cd3b838ae31c81e6fa832873ccb44f01b0c8e113->enter($__internal_48e1369c9a1c28adc453f3a6cd3b838ae31c81e6fa832873ccb44f01b0c8e113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/doc/assets/help.less"));

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
    padding: 0 10px;

    .filters {
      float:right;
    }
  }

  .uwidget-info {
    display: block;
    height: 15px;
    padding: 2px;
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

      .gh-issue-title, .stack-question-title {
        margin: 5px;
        font-size: 15px;
        line-height: 1.3;
        margin-bottom: 2px;
        word-wrap: break-word;

        a {
          color: @black;
          text-decoration: none;
        }
      }

      .gh-issue-comments, .stack-question-answers {
        width: 80px;
        float: left;
        margin-left: 5px;
        font-size: 13px;
        color: @lightgrey;
      }
    }
  }
}
";
        
        $__internal_48e1369c9a1c28adc453f3a6cd3b838ae31c81e6fa832873ccb44f01b0c8e113->leave($__internal_48e1369c9a1c28adc453f3a6cd3b838ae31c81e6fa832873ccb44f01b0c8e113_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/doc/assets/help.less";
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
    padding: 0 10px;

    .filters {
      float:right;
    }
  }

  .uwidget-info {
    display: block;
    height: 15px;
    padding: 2px;
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

      .gh-issue-title, .stack-question-title {
        margin: 5px;
        font-size: 15px;
        line-height: 1.3;
        margin-bottom: 2px;
        word-wrap: break-word;

        a {
          color: @black;
          text-decoration: none;
        }
      }

      .gh-issue-comments, .stack-question-answers {
        width: 80px;
        float: left;
        margin-left: 5px;
        font-size: 13px;
        color: @lightgrey;
      }
    }
  }
}
", "node_modules/parsleyjs/doc/assets/help.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/doc/assets/help.less");
    }
}
