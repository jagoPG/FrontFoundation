<?php

/* node_modules/lodash/_metaMap.js */
class __TwigTemplate_932cb98da71672ae9d366812af609ccda00adc02868241b7f9b2fabc72ab480c extends Twig_Template
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
        $__internal_05c62299703e81cf114d06bcea5c32a46d67c03145b1a328fe0250a04b7efb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c62299703e81cf114d06bcea5c32a46d67c03145b1a328fe0250a04b7efb76->enter($__internal_05c62299703e81cf114d06bcea5c32a46d67c03145b1a328fe0250a04b7efb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_metaMap.js"));

        // line 1
        echo "var WeakMap = require('./_WeakMap');

/** Used to store function metadata. */
var metaMap = WeakMap && new WeakMap;

module.exports = metaMap;
";
        
        $__internal_05c62299703e81cf114d06bcea5c32a46d67c03145b1a328fe0250a04b7efb76->leave($__internal_05c62299703e81cf114d06bcea5c32a46d67c03145b1a328fe0250a04b7efb76_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_metaMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var WeakMap = require('./_WeakMap');

/** Used to store function metadata. */
var metaMap = WeakMap && new WeakMap;

module.exports = metaMap;
", "node_modules/lodash/_metaMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_metaMap.js");
    }
}
