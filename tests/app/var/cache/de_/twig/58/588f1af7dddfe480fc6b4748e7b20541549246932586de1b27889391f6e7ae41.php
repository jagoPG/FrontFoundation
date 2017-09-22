<?php

/* node_modules/es5-ext/test/date/is-date.js */
class __TwigTemplate_2f3b0a3730a77cf27503fb1b3bcc48e1e741f312ccf1eedb929e559b81ed1f87 extends Twig_Template
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
        $__internal_3f4edd5a94c446f6264517fa7cd4e9bc8f143689c7324b3ee116d14e385668b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4edd5a94c446f6264517fa7cd4e9bc8f143689c7324b3ee116d14e385668b9->enter($__internal_3f4edd5a94c446f6264517fa7cd4e9bc8f143689c7324b3ee116d14e385668b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/date/is-date.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\ta(t(\"arar\"), false, \"String\");
\ta(t(12), false, \"Number\");
\ta(t(true), false, \"Boolean\");
\ta(t(new Date()), true, \"Date\");
\ta(t(new String(\"raz\")), false, \"String object\");
\ta(t({}), false, \"Plain object\");
};
";
        
        $__internal_3f4edd5a94c446f6264517fa7cd4e9bc8f143689c7324b3ee116d14e385668b9->leave($__internal_3f4edd5a94c446f6264517fa7cd4e9bc8f143689c7324b3ee116d14e385668b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/date/is-date.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\ta(t(\"arar\"), false, \"String\");
\ta(t(12), false, \"Number\");
\ta(t(true), false, \"Boolean\");
\ta(t(new Date()), true, \"Date\");
\ta(t(new String(\"raz\")), false, \"String object\");
\ta(t({}), false, \"Plain object\");
};
", "node_modules/es5-ext/test/date/is-date.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/date/is-date.js");
    }
}
