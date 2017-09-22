<?php

/* node_modules/babylon/package.json */
class __TwigTemplate_568fa112fdb9cee834ffa4f00dae1bc29460631d659acc9a42c39bf68f25aeea extends Twig_Template
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
        $__internal_bc07f100eaa9f224ce01bc10b36f2d87cb03579121d69227d870e81b06940547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc07f100eaa9f224ce01bc10b36f2d87cb03579121d69227d870e81b06940547->enter($__internal_bc07f100eaa9f224ce01bc10b36f2d87cb03579121d69227d870e81b06940547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babylon/package.json"));

        // line 1
        echo "{
  \"name\": \"babylon\",
  \"version\": \"6.18.0\",
  \"description\": \"A JavaScript parser\",
  \"author\": \"Sebastian McKenzie <sebmck@gmail.com>\",
  \"homepage\": \"https://babeljs.io/\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"babel\",
    \"javascript\",
    \"parser\",
    \"babylon\"
  ],
  \"repository\": \"https://github.com/babel/babylon\",
  \"main\": \"lib/index.js\",
  \"files\": [
    \"bin\",
    \"lib\"
  ],
  \"devDependencies\": {
    \"ava\": \"^0.17.0\",
    \"babel-cli\": \"^6.14.0\",
    \"babel-eslint\": \"^7.0.0\",
    \"babel-helper-fixtures\": \"^6.9.0\",
    \"babel-plugin-external-helpers\": \"^6.18.0\",
    \"babel-plugin-istanbul\": \"^3.0.0\",
    \"babel-plugin-transform-flow-strip-types\": \"^6.14.0\",
    \"babel-preset-es2015\": \"^6.14.0\",
    \"babel-preset-stage-0\": \"^6.5.0\",
    \"chalk\": \"^1.1.3\",
    \"codecov\": \"^1.0.1\",
    \"cross-env\": \"^2.0.0\",
    \"eslint\": \"^3.7.1\",
    \"eslint-config-babel\": \"^6.0.0\",
    \"eslint-plugin-flowtype\": \"^2.20.0\",
    \"flow-bin\": \"^0.42.0\",
    \"nyc\": \"^10.0.0\",
    \"rimraf\": \"^2.5.4\",
    \"rollup\": \"^0.41.0\",
    \"rollup-plugin-babel\": \"^2.6.1\",
    \"rollup-plugin-node-resolve\": \"^2.0.0\",
    \"rollup-watch\": \"^3.2.2\",
    \"unicode-9.0.0\": \"~0.7.0\"
  },
  \"bin\": {
    \"babylon\": \"./bin/babylon.js\"
  },
  \"scripts\": {
    \"build\": \"npm run clean && rollup -c\",
    \"coverage\": \"nyc report --reporter=json && codecov -f coverage/coverage-final.json\",
    \"lint\": \"eslint src bin\",
    \"clean\": \"rimraf lib\",
    \"flow\": \"flow\",
    \"prepublish\": \"cross-env BABEL_ENV=production npm run build\",
    \"preversion\": \"npm run test && npm run changelog\",
    \"test\": \"npm run lint && npm run flow && npm run build -- -m && npm run test-only\",
    \"test-only\": \"ava\",
    \"test-ci\": \"nyc npm run test-only\",
    \"changelog\": \"git log `git describe --tags --abbrev=0`..HEAD --pretty=format:' * %s (%an)' | grep -v 'Merge pull request'\",
    \"watch\": \"npm run clean && rollup -c --watch\"
  },
  \"nyc\": {
    \"include\": [
      \"src/**/*.js\",
      \"bin/**/*.js\"
    ],
    \"sourceMap\": false,
    \"instrument\": false
  },
  \"ava\": {
    \"files\": [
      \"test/*.js\"
    ],
    \"source\": [
      \"src/**/*.js\",
      \"bin/**/*.js\"
    ]
  },
  \"greenkeeper\": {
    \"ignore\": [
      \"cross-env\"
    ]
  }
}
";
        
        $__internal_bc07f100eaa9f224ce01bc10b36f2d87cb03579121d69227d870e81b06940547->leave($__internal_bc07f100eaa9f224ce01bc10b36f2d87cb03579121d69227d870e81b06940547_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babylon/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"babylon\",
  \"version\": \"6.18.0\",
  \"description\": \"A JavaScript parser\",
  \"author\": \"Sebastian McKenzie <sebmck@gmail.com>\",
  \"homepage\": \"https://babeljs.io/\",
  \"license\": \"MIT\",
  \"keywords\": [
    \"babel\",
    \"javascript\",
    \"parser\",
    \"babylon\"
  ],
  \"repository\": \"https://github.com/babel/babylon\",
  \"main\": \"lib/index.js\",
  \"files\": [
    \"bin\",
    \"lib\"
  ],
  \"devDependencies\": {
    \"ava\": \"^0.17.0\",
    \"babel-cli\": \"^6.14.0\",
    \"babel-eslint\": \"^7.0.0\",
    \"babel-helper-fixtures\": \"^6.9.0\",
    \"babel-plugin-external-helpers\": \"^6.18.0\",
    \"babel-plugin-istanbul\": \"^3.0.0\",
    \"babel-plugin-transform-flow-strip-types\": \"^6.14.0\",
    \"babel-preset-es2015\": \"^6.14.0\",
    \"babel-preset-stage-0\": \"^6.5.0\",
    \"chalk\": \"^1.1.3\",
    \"codecov\": \"^1.0.1\",
    \"cross-env\": \"^2.0.0\",
    \"eslint\": \"^3.7.1\",
    \"eslint-config-babel\": \"^6.0.0\",
    \"eslint-plugin-flowtype\": \"^2.20.0\",
    \"flow-bin\": \"^0.42.0\",
    \"nyc\": \"^10.0.0\",
    \"rimraf\": \"^2.5.4\",
    \"rollup\": \"^0.41.0\",
    \"rollup-plugin-babel\": \"^2.6.1\",
    \"rollup-plugin-node-resolve\": \"^2.0.0\",
    \"rollup-watch\": \"^3.2.2\",
    \"unicode-9.0.0\": \"~0.7.0\"
  },
  \"bin\": {
    \"babylon\": \"./bin/babylon.js\"
  },
  \"scripts\": {
    \"build\": \"npm run clean && rollup -c\",
    \"coverage\": \"nyc report --reporter=json && codecov -f coverage/coverage-final.json\",
    \"lint\": \"eslint src bin\",
    \"clean\": \"rimraf lib\",
    \"flow\": \"flow\",
    \"prepublish\": \"cross-env BABEL_ENV=production npm run build\",
    \"preversion\": \"npm run test && npm run changelog\",
    \"test\": \"npm run lint && npm run flow && npm run build -- -m && npm run test-only\",
    \"test-only\": \"ava\",
    \"test-ci\": \"nyc npm run test-only\",
    \"changelog\": \"git log `git describe --tags --abbrev=0`..HEAD --pretty=format:' * %s (%an)' | grep -v 'Merge pull request'\",
    \"watch\": \"npm run clean && rollup -c --watch\"
  },
  \"nyc\": {
    \"include\": [
      \"src/**/*.js\",
      \"bin/**/*.js\"
    ],
    \"sourceMap\": false,
    \"instrument\": false
  },
  \"ava\": {
    \"files\": [
      \"test/*.js\"
    ],
    \"source\": [
      \"src/**/*.js\",
      \"bin/**/*.js\"
    ]
  },
  \"greenkeeper\": {
    \"ignore\": [
      \"cross-env\"
    ]
  }
}
", "node_modules/babylon/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babylon/package.json");
    }
}
