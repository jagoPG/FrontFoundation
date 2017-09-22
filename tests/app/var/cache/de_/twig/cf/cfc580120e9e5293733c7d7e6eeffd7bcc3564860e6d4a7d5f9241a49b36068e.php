<?php

/* node_modules/lodash/fp/overArgs.js */
class __TwigTemplate_1e84b25ab4139ae30bcb88d6b21b85d04afe00deee1a4d81a12ef8b68a5fe462 extends Twig_Template
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
        $__internal_673a1a516ff8119c62538514b45b031144c9da7efe854071e2fa9546d45db3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673a1a516ff8119c62538514b45b031144c9da7efe854071e2fa9546d45db3bb->enter($__internal_673a1a516ff8119c62538514b45b031144c9da7efe854071e2fa9546d45db3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/overArgs.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('overArgs', require('../overArgs'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_673a1a516ff8119c62538514b45b031144c9da7efe854071e2fa9546d45db3bb->leave($__internal_673a1a516ff8119c62538514b45b031144c9da7efe854071e2fa9546d45db3bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/overArgs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('overArgs', require('../overArgs'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/overArgs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/overArgs.js");
    }
}
