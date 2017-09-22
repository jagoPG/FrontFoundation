<?php

/* node_modules/tape/example/stream/test/x.js */
class __TwigTemplate_f66d54193703953e24cd119f29bec649ad580af1358d7e5ab6b3e49a69c4349d extends Twig_Template
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
        $__internal_41e53b3bec69b9df883d0e7d4a2c8bbcbaab8cd33e8a1ee87a5524f212d7e9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e53b3bec69b9df883d0e7d4a2c8bbcbaab8cd33e8a1ee87a5524f212d7e9e5->enter($__internal_41e53b3bec69b9df883d0e7d4a2c8bbcbaab8cd33e8a1ee87a5524f212d7e9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/stream/test/x.js"));

        // line 1
        echo "var test = require('../../../');
test(function (t) {
    t.plan(1);
    t.equal('beep', 'boop');
});
";
        
        $__internal_41e53b3bec69b9df883d0e7d4a2c8bbcbaab8cd33e8a1ee87a5524f212d7e9e5->leave($__internal_41e53b3bec69b9df883d0e7d4a2c8bbcbaab8cd33e8a1ee87a5524f212d7e9e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/stream/test/x.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../../../');
test(function (t) {
    t.plan(1);
    t.equal('beep', 'boop');
});
", "node_modules/tape/example/stream/test/x.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/stream/test/x.js");
    }
}
