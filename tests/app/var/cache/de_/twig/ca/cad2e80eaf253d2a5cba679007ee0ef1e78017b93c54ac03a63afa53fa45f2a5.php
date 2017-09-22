<?php

/* node_modules/lodash/fp/dropRight.js */
class __TwigTemplate_65ca4ba3e0d7c45d3a2b51c967d803a103a996cad45fcf0b3f8901e52d084eb6 extends Twig_Template
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
        $__internal_69f3735b69eb567c8f8bea1e8b87887e25f3429dc19869281c941bf704356add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f3735b69eb567c8f8bea1e8b87887e25f3429dc19869281c941bf704356add->enter($__internal_69f3735b69eb567c8f8bea1e8b87887e25f3429dc19869281c941bf704356add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/dropRight.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('dropRight', require('../dropRight'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_69f3735b69eb567c8f8bea1e8b87887e25f3429dc19869281c941bf704356add->leave($__internal_69f3735b69eb567c8f8bea1e8b87887e25f3429dc19869281c941bf704356add_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/dropRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('dropRight', require('../dropRight'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/dropRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/dropRight.js");
    }
}
