<?php

/* node_modules/lodash/fp/pickBy.js */
class __TwigTemplate_0c52f920f6ec4935caf5aed6cd3fe60bdf47bdc658bcc3719138f599e6bd16c2 extends Twig_Template
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
        $__internal_9b1026fa8fcb0e825441c9c447838eba3843c6a9d906048b58dec09921314d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1026fa8fcb0e825441c9c447838eba3843c6a9d906048b58dec09921314d80->enter($__internal_9b1026fa8fcb0e825441c9c447838eba3843c6a9d906048b58dec09921314d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fp/pickBy.js"));

        // line 1
        echo "var convert = require('./convert'),
    func = convert('pickBy', require('../pickBy'));

func.placeholder = require('./placeholder');
module.exports = func;
";
        
        $__internal_9b1026fa8fcb0e825441c9c447838eba3843c6a9d906048b58dec09921314d80->leave($__internal_9b1026fa8fcb0e825441c9c447838eba3843c6a9d906048b58dec09921314d80_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fp/pickBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var convert = require('./convert'),
    func = convert('pickBy', require('../pickBy'));

func.placeholder = require('./placeholder');
module.exports = func;
", "node_modules/lodash/fp/pickBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fp/pickBy.js");
    }
}
