<?php

/* node_modules/parsleyjs/bower_components/bootstrap/less/code.less */
class __TwigTemplate_52cb88ad1402d7d0b48b7335d2b1a4da395b02a901fd249e0b2b9e8dcc40b1a3 extends Twig_Template
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
        $__internal_ae3b648825dff54937d1af02eca98492e9201aad8c48a4c1a55d95bc5cb161a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3b648825dff54937d1af02eca98492e9201aad8c48a4c1a55d95bc5cb161a2->enter($__internal_ae3b648825dff54937d1af02eca98492e9201aad8c48a4c1a55d95bc5cb161a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/bootstrap/less/code.less"));

        // line 1
        echo "//
// Code (inline and block)
// --------------------------------------------------


// Inline and block code styles
code,
kbd,
pre,
samp {
  font-family: @font-family-monospace;
}

// Inline code
code {
  padding: 2px 4px;
  font-size: 90%;
  color: @code-color;
  background-color: @code-bg;
  white-space: nowrap;
  border-radius: @border-radius-base;
}

// Blocks of code
pre {
  display: block;
  padding: ((@line-height-computed - 1) / 2);
  margin: 0 0 (@line-height-computed / 2);
  font-size: (@font-size-base - 1); // 14px to 13px
  line-height: @line-height-base;
  word-break: break-all;
  word-wrap: break-word;
  color: @pre-color;
  background-color: @pre-bg;
  border: 1px solid @pre-border-color;
  border-radius: @border-radius-base;

  // Account for some code outputs that place code tags in pre tags
  code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0;
  }
}

// Enable scrollable blocks of code
.pre-scrollable {
  max-height: @pre-scrollable-max-height;
  overflow-y: scroll;
}
";
        
        $__internal_ae3b648825dff54937d1af02eca98492e9201aad8c48a4c1a55d95bc5cb161a2->leave($__internal_ae3b648825dff54937d1af02eca98492e9201aad8c48a4c1a55d95bc5cb161a2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/bootstrap/less/code.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("//
// Code (inline and block)
// --------------------------------------------------


// Inline and block code styles
code,
kbd,
pre,
samp {
  font-family: @font-family-monospace;
}

// Inline code
code {
  padding: 2px 4px;
  font-size: 90%;
  color: @code-color;
  background-color: @code-bg;
  white-space: nowrap;
  border-radius: @border-radius-base;
}

// Blocks of code
pre {
  display: block;
  padding: ((@line-height-computed - 1) / 2);
  margin: 0 0 (@line-height-computed / 2);
  font-size: (@font-size-base - 1); // 14px to 13px
  line-height: @line-height-base;
  word-break: break-all;
  word-wrap: break-word;
  color: @pre-color;
  background-color: @pre-bg;
  border: 1px solid @pre-border-color;
  border-radius: @border-radius-base;

  // Account for some code outputs that place code tags in pre tags
  code {
    padding: 0;
    font-size: inherit;
    color: inherit;
    white-space: pre-wrap;
    background-color: transparent;
    border-radius: 0;
  }
}

// Enable scrollable blocks of code
.pre-scrollable {
  max-height: @pre-scrollable-max-height;
  overflow-y: scroll;
}
", "node_modules/parsleyjs/bower_components/bootstrap/less/code.less", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/bootstrap/less/code.less");
    }
}
