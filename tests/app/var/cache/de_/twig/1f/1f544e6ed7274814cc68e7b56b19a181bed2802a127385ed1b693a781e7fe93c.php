<?php

/* node_modules/ajv/scripts/travis-gh-pages */
class __TwigTemplate_bff8bb32e7c7e02268102b27bdc64d9aaaf44556bc5b7d2fe5bc2662154cce04 extends Twig_Template
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
        $__internal_1c215083f5417edf9e7b0e2391a44baa8194c18a5f057296eea0195501eefef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c215083f5417edf9e7b0e2391a44baa8194c18a5f057296eea0195501eefef3->enter($__internal_1c215083f5417edf9e7b0e2391a44baa8194c18a5f057296eea0195501eefef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/scripts/travis-gh-pages"));

        // line 1
        echo "#!/usr/bin/env bash

set -e

if [[ \"\$TRAVIS_BRANCH\" == \"master\" && \"\$TRAVIS_PULL_REQUEST\" == \"false\" && \$TRAVIS_JOB_NUMBER =~ \".3\" ]]; then
  git diff --name-only \$TRAVIS_COMMIT_RANGE | grep -qE '\\.md\$|^LICENSE\$|travis-gh-pages\$' && {
    rm -rf ../gh-pages
    git clone -b gh-pages --single-branch https://\${GITHUB_TOKEN}@github.com/epoberezkin/ajv.git ../gh-pages
    mkdir -p ../gh-pages/_source
    cp *.md ../gh-pages/_source
    cp LICENSE ../gh-pages/_source
    currentDir=\$(pwd)
    cd ../gh-pages
    \$currentDir/node_modules/.bin/gh-pages-generator
    # remove logo from README
    sed -i -E \"s/<img[^>]+ajv_logo[^>]+>//\" index.md
    git config user.email \"\$GIT_USER_EMAIL\"
    git config user.name \"\$GIT_USER_NAME\"
    git add .
    git commit -am \"updated by travis build #\$TRAVIS_BUILD_NUMBER\"
    git push --quiet origin gh-pages > /dev/null 2>&1
  }
fi
";
        
        $__internal_1c215083f5417edf9e7b0e2391a44baa8194c18a5f057296eea0195501eefef3->leave($__internal_1c215083f5417edf9e7b0e2391a44baa8194c18a5f057296eea0195501eefef3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/scripts/travis-gh-pages";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#!/usr/bin/env bash

set -e

if [[ \"\$TRAVIS_BRANCH\" == \"master\" && \"\$TRAVIS_PULL_REQUEST\" == \"false\" && \$TRAVIS_JOB_NUMBER =~ \".3\" ]]; then
  git diff --name-only \$TRAVIS_COMMIT_RANGE | grep -qE '\\.md\$|^LICENSE\$|travis-gh-pages\$' && {
    rm -rf ../gh-pages
    git clone -b gh-pages --single-branch https://\${GITHUB_TOKEN}@github.com/epoberezkin/ajv.git ../gh-pages
    mkdir -p ../gh-pages/_source
    cp *.md ../gh-pages/_source
    cp LICENSE ../gh-pages/_source
    currentDir=\$(pwd)
    cd ../gh-pages
    \$currentDir/node_modules/.bin/gh-pages-generator
    # remove logo from README
    sed -i -E \"s/<img[^>]+ajv_logo[^>]+>//\" index.md
    git config user.email \"\$GIT_USER_EMAIL\"
    git config user.name \"\$GIT_USER_NAME\"
    git add .
    git commit -am \"updated by travis build #\$TRAVIS_BUILD_NUMBER\"
    git push --quiet origin gh-pages > /dev/null 2>&1
  }
fi
", "node_modules/ajv/scripts/travis-gh-pages", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/scripts/travis-gh-pages");
    }
}
