<?php

/* node_modules/rc/package.json */
class __TwigTemplate_41a7ae7a76234d2319a7d416d915793f8263e711fae22a5e9da25abfeeb0b9ff extends Twig_Template
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
        $__internal_d82cc599dfd00a5fcd2e9ba985446b3f85458d07b4e59a6c7aa3d628042e1fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82cc599dfd00a5fcd2e9ba985446b3f85458d07b4e59a6c7aa3d628042e1fc6->enter($__internal_d82cc599dfd00a5fcd2e9ba985446b3f85458d07b4e59a6c7aa3d628042e1fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/rc/package.json"));

        // line 1
        echo "{
  \"name\": \"rc\",
  \"version\": \"1.2.1\",
  \"description\": \"hardwired configuration loader\",
  \"main\": \"index.js\",
  \"browserify\": \"browser.js\",
  \"scripts\": {
    \"test\": \"set -e; node test/test.js; node test/ini.js; node test/nested-env-vars.js\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/dominictarr/rc.git\"
  },
  \"license\": \"(BSD-2-Clause OR MIT OR Apache-2.0)\",
  \"keywords\": [
    \"config\",
    \"rc\",
    \"unix\",
    \"defaults\"
  ],
  \"bin\": \"./index.js\",
  \"author\": \"Dominic Tarr <dominic.tarr@gmail.com> (dominictarr.com)\",
  \"dependencies\": {
    \"deep-extend\": \"~0.4.0\",
    \"ini\": \"~1.3.0\",
    \"minimist\": \"^1.2.0\",
    \"strip-json-comments\": \"~2.0.1\"
  }
}
";
        
        $__internal_d82cc599dfd00a5fcd2e9ba985446b3f85458d07b4e59a6c7aa3d628042e1fc6->leave($__internal_d82cc599dfd00a5fcd2e9ba985446b3f85458d07b4e59a6c7aa3d628042e1fc6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/rc/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"rc\",
  \"version\": \"1.2.1\",
  \"description\": \"hardwired configuration loader\",
  \"main\": \"index.js\",
  \"browserify\": \"browser.js\",
  \"scripts\": {
    \"test\": \"set -e; node test/test.js; node test/ini.js; node test/nested-env-vars.js\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/dominictarr/rc.git\"
  },
  \"license\": \"(BSD-2-Clause OR MIT OR Apache-2.0)\",
  \"keywords\": [
    \"config\",
    \"rc\",
    \"unix\",
    \"defaults\"
  ],
  \"bin\": \"./index.js\",
  \"author\": \"Dominic Tarr <dominic.tarr@gmail.com> (dominictarr.com)\",
  \"dependencies\": {
    \"deep-extend\": \"~0.4.0\",
    \"ini\": \"~1.3.0\",
    \"minimist\": \"^1.2.0\",
    \"strip-json-comments\": \"~2.0.1\"
  }
}
", "node_modules/rc/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/rc/package.json");
    }
}
