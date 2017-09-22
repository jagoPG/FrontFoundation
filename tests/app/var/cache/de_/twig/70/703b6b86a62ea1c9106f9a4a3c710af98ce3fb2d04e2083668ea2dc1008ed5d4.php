<?php

/* node_modules/watchpack/package.json */
class __TwigTemplate_34a4aed522bf3ba1685fbcce95a725442e7c3f9d274fe1b99e6b463a3f1ab881 extends Twig_Template
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
        $__internal_b8fd62ef789863a942c0f7fefa0fdd7bb192819a8c36ecdc3f207b8427edc4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fd62ef789863a942c0f7fefa0fdd7bb192819a8c36ecdc3f207b8427edc4f4->enter($__internal_b8fd62ef789863a942c0f7fefa0fdd7bb192819a8c36ecdc3f207b8427edc4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/watchpack/package.json"));

        // line 1
        echo "{
  \"name\": \"watchpack\",
  \"version\": \"1.4.0\",
  \"description\": \"\",
  \"main\": \"./lib/watchpack.js\",
  \"directories\": {
    \"test\": \"test\"
  },
  \"files\": [
    \"lib/\"
  ],
  \"scripts\": {
    \"pretest\": \"npm run lint\",
    \"test\": \"mocha\",
    \"travis\": \"npm run cover -- --report lcovonly\",
    \"lint\": \"eslint lib\",
    \"precover\": \"npm run lint\",
    \"cover\": \"istanbul cover node_modules/mocha/bin/_mocha\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/webpack/watchpack.git\"
  },
  \"author\": \"Tobias Koppers @sokra\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/webpack/watchpack/issues\"
  },
  \"homepage\": \"https://github.com/webpack/watchpack\",
  \"devDependencies\": {
    \"codecov.io\": \"^0.1.6\",
    \"coveralls\": \"^2.11.2\",
    \"eslint\": \"^2.9.0\",
    \"istanbul\": \"^0.4.3\",
    \"mocha\": \"^2.1.0\",
    \"rimraf\": \"~2.5.0\",
    \"should\": \"^8.3.1\"
  },
  \"dependencies\": {
    \"async\": \"^2.1.2\",
    \"chokidar\": \"^1.7.0\",
    \"graceful-fs\": \"^4.1.2\"
  }
}
";
        
        $__internal_b8fd62ef789863a942c0f7fefa0fdd7bb192819a8c36ecdc3f207b8427edc4f4->leave($__internal_b8fd62ef789863a942c0f7fefa0fdd7bb192819a8c36ecdc3f207b8427edc4f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/watchpack/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"watchpack\",
  \"version\": \"1.4.0\",
  \"description\": \"\",
  \"main\": \"./lib/watchpack.js\",
  \"directories\": {
    \"test\": \"test\"
  },
  \"files\": [
    \"lib/\"
  ],
  \"scripts\": {
    \"pretest\": \"npm run lint\",
    \"test\": \"mocha\",
    \"travis\": \"npm run cover -- --report lcovonly\",
    \"lint\": \"eslint lib\",
    \"precover\": \"npm run lint\",
    \"cover\": \"istanbul cover node_modules/mocha/bin/_mocha\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/webpack/watchpack.git\"
  },
  \"author\": \"Tobias Koppers @sokra\",
  \"license\": \"MIT\",
  \"bugs\": {
    \"url\": \"https://github.com/webpack/watchpack/issues\"
  },
  \"homepage\": \"https://github.com/webpack/watchpack\",
  \"devDependencies\": {
    \"codecov.io\": \"^0.1.6\",
    \"coveralls\": \"^2.11.2\",
    \"eslint\": \"^2.9.0\",
    \"istanbul\": \"^0.4.3\",
    \"mocha\": \"^2.1.0\",
    \"rimraf\": \"~2.5.0\",
    \"should\": \"^8.3.1\"
  },
  \"dependencies\": {
    \"async\": \"^2.1.2\",
    \"chokidar\": \"^1.7.0\",
    \"graceful-fs\": \"^4.1.2\"
  }
}
", "node_modules/watchpack/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/watchpack/package.json");
    }
}
