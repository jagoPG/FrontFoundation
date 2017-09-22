<?php

/* node_modules/babel-runtime/helpers/object-destructuring-empty.js */
class __TwigTemplate_f73114ec299a21211ed0c7fea39279775d2521f08a79f0dd36e82b0c15acbb2f extends Twig_Template
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
        $__internal_935561047dc5af03aac131b16059647dabc51cff962d05ae585e00ccde3f0f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935561047dc5af03aac131b16059647dabc51cff962d05ae585e00ccde3f0f25->enter($__internal_935561047dc5af03aac131b16059647dabc51cff962d05ae585e00ccde3f0f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/object-destructuring-empty.js"));

        // line 1
        echo "module.exports = require(\"./objectDestructuringEmpty.js\");";
        
        $__internal_935561047dc5af03aac131b16059647dabc51cff962d05ae585e00ccde3f0f25->leave($__internal_935561047dc5af03aac131b16059647dabc51cff962d05ae585e00ccde3f0f25_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/object-destructuring-empty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./objectDestructuringEmpty.js\");", "node_modules/babel-runtime/helpers/object-destructuring-empty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/object-destructuring-empty.js");
    }
}
