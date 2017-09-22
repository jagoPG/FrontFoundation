<?php

/* node_modules/es5-ext/test/string/format-method.js */
class __TwigTemplate_af11562c0f6644783bdc53060e890a224b7518767080fc921620774345aab49c extends Twig_Template
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
        $__internal_86195d8e8866b713cb08fa6c8086d6bb0acc5fa24c5d31b2248fb179e0411247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86195d8e8866b713cb08fa6c8086d6bb0acc5fa24c5d31b2248fb179e0411247->enter($__internal_86195d8e8866b713cb08fa6c8086d6bb0acc5fa24c5d31b2248fb179e0411247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/string/format-method.js"));

        // line 1
        echo "\"use strict\";

module.exports = function (t, a) {
\tt = t({ a: \"A\",
aa: \"B\",
ab: \"C\",
b: \"D\",
\t\tc: function () {
 return ++this.a;
} });
\ta(t.call({ a: 0 }, \" %a%aab%abb%b\\\\%aa%ab%c%c \"), \" ABbCbD%aaC12 \");
};
";
        
        $__internal_86195d8e8866b713cb08fa6c8086d6bb0acc5fa24c5d31b2248fb179e0411247->leave($__internal_86195d8e8866b713cb08fa6c8086d6bb0acc5fa24c5d31b2248fb179e0411247_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/string/format-method.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = function (t, a) {
\tt = t({ a: \"A\",
aa: \"B\",
ab: \"C\",
b: \"D\",
\t\tc: function () {
 return ++this.a;
} });
\ta(t.call({ a: 0 }, \" %a%aab%abb%b\\\\%aa%ab%c%c \"), \" ABbCbD%aaC12 \");
};
", "node_modules/es5-ext/test/string/format-method.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/string/format-method.js");
    }
}
