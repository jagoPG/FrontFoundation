<?php

/* node_modules/lodash/fp/matchesProperty.js */
class __TwigTemplate_59cc0d7234d47c8689c5b95f95459b61d862ccf08a7792ff07d335c765bbcf7f extends Twig_Template
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
        $__internal_134789d733f730f296a6cdcda22eb3c197f2249666632146cfc4537cd183ced7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134789d733f730f296a6cdcda22eb3c197f2249666632146cfc4537cd183ced7->enter($__internal_134789d733f730f296a6cdcda22eb3c197f2249666632146cfc4537cd183ced7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/matchesProperty.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('matchesProperty', require('../matchesProperty'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_134789d733f730f296a6cdcda22eb3c197f2249666632146cfc4537cd183ced7->leave($__internal_134789d733f730f296a6cdcda22eb3c197f2249666632146cfc4537cd183ced7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/matchesProperty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('matchesProperty', require('../matchesProperty'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/matchesProperty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/matchesProperty.js");
    }
}
