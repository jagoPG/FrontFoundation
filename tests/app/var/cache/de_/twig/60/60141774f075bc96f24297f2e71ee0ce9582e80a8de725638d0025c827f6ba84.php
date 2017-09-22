<?php

/* node_modules/core-js/fn/object/lookup-setter.js */
class __TwigTemplate_5c20c98ea71025f28aead727b9689020a0c48fd3bbd913ed784c2ffa8c93292d extends Twig_Template
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
        $__internal_ef2766dacd1ed907a6715d338ecc9ef9bbcf41a2f2770742a585a9258e1a81f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2766dacd1ed907a6715d338ecc9ef9bbcf41a2f2770742a585a9258e1a81f8->enter($__internal_ef2766dacd1ed907a6715d338ecc9ef9bbcf41a2f2770742a585a9258e1a81f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/lookup-setter.js"));

        // line 1
        echo "require('../../modules/es7.object.lookup-setter');
module.exports = require('../../modules/_core').Object.__lookupSetter__;
";
        
        $__internal_ef2766dacd1ed907a6715d338ecc9ef9bbcf41a2f2770742a585a9258e1a81f8->leave($__internal_ef2766dacd1ed907a6715d338ecc9ef9bbcf41a2f2770742a585a9258e1a81f8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/lookup-setter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es7.object.lookup-setter');
module.exports = require('../../modules/_core').Object.__lookupSetter__;
", "node_modules/core-js/fn/object/lookup-setter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/lookup-setter.js");
    }
}
