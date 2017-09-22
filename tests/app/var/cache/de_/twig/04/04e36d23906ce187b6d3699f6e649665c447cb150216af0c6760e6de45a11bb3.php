<?php

/* node_modules/lodash/fp/zip.js */
class __TwigTemplate_17c62d3be8d9915e2e070fa61b3a243e215587f389004c83a2570c4f1a81d4a8 extends Twig_Template
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
        $__internal_fdb47abda8294e7e504c95ed0168fbb619e2d33ca2912fcfb99f555698c71a00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdb47abda8294e7e504c95ed0168fbb619e2d33ca2912fcfb99f555698c71a00->enter($__internal_fdb47abda8294e7e504c95ed0168fbb619e2d33ca2912fcfb99f555698c71a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/zip.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('zip', require('../zip'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_fdb47abda8294e7e504c95ed0168fbb619e2d33ca2912fcfb99f555698c71a00->leave($__internal_fdb47abda8294e7e504c95ed0168fbb619e2d33ca2912fcfb99f555698c71a00_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/zip.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('zip', require('../zip'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/zip.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/zip.js");
    }
}
