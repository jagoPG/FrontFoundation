<?php

/* node_modules/osenv/x.tap */
class __TwigTemplate_00c00598072889d3e869436c3e3a140cbfda8734b0b0e6cb37b7c89f3ca06752 extends Twig_Template
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
        $__internal_2f3eb7dfb019ec6290785d49feb6d8b6cd3f3043ae533d29039c9970b21e72bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3eb7dfb019ec6290785d49feb6d8b6cd3f3043ae533d29039c9970b21e72bb->enter($__internal_2f3eb7dfb019ec6290785d49feb6d8b6cd3f3043ae533d29039c9970b21e72bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/osenv/x.tap"));

        // line 1
        echo "TAP version 13
    # Subtest: test/unix.js
    TAP version 13
        # Subtest: basic unix sanity test
        ok 1 - should be equal
        ok 2 - should be equal
        ok 3 - should be equal
        ok 4 - should be equivalent
        ok 5 - should be equal
        ok 6 - should be equal
        ok 7 - should be equal
        ok 8 - should be equal
        ok 9 - should be equal
        ok 10 - should be equal
        ok 11 - should be equal
        ok 12 - should be equal
        ok 13 - should be equal
        ok 14 - should be equal
        1..14
    ok 1 - basic unix sanity test # time=10.712ms

    1..1
    # time=18.422ms
ok 1 - test/unix.js # time=169.827ms

    # Subtest: test/windows.js
    TAP version 13
    1..0 # Skip windows tests, this is not windows

ok 2 - test/windows.js # SKIP Skip windows tests, this is not windows

    # Subtest: test/nada.js
    TAP version 13
    1..0

ok 2 - test/nada.js

1..3
# time=274.247ms
";
        
        $__internal_2f3eb7dfb019ec6290785d49feb6d8b6cd3f3043ae533d29039c9970b21e72bb->leave($__internal_2f3eb7dfb019ec6290785d49feb6d8b6cd3f3043ae533d29039c9970b21e72bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/osenv/x.tap";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("TAP version 13
    # Subtest: test/unix.js
    TAP version 13
        # Subtest: basic unix sanity test
        ok 1 - should be equal
        ok 2 - should be equal
        ok 3 - should be equal
        ok 4 - should be equivalent
        ok 5 - should be equal
        ok 6 - should be equal
        ok 7 - should be equal
        ok 8 - should be equal
        ok 9 - should be equal
        ok 10 - should be equal
        ok 11 - should be equal
        ok 12 - should be equal
        ok 13 - should be equal
        ok 14 - should be equal
        1..14
    ok 1 - basic unix sanity test # time=10.712ms

    1..1
    # time=18.422ms
ok 1 - test/unix.js # time=169.827ms

    # Subtest: test/windows.js
    TAP version 13
    1..0 # Skip windows tests, this is not windows

ok 2 - test/windows.js # SKIP Skip windows tests, this is not windows

    # Subtest: test/nada.js
    TAP version 13
    1..0

ok 2 - test/nada.js

1..3
# time=274.247ms
", "node_modules/osenv/x.tap", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/osenv/x.tap");
    }
}
