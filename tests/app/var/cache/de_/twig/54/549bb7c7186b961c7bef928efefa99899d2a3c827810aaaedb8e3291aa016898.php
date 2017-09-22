<?php

/* node_modules/hosted-git-info/README.md */
class __TwigTemplate_f5678ec47e6ebcc1a4936d5765468a1701737d6ece7c7a085773745b7b90f460 extends Twig_Template
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
        $__internal_4e847cf1c0542ad427d6a2019ab5a583040fc22ad15696661a0ef97a3e747a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e847cf1c0542ad427d6a2019ab5a583040fc22ad15696661a0ef97a3e747a79->enter($__internal_4e847cf1c0542ad427d6a2019ab5a583040fc22ad15696661a0ef97a3e747a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hosted-git-info/README.md"));

        // line 1
        echo "# hosted-git-info

This will let you identify and transform various git hosts URLs between
protocols.  It also can tell you what the URL is for the raw path for
particular file for direct access without git.

## Example

```javascript
var hostedGitInfo = require(\"hosted-git-info\")
var info = hostedGitInfo.fromUrl(\"git@github.com:npm/hosted-git-info.git\", opts)
/* info looks like:
{
  type: \"github\",
  domain: \"github.com\",
  user: \"npm\",
  project: \"hosted-git-info\"
}
*/
```

If the URL can't be matched with a git host, `null` will be returned.  We
can match git, ssh and https urls.  Additionally, we can match ssh connect
strings (`git@github.com:npm/hosted-git-info`) and shortcuts (eg,
`github:npm/hosted-git-info`).  Github specifically, is detected in the case
of a third, unprefixed, form: `npm/hosted-git-info`.

If it does match, the returned object has properties of:

* info.type -- The short name of the service
* info.domain -- The domain for git protocol use
* info.user -- The name of the user/org on the git host
* info.project -- The name of the project on the git host

## Version Contract

The major version will be bumped any time…

* The constructor stops accepting URLs that it previously accepted.
* A method is removed.
* A method can no longer accept the number and type of arguments it previously accepted.
* A method can return a different type than it currently returns.

Implications:

* I do not consider the specific format of the urls returned from, say
  `.https()` to be a part of the contract.  The contract is that it will
  return a string that can be used to fetch the repo via HTTPS.  But what
  that string looks like, specifically, can change.
* Dropping support for a hosted git provider would constitute a breaking
  change.

## Usage

### var info = hostedGitInfo.fromUrl(gitSpecifier[, options])

* *gitSpecifer* is a URL of a git repository or a SCP-style specifier of one.
* *options* is an optional object. It can have the following properties:
  * *noCommittish* — If true then committishes won't be included in generated URLs.
  * *noGitPlus* — If true then `git+` won't be prefixed on URLs.

## Methods

All of the methods take the same options as the `fromUrl` factory.  Options
provided to a method override those provided to the constructor.

* info.file(path, opts)

Given the path of a file relative to the repository, returns a URL for
directly fetching it from the githost.  If no committish was set then
`master` will be used as the default.

For example `hostedGitInfo.fromUrl(\"git@github.com:npm/hosted-git-info.git#v1.0.0\").file(\"package.json\")`
would return `https://raw.githubusercontent.com/npm/hosted-git-info/v1.0.0/package.json`

* info.shortcut(opts)

eg, `github:npm/hosted-git-info`

* info.browse(opts)

eg, `https://github.com/npm/hosted-git-info/tree/v1.2.0`

* info.bugs(opts)

eg, `https://github.com/npm/hosted-git-info/issues`

* info.docs(opts)

eg, `https://github.com/npm/hosted-git-info/tree/v1.2.0#readme`

* info.https(opts)

eg, `git+https://github.com/npm/hosted-git-info.git`

* info.sshurl(opts)

eg, `git+ssh://git@github.com/npm/hosted-git-info.git`

* info.ssh(opts)

eg, `git@github.com:npm/hosted-git-info.git`

* info.path(opts)

eg, `npm/hosted-git-info`

* info.tarball(opts)

eg, `https://github.com/npm/hosted-git-info/archive/v1.2.0.tar.gz`

* info.getDefaultRepresentation()

Returns the default output type. The default output type is based on the
string you passed in to be parsed

* info.toString(opts)

Uses the getDefaultRepresentation to call one of the other methods to get a URL for
this resource. As such `hostedGitInfo.fromUrl(url).toString()` will give
you a normalized version of the URL that still uses the same protocol.

Shortcuts will still be returned as shortcuts, but the special case github
form of `org/project` will be normalized to `github:org/project`.

SSH connect strings will be normalized into `git+ssh` URLs.

## Supported hosts

Currently this supports Github, Bitbucket and Gitlab. Pull requests for
additional hosts welcome.

";
        
        $__internal_4e847cf1c0542ad427d6a2019ab5a583040fc22ad15696661a0ef97a3e747a79->leave($__internal_4e847cf1c0542ad427d6a2019ab5a583040fc22ad15696661a0ef97a3e747a79_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hosted-git-info/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# hosted-git-info

This will let you identify and transform various git hosts URLs between
protocols.  It also can tell you what the URL is for the raw path for
particular file for direct access without git.

## Example

```javascript
var hostedGitInfo = require(\"hosted-git-info\")
var info = hostedGitInfo.fromUrl(\"git@github.com:npm/hosted-git-info.git\", opts)
/* info looks like:
{
  type: \"github\",
  domain: \"github.com\",
  user: \"npm\",
  project: \"hosted-git-info\"
}
*/
```

If the URL can't be matched with a git host, `null` will be returned.  We
can match git, ssh and https urls.  Additionally, we can match ssh connect
strings (`git@github.com:npm/hosted-git-info`) and shortcuts (eg,
`github:npm/hosted-git-info`).  Github specifically, is detected in the case
of a third, unprefixed, form: `npm/hosted-git-info`.

If it does match, the returned object has properties of:

* info.type -- The short name of the service
* info.domain -- The domain for git protocol use
* info.user -- The name of the user/org on the git host
* info.project -- The name of the project on the git host

## Version Contract

The major version will be bumped any time…

* The constructor stops accepting URLs that it previously accepted.
* A method is removed.
* A method can no longer accept the number and type of arguments it previously accepted.
* A method can return a different type than it currently returns.

Implications:

* I do not consider the specific format of the urls returned from, say
  `.https()` to be a part of the contract.  The contract is that it will
  return a string that can be used to fetch the repo via HTTPS.  But what
  that string looks like, specifically, can change.
* Dropping support for a hosted git provider would constitute a breaking
  change.

## Usage

### var info = hostedGitInfo.fromUrl(gitSpecifier[, options])

* *gitSpecifer* is a URL of a git repository or a SCP-style specifier of one.
* *options* is an optional object. It can have the following properties:
  * *noCommittish* — If true then committishes won't be included in generated URLs.
  * *noGitPlus* — If true then `git+` won't be prefixed on URLs.

## Methods

All of the methods take the same options as the `fromUrl` factory.  Options
provided to a method override those provided to the constructor.

* info.file(path, opts)

Given the path of a file relative to the repository, returns a URL for
directly fetching it from the githost.  If no committish was set then
`master` will be used as the default.

For example `hostedGitInfo.fromUrl(\"git@github.com:npm/hosted-git-info.git#v1.0.0\").file(\"package.json\")`
would return `https://raw.githubusercontent.com/npm/hosted-git-info/v1.0.0/package.json`

* info.shortcut(opts)

eg, `github:npm/hosted-git-info`

* info.browse(opts)

eg, `https://github.com/npm/hosted-git-info/tree/v1.2.0`

* info.bugs(opts)

eg, `https://github.com/npm/hosted-git-info/issues`

* info.docs(opts)

eg, `https://github.com/npm/hosted-git-info/tree/v1.2.0#readme`

* info.https(opts)

eg, `git+https://github.com/npm/hosted-git-info.git`

* info.sshurl(opts)

eg, `git+ssh://git@github.com/npm/hosted-git-info.git`

* info.ssh(opts)

eg, `git@github.com:npm/hosted-git-info.git`

* info.path(opts)

eg, `npm/hosted-git-info`

* info.tarball(opts)

eg, `https://github.com/npm/hosted-git-info/archive/v1.2.0.tar.gz`

* info.getDefaultRepresentation()

Returns the default output type. The default output type is based on the
string you passed in to be parsed

* info.toString(opts)

Uses the getDefaultRepresentation to call one of the other methods to get a URL for
this resource. As such `hostedGitInfo.fromUrl(url).toString()` will give
you a normalized version of the URL that still uses the same protocol.

Shortcuts will still be returned as shortcuts, but the special case github
form of `org/project` will be normalized to `github:org/project`.

SSH connect strings will be normalized into `git+ssh` URLs.

## Supported hosts

Currently this supports Github, Bitbucket and Gitlab. Pull requests for
additional hosts welcome.

", "node_modules/hosted-git-info/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hosted-git-info/README.md");
    }
}
