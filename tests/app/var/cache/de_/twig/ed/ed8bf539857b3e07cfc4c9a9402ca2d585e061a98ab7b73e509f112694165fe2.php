<?php

/* node_modules/loader-utils/package.json */
class __TwigTemplate_17855560e8a07ae93192d5c225be85c2bb3f82bbf16e9a1202f885df301be957 extends Twig_Template
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
        $__internal_e49471efc3a5c7f1068b29f494be376b8089af59b711ca7de5833b264eb6202f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49471efc3a5c7f1068b29f494be376b8089af59b711ca7de5833b264eb6202f->enter($__internal_e49471efc3a5c7f1068b29f494be376b8089af59b711ca7de5833b264eb6202f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loader-utils/package.json"));

        // line 1
        echo "{
  \"name\": \"loader-utils\",
  \"version\": \"1.1.0\",
  \"author\": \"Tobias Koppers @sokra\",
  \"description\": \"utils for webpack loaders\",
  \"dependencies\": {
    \"big.js\": \"^3.1.3\",
    \"emojis-list\": \"^2.0.0\",
    \"json5\": \"^0.5.0\"
  },
  \"scripts\": {
    \"test\": \"mocha\",
    \"posttest\": \"npm run lint\",
    \"lint\": \"eslint lib test\",
    \"travis\": \"npm run cover -- --report lcovonly\",
    \"cover\": \"istanbul cover -x *.runtime.js node_modules/mocha/bin/_mocha\",
    \"release\": \"npm test && standard-version\"
  },
  \"license\": \"MIT\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/webpack/loader-utils.git\"
  },
  \"engines\": {
    \"node\": \">=4.0.0\"
  },
  \"devDependencies\": {
    \"coveralls\": \"^2.11.2\",
    \"eslint\": \"^3.15.0\",
    \"eslint-plugin-node\": \"^4.0.1\",
    \"istanbul\": \"^0.3.14\",
    \"mocha\": \"^1.21.4\",
    \"standard-version\": \"^4.0.0\"
  },
  \"main\": \"lib/index.js\",
  \"files\": [
    \"lib\"
  ]
}
";
        
        $__internal_e49471efc3a5c7f1068b29f494be376b8089af59b711ca7de5833b264eb6202f->leave($__internal_e49471efc3a5c7f1068b29f494be376b8089af59b711ca7de5833b264eb6202f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loader-utils/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"loader-utils\",
  \"version\": \"1.1.0\",
  \"author\": \"Tobias Koppers @sokra\",
  \"description\": \"utils for webpack loaders\",
  \"dependencies\": {
    \"big.js\": \"^3.1.3\",
    \"emojis-list\": \"^2.0.0\",
    \"json5\": \"^0.5.0\"
  },
  \"scripts\": {
    \"test\": \"mocha\",
    \"posttest\": \"npm run lint\",
    \"lint\": \"eslint lib test\",
    \"travis\": \"npm run cover -- --report lcovonly\",
    \"cover\": \"istanbul cover -x *.runtime.js node_modules/mocha/bin/_mocha\",
    \"release\": \"npm test && standard-version\"
  },
  \"license\": \"MIT\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/webpack/loader-utils.git\"
  },
  \"engines\": {
    \"node\": \">=4.0.0\"
  },
  \"devDependencies\": {
    \"coveralls\": \"^2.11.2\",
    \"eslint\": \"^3.15.0\",
    \"eslint-plugin-node\": \"^4.0.1\",
    \"istanbul\": \"^0.3.14\",
    \"mocha\": \"^1.21.4\",
    \"standard-version\": \"^4.0.0\"
  },
  \"main\": \"lib/index.js\",
  \"files\": [
    \"lib\"
  ]
}
", "node_modules/loader-utils/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loader-utils/package.json");
    }
}
