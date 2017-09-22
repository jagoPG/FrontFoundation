<?php

/* node_modules/fsevents/node_modules/verror/examples/varargs.js */
class __TwigTemplate_b893cd53773a686a4b141de799c3f4afe0bd9c5d05e49b070f9051e650e4da91 extends Twig_Template
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
        $__internal_b7996f72e5e85bedb6b876ec3647a01b3152528259cd75d7a53019576eaa1486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7996f72e5e85bedb6b876ec3647a01b3152528259cd75d7a53019576eaa1486->enter($__internal_b7996f72e5e85bedb6b876ec3647a01b3152528259cd75d7a53019576eaa1486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/verror/examples/varargs.js"));

        // line 1
        echo "var verror = require('../lib/verror');

var opname = 'read';
var err = new verror.VError('\"%s\" operation failed', opname);
console.log(err.message);
console.log(err.stack);
";
        
        $__internal_b7996f72e5e85bedb6b876ec3647a01b3152528259cd75d7a53019576eaa1486->leave($__internal_b7996f72e5e85bedb6b876ec3647a01b3152528259cd75d7a53019576eaa1486_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/verror/examples/varargs.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var verror = require('../lib/verror');

var opname = 'read';
var err = new verror.VError('\"%s\" operation failed', opname);
console.log(err.message);
console.log(err.stack);
", "node_modules/fsevents/node_modules/verror/examples/varargs.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/verror/examples/varargs.js");
    }
}
