<?php

/* node_modules/acorn-dynamic-import/package.json */
class __TwigTemplate_27c267030fc9e601f61e8f92b9ccb1a7ea3c32c4f83f75a68f9d4a1a9b480ece extends Twig_Template
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
        $__internal_13833e7986e571dae8f5ea614093325fa4b033907f006a54b5e9cf5ef1ea4fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13833e7986e571dae8f5ea614093325fa4b033907f006a54b5e9cf5ef1ea4fb0->enter($__internal_13833e7986e571dae8f5ea614093325fa4b033907f006a54b5e9cf5ef1ea4fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/package.json"));

        // line 1
        echo "{
  \"name\": \"acorn-dynamic-import\",
  \"description\": \"Support dynamic imports in acorn\",
  \"main\": \"lib/index.js\",
  \"homepage\": \"https://github.com/kesne/acorn-dynamic-import\",
  \"author\": \"Jordan Gensler <jordangens@gmail.com>\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/kesne/acorn-dynamic-import\"
  },
  \"license\": \"MIT\",
  \"scripts\": {
    \"build\": \"babel src --out-dir lib\",
    \"test\": \"npm run lint && npm run tests-only\",
    \"lint\": \"eslint .\",
    \"tests-only\": \"mocha\",
    \"prepublish\": \"in-publish && safe-publish-latest && npm run build || not-in-publish\",
    \"check-changelog\": \"expr \$(git status --porcelain 2>/dev/null| grep \\\"^\\\\s*M.*CHANGELOG.md\\\" | wc -l) >/dev/null || (echo 'Please edit CHANGELOG.md' && exit 1)\",
    \"check-only-changelog-changed\": \"(expr \$(git status --porcelain 2>/dev/null| grep -v \\\"CHANGELOG.md\\\" | wc -l) >/dev/null && echo 'Only CHANGELOG.md may have uncommitted changes' && exit 1) || exit 0\",
    \"version:major\": \"npm --no-git-tag-version version major\",
    \"version:minor\": \"npm --no-git-tag-version version minor\",
    \"version:patch\": \"npm --no-git-tag-version version patch\",
    \"postversion\": \"git commit package.json CHANGELOG.md -m \\\"v\$npm_package_version\\\" && npm run tag && git push && git push --tags\",
    \"preversion\": \"npm run test && npm run check-changelog && npm run check-only-changelog-changed\",
    \"tag\": \"git tag v\$npm_package_version\"
  },
  \"dependencies\": {
    \"acorn\": \"^4.0.3\"
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.18.0\",
    \"babel-eslint\": \"^7.1.1\",
    \"babel-preset-airbnb\": \"^2.1.1\",
    \"babel-register\": \"^6.18.0\",
    \"chai\": \"^3.0.0\",
    \"eslint\": \"^3.10.2\",
    \"eslint-config-airbnb-base\": \"^10.0.1\",
    \"eslint-plugin-import\": \"^2.2.0\",
    \"in-publish\": \"^2.0.0\",
    \"mocha\": \"^2.2.5\",
    \"rimraf\": \"^2.5.4\",
    \"safe-publish-latest\": \"^1.1.1\"
  },
  \"version\": \"2.0.2\"
}
";
        
        $__internal_13833e7986e571dae8f5ea614093325fa4b033907f006a54b5e9cf5ef1ea4fb0->leave($__internal_13833e7986e571dae8f5ea614093325fa4b033907f006a54b5e9cf5ef1ea4fb0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"name\": \"acorn-dynamic-import\",
  \"description\": \"Support dynamic imports in acorn\",
  \"main\": \"lib/index.js\",
  \"homepage\": \"https://github.com/kesne/acorn-dynamic-import\",
  \"author\": \"Jordan Gensler <jordangens@gmail.com>\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/kesne/acorn-dynamic-import\"
  },
  \"license\": \"MIT\",
  \"scripts\": {
    \"build\": \"babel src --out-dir lib\",
    \"test\": \"npm run lint && npm run tests-only\",
    \"lint\": \"eslint .\",
    \"tests-only\": \"mocha\",
    \"prepublish\": \"in-publish && safe-publish-latest && npm run build || not-in-publish\",
    \"check-changelog\": \"expr \$(git status --porcelain 2>/dev/null| grep \\\"^\\\\s*M.*CHANGELOG.md\\\" | wc -l) >/dev/null || (echo 'Please edit CHANGELOG.md' && exit 1)\",
    \"check-only-changelog-changed\": \"(expr \$(git status --porcelain 2>/dev/null| grep -v \\\"CHANGELOG.md\\\" | wc -l) >/dev/null && echo 'Only CHANGELOG.md may have uncommitted changes' && exit 1) || exit 0\",
    \"version:major\": \"npm --no-git-tag-version version major\",
    \"version:minor\": \"npm --no-git-tag-version version minor\",
    \"version:patch\": \"npm --no-git-tag-version version patch\",
    \"postversion\": \"git commit package.json CHANGELOG.md -m \\\"v\$npm_package_version\\\" && npm run tag && git push && git push --tags\",
    \"preversion\": \"npm run test && npm run check-changelog && npm run check-only-changelog-changed\",
    \"tag\": \"git tag v\$npm_package_version\"
  },
  \"dependencies\": {
    \"acorn\": \"^4.0.3\"
  },
  \"devDependencies\": {
    \"babel-cli\": \"^6.18.0\",
    \"babel-eslint\": \"^7.1.1\",
    \"babel-preset-airbnb\": \"^2.1.1\",
    \"babel-register\": \"^6.18.0\",
    \"chai\": \"^3.0.0\",
    \"eslint\": \"^3.10.2\",
    \"eslint-config-airbnb-base\": \"^10.0.1\",
    \"eslint-plugin-import\": \"^2.2.0\",
    \"in-publish\": \"^2.0.0\",
    \"mocha\": \"^2.2.5\",
    \"rimraf\": \"^2.5.4\",
    \"safe-publish-latest\": \"^1.1.1\"
  },
  \"version\": \"2.0.2\"
}
", "node_modules/acorn-dynamic-import/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/package.json");
    }
}
