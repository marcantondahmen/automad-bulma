# Automad Bulma Theme

A responsive multi-purpose theme for the [Automad](https://automad.org) based on the [Bulma](https://bulma.io) CSS framework.   
     
Check out the demo page [here](https://bulma.dev.automad.org).

![](https://bitbucket.org/marcantondahmen/automad-bulma/raw/default/images/project_layout_2.png)

## Options

There are multiple variables used by this theme for configuration. Find below a list of available options to control the look and feel of your site.

### Custom Bulma CSS

Since the theme is fully based on the Bulma framework, it is possible to use a customized version of Bulma. You can use the `bulmaCss` variable to provide an alternative URL for the `.css` file. A custom `.css` file can simply be uploaded in the shared data section of the dashboard. You can find more information about customizing Bulma [here](https://bulma.io/documentation/customize/).

### Styling Hero Content

You can add text or HTML markup to a hero banner using the `textHero` variable. Hero banner content can be styled using Bulma elements and modifiers. Take a look at the [docs](https://bulma.io/documentation/modifiers/) to find out more about working with Bulma.

### Hero And Navbar Settings

There are several checkboxes to control the look of the hero section and the navbar. 

- `logo`: The path to your logo. By default the `/shared/logo*.*` pattern is used.
- `logoHeight`: Define the height of your logo.
- `checkboxHeroFullHeight`: Set the height of the hero section to 100% of the viewport.
- `checkboxNavbarOpaque`: Make the navbar background opaque.
- `checkboxNavbarDark`: Apply a dark theme to the navbar to be used with dark hero images.
- `checkboxNavbarRight`: Place menu items on the right of the navbar.
- `checkboxHideSecondLevelNavbar`: Hide the second level (dropdowns) of the navbar menu.

### Sorting Pagelists

By default, pagelists are sorted by date descending. You can change that behavior by adding a value for the `sortPages` variable on a blog or portfolio page. To define the sorting of pages in the list, you have to provide a combination of the variable to sort the pages by and a sorting order like `date desc` or `title asc`. 

### Template Filters

You can use a regex for the `templateFilter` variable to filter a pagelist by the templates of the pages.

### Open Graph Images

Title and description are automatically used for open graph tags to be used as preview when sharing a page. You can also define a pattern to be used for the preview image used as the value for the `og:image` property. A good pattern would be `*.jpg, *.png, /shared/og.png`. With this pattern, the first JPG or PNG image would be used as preview image while using a file called `og.png` in the shared files section as a fallback for pages without any image.

---

© 2018-2019 [Marc Anton Dahmen](https://marcdahmen.de)   
Released under the MIT license