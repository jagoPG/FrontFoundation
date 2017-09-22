<?php

/* node_modules/tty-browserify/index.js */
class __TwigTemplate_90b747b691cd9a9377b3a4652f114c38025aab4571afb696e46e905b05ddad29 extends Twig_Template
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
        $__internal_c428ac090df7ef388fb5fef760230930fd56ee98f03c55a9eae1770310461f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c428ac090df7ef388fb5fef760230930fd56ee98f03c55a9eae1770310461f76->enter($__internal_c428ac090df7ef388fb5fef760230930fd56ee98f03c55a9eae1770310461f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tty-browserify/index.js"));

        // line 1
        echo "exports.isatty = function () { return false; };

function ReadStream() {
  throw new Error('tty.ReadStream is not implemented');
}
exports.ReadStream = ReadStream;

function WriteStream() {
  throw new Error('tty.ReadStream is not implemented');
}
exports.WriteStream = WriteStream;
";
        
        $__internal_c428ac090df7ef388fb5fef760230930fd56ee98f03c55a9eae1770310461f76->leave($__internal_c428ac090df7ef388fb5fef760230930fd56ee98f03c55a9eae1770310461f76_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tty-browserify/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.isatty = function () { return false; };

function ReadStream() {
  throw new Error('tty.ReadStream is not implemented');
}
exports.ReadStream = ReadStream;

function WriteStream() {
  throw new Error('tty.ReadStream is not implemented');
}
exports.WriteStream = WriteStream;
", "node_modules/tty-browserify/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tty-browserify/index.js");
    }
}
