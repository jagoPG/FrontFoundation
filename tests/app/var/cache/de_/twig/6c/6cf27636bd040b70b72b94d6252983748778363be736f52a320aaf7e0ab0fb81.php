<?php

/* node_modules/regexpu-core/package.json */
class __TwigTemplate_b5c76d7d6cf9cfd39d6cb9a6c8882d2fdff8bb6c6fb2d362873c1ac9a2eea01f extends Twig_Template
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
        $__internal_46692ccfc595b83c5832e3e78c367f4fd537d092fec9749f0def4476fbffd0fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46692ccfc595b83c5832e3e78c367f4fd537d092fec9749f0def4476fbffd0fc->enter($__internal_46692ccfc595b83c5832e3e78c367f4fd537d092fec9749f0def4476fbffd0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regexpu-core/package.json"));

        // line 1
        echo "{
\t\"name\": \"regexpu-core\",
\t\"version\": \"2.0.0\",
\t\"description\": \"regexpu’s core functionality (i.e. `rewritePattern(pattern, flag)`), capable of translating ES6 Unicode regular expressions to ES5.\",
\t\"homepage\": \"https://mths.be/regexpu\",
\t\"main\": \"rewrite-pattern.js\",
\t\"keywords\": [
\t\t\"codegen\",
\t\t\"desugaring\",
\t\t\"ecmascript\",
\t\t\"es5\",
\t\t\"es6\",
\t\t\"harmony\",
\t\t\"javascript\",
\t\t\"refactoring\",
\t\t\"regex\",
\t\t\"regexp\",
\t\t\"regular expressions\",
\t\t\"rewriting\",
\t\t\"syntax\",
\t\t\"transformation\",
\t\t\"transpile\",
\t\t\"transpiler\",
\t\t\"unicode\"
\t],
\t\"license\": \"MIT\",
\t\"author\": {
\t\t\"name\": \"Mathias Bynens\",
\t\t\"url\": \"https://mathiasbynens.be/\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"https://github.com/mathiasbynens/regexpu-core.git\"
\t},
\t\"bugs\": \"https://github.com/mathiasbynens/regexpu-core/issues\",
\t\"files\": [
\t\t\"LICENSE-MIT.txt\",
\t\t\"rewrite-pattern.js\",
\t\t\"data/character-class-escape-sets.js\",
\t\t\"data/iu-mappings.json\"
\t],
\t\"scripts\": {
\t\t\"build\": \"node scripts/iu-mappings.js && node scripts/character-class-escape-sets.js\",
\t\t\"test\": \"mocha tests\",
\t\t\"coverage\": \"istanbul cover --report html node_modules/.bin/_mocha tests/tests.js -- -u exports -R spec\"
\t},
\t\"dependencies\": {
\t\t\"regenerate\": \"^1.2.1\",
\t\t\"regjsgen\": \"^0.2.0\",
\t\t\"regjsparser\": \"^0.1.4\"
\t},
\t\"devDependencies\": {
\t\t\"coveralls\": \"^2.11.2\",
\t\t\"istanbul\": \"^0.4.0\",
\t\t\"jsesc\": \"^0.5.0\",
\t\t\"lodash\": \"^3.6.0\",
\t\t\"mocha\": \"^2.2.1\",
\t\t\"regexpu-fixtures\": \"^2.0.0\",
\t\t\"unicode-8.0.0\": \"^0.1.5\"
\t}
}
";
        
        $__internal_46692ccfc595b83c5832e3e78c367f4fd537d092fec9749f0def4476fbffd0fc->leave($__internal_46692ccfc595b83c5832e3e78c367f4fd537d092fec9749f0def4476fbffd0fc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regexpu-core/package.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
\t\"name\": \"regexpu-core\",
\t\"version\": \"2.0.0\",
\t\"description\": \"regexpu’s core functionality (i.e. `rewritePattern(pattern, flag)`), capable of translating ES6 Unicode regular expressions to ES5.\",
\t\"homepage\": \"https://mths.be/regexpu\",
\t\"main\": \"rewrite-pattern.js\",
\t\"keywords\": [
\t\t\"codegen\",
\t\t\"desugaring\",
\t\t\"ecmascript\",
\t\t\"es5\",
\t\t\"es6\",
\t\t\"harmony\",
\t\t\"javascript\",
\t\t\"refactoring\",
\t\t\"regex\",
\t\t\"regexp\",
\t\t\"regular expressions\",
\t\t\"rewriting\",
\t\t\"syntax\",
\t\t\"transformation\",
\t\t\"transpile\",
\t\t\"transpiler\",
\t\t\"unicode\"
\t],
\t\"license\": \"MIT\",
\t\"author\": {
\t\t\"name\": \"Mathias Bynens\",
\t\t\"url\": \"https://mathiasbynens.be/\"
\t},
\t\"repository\": {
\t\t\"type\": \"git\",
\t\t\"url\": \"https://github.com/mathiasbynens/regexpu-core.git\"
\t},
\t\"bugs\": \"https://github.com/mathiasbynens/regexpu-core/issues\",
\t\"files\": [
\t\t\"LICENSE-MIT.txt\",
\t\t\"rewrite-pattern.js\",
\t\t\"data/character-class-escape-sets.js\",
\t\t\"data/iu-mappings.json\"
\t],
\t\"scripts\": {
\t\t\"build\": \"node scripts/iu-mappings.js && node scripts/character-class-escape-sets.js\",
\t\t\"test\": \"mocha tests\",
\t\t\"coverage\": \"istanbul cover --report html node_modules/.bin/_mocha tests/tests.js -- -u exports -R spec\"
\t},
\t\"dependencies\": {
\t\t\"regenerate\": \"^1.2.1\",
\t\t\"regjsgen\": \"^0.2.0\",
\t\t\"regjsparser\": \"^0.1.4\"
\t},
\t\"devDependencies\": {
\t\t\"coveralls\": \"^2.11.2\",
\t\t\"istanbul\": \"^0.4.0\",
\t\t\"jsesc\": \"^0.5.0\",
\t\t\"lodash\": \"^3.6.0\",
\t\t\"mocha\": \"^2.2.1\",
\t\t\"regexpu-fixtures\": \"^2.0.0\",
\t\t\"unicode-8.0.0\": \"^0.1.5\"
\t}
}
", "node_modules/regexpu-core/package.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regexpu-core/package.json");
    }
}
