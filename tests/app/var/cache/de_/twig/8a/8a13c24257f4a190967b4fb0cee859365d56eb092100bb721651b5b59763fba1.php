<?php

/* node_modules/uuid/package.json */
class __TwigTemplate_66c9208ef4cb3fce935943786a268d8cd181b3f0ef5a9d356736dc6fa1e84889 extends Twig_Template
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
        $__internal_cda446a59eb9223394d691bbdb80dfda8dc76aa544c899f1f5a22cc8d9ca25db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda446a59eb9223394d691bbdb80dfda8dc76aa544c899f1f5a22cc8d9ca25db->enter($__internal_cda446a59eb9223394d691bbdb80dfda8dc76aa544c899f1f5a22cc8d9ca25db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uuid/package.json"));

        // line 1
        echo "{
  \"name\": \"uuid\",
  \"version\": \"3.1.0\",
  \"description\": \"RFC4122 (v1, v4, and v5) UUIDs\",
  \"keywords\": [
    \"uuid\",
    \"guid\",
    \"rfc4122\"
  ],
  \"license\": \"MIT\",
  \"bin\": {
    \"uuid\": \"./bin/uuid\"
  },
  \"devDependencies\": {
    \"mocha\": \"3.1.2\"
  },
  \"scripts\": {
    \"test\": \"mocha test/test.js\"
  },
  \"browser\": {
    \"./lib/rng.js\": \"./lib/rng-browser.js\",
    \"./lib/sha1.js\": \"./lib/sha1-browser.js\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/kelektiv/node-uuid.git\"
  }
}
";
        
        $__internal_cda446a59eb9223394d691bbdb80dfda8dc76aa544c899f1f5a22cc8d9ca25db->leave($__internal_cda446a59eb9223394d691bbdb80dfda8dc76aa544c899f1f5a22cc8d9ca25db_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uuid/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"uuid\",
  \"version\": \"3.1.0\",
  \"description\": \"RFC4122 (v1, v4, and v5) UUIDs\",
  \"keywords\": [
    \"uuid\",
    \"guid\",
    \"rfc4122\"
  ],
  \"license\": \"MIT\",
  \"bin\": {
    \"uuid\": \"./bin/uuid\"
  },
  \"devDependencies\": {
    \"mocha\": \"3.1.2\"
  },
  \"scripts\": {
    \"test\": \"mocha test/test.js\"
  },
  \"browser\": {
    \"./lib/rng.js\": \"./lib/rng-browser.js\",
    \"./lib/sha1.js\": \"./lib/sha1-browser.js\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/kelektiv/node-uuid.git\"
  }
}
", "node_modules/uuid/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uuid/package.json");
    }
}
