<?php

/* node_modules/acorn/package.json */
class __TwigTemplate_a096bef1ff0f900c91492a4b696a0b7bb60a9a6c78bf9306dec3c796eaa6a156 extends Twig_Template
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
        $__internal_9a56ad3f9395cd9488f7563466275ed9d605719910d311428e2ade9f739de700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a56ad3f9395cd9488f7563466275ed9d605719910d311428e2ade9f739de700->enter($__internal_9a56ad3f9395cd9488f7563466275ed9d605719910d311428e2ade9f739de700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn/package.json"));

        // line 1
        echo "{
  \"name\": \"acorn\",
  \"description\": \"ECMAScript parser\",
  \"homepage\": \"https://github.com/ternjs/acorn\",
  \"main\": \"dist/acorn.js\",
  \"module\": \"dist/acorn.es.js\",
  \"version\": \"5.1.2\",
  \"engines\": {
    \"node\": \">=0.4.0\"
  },
  \"maintainers\": [
    {
      \"name\": \"Marijn Haverbeke\",
      \"email\": \"marijnh@gmail.com\",
      \"web\": \"http://marijnhaverbeke.nl\"
    },
    {
      \"name\": \"Ingvar Stepanyan\",
      \"email\": \"me@rreverser.com\",
      \"web\": \"http://rreverser.com/\"
    }
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/ternjs/acorn.git\"
  },
  \"license\": \"MIT\",
  \"scripts\": {
    \"prepare\": \"npm test\",
    \"test\": \"node test/run.js && node test/lint.js\",
    \"pretest\": \"npm run build:main && npm run build:loose\",
    \"build\": \"npm run build:main && npm run build:walk && npm run build:loose && npm run build:bin\",
    \"build:main\": \"rollup -c rollup/config.main.js\",
    \"build:walk\": \"rollup -c rollup/config.walk.js\",
    \"build:loose\": \"rollup -c rollup/config.loose.js && rollup -c rollup/config.loose_es.js\",
    \"build:bin\": \"rollup -c rollup/config.bin.js\",
    \"lint\": \"eslint src/\"
  },
  \"bin\": {
    \"acorn\": \"./bin/acorn\"
  },
  \"devDependencies\": {
    \"eslint\": \"^3.18.0\",
    \"eslint-config-standard\": \"^7.1.0\",
    \"eslint-plugin-import\": \"^2.2.0\",
    \"eslint-plugin-promise\": \"^3.5.0\",
    \"eslint-plugin-standard\": \"^2.1.1\",
    \"rollup\": \"^0.43.0\",
    \"rollup-plugin-buble\": \"^0.15.0\",
    \"unicode-9.0.0\": \"^0.7.0\"
  }
}
";
        
        $__internal_9a56ad3f9395cd9488f7563466275ed9d605719910d311428e2ade9f739de700->leave($__internal_9a56ad3f9395cd9488f7563466275ed9d605719910d311428e2ade9f739de700_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"acorn\",
  \"description\": \"ECMAScript parser\",
  \"homepage\": \"https://github.com/ternjs/acorn\",
  \"main\": \"dist/acorn.js\",
  \"module\": \"dist/acorn.es.js\",
  \"version\": \"5.1.2\",
  \"engines\": {
    \"node\": \">=0.4.0\"
  },
  \"maintainers\": [
    {
      \"name\": \"Marijn Haverbeke\",
      \"email\": \"marijnh@gmail.com\",
      \"web\": \"http://marijnhaverbeke.nl\"
    },
    {
      \"name\": \"Ingvar Stepanyan\",
      \"email\": \"me@rreverser.com\",
      \"web\": \"http://rreverser.com/\"
    }
  ],
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/ternjs/acorn.git\"
  },
  \"license\": \"MIT\",
  \"scripts\": {
    \"prepare\": \"npm test\",
    \"test\": \"node test/run.js && node test/lint.js\",
    \"pretest\": \"npm run build:main && npm run build:loose\",
    \"build\": \"npm run build:main && npm run build:walk && npm run build:loose && npm run build:bin\",
    \"build:main\": \"rollup -c rollup/config.main.js\",
    \"build:walk\": \"rollup -c rollup/config.walk.js\",
    \"build:loose\": \"rollup -c rollup/config.loose.js && rollup -c rollup/config.loose_es.js\",
    \"build:bin\": \"rollup -c rollup/config.bin.js\",
    \"lint\": \"eslint src/\"
  },
  \"bin\": {
    \"acorn\": \"./bin/acorn\"
  },
  \"devDependencies\": {
    \"eslint\": \"^3.18.0\",
    \"eslint-config-standard\": \"^7.1.0\",
    \"eslint-plugin-import\": \"^2.2.0\",
    \"eslint-plugin-promise\": \"^3.5.0\",
    \"eslint-plugin-standard\": \"^2.1.1\",
    \"rollup\": \"^0.43.0\",
    \"rollup-plugin-buble\": \"^0.15.0\",
    \"unicode-9.0.0\": \"^0.7.0\"
  }
}
", "node_modules/acorn/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn/package.json");
    }
}
