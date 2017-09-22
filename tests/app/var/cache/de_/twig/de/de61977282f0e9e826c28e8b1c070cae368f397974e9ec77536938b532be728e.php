<?php

/* node_modules/is-regex/package.json */
class __TwigTemplate_a6ee0c730651dca1385053cdaec0f3fe98052b77c7af6825e2d0dd81f39cbfc1 extends Twig_Template
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
        $__internal_d1464bdaba696d6e706aff18484f87c9f084f97fe19cb3dfdcea05fb51888be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1464bdaba696d6e706aff18484f87c9f084f97fe19cb3dfdcea05fb51888be2->enter($__internal_d1464bdaba696d6e706aff18484f87c9f084f97fe19cb3dfdcea05fb51888be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-regex/package.json"));

        // line 1
        echo "{
\t\"name\": \"is-regex\",
\t\"version\": \"1.0.4\",
\t\"description\": \"Is this value a JS regex? Works cross-realm/iframe, and despite ES6 @@toStringTag\",
\t\"author\": \"Jordan Harband\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"pretest\": \"npm run lint\",
\t\t\"test\": \"npm run tests-only\",
\t\t\"tests-only\": \"node --harmony --es-staging test.js\",
\t\t\"posttest\": \"npm run security\",
\t\t\"coverage\": \"covert test.js\",
\t\t\"coverage-quiet\": \"covert test.js --quiet\",
\t\t\"lint\": \"npm run jscs && npm run eslint\",
\t\t\"jscs\": \"jscs *.js\",
\t\t\"eslint\": \"eslint test.js *.js\",
\t\t\"eccheck\": \"editorconfig-tools check *.js **/*.js > /dev/null\",
\t\t\"security\": \"nsp check\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/ljharb/is-regex.git\"
\t},
\t\"bugs\": {
\t\t\"url\": \"https://github.com/ljharb/is-regex/issues\"
\t},
\t\"homepage\": \"https://github.com/ljharb/is-regex\",
\t\"keywords\": [
\t\t\"regex\",
\t\t\"regexp\",
\t\t\"is\",
\t\t\"regular expression\",
\t\t\"regular\",
\t\t\"expression\"
\t],
\t\"dependencies\": {
\t\t\"has\": \"^1.0.1\"
\t},
\t\"devDependencies\": {
\t\t\"tape\": \"^4.6.3\",
\t\t\"covert\": \"^1.1.0\",
\t\t\"jscs\": \"^3.0.7\",
\t\t\"editorconfig-tools\": \"^0.1.1\",
\t\t\"nsp\": \"^2.6.2\",
\t\t\"eslint\": \"^3.15.0\",
\t\t\"@ljharb/eslint-config\": \"^11.0.0\",
\t\t\"semver\": \"^5.3.0\",
\t\t\"replace\": \"^0.3.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test.js\",
\t\t\"browsers\": [
\t\t\t\"iexplore/6.0..latest\",
\t\t\t\"firefox/3.0..6.0\",
\t\t\t\"firefox/15.0..latest\",
\t\t\t\"firefox/nightly\",
\t\t\t\"chrome/4.0..10.0\",
\t\t\t\"chrome/20.0..latest\",
\t\t\t\"chrome/canary\",
\t\t\t\"opera/10.0..12.0\",
\t\t\t\"opera/15.0..latest\",
\t\t\t\"opera/next\",
\t\t\t\"safari/4.0..latest\",
\t\t\t\"ipad/6.0..latest\",
\t\t\t\"iphone/6.0..latest\",
\t\t\t\"android-browser/4.2\"
\t\t]
\t},
\t\"engines\": {
\t\t\"node\": \">= 0.4\"
\t}
}

";
        
        $__internal_d1464bdaba696d6e706aff18484f87c9f084f97fe19cb3dfdcea05fb51888be2->leave($__internal_d1464bdaba696d6e706aff18484f87c9f084f97fe19cb3dfdcea05fb51888be2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-regex/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"name\": \"is-regex\",
\t\"version\": \"1.0.4\",
\t\"description\": \"Is this value a JS regex? Works cross-realm/iframe, and despite ES6 @@toStringTag\",
\t\"author\": \"Jordan Harband\",
\t\"license\": \"MIT\",
\t\"main\": \"index.js\",
\t\"scripts\": {
\t\t\"pretest\": \"npm run lint\",
\t\t\"test\": \"npm run tests-only\",
\t\t\"tests-only\": \"node --harmony --es-staging test.js\",
\t\t\"posttest\": \"npm run security\",
\t\t\"coverage\": \"covert test.js\",
\t\t\"coverage-quiet\": \"covert test.js --quiet\",
\t\t\"lint\": \"npm run jscs && npm run eslint\",
\t\t\"jscs\": \"jscs *.js\",
\t\t\"eslint\": \"eslint test.js *.js\",
\t\t\"eccheck\": \"editorconfig-tools check *.js **/*.js > /dev/null\",
\t\t\"security\": \"nsp check\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"git://github.com/ljharb/is-regex.git\"
\t},
\t\"bugs\": {
\t\t\"url\": \"https://github.com/ljharb/is-regex/issues\"
\t},
\t\"homepage\": \"https://github.com/ljharb/is-regex\",
\t\"keywords\": [
\t\t\"regex\",
\t\t\"regexp\",
\t\t\"is\",
\t\t\"regular expression\",
\t\t\"regular\",
\t\t\"expression\"
\t],
\t\"dependencies\": {
\t\t\"has\": \"^1.0.1\"
\t},
\t\"devDependencies\": {
\t\t\"tape\": \"^4.6.3\",
\t\t\"covert\": \"^1.1.0\",
\t\t\"jscs\": \"^3.0.7\",
\t\t\"editorconfig-tools\": \"^0.1.1\",
\t\t\"nsp\": \"^2.6.2\",
\t\t\"eslint\": \"^3.15.0\",
\t\t\"@ljharb/eslint-config\": \"^11.0.0\",
\t\t\"semver\": \"^5.3.0\",
\t\t\"replace\": \"^0.3.0\"
\t},
\t\"testling\": {
\t\t\"files\": \"test.js\",
\t\t\"browsers\": [
\t\t\t\"iexplore/6.0..latest\",
\t\t\t\"firefox/3.0..6.0\",
\t\t\t\"firefox/15.0..latest\",
\t\t\t\"firefox/nightly\",
\t\t\t\"chrome/4.0..10.0\",
\t\t\t\"chrome/20.0..latest\",
\t\t\t\"chrome/canary\",
\t\t\t\"opera/10.0..12.0\",
\t\t\t\"opera/15.0..latest\",
\t\t\t\"opera/next\",
\t\t\t\"safari/4.0..latest\",
\t\t\t\"ipad/6.0..latest\",
\t\t\t\"iphone/6.0..latest\",
\t\t\t\"android-browser/4.2\"
\t\t]
\t},
\t\"engines\": {
\t\t\"node\": \">= 0.4\"
\t}
}

", "node_modules/is-regex/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-regex/package.json");
    }
}
