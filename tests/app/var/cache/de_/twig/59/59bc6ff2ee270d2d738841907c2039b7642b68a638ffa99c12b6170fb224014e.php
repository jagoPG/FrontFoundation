<?php

/* node_modules/lin3s-event-bus/CHANGELOG.md */
class __TwigTemplate_b9850a13f254ce866257e31e4e4765a57dfe08d1d08149bdeeecc8081f69076a extends Twig_Template
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
        $__internal_d9cb10394d64e06142a4f2bf6b9c1d0496465625c591c3d90139053176c42ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cb10394d64e06142a4f2bf6b9c1d0496465625c591c3d90139053176c42ff4->enter($__internal_d9cb10394d64e06142a4f2bf6b9c1d0496465625c591c3d90139053176c42ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-event-bus/CHANGELOG.md"));

        // line 1
        echo "# CHANGELOG

This changelog references the relevant changes done between versions.

To get the diff for a specific change, go to https://github.com/LIN3S/EventBusJS/commit/XXX where XXX is the change hash 
To get the diff between two versions, go to https://github.com/LIN3S/EventBusJS/compare/v0.5.0...v0.6.0

* 0.6.0
    * [BC break] Updated NodeAddedObserver to provide each associated node with the subscribed selectorClassName. 
    After this version, published NodeAddedEvent gives you an array of matching nodes instead of a single one. 
";
        
        $__internal_d9cb10394d64e06142a4f2bf6b9c1d0496465625c591c3d90139053176c42ff4->leave($__internal_d9cb10394d64e06142a4f2bf6b9c1d0496465625c591c3d90139053176c42ff4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-event-bus/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# CHANGELOG

This changelog references the relevant changes done between versions.

To get the diff for a specific change, go to https://github.com/LIN3S/EventBusJS/commit/XXX where XXX is the change hash 
To get the diff between two versions, go to https://github.com/LIN3S/EventBusJS/compare/v0.5.0...v0.6.0

* 0.6.0
    * [BC break] Updated NodeAddedObserver to provide each associated node with the subscribed selectorClassName. 
    After this version, published NodeAddedEvent gives you an array of matching nodes instead of a single one. 
", "node_modules/lin3s-event-bus/CHANGELOG.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-event-bus/CHANGELOG.md");
    }
}
