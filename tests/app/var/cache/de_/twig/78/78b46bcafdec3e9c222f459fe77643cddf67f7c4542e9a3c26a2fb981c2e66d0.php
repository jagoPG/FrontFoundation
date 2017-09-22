<?php

/* node_modules/spdx-license-ids/package.json */
class __TwigTemplate_19c022bb38cf7faaa5ce4c86f139fe613327f963efe2b79bf814e03fa8cd58b9 extends Twig_Template
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
        $__internal_031a39e3d6ec923756be56ebae93582c857d3bcff64cbaf9a99dd6863a6237cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031a39e3d6ec923756be56ebae93582c857d3bcff64cbaf9a99dd6863a6237cc->enter($__internal_031a39e3d6ec923756be56ebae93582c857d3bcff64cbaf9a99dd6863a6237cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/spdx-license-ids/package.json"));

        // line 1
        echo "{
  \"name\": \"spdx-license-ids\",
  \"version\": \"1.2.2\",
  \"description\": \"A list of SPDX license identifiers\",
  \"repository\": \"shinnn/spdx-license-ids\",
  \"author\": \"Shinnosuke Watanabe (https://github.com/shinnn)\",
  \"scripts\": {
    \"build\": \"node --strong_mode build.js\",
    \"lint\": \"eslint --config @shinnn/node --env browser --ignore-path .gitignore .\",
    \"pretest\": \"\${npm_package_scripts_build} && \${npm_package_scripts_lint}\",
    \"test\": \"node --strong_mode test.js | tap-spec\",
    \"coverage\": \"node --strong_mode node_modules/.bin/istanbul cover test.js\"
  },
  \"license\": \"Unlicense\",
  \"main\": \"spdx-license-ids.json\",
  \"files\": [
    \"spdx-license-ids.json\"
  ],
  \"keywords\": [
    \"spdx\",
    \"license\",
    \"licenses\",
    \"id\",
    \"identifier\",
    \"identifiers\",
    \"json\",
    \"array\",
    \"oss\",
    \"browser\",
    \"client-side\"
  ],
  \"devDependencies\": {
    \"@shinnn/eslint-config-node\": \"^3.0.0\",
    \"chalk\": \"^1.1.3\",
    \"eslint\": \"^3.1.1\",
    \"get-spdx-license-ids\": \"^1.0.0\",
    \"istanbul\": \"^0.4.4\",
    \"loud-rejection\": \"^1.6.0\",
    \"rimraf-promise\": \"^2.0.0\",
    \"stringify-object\": \"^2.4.0\",
    \"tap-spec\": \"^4.1.1\",
    \"tape\": \"^4.6.0\",
    \"write-file-atomically\": \"1.0.0\"
  }
}
";
        
        $__internal_031a39e3d6ec923756be56ebae93582c857d3bcff64cbaf9a99dd6863a6237cc->leave($__internal_031a39e3d6ec923756be56ebae93582c857d3bcff64cbaf9a99dd6863a6237cc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/spdx-license-ids/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"spdx-license-ids\",
  \"version\": \"1.2.2\",
  \"description\": \"A list of SPDX license identifiers\",
  \"repository\": \"shinnn/spdx-license-ids\",
  \"author\": \"Shinnosuke Watanabe (https://github.com/shinnn)\",
  \"scripts\": {
    \"build\": \"node --strong_mode build.js\",
    \"lint\": \"eslint --config @shinnn/node --env browser --ignore-path .gitignore .\",
    \"pretest\": \"\${npm_package_scripts_build} && \${npm_package_scripts_lint}\",
    \"test\": \"node --strong_mode test.js | tap-spec\",
    \"coverage\": \"node --strong_mode node_modules/.bin/istanbul cover test.js\"
  },
  \"license\": \"Unlicense\",
  \"main\": \"spdx-license-ids.json\",
  \"files\": [
    \"spdx-license-ids.json\"
  ],
  \"keywords\": [
    \"spdx\",
    \"license\",
    \"licenses\",
    \"id\",
    \"identifier\",
    \"identifiers\",
    \"json\",
    \"array\",
    \"oss\",
    \"browser\",
    \"client-side\"
  ],
  \"devDependencies\": {
    \"@shinnn/eslint-config-node\": \"^3.0.0\",
    \"chalk\": \"^1.1.3\",
    \"eslint\": \"^3.1.1\",
    \"get-spdx-license-ids\": \"^1.0.0\",
    \"istanbul\": \"^0.4.4\",
    \"loud-rejection\": \"^1.6.0\",
    \"rimraf-promise\": \"^2.0.0\",
    \"stringify-object\": \"^2.4.0\",
    \"tap-spec\": \"^4.1.1\",
    \"tape\": \"^4.6.0\",
    \"write-file-atomically\": \"1.0.0\"
  }
}
", "node_modules/spdx-license-ids/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/spdx-license-ids/package.json");
    }
}
