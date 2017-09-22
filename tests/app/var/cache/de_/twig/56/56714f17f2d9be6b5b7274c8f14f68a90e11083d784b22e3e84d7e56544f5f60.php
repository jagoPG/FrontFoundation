<?php

/* node_modules/fsevents/node_modules/gauge/process.js */
class __TwigTemplate_bd58f559e879384b4fa7b2eb09f46779b337c81bff55a784e33b22ece72c416f extends Twig_Template
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
        $__internal_02c8e852467f3dfc4bc434dde37aab5f2b14db7abcbb3f519320cafcd1186a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c8e852467f3dfc4bc434dde37aab5f2b14db7abcbb3f519320cafcd1186a91->enter($__internal_02c8e852467f3dfc4bc434dde37aab5f2b14db7abcbb3f519320cafcd1186a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/gauge/process.js"));

        // line 1
        echo "'use strict'
// this exists so we can replace it during testing
module.exports = process
";
        
        $__internal_02c8e852467f3dfc4bc434dde37aab5f2b14db7abcbb3f519320cafcd1186a91->leave($__internal_02c8e852467f3dfc4bc434dde37aab5f2b14db7abcbb3f519320cafcd1186a91_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/gauge/process.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict'
// this exists so we can replace it during testing
module.exports = process
", "node_modules/fsevents/node_modules/gauge/process.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/gauge/process.js");
    }
}
