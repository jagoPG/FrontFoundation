<?php

/* node_modules/es5-ext/test/string/#/contains/shim.js */
class __TwigTemplate_daf0f0df2c10c8346e800744b5f6a133e34d92ee4ca107649bd0ce4b309a7fb5 extends Twig_Template
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
        $__internal_5dfba2e247746725b01e576769f5aa944b198227918942f7fdff71ba4814a38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfba2e247746725b01e576769f5aa944b198227918942f7fdff71ba4814a38b->enter($__internal_5dfba2e247746725b01e576769f5aa944b198227918942f7fdff71ba4814a38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/#/contains/shim.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"raz\", \"\"), true, \"Empty\");
\ta(t.call(\"\", \"\"), true, \"Both Empty\");
\ta(t.call(\"raz\", \"raz\"), true, \"Same\");
\ta(t.call(\"razdwa\", \"raz\"), true, \"Starts with\");
\ta(t.call(\"razdwa\", \"dwa\"), true, \"Ends with\");
\ta(t.call(\"razdwa\", \"zdw\"), true, \"In middle\");
\ta(t.call(\"\", \"raz\"), false, \"Something in empty\");
\ta(t.call(\"az\", \"raz\"), false, \"Longer\");
\ta(t.call(\"azasdfasdf\", \"azff\"), false, \"Not found\");
\ta(t.call(\"razdwa\", \"raz\", 1), false, \"Position\");
};
";
        
        $__internal_5dfba2e247746725b01e576769f5aa944b198227918942f7fdff71ba4814a38b->leave($__internal_5dfba2e247746725b01e576769f5aa944b198227918942f7fdff71ba4814a38b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/#/contains/shim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t.call(\"raz\", \"\"), true, \"Empty\");
\ta(t.call(\"\", \"\"), true, \"Both Empty\");
\ta(t.call(\"raz\", \"raz\"), true, \"Same\");
\ta(t.call(\"razdwa\", \"raz\"), true, \"Starts with\");
\ta(t.call(\"razdwa\", \"dwa\"), true, \"Ends with\");
\ta(t.call(\"razdwa\", \"zdw\"), true, \"In middle\");
\ta(t.call(\"\", \"raz\"), false, \"Something in empty\");
\ta(t.call(\"az\", \"raz\"), false, \"Longer\");
\ta(t.call(\"azasdfasdf\", \"azff\"), false, \"Not found\");
\ta(t.call(\"razdwa\", \"raz\", 1), false, \"Position\");
};
", "node_modules/es5-ext/test/string/#/contains/shim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/#/contains/shim.js");
    }
}
