<?php

/* node_modules/core-js/fn/typed/data-view.js */
class __TwigTemplate_268ee7831b78ce38ca6639b1092d7f97eb600e480dec1703f9277b4b84e78ec7 extends Twig_Template
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
        $__internal_4059a54ae39fb1df157b9face1df65bbc74672203247547582effdce4582ae07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4059a54ae39fb1df157b9face1df65bbc74672203247547582effdce4582ae07->enter($__internal_4059a54ae39fb1df157b9face1df65bbc74672203247547582effdce4582ae07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/typed/data-view.js"));

        // line 1
        echo "require('../../modules/es6.typed.data-view');
require('../../modules/es6.object.to-string');
module.exports = require('../../modules/_core').DataView;
";
        
        $__internal_4059a54ae39fb1df157b9face1df65bbc74672203247547582effdce4582ae07->leave($__internal_4059a54ae39fb1df157b9face1df65bbc74672203247547582effdce4582ae07_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/typed/data-view.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.data-view');
require('../../modules/es6.object.to-string');
module.exports = require('../../modules/_core').DataView;
", "node_modules/core-js/fn/typed/data-view.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/typed/data-view.js");
    }
}
