<?php

/* node_modules/fsevents/node_modules/aproba/README.md */
class __TwigTemplate_09e9fe5c2eb6f616d5c9c573cebdf9aa8bae182e54785a469d93715fe12c77e9 extends Twig_Template
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
        $__internal_a3cce1805ab09aca0ec331a92bd3589683c62cffa011f557f2955abcebf2eda2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3cce1805ab09aca0ec331a92bd3589683c62cffa011f557f2955abcebf2eda2->enter($__internal_a3cce1805ab09aca0ec331a92bd3589683c62cffa011f557f2955abcebf2eda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/aproba/README.md"));

        // line 1
        echo "aproba
======

A ridiculously light-weight function argument validator

```
var validate = require(\"aproba\")

function myfunc(a, b, c) {
  // `a` must be a string, `b` a number, `c` a function
  validate('SNF', arguments) // [a,b,c] is also valid
}

myfunc('test', 23, function () {}) // ok
myfunc(123, 23, function () {}) // type error
myfunc('test', 23) // missing arg error
myfunc('test', 23, function () {}, true) // too many args error

```

Valid types are:

type | description
---- | -----------
*    | matches any type
A    | Array.isArray OR an arguments object
S    | typeof == string
N    | typeof == number
F    | typeof == function
O    | typeof == object and not type A and not type E
B    | typeof == boolean
E    | instanceof Error OR null **(special: see below)**
Z    | == null

Validation failures throw one of three exception types, distinguished by a
`code` property of `EMISSINGARG`, `EINVALIDTYPE` or `ETOOMANYARGS`.

If you pass in an invalid type then it will throw with a code of
`EUNKNOWNTYPE`.

If an **error** argument is found and is not null then the remaining
arguments are optional.  That is, if you say `ESO` then that's like using a
non-magical `E` in: `E|ESO|ZSO`.

### But I have optional arguments?!

You can provide more than one signature by separating them with pipes `|`.
If any signature matches the arguments then they'll be considered valid.

So for example, say you wanted to write a signature for
`fs.createWriteStream`.  The docs for it describe it thusly:

```
fs.createWriteStream(path[, options])
```

This would be a signature of `SO|S`.  That is, a string and and object, or
just a string.

Now, if you read the full `fs` docs, you'll see that actually path can ALSO
be a buffer.  And options can be a string, that is:
```
path <String> | <Buffer>
options <String> | <Object>
```

To reproduce this you have to fully enumerate all of the possible
combinations and that implies a signature of `SO|SS|OO|OS|S|O`.  The
awkwardness is a feature: It reminds you of the complexity you're adding to
your API when you do this sort of thing.


### Why this exists

I wanted a very simple argument validator. It needed to do two things:

1. Be more concise and easier to use than assertions

2. Not encourage an infinite bikeshed of DSLs

This is why types are specified by a single character and there's no such
thing as an optional argument. 

This is not intended to validate user data. This is specifically about
asserting the interface of your functions.

If you need greater validation, I encourage you to write them by hand or
look elsewhere.

";
        
        $__internal_a3cce1805ab09aca0ec331a92bd3589683c62cffa011f557f2955abcebf2eda2->leave($__internal_a3cce1805ab09aca0ec331a92bd3589683c62cffa011f557f2955abcebf2eda2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/aproba/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("aproba
======

A ridiculously light-weight function argument validator

```
var validate = require(\"aproba\")

function myfunc(a, b, c) {
  // `a` must be a string, `b` a number, `c` a function
  validate('SNF', arguments) // [a,b,c] is also valid
}

myfunc('test', 23, function () {}) // ok
myfunc(123, 23, function () {}) // type error
myfunc('test', 23) // missing arg error
myfunc('test', 23, function () {}, true) // too many args error

```

Valid types are:

type | description
---- | -----------
*    | matches any type
A    | Array.isArray OR an arguments object
S    | typeof == string
N    | typeof == number
F    | typeof == function
O    | typeof == object and not type A and not type E
B    | typeof == boolean
E    | instanceof Error OR null **(special: see below)**
Z    | == null

Validation failures throw one of three exception types, distinguished by a
`code` property of `EMISSINGARG`, `EINVALIDTYPE` or `ETOOMANYARGS`.

If you pass in an invalid type then it will throw with a code of
`EUNKNOWNTYPE`.

If an **error** argument is found and is not null then the remaining
arguments are optional.  That is, if you say `ESO` then that's like using a
non-magical `E` in: `E|ESO|ZSO`.

### But I have optional arguments?!

You can provide more than one signature by separating them with pipes `|`.
If any signature matches the arguments then they'll be considered valid.

So for example, say you wanted to write a signature for
`fs.createWriteStream`.  The docs for it describe it thusly:

```
fs.createWriteStream(path[, options])
```

This would be a signature of `SO|S`.  That is, a string and and object, or
just a string.

Now, if you read the full `fs` docs, you'll see that actually path can ALSO
be a buffer.  And options can be a string, that is:
```
path <String> | <Buffer>
options <String> | <Object>
```

To reproduce this you have to fully enumerate all of the possible
combinations and that implies a signature of `SO|SS|OO|OS|S|O`.  The
awkwardness is a feature: It reminds you of the complexity you're adding to
your API when you do this sort of thing.


### Why this exists

I wanted a very simple argument validator. It needed to do two things:

1. Be more concise and easier to use than assertions

2. Not encourage an infinite bikeshed of DSLs

This is why types are specified by a single character and there's no such
thing as an optional argument. 

This is not intended to validate user data. This is specifically about
asserting the interface of your functions.

If you need greater validation, I encourage you to write them by hand or
look elsewhere.

", "node_modules/fsevents/node_modules/aproba/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/aproba/README.md");
    }
}
