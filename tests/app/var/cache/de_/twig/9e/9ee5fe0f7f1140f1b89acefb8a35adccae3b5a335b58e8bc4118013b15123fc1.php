<?php

/* node_modules/fsevents/binding.gyp */
class __TwigTemplate_a6ba36977726c29dc86392caeccd93fb91badeaf1657f98a4bd59bd1e42698f8 extends Twig_Template
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
        $__internal_e4d60ca5c9edab8e43ea94a6fe32bb512de4fd0f7a45363c5bbcdf1367623dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d60ca5c9edab8e43ea94a6fe32bb512de4fd0f7a45363c5bbcdf1367623dc9->enter($__internal_e4d60ca5c9edab8e43ea94a6fe32bb512de4fd0f7a45363c5bbcdf1367623dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/binding.gyp"));

        // line 1
        echo "{
  \"targets\": [
    { \"target_name\": \"\" }
  ],
  \"conditions\": [
    ['OS==\"mac\"', {
      \"targets\": [{
        \"target_name\": \"<(module_name)\",
        \"sources\": [\"fsevents.cc\"],
        \"xcode_settings\": {
          \"OTHER_LDFLAGS\": [
            \"-framework CoreFoundation -framework CoreServices\"
          ]
        },
        \"include_dirs\": [
          \"<!(node -e \\\"require('nan')\\\")\"
        ]
      }, {
        \"target_name\": \"action_after_build\",
        \"type\": \"none\",
        \"dependencies\": [\"<(module_name)\"],
        \"copies\": [{
          \"files\": [\"<(PRODUCT_DIR)/<(module_name).node\"],
          \"destination\": \"<(module_path)\"
        }]
      }]
    }]
  ]
}
";
        
        $__internal_e4d60ca5c9edab8e43ea94a6fe32bb512de4fd0f7a45363c5bbcdf1367623dc9->leave($__internal_e4d60ca5c9edab8e43ea94a6fe32bb512de4fd0f7a45363c5bbcdf1367623dc9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/binding.gyp";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"targets\": [
    { \"target_name\": \"\" }
  ],
  \"conditions\": [
    ['OS==\"mac\"', {
      \"targets\": [{
        \"target_name\": \"<(module_name)\",
        \"sources\": [\"fsevents.cc\"],
        \"xcode_settings\": {
          \"OTHER_LDFLAGS\": [
            \"-framework CoreFoundation -framework CoreServices\"
          ]
        },
        \"include_dirs\": [
          \"<!(node -e \\\"require('nan')\\\")\"
        ]
      }, {
        \"target_name\": \"action_after_build\",
        \"type\": \"none\",
        \"dependencies\": [\"<(module_name)\"],
        \"copies\": [{
          \"files\": [\"<(PRODUCT_DIR)/<(module_name).node\"],
          \"destination\": \"<(module_path)\"
        }]
      }]
    }]
  ]
}
", "node_modules/fsevents/binding.gyp", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/binding.gyp");
    }
}
