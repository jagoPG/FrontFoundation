<?php

/* node_modules/tar/lib/global-header-writer.js */
class __TwigTemplate_f3a40154480cdc11f71e044107b342bdd1d75de94d375f5f0cd095ae3c6c5437 extends Twig_Template
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
        $__internal_398c43af36d1b5b8f7e5297898b4455aae3bdaef17226122bdc3dc91d4f79fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398c43af36d1b5b8f7e5297898b4455aae3bdaef17226122bdc3dc91d4f79fae->enter($__internal_398c43af36d1b5b8f7e5297898b4455aae3bdaef17226122bdc3dc91d4f79fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar/lib/global-header-writer.js"));

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
        
        $__internal_398c43af36d1b5b8f7e5297898b4455aae3bdaef17226122bdc3dc91d4f79fae->leave($__internal_398c43af36d1b5b8f7e5297898b4455aae3bdaef17226122bdc3dc91d4f79fae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar/lib/global-header-writer.js";
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
", "node_modules/tar/lib/global-header-writer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar/lib/global-header-writer.js");
    }
}
