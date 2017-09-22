<?php

/* node_modules/normalize-package-data/lib/warning_messages.json */
class __TwigTemplate_29683b008aeb2aa44315a580a79ddbaeb3316f7c27637a2e7fcaadc1ab31430b extends Twig_Template
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
        $__internal_e9ddb7a676c3518d88254d412248af820f83bf3997604fcd249263cf3a0aa27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ddb7a676c3518d88254d412248af820f83bf3997604fcd249263cf3a0aa27e->enter($__internal_e9ddb7a676c3518d88254d412248af820f83bf3997604fcd249263cf3a0aa27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/normalize-package-data/lib/warning_messages.json"));

        // line 1
        echo "{
  \"repositories\": \"'repositories' (plural) Not supported. Please pick one as the 'repository' field\"
  ,\"missingRepository\": \"No repository field.\"
  ,\"brokenGitUrl\": \"Probably broken git url: %s\"
  ,\"nonObjectScripts\": \"scripts must be an object\"
  ,\"nonStringScript\": \"script values must be string commands\"
  ,\"nonArrayFiles\": \"Invalid 'files' member\"
  ,\"invalidFilename\": \"Invalid filename in 'files' list: %s\"
  ,\"nonArrayBundleDependencies\": \"Invalid 'bundleDependencies' list. Must be array of package names\"
  ,\"nonStringBundleDependency\": \"Invalid bundleDependencies member: %s\"
  ,\"nonDependencyBundleDependency\": \"Non-dependency in bundleDependencies: %s\"
  ,\"nonObjectDependencies\": \"%s field must be an object\"
  ,\"nonStringDependency\": \"Invalid dependency: %s %s\"
  ,\"deprecatedArrayDependencies\": \"specifying %s as array is deprecated\"
  ,\"deprecatedModules\": \"modules field is deprecated\"
  ,\"nonArrayKeywords\": \"keywords should be an array of strings\"
  ,\"nonStringKeyword\": \"keywords should be an array of strings\"
  ,\"conflictingName\": \"%s is also the name of a node core module.\"
  ,\"nonStringDescription\": \"'description' field should be a string\"
  ,\"missingDescription\": \"No description\"
  ,\"missingReadme\": \"No README data\"
  ,\"missingLicense\": \"No license field.\"
  ,\"nonEmailUrlBugsString\": \"Bug string field must be url, email, or {email,url}\"
  ,\"nonUrlBugsUrlField\": \"bugs.url field must be a string url. Deleted.\"
  ,\"nonEmailBugsEmailField\": \"bugs.email field must be a string email. Deleted.\"
  ,\"emptyNormalizedBugs\": \"Normalized value of bugs field is an empty object. Deleted.\"
  ,\"nonUrlHomepage\": \"homepage field must be a string url. Deleted.\"
  ,\"invalidLicense\": \"license should be a valid SPDX license expression\"
  ,\"typo\": \"%s should probably be %s.\"
}
";
        
        $__internal_e9ddb7a676c3518d88254d412248af820f83bf3997604fcd249263cf3a0aa27e->leave($__internal_e9ddb7a676c3518d88254d412248af820f83bf3997604fcd249263cf3a0aa27e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/normalize-package-data/lib/warning_messages.json";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{
  \"repositories\": \"'repositories' (plural) Not supported. Please pick one as the 'repository' field\"
  ,\"missingRepository\": \"No repository field.\"
  ,\"brokenGitUrl\": \"Probably broken git url: %s\"
  ,\"nonObjectScripts\": \"scripts must be an object\"
  ,\"nonStringScript\": \"script values must be string commands\"
  ,\"nonArrayFiles\": \"Invalid 'files' member\"
  ,\"invalidFilename\": \"Invalid filename in 'files' list: %s\"
  ,\"nonArrayBundleDependencies\": \"Invalid 'bundleDependencies' list. Must be array of package names\"
  ,\"nonStringBundleDependency\": \"Invalid bundleDependencies member: %s\"
  ,\"nonDependencyBundleDependency\": \"Non-dependency in bundleDependencies: %s\"
  ,\"nonObjectDependencies\": \"%s field must be an object\"
  ,\"nonStringDependency\": \"Invalid dependency: %s %s\"
  ,\"deprecatedArrayDependencies\": \"specifying %s as array is deprecated\"
  ,\"deprecatedModules\": \"modules field is deprecated\"
  ,\"nonArrayKeywords\": \"keywords should be an array of strings\"
  ,\"nonStringKeyword\": \"keywords should be an array of strings\"
  ,\"conflictingName\": \"%s is also the name of a node core module.\"
  ,\"nonStringDescription\": \"'description' field should be a string\"
  ,\"missingDescription\": \"No description\"
  ,\"missingReadme\": \"No README data\"
  ,\"missingLicense\": \"No license field.\"
  ,\"nonEmailUrlBugsString\": \"Bug string field must be url, email, or {email,url}\"
  ,\"nonUrlBugsUrlField\": \"bugs.url field must be a string url. Deleted.\"
  ,\"nonEmailBugsEmailField\": \"bugs.email field must be a string email. Deleted.\"
  ,\"emptyNormalizedBugs\": \"Normalized value of bugs field is an empty object. Deleted.\"
  ,\"nonUrlHomepage\": \"homepage field must be a string url. Deleted.\"
  ,\"invalidLicense\": \"license should be a valid SPDX license expression\"
  ,\"typo\": \"%s should probably be %s.\"
}
", "node_modules/normalize-package-data/lib/warning_messages.json", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/normalize-package-data/lib/warning_messages.json");
    }
}
