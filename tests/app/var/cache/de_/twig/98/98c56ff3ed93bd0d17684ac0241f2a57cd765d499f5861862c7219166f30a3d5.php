<?php

/* node_modules/invariant/invariant.js.flow */
class __TwigTemplate_fa15dcedaaf2e9e9da6d9ec8161140a59ccbcf1b15154090b63a1be4376f3414 extends Twig_Template
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
        $__internal_ba96080cc027a2d09c65fab1dbb8e7658d368ce744f563f63dbe3c559553d55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba96080cc027a2d09c65fab1dbb8e7658d368ce744f563f63dbe3c559553d55b->enter($__internal_ba96080cc027a2d09c65fab1dbb8e7658d368ce744f563f63dbe3c559553d55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/invariant/invariant.js.flow"));

        // line 1
        echo "/* @flow */

declare module.exports: (
  condition: any,
  format?: string,
  ...args: Array<any>
) => void;
";
        
        $__internal_ba96080cc027a2d09c65fab1dbb8e7658d368ce744f563f63dbe3c559553d55b->leave($__internal_ba96080cc027a2d09c65fab1dbb8e7658d368ce744f563f63dbe3c559553d55b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/invariant/invariant.js.flow";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* @flow */

declare module.exports: (
  condition: any,
  format?: string,
  ...args: Array<any>
) => void;
", "node_modules/invariant/invariant.js.flow", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/invariant/invariant.js.flow");
    }
}
