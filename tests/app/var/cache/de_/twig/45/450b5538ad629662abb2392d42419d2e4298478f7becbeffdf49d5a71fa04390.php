<?php

/* node_modules/util/support/isBufferBrowser.js */
class __TwigTemplate_060f9c5fc06238b321a9dc2474ede5f7a9d636cbf5dfd86f72a773bcdb90d90b extends Twig_Template
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
        $__internal_c8c53ab163d10e41548781f88ed73da3aa5388c2d2bea5a07a1054aefd914717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c53ab163d10e41548781f88ed73da3aa5388c2d2bea5a07a1054aefd914717->enter($__internal_c8c53ab163d10e41548781f88ed73da3aa5388c2d2bea5a07a1054aefd914717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/util/support/isBufferBrowser.js"));

        // line 1
        echo "module.exports = function isBuffer(arg) {
  return arg && typeof arg === 'object'
    && typeof arg.copy === 'function'
    && typeof arg.fill === 'function'
    && typeof arg.readUInt8 === 'function';
}";
        
        $__internal_c8c53ab163d10e41548781f88ed73da3aa5388c2d2bea5a07a1054aefd914717->leave($__internal_c8c53ab163d10e41548781f88ed73da3aa5388c2d2bea5a07a1054aefd914717_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/util/support/isBufferBrowser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function isBuffer(arg) {
  return arg && typeof arg === 'object'
    && typeof arg.copy === 'function'
    && typeof arg.fill === 'function'
    && typeof arg.readUInt8 === 'function';
}", "node_modules/util/support/isBufferBrowser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/util/support/isBufferBrowser.js");
    }
}
