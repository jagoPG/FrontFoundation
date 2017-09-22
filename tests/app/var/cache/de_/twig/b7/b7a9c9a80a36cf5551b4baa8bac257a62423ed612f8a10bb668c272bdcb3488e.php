<?php

/* node_modules/parsleyjs/bower_components/uwidget/README.md */
class __TwigTemplate_e26fb2b1e693e01cc3c899ee319af783196a7f1230798f9d80e39568d13d9f9e extends Twig_Template
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
        $__internal_3d66fdf6c743e8bfb6b074c67e0dd1b6c4bdb3745541475df6c0e13bf11e43f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d66fdf6c743e8bfb6b074c67e0dd1b6c4bdb3745541475df6c0e13bf11e43f4->enter($__internal_3d66fdf6c743e8bfb6b074c67e0dd1b6c4bdb3745541475df6c0e13bf11e43f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/bower_components/uwidget/README.md"));

        // line 1
        echo "# Universal Widget

The aim of this very simple widget is to easily display a API-distant collection
of objects, with simple sorting and filters option.

# Requirements

jQuery >= 1.6

# Installation

```html
<html>
<head>
<link href=\"gh-issues-widget.css\" rel=\"stylesheet\">
</head>
<body>
  <div class=\"uwidget\" data-width=\"500px\" data-height=\"300px\"></div>
  <script type=\"text/javascript\">
    \$(document).ready(function () {
      \$('.uwidget').UWidget({
        url: 'https://api.url.ext',
        handler: function (data) {
          // special remote data treatment needed ?
          return data;
        },
        template: 'item_tmpl',
        sort: {
          enabled: true,
          name: 'sort',
          values: ['created', 'updated', 'comments'],
          labels: ['Creation date', 'Update date', 'Comments']
        },
        direction: {
          enabled: true,
          name: 'direction',
          values: ['desc', 'asc'],
          labels: ['Descending', 'Ascending']
        },
        filters: {
          enabled: true,
          name: 'labels',
          values: ['bug', 'enhancement'],
          labels: ['Bug', 'Enhancement']
        }
      });
    });
  </script>
  <script type=\"text/html\" id=\"item_tmpl\">
    <li>
      <span class=\"gh-issue-comments\">
        <%= comments %> <%= comments > 1 ? \"comments\" : \"commment\" %>
      </span>
      <span class=\"gh-issue-title\">
        <a href=\"<%= html_url %>\"><%= title %></a>
      </span>
    </li>
  </script>
</body>
</html>
```

## Configuration

You can pass some default parameters to the widget div:

  - `data-sort`: default sorting method
  - `data-direction`: default sorting direction
  - `data-filters=\"filter1, filter2, ..\"`: default active filters
  - `data-remote-options`: a valid JSON options object that allows you some
  control over the `\$.ajax()` call made by the widget

## License

Released under the MIT License. See the bundled `LICENSE` file for
details.
";
        
        $__internal_3d66fdf6c743e8bfb6b074c67e0dd1b6c4bdb3745541475df6c0e13bf11e43f4->leave($__internal_3d66fdf6c743e8bfb6b074c67e0dd1b6c4bdb3745541475df6c0e13bf11e43f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/bower_components/uwidget/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Universal Widget

The aim of this very simple widget is to easily display a API-distant collection
of objects, with simple sorting and filters option.

# Requirements

jQuery >= 1.6

# Installation

```html
<html>
<head>
<link href=\"gh-issues-widget.css\" rel=\"stylesheet\">
</head>
<body>
  <div class=\"uwidget\" data-width=\"500px\" data-height=\"300px\"></div>
  <script type=\"text/javascript\">
    \$(document).ready(function () {
      \$('.uwidget').UWidget({
        url: 'https://api.url.ext',
        handler: function (data) {
          // special remote data treatment needed ?
          return data;
        },
        template: 'item_tmpl',
        sort: {
          enabled: true,
          name: 'sort',
          values: ['created', 'updated', 'comments'],
          labels: ['Creation date', 'Update date', 'Comments']
        },
        direction: {
          enabled: true,
          name: 'direction',
          values: ['desc', 'asc'],
          labels: ['Descending', 'Ascending']
        },
        filters: {
          enabled: true,
          name: 'labels',
          values: ['bug', 'enhancement'],
          labels: ['Bug', 'Enhancement']
        }
      });
    });
  </script>
  <script type=\"text/html\" id=\"item_tmpl\">
    <li>
      <span class=\"gh-issue-comments\">
        <%= comments %> <%= comments > 1 ? \"comments\" : \"commment\" %>
      </span>
      <span class=\"gh-issue-title\">
        <a href=\"<%= html_url %>\"><%= title %></a>
      </span>
    </li>
  </script>
</body>
</html>
```

## Configuration

You can pass some default parameters to the widget div:

  - `data-sort`: default sorting method
  - `data-direction`: default sorting direction
  - `data-filters=\"filter1, filter2, ..\"`: default active filters
  - `data-remote-options`: a valid JSON options object that allows you some
  control over the `\$.ajax()` call made by the widget

## License

Released under the MIT License. See the bundled `LICENSE` file for
details.
", "node_modules/parsleyjs/bower_components/uwidget/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/bower_components/uwidget/README.md");
    }
}
