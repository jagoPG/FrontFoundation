<?php

/* node_modules/lodash/fp/groupBy.js */
class __TwigTemplate_89912a3468145e3aa6c4515923a52dea9d93ced3fc02780c523b132d0bcd18bc extends Twig_Template
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
        $__internal_a8012fdd8994e68a1c7ce253bdfc8a814fca758807269f4368a8484ac669e094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8012fdd8994e68a1c7ce253bdfc8a814fca758807269f4368a8484ac669e094->enter($__internal_a8012fdd8994e68a1c7ce253bdfc8a814fca758807269f4368a8484ac669e094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/groupBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('groupBy', require('../groupBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_a8012fdd8994e68a1c7ce253bdfc8a814fca758807269f4368a8484ac669e094->leave($__internal_a8012fdd8994e68a1c7ce253bdfc8a814fca758807269f4368a8484ac669e094_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/groupBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('groupBy', require('../groupBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/groupBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/groupBy.js");
    }
}
