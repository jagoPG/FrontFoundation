<?php

/* node_modules/core-js/library/core/object.js */
class __TwigTemplate_2097030093e4ba8767dcf395af0bbe572e16a6b10014106d4a547100944a40e4 extends Twig_Template
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
        $__internal_9890aa2f47bdcc72115b2d6e6235aa0d050b1c46b0fbb793268d202a95bec386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9890aa2f47bdcc72115b2d6e6235aa0d050b1c46b0fbb793268d202a95bec386->enter($__internal_9890aa2f47bdcc72115b2d6e6235aa0d050b1c46b0fbb793268d202a95bec386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/core/object.js"));

        // line 1
        echo "require('../modules/core.object.is-object');
require('../modules/core.object.classof');
require('../modules/core.object.define');
require('../modules/core.object.make');
module.exports = require('../modules/_core').Object;
";
        
        $__internal_9890aa2f47bdcc72115b2d6e6235aa0d050b1c46b0fbb793268d202a95bec386->leave($__internal_9890aa2f47bdcc72115b2d6e6235aa0d050b1c46b0fbb793268d202a95bec386_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/core/object.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.object.is-object');
require('../modules/core.object.classof');
require('../modules/core.object.define');
require('../modules/core.object.make');
module.exports = require('../modules/_core').Object;
", "node_modules/core-js/library/core/object.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/core/object.js");
    }
}
