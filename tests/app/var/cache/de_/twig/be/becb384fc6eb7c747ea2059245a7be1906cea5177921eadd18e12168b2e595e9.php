<?php

/* node_modules/lodash/fp/trim.js */
class __TwigTemplate_ffb9b3bb9dfed6b6dba51a561133be22910a06d704d8d601ebd8bf30e18ffb56 extends Twig_Template
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
        $__internal_b40d8c82d4a662d8b2e862e761fcd06cd86f80dff7aefd1aa3747731de46a255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40d8c82d4a662d8b2e862e761fcd06cd86f80dff7aefd1aa3747731de46a255->enter($__internal_b40d8c82d4a662d8b2e862e761fcd06cd86f80dff7aefd1aa3747731de46a255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/trim.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('trim', require('../trim'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b40d8c82d4a662d8b2e862e761fcd06cd86f80dff7aefd1aa3747731de46a255->leave($__internal_b40d8c82d4a662d8b2e862e761fcd06cd86f80dff7aefd1aa3747731de46a255_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/trim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('trim', require('../trim'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/trim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/trim.js");
    }
}
