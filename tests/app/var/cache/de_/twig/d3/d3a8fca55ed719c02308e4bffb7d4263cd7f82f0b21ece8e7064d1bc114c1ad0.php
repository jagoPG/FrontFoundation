<?php

/* node_modules/date-now/index.js */
class __TwigTemplate_c273dfdd0e135047be5a567081dc746d17ec46e32205751de09779266a087ffa extends Twig_Template
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
        $__internal_9e7043422d8280213e23f7da894d9e2a3fed498649f7a69aae24d91dc9e35b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7043422d8280213e23f7da894d9e2a3fed498649f7a69aae24d91dc9e35b7a->enter($__internal_9e7043422d8280213e23f7da894d9e2a3fed498649f7a69aae24d91dc9e35b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/date-now/index.js"));

        // line 1
        echo "module.exports = now

function now() {
    return new Date().getTime()
}
";
        
        $__internal_9e7043422d8280213e23f7da894d9e2a3fed498649f7a69aae24d91dc9e35b7a->leave($__internal_9e7043422d8280213e23f7da894d9e2a3fed498649f7a69aae24d91dc9e35b7a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/date-now/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = now

function now() {
    return new Date().getTime()
}
", "node_modules/date-now/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/date-now/index.js");
    }
}
