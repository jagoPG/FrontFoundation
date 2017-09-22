<?php

/* node_modules/asn1.js/lib/asn1/base/index.js */
class __TwigTemplate_d430b7f454720766ed1adf8b0dd28c14475093eb5cb8e1febe97d6436bfa9990 extends Twig_Template
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
        $__internal_4a4c732efc05e5ea815459f00c5f88a8fe372feb52ff957411a75d9eedd78ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4c732efc05e5ea815459f00c5f88a8fe372feb52ff957411a75d9eedd78ca3->enter($__internal_4a4c732efc05e5ea815459f00c5f88a8fe372feb52ff957411a75d9eedd78ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asn1.js/lib/asn1/base/index.js"));

        // line 1
        echo "var base = exports;

base.Reporter = require('./reporter').Reporter;
base.DecoderBuffer = require('./buffer').DecoderBuffer;
base.EncoderBuffer = require('./buffer').EncoderBuffer;
base.Node = require('./node');
";
        
        $__internal_4a4c732efc05e5ea815459f00c5f88a8fe372feb52ff957411a75d9eedd78ca3->leave($__internal_4a4c732efc05e5ea815459f00c5f88a8fe372feb52ff957411a75d9eedd78ca3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asn1.js/lib/asn1/base/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var base = exports;

base.Reporter = require('./reporter').Reporter;
base.DecoderBuffer = require('./buffer').DecoderBuffer;
base.EncoderBuffer = require('./buffer').EncoderBuffer;
base.Node = require('./node');
", "node_modules/asn1.js/lib/asn1/base/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asn1.js/lib/asn1/base/index.js");
    }
}
