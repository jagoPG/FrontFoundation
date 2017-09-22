<?php

/* node_modules/json-loader/index.js */
class __TwigTemplate_28645c61c0299b1556303dd69185e17ea103bc4aac25e3d040c773ede0b127e7 extends Twig_Template
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
        $__internal_3b71e0348198c837eee79dad5a8176be69a3878605e683a372542272dffc6d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b71e0348198c837eee79dad5a8176be69a3878605e683a372542272dffc6d35->enter($__internal_3b71e0348198c837eee79dad5a8176be69a3878605e683a372542272dffc6d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-loader/index.js"));

        // line 1
        echo "module.exports = function (source) {
  if (this.cacheable) this.cacheable();

  var value = typeof source === \"string\" ? JSON.parse(source) : source;

  value = JSON.stringify(value)
    .replace(/\\u2028/g, '\\\\u2028')
    .replace(/\\u2029/g, '\\\\u2029');

  return `module.exports = \${value}`;
}
";
        
        $__internal_3b71e0348198c837eee79dad5a8176be69a3878605e683a372542272dffc6d35->leave($__internal_3b71e0348198c837eee79dad5a8176be69a3878605e683a372542272dffc6d35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-loader/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (source) {
  if (this.cacheable) this.cacheable();

  var value = typeof source === \"string\" ? JSON.parse(source) : source;

  value = JSON.stringify(value)
    .replace(/\\u2028/g, '\\\\u2028')
    .replace(/\\u2029/g, '\\\\u2029');

  return `module.exports = \${value}`;
}
", "node_modules/json-loader/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-loader/index.js");
    }
}
