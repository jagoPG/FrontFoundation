<?php

/* node_modules/lin3s-front-foundation/package.json */
class __TwigTemplate_9c648ca87269f3016124d9d0c588ed926cc5b4c7d0670f8b2af186654030aa6d extends Twig_Template
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
        $__internal_28d7e751fb5d8fdd163e44778527a9d9ff4b3a0d5d1bec14aef639e56a160aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d7e751fb5d8fdd163e44778527a9d9ff4b3a0d5d1bec14aef639e56a160aa8->enter($__internal_28d7e751fb5d8fdd163e44778527a9d9ff4b3a0d5d1bec14aef639e56a160aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/package.json"));

        // line 1
        echo "{
  \"name\": \"lin3s-front-foundation\",
  \"version\": \"0.6.1\",
  \"author\": \"LIN3S\",
  \"license\": \"MIT\",
  \"description\": \"Base CSS and JS files for building views in LIN3S way\",
  \"keywords\": [
    \"lin3s\",
    \"front\",
    \"foundation\",
    \"es2015\",
    \"js\",
    \"scss\"
  ],
  \"main\": \"dist/js/index.js\",
  \"files\": [
    \"dist\",
    \"src\",
    \"LICENSE\",
    \"README.md\"
  ],
  \"scripts\": {
    \"phoenix\": \"rm -rf node_modules && yarn install\",
    \"prebuild\": \"rimraf dist\",
    \"build\": \"babel --copy-files --out-dir dist src/js\"
  },
  \"babel\": {
    \"presets\": [
      \"es2015\",
      \"stage-2\"
    ]
  },
  \"dependencies\": {
    \"parsleyjs\": \"^2.7.2\"
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.18.0\",
    \"babel-preset-es2015\": \"^6.14.0\",
    \"babel-preset-stage-2\": \"^6.13.0\",
    \"rimraf\": \"^2.5.4\"
  }
}
";
        
        $__internal_28d7e751fb5d8fdd163e44778527a9d9ff4b3a0d5d1bec14aef639e56a160aa8->leave($__internal_28d7e751fb5d8fdd163e44778527a9d9ff4b3a0d5d1bec14aef639e56a160aa8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"lin3s-front-foundation\",
  \"version\": \"0.6.1\",
  \"author\": \"LIN3S\",
  \"license\": \"MIT\",
  \"description\": \"Base CSS and JS files for building views in LIN3S way\",
  \"keywords\": [
    \"lin3s\",
    \"front\",
    \"foundation\",
    \"es2015\",
    \"js\",
    \"scss\"
  ],
  \"main\": \"dist/js/index.js\",
  \"files\": [
    \"dist\",
    \"src\",
    \"LICENSE\",
    \"README.md\"
  ],
  \"scripts\": {
    \"phoenix\": \"rm -rf node_modules && yarn install\",
    \"prebuild\": \"rimraf dist\",
    \"build\": \"babel --copy-files --out-dir dist src/js\"
  },
  \"babel\": {
    \"presets\": [
      \"es2015\",
      \"stage-2\"
    ]
  },
  \"dependencies\": {
    \"parsleyjs\": \"^2.7.2\"
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.18.0\",
    \"babel-preset-es2015\": \"^6.14.0\",
    \"babel-preset-stage-2\": \"^6.13.0\",
    \"rimraf\": \"^2.5.4\"
  }
}
", "node_modules/lin3s-front-foundation/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/package.json");
    }
}
