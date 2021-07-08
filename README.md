# Aero storefront example Vue.js component

This module outlines the steps required to register custom Vue.js components into the storefront dynamic component system provided by the `aerocommerce/components` package.

## Twig usage

A custom component can be included in any code contained within the `{% component %}` Twig tag offered by the `aerocommerce/components` package:

```twig
{% component "product" with {count: 100} %}
    <div>
        <example-component :count="count" />
    </div>
{% endcomponent %}
```

To include in a Twig template file outside of the `{% component %}` tag, or on a page not utilizing the `{% component %}` tag:

```twig
{% vue %}
    <example-component count="100" />
{% endvue %}
```

To share data between multiple sibling components you can declare the data within the opening Twig tag:

```twig
{% vue with {count: 100} %}
    <div>
        <example-component :count="count" />
        <another-example-component v-model="count" />
    </div>
{% endvue %}
```

As with Vue.js templates, you should ensure there is only one root element within the Twig tag.

By default, the `{% vue %}` Twig tag renders the Vue template on the client-side.
To make use of server-side rendering, simply specify the `ssr` option at the end of the opening Twig tag:

```twig
{% vue ssr %}
    // ...
{% endvue %}

// or

{% vue with {count: 100} ssr %}
    // ...
{% endvue %}
```
