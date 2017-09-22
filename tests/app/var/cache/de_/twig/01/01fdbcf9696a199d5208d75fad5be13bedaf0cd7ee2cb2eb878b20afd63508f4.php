<?php

/* node_modules/util/support/isBuffer.js */
class __TwigTemplate_a4d933d6c8349f45fb8ffaf631d1cae85853f4d1210fefff566a406b4b16906c extends Twig_Template
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
        $__internal_9d95b1eb00945b5f354e4934b8438673413fb88e006f73b79ba7fbb6ea96593d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d95b1eb00945b5f354e4934b8438673413fb88e006f73b79ba7fbb6ea96593d->enter($__internal_9d95b1eb00945b5f354e4934b8438673413fb88e006f73b79ba7fbb6ea96593d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/util/support/isBuffer.js"));

        // line 1
        echo "module.exports = function isBuffer(arg) {
  return arg instanceof Buffer;
}
";
        
        $__internal_9d95b1eb00945b5f354e4934b8438673413fb88e006f73b79ba7fbb6ea96593d->leave($__internal_9d95b1eb00945b5f354e4934b8438673413fb88e006f73b79ba7fbb6ea96593d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/util/support/isBuffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function isBuffer(arg) {
  return arg instanceof Buffer;
}
", "node_modules/util/support/isBuffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/util/support/isBuffer.js");
    }
}
