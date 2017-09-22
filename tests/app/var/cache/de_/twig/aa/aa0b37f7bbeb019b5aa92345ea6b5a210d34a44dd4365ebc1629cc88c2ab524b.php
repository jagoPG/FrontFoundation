<?php

/* node_modules/lodash/fp/truncate.js */
class __TwigTemplate_9d32ee075b4e454c3cb9af12708105a33c04def8c8d527d20cb21f1d8faf87ea extends Twig_Template
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
        $__internal_44753c4d4875c62c9d7451e069a9a87ba0eb808d74286cb51fe34c0b3bd55675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44753c4d4875c62c9d7451e069a9a87ba0eb808d74286cb51fe34c0b3bd55675->enter($__internal_44753c4d4875c62c9d7451e069a9a87ba0eb808d74286cb51fe34c0b3bd55675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/truncate.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('truncate', require('../truncate'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_44753c4d4875c62c9d7451e069a9a87ba0eb808d74286cb51fe34c0b3bd55675->leave($__internal_44753c4d4875c62c9d7451e069a9a87ba0eb808d74286cb51fe34c0b3bd55675_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/truncate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('truncate', require('../truncate'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/truncate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/truncate.js");
    }
}
