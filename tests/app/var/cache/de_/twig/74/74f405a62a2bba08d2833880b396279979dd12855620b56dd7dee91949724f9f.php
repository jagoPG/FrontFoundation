<?php

/* node_modules/uuid/index.js */
class __TwigTemplate_c100e91de89a809850aa5bcb58b1ae6afc66b7d96fb5cec122d188d241770851 extends Twig_Template
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
        $__internal_4d8dd7b1fcb29872f427b8451b6602a42b053250d604b489393f25ed0ccaf529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8dd7b1fcb29872f427b8451b6602a42b053250d604b489393f25ed0ccaf529->enter($__internal_4d8dd7b1fcb29872f427b8451b6602a42b053250d604b489393f25ed0ccaf529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uuid/index.js"));

        // line 1
        echo "var v1 = require('./v1');
var v4 = require('./v4');

var uuid = v4;
uuid.v1 = v1;
uuid.v4 = v4;

module.exports = uuid;
";
        
        $__internal_4d8dd7b1fcb29872f427b8451b6602a42b053250d604b489393f25ed0ccaf529->leave($__internal_4d8dd7b1fcb29872f427b8451b6602a42b053250d604b489393f25ed0ccaf529_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uuid/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var v1 = require('./v1');
var v4 = require('./v4');

var uuid = v4;
uuid.v1 = v1;
uuid.v4 = v4;

module.exports = uuid;
", "node_modules/uuid/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uuid/index.js");
    }
}
