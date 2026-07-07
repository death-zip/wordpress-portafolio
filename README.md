# WordPress Portfolio Theme

A custom WordPress theme I built from scratch in plain PHP, without a page builder or a starter framework. I made it to actually understand how a WordPress theme works under the hood, not just how to install one.

**Live demo:** http://juanantonioportafolio.freepage.cc

## What it does

The theme registers a `proyecto` Custom Post Type so projects can be managed from the WordPress admin like any other content type, with their own archive and templates (`archive-proyecto.php`, `page-proyectos.php`). It also ships a small custom Gutenberg block (`block.js`), registered through the WordPress Block API so it shows up as a native block inside the editor instead of a shortcode. Navigation menus are wired up through `register_nav_menus`, so the primary menu is fully configurable from Appearance > Menus rather than hardcoded in the template.

The template structure follows the standard WordPress split: `header.php`, `footer.php`, `index.php` for the main loop, plus `functions.php` for theme setup, the custom post type, and the block registration.

## Stack

| Layer | Technology |
|---|---|
| Backend | PHP, WordPress theme APIs (CPTs, nav menus, Block API) |
| Frontend | HTML, CSS, vanilla JavaScript for the Gutenberg block |
| Hosting (demo) | Shared hosting running WordPress |

## Why it's simple on purpose

This isn't a plugin-heavy site or a page builder theme. It's a small, readable codebase where every file has one clear job, which was the point: understanding what WordPress actually expects from a theme (`functions.php` hooks, template hierarchy, the Block API) before reaching for tools that hide that layer.

## What I'd add next

- A `single-proyecto.php` template with more structured project fields (client, stack, links) instead of relying only on the post editor
- Basic sanitization and escaping review across the custom templates
- A short screencast of the Gutenberg block in the editor, since a static screenshot doesn't show what it actually does

## Running it locally

```bash
# from your wp-content/themes/ folder
git clone https://github.com/death-zip/wordpress-portafolio.git
```

Then activate it from Appearance > Themes, create a page using the projects template, and add a menu under Appearance > Menus.

## Author

Juan Antonio Rivera Rodriguez
Villahermosa, Tabasco, Mexico
riverarodriguezjuanantonio@gmail.com
