<?php

/* node_modules/fsevents/node_modules/tar/lib/global-header-writer.js */
class __TwigTemplate_9597233d8d4cfd946ecad8e0d81fd9757ba51a3112e832e3ae484e3ba0d25323 extends Twig_Template
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
        $__internal_c0171be954b82f4cbf68954eacfee11c44e708077f9466800ce99b5e5af0e3b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0171be954b82f4cbf68954eacfee11c44e708077f9466800ce99b5e5af0e3b6->enter($__internal_c0171be954b82f4cbf68954eacfee11c44e708077f9466800ce99b5e5af0e3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/tar/lib/global-header-writer.js"));

        // line 1
        echo "module.exports = GlobalHeaderWriter

var ExtendedHeaderWriter = require(\"./extended-header-writer.js\")
  , inherits = require(\"inherits\")

inherits(GlobalHeaderWriter, ExtendedHeaderWriter)

function GlobalHeaderWriter (props) {
  if (!(this instanceof GlobalHeaderWriter)) {
    return new GlobalHeaderWriter(props)
  }
  ExtendedHeaderWriter.call(this, props)
  this.props.type = \"g\"
}
";
        
        $__internal_c0171be954b82f4cbf68954eacfee11c44e708077f9466800ce99b5e5af0e3b6->leave($__internal_c0171be954b82f4cbf68954eacfee11c44e708077f9466800ce99b5e5af0e3b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/tar/lib/global-header-writer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = GlobalHeaderWriter

var ExtendedHeaderWriter = require(\"./extended-header-writer.js\")
  , inherits = require(\"inherits\")

inherits(GlobalHeaderWriter, ExtendedHeaderWriter)

function GlobalHeaderWriter (props) {
  if (!(this instanceof GlobalHeaderWriter)) {
    return new GlobalHeaderWriter(props)
  }
  ExtendedHeaderWriter.call(this, props)
  this.props.type = \"g\"
}
", "node_modules/fsevents/node_modules/tar/lib/global-header-writer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/tar/lib/global-header-writer.js");
    }
}
