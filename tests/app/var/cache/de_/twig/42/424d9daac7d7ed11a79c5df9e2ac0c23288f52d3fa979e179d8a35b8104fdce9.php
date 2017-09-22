<?php

/* node_modules/lodash/fp.js */
class __TwigTemplate_2358fc42ed8a11dc611f37fdca37401568c08d875ab3b1608364d29533a58481 extends Twig_Template
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
        $__internal_9b924ed8e60cc14b319e415c8a4564e8a98ac43e61e8cfaa6557f7f0797f9f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b924ed8e60cc14b319e415c8a4564e8a98ac43e61e8cfaa6557f7f0797f9f93->enter($__internal_9b924ed8e60cc14b319e415c8a4564e8a98ac43e61e8cfaa6557f7f0797f9f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp.js"));

        // line 1
        echo "var _ = require('./lodash.min').runInContext();
module.exports = require('./fp/_baseConvert')(_, _);
";
        
        $__internal_9b924ed8e60cc14b319e415c8a4564e8a98ac43e61e8cfaa6557f7f0797f9f93->leave($__internal_9b924ed8e60cc14b319e415c8a4564e8a98ac43e61e8cfaa6557f7f0797f9f93_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var _ = require('./lodash.min').runInContext();
module.exports = require('./fp/_baseConvert')(_, _);
", "node_modules/lodash/fp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp.js");
    }
}
