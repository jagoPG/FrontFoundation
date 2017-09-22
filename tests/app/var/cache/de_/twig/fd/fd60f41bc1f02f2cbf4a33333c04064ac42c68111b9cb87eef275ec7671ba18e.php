<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/pager.less */
class __TwigTemplate_f101adf5c903954110f465f6ba5698c9cb75c893780d9d7ac39a3611fbd1fb0c extends Twig_Template
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
        $__internal_b5397df9bb68000a45404a485a2d93039dc42ed5428d266b63806cdcca84cb9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5397df9bb68000a45404a485a2d93039dc42ed5428d266b63806cdcca84cb9f->enter($__internal_b5397df9bb68000a45404a485a2d93039dc42ed5428d266b63806cdcca84cb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/pager.less"));

        // line 1
        echo "//
// Pager pagination
// --------------------------------------------------


.pager {
  padding-left: 0;
  margin: @line-height-computed 0;
  list-style: none;
  text-align: center;
  .clearfix();
  li {
    display: inline;
    > a,
    > span {
      display: inline-block;
      padding: 5px 14px;
      background-color: @pagination-bg;
      border: 1px solid @pagination-border;
      border-radius: @pager-border-radius;
    }

    > a:hover,
    > a:focus {
      text-decoration: none;
      background-color: @pagination-hover-bg;
    }
  }

  .next {
    > a,
    > span {
      float: right;
    }
  }

  .previous {
    > a,
    > span {
      float: left;
    }
  }

  .disabled {
    > a,
    > a:hover,
    > a:focus,
    > span {
      color: @pager-disabled-color;
      background-color: @pagination-bg;
      cursor: not-allowed;
    }
  }

}
";
        
        $__internal_b5397df9bb68000a45404a485a2d93039dc42ed5428d266b63806cdcca84cb9f->leave($__internal_b5397df9bb68000a45404a485a2d93039dc42ed5428d266b63806cdcca84cb9f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/pager.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Pager pagination
// --------------------------------------------------


.pager {
  padding-left: 0;
  margin: @line-height-computed 0;
  list-style: none;
  text-align: center;
  .clearfix();
  li {
    display: inline;
    > a,
    > span {
      display: inline-block;
      padding: 5px 14px;
      background-color: @pagination-bg;
      border: 1px solid @pagination-border;
      border-radius: @pager-border-radius;
    }

    > a:hover,
    > a:focus {
      text-decoration: none;
      background-color: @pagination-hover-bg;
    }
  }

  .next {
    > a,
    > span {
      float: right;
    }
  }

  .previous {
    > a,
    > span {
      float: left;
    }
  }

  .disabled {
    > a,
    > a:hover,
    > a:focus,
    > span {
      color: @pager-disabled-color;
      background-color: @pagination-bg;
      cursor: not-allowed;
    }
  }

}
", "node_modules/parsleyjs/bower_components/bootstrap/less/pager.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/pager.less");
    }
}
