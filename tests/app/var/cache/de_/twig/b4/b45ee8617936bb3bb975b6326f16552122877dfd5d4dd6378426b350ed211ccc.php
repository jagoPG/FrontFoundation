<?php

/* node_modules/invariant/package.json */
class __TwigTemplate_dd2427ab0b445f6dfb7392a5d7ddbd707036705ec736307fa89a85deb6a67d2f extends Twig_Template
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
        $__internal_ad120ec5794987c5ed8a1de0550b90b39b41ee69bc2ed5caddcfec79939d5482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad120ec5794987c5ed8a1de0550b90b39b41ee69bc2ed5caddcfec79939d5482->enter($__internal_ad120ec5794987c5ed8a1de0550b90b39b41ee69bc2ed5caddcfec79939d5482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/invariant/package.json"));

        // line 1
        echo "{
  \"name\": \"invariant\",
  \"version\": \"2.2.2\",
  \"description\": \"invariant\",
  \"keywords\": [
    \"test\",
    \"invariant\"
  ],
  \"license\": \"BSD-3-Clause\",
  \"author\": \"Andres Suarez <zertosh@gmail.com>\",
  \"files\": [
    \"browser.js\",
    \"invariant.js\",
    \"invariant.js.flow\"
  ],
  \"repository\": \"https://github.com/zertosh/invariant\",
  \"scripts\": {
    \"test\": \"NODE_ENV=production tap test/*.js && NODE_ENV=development tap test/*.js\"
  },
  \"dependencies\": {
    \"loose-envify\": \"^1.0.0\"
  },
  \"devDependencies\": {
    \"browserify\": \"^11.0.1\",
    \"flow-bin\": \"^0.35.0\",
    \"tap\": \"^1.4.0\"
  },
  \"main\": \"invariant.js\",
  \"browser\": \"browser.js\",
  \"browserify\": {
    \"transform\": [
      \"loose-envify\"
    ]
  }
}
";
        
        $__internal_ad120ec5794987c5ed8a1de0550b90b39b41ee69bc2ed5caddcfec79939d5482->leave($__internal_ad120ec5794987c5ed8a1de0550b90b39b41ee69bc2ed5caddcfec79939d5482_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/invariant/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"invariant\",
  \"version\": \"2.2.2\",
  \"description\": \"invariant\",
  \"keywords\": [
    \"test\",
    \"invariant\"
  ],
  \"license\": \"BSD-3-Clause\",
  \"author\": \"Andres Suarez <zertosh@gmail.com>\",
  \"files\": [
    \"browser.js\",
    \"invariant.js\",
    \"invariant.js.flow\"
  ],
  \"repository\": \"https://github.com/zertosh/invariant\",
  \"scripts\": {
    \"test\": \"NODE_ENV=production tap test/*.js && NODE_ENV=development tap test/*.js\"
  },
  \"dependencies\": {
    \"loose-envify\": \"^1.0.0\"
  },
  \"devDependencies\": {
    \"browserify\": \"^11.0.1\",
    \"flow-bin\": \"^0.35.0\",
    \"tap\": \"^1.4.0\"
  },
  \"main\": \"invariant.js\",
  \"browser\": \"browser.js\",
  \"browserify\": {
    \"transform\": [
      \"loose-envify\"
    ]
  }
}
", "node_modules/invariant/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/invariant/package.json");
    }
}
