<?php

/* node_modules/buffer-xor/test/fixtures.json */
class __TwigTemplate_5f19ea6547bdb499be862ff6ea0b3ed0159f474d3e5c294a64a7dac711243b32 extends Twig_Template
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
        $__internal_552c4908a958ccdf15202581d3864751a390521302247e354babbfbd4bc84894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552c4908a958ccdf15202581d3864751a390521302247e354babbfbd4bc84894->enter($__internal_552c4908a958ccdf15202581d3864751a390521302247e354babbfbd4bc84894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer-xor/test/fixtures.json"));

        // line 1
        echo "[
  {
    \"a\": \"000f\",
    \"b\": \"f0ff\",
    \"expected\": \"f0f0\"
  },
  {
    \"a\": \"000f0f\",
    \"b\": \"f0ff\",
    \"mutated\": \"f0f00f\",
    \"expected\": \"f0f0\"
  },
  {
    \"a\": \"000f\",
    \"b\": \"f0ffff\",
    \"expected\": \"f0f0\"
  },
  {
    \"a\": \"000000\",
    \"b\": \"000000\",
    \"expected\": \"000000\"
  }
]
";
        
        $__internal_552c4908a958ccdf15202581d3864751a390521302247e354babbfbd4bc84894->leave($__internal_552c4908a958ccdf15202581d3864751a390521302247e354babbfbd4bc84894_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer-xor/test/fixtures.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("[
  {
    \"a\": \"000f\",
    \"b\": \"f0ff\",
    \"expected\": \"f0f0\"
  },
  {
    \"a\": \"000f0f\",
    \"b\": \"f0ff\",
    \"mutated\": \"f0f00f\",
    \"expected\": \"f0f0\"
  },
  {
    \"a\": \"000f\",
    \"b\": \"f0ffff\",
    \"expected\": \"f0f0\"
  },
  {
    \"a\": \"000000\",
    \"b\": \"000000\",
    \"expected\": \"000000\"
  }
]
", "node_modules/buffer-xor/test/fixtures.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer-xor/test/fixtures.json");
    }
}
