<?php

/* node_modules/core-js/library/modules/_ie8-dom-define.js */
class __TwigTemplate_616a906a32f0b6b46f220ab572300481ddcd02d9ed80d78300a2a43d0f8fda7b extends Twig_Template
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
        $__internal_03d34c8adcd86b0e4a12164ed40caffac29fe934f32c396be663d267a037dff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d34c8adcd86b0e4a12164ed40caffac29fe934f32c396be663d267a037dff7->enter($__internal_03d34c8adcd86b0e4a12164ed40caffac29fe934f32c396be663d267a037dff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_ie8-dom-define.js"));

        // line 1
        echo "module.exports = !require('./_descriptors') && !require('./_fails')(function () {
  return Object.defineProperty(require('./_dom-create')('div'), 'a', { get: function () { return 7; } }).a != 7;
});
";
        
        $__internal_03d34c8adcd86b0e4a12164ed40caffac29fe934f32c396be663d267a037dff7->leave($__internal_03d34c8adcd86b0e4a12164ed40caffac29fe934f32c396be663d267a037dff7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_ie8-dom-define.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = !require('./_descriptors') && !require('./_fails')(function () {
  return Object.defineProperty(require('./_dom-create')('div'), 'a', { get: function () { return 7; } }).a != 7;
});
", "node_modules/core-js/library/modules/_ie8-dom-define.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_ie8-dom-define.js");
    }
}
