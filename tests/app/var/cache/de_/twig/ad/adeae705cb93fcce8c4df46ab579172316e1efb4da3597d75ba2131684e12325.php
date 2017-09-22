<?php

/* node_modules/tape/test/double_end/double.js */
class __TwigTemplate_243a62138235d5a33d823afe914e582a70710ea7b13bad7704f67b4805593208 extends Twig_Template
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
        $__internal_df83c68092a82d41a39fdc808be0b14d3440d7ae71434aaa83f2ddf7a6d6649b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df83c68092a82d41a39fdc808be0b14d3440d7ae71434aaa83f2ddf7a6d6649b->enter($__internal_df83c68092a82d41a39fdc808be0b14d3440d7ae71434aaa83f2ddf7a6d6649b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/double_end/double.js"));

        // line 1
        echo "var test = require('../../');

test('double end', function (t) {
    function doEnd() {
        t.end();
    }

    t.equal(1 + 1, 2);
    t.end();
    setTimeout(doEnd, 5);
});
";
        
        $__internal_df83c68092a82d41a39fdc808be0b14d3440d7ae71434aaa83f2ddf7a6d6649b->leave($__internal_df83c68092a82d41a39fdc808be0b14d3440d7ae71434aaa83f2ddf7a6d6649b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/double_end/double.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../../');

test('double end', function (t) {
    function doEnd() {
        t.end();
    }

    t.equal(1 + 1, 2);
    t.end();
    setTimeout(doEnd, 5);
});
", "node_modules/tape/test/double_end/double.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/double_end/double.js");
    }
}
