<?php

/* node_modules/lodash/fp/intersectionBy.js */
class __TwigTemplate_e36e0789533a7018668a9d975c081108aeef4f147b1e8594c44c3d8c9a86c6c3 extends Twig_Template
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
        $__internal_b085ae84adf8a5fbd97037729b824be45c8329c95406b5506e96763e08168fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b085ae84adf8a5fbd97037729b824be45c8329c95406b5506e96763e08168fda->enter($__internal_b085ae84adf8a5fbd97037729b824be45c8329c95406b5506e96763e08168fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/intersectionBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('intersectionBy', require('../intersectionBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_b085ae84adf8a5fbd97037729b824be45c8329c95406b5506e96763e08168fda->leave($__internal_b085ae84adf8a5fbd97037729b824be45c8329c95406b5506e96763e08168fda_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/intersectionBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('intersectionBy', require('../intersectionBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/intersectionBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/intersectionBy.js");
    }
}
