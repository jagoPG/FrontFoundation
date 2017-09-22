<?php

/* node_modules/regenerator-transform/package.json */
class __TwigTemplate_55ac1f43df4a1be2bde3794104e2707be2af78e6f538321eab7e86436103929c extends Twig_Template
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
        $__internal_0594ef0d4dcfa8e52deed253fed7affaf82cc4585363eae32c552a6f5d57a96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0594ef0d4dcfa8e52deed253fed7affaf82cc4585363eae32c552a6f5d57a96d->enter($__internal_0594ef0d4dcfa8e52deed253fed7affaf82cc4585363eae32c552a6f5d57a96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-transform/package.json"));

        // line 1
        echo "{
  \"name\": \"regenerator-transform\",
  \"author\": \"Ben Newman <bn@cs.stanford.edu>\",
  \"description\": \"Explode async and generator functions into a state machine.\",
  \"version\": \"0.10.1\",
  \"main\": \"lib/index.js\",
  \"keywords\": [
    \"regenerator\",
    \"runtime\",
    \"generator\",
    \"async\"
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/facebook/regenerator/tree/master/packages/regenerator-transform\"
  },
  \"license\": \"BSD\",
  \"scripts\": {
    \"prepublish\": \"babel src/ --out-dir lib/\"
  },
  \"babel\": {
    \"presets\": [
      [
        \"env\",
        {
          \"loose\": true
        }
      ]
    ],
    \"plugins\": [
      \"transform-runtime\"
    ]
  },
  \"dependencies\": {
    \"babel-runtime\": \"^6.18.0\",
    \"babel-types\": \"^6.19.0\",
    \"private\": \"^0.1.6\"
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.9.0\",
    \"babel-plugin-transform-runtime\": \"^6.9.0\",
    \"babel-preset-env\": \"^1.2.2\"
  }
}
";
        
        $__internal_0594ef0d4dcfa8e52deed253fed7affaf82cc4585363eae32c552a6f5d57a96d->leave($__internal_0594ef0d4dcfa8e52deed253fed7affaf82cc4585363eae32c552a6f5d57a96d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-transform/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"regenerator-transform\",
  \"author\": \"Ben Newman <bn@cs.stanford.edu>\",
  \"description\": \"Explode async and generator functions into a state machine.\",
  \"version\": \"0.10.1\",
  \"main\": \"lib/index.js\",
  \"keywords\": [
    \"regenerator\",
    \"runtime\",
    \"generator\",
    \"async\"
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/facebook/regenerator/tree/master/packages/regenerator-transform\"
  },
  \"license\": \"BSD\",
  \"scripts\": {
    \"prepublish\": \"babel src/ --out-dir lib/\"
  },
  \"babel\": {
    \"presets\": [
      [
        \"env\",
        {
          \"loose\": true
        }
      ]
    ],
    \"plugins\": [
      \"transform-runtime\"
    ]
  },
  \"dependencies\": {
    \"babel-runtime\": \"^6.18.0\",
    \"babel-types\": \"^6.19.0\",
    \"private\": \"^0.1.6\"
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.9.0\",
    \"babel-plugin-transform-runtime\": \"^6.9.0\",
    \"babel-preset-env\": \"^1.2.2\"
  }
}
", "node_modules/regenerator-transform/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-transform/package.json");
    }
}
