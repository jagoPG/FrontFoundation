<?php

/* node_modules/es5-ext/test/reg-exp/#/replace/shim.js */
class __TwigTemplate_0e19e47b7a4d2c9f93b0dec0d1eaca4fe2b5d5116df1c64c0cfe720270d5364d extends Twig_Template
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
        $__internal_2afa6ed0278b219e69705a8bcdd2589f33346493796eca197603760334d2ad09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afa6ed0278b219e69705a8bcdd2589f33346493796eca197603760334d2ad09->enter($__internal_2afa6ed0278b219e69705a8bcdd2589f33346493796eca197603760334d2ad09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/reg-exp/#/replace/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(/foo/, \"foobar\", \"mar\"), \"marbar\");
};
";
        
        $__internal_2afa6ed0278b219e69705a8bcdd2589f33346493796eca197603760334d2ad09->leave($__internal_2afa6ed0278b219e69705a8bcdd2589f33346493796eca197603760334d2ad09_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/reg-exp/#/replace/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(/foo/, \"foobar\", \"mar\"), \"marbar\");
};
", "node_modules/es5-ext/test/reg-exp/#/replace/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/reg-exp/#/replace/shim.js");
    }
}
