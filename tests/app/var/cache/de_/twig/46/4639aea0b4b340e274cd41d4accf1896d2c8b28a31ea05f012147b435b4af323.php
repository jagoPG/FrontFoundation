<?php

/* node_modules/enhanced-resolve/package.json */
class __TwigTemplate_283b392f0db6919539cc5ee397ed0ab1a995438c02127fcee0e221f3237bc022 extends Twig_Template
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
        $__internal_4eb8ef48ee4dc9e6c4b9c6823c55fd690c6c3220e99e381ee7064c46c8507d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb8ef48ee4dc9e6c4b9c6823c55fd690c6c3220e99e381ee7064c46c8507d2e->enter($__internal_4eb8ef48ee4dc9e6c4b9c6823c55fd690c6c3220e99e381ee7064c46c8507d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/enhanced-resolve/package.json"));

        // line 1
        echo "{
  \"name\": \"enhanced-resolve\",
  \"version\": \"3.4.1\",
  \"author\": \"Tobias Koppers @sokra\",
  \"description\": \"Offers a async require.resolve function. It's highly configurable.\",
  \"files\": [
    \"lib\"
  ],
  \"dependencies\": {
    \"graceful-fs\": \"^4.1.2\",
    \"memory-fs\": \"^0.4.0\",
    \"object-assign\": \"^4.0.1\",
    \"tapable\": \"^0.2.7\"
  },
  \"licenses\": [
    {
      \"type\": \"MIT\",
      \"url\": \"http://www.opensource.org/licenses/mit-license.php\"
    }
  ],
  \"devDependencies\": {
    \"beautify-lint\": \"^1.0.3\",
    \"codecov.io\": \"^0.1.6\",
    \"coveralls\": \"^2.11.6\",
    \"eslint\": \"^3.14.1\",
    \"eslint-plugin-node\": \"^3.0.5\",
    \"eslint-plugin-nodeca\": \"^1.0.3\",
    \"istanbul\": \"^0.4.1\",
    \"js-beautify\": \"^1.5.10\",
    \"mocha\": \"^2.3.4\",
    \"should\": \"^8.0.2\"
  },
  \"engines\": {
    \"node\": \">=4.3.0 <5.0.0 || >=5.10\"
  },
  \"main\": \"lib/node.js\",
  \"homepage\": \"http://github.com/webpack/enhanced-resolve\",
  \"scripts\": {
    \"beautify-lint\": \"beautify-lint lib/**.js test/*.js\",
    \"beautify\": \"beautify-rewrite lib/**.js test/*.js\",
    \"lint\": \"eslint lib test\",
    \"pretest\": \"npm run lint && npm run beautify-lint\",
    \"test\": \"mocha --full-trace --check-leaks\",
    \"precover\": \"npm run lint && npm run beautify-lint\",
    \"cover\": \"istanbul cover node_modules/mocha/bin/_mocha\",
    \"travis\": \"npm run cover -- --report lcovonly\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/webpack/enhanced-resolve.git\"
  }
}
";
        
        $__internal_4eb8ef48ee4dc9e6c4b9c6823c55fd690c6c3220e99e381ee7064c46c8507d2e->leave($__internal_4eb8ef48ee4dc9e6c4b9c6823c55fd690c6c3220e99e381ee7064c46c8507d2e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/enhanced-resolve/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"enhanced-resolve\",
  \"version\": \"3.4.1\",
  \"author\": \"Tobias Koppers @sokra\",
  \"description\": \"Offers a async require.resolve function. It's highly configurable.\",
  \"files\": [
    \"lib\"
  ],
  \"dependencies\": {
    \"graceful-fs\": \"^4.1.2\",
    \"memory-fs\": \"^0.4.0\",
    \"object-assign\": \"^4.0.1\",
    \"tapable\": \"^0.2.7\"
  },
  \"licenses\": [
    {
      \"type\": \"MIT\",
      \"url\": \"http://www.opensource.org/licenses/mit-license.php\"
    }
  ],
  \"devDependencies\": {
    \"beautify-lint\": \"^1.0.3\",
    \"codecov.io\": \"^0.1.6\",
    \"coveralls\": \"^2.11.6\",
    \"eslint\": \"^3.14.1\",
    \"eslint-plugin-node\": \"^3.0.5\",
    \"eslint-plugin-nodeca\": \"^1.0.3\",
    \"istanbul\": \"^0.4.1\",
    \"js-beautify\": \"^1.5.10\",
    \"mocha\": \"^2.3.4\",
    \"should\": \"^8.0.2\"
  },
  \"engines\": {
    \"node\": \">=4.3.0 <5.0.0 || >=5.10\"
  },
  \"main\": \"lib/node.js\",
  \"homepage\": \"http://github.com/webpack/enhanced-resolve\",
  \"scripts\": {
    \"beautify-lint\": \"beautify-lint lib/**.js test/*.js\",
    \"beautify\": \"beautify-rewrite lib/**.js test/*.js\",
    \"lint\": \"eslint lib test\",
    \"pretest\": \"npm run lint && npm run beautify-lint\",
    \"test\": \"mocha --full-trace --check-leaks\",
    \"precover\": \"npm run lint && npm run beautify-lint\",
    \"cover\": \"istanbul cover node_modules/mocha/bin/_mocha\",
    \"travis\": \"npm run cover -- --report lcovonly\"
  },
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"git://github.com/webpack/enhanced-resolve.git\"
  }
}
", "node_modules/enhanced-resolve/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/enhanced-resolve/package.json");
    }
}
