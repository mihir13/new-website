# new-website

My first personal portfolio website, built in 2020 during my final year at Loughborough University, after a placement year in web development. It's a single static page: an About section, a resume, a portfolio of six placement-year projects and a contact form.

It has since been replaced by [mihirthakker.com](https://mihirthakker.com) (source: [portfolio-website](https://github.com/mihir13/portfolio-website)). This repo is kept as an archive.

## What's on the page

- **About:** a short introduction
- **Resume:** education, placement experience and key skills (programming languages and app development)
- **Portfolio:** six project cards from the placement year: basic web development, graphic design and UI, a multilingual website, a tourism booking cart, a holiday-rental site built on WordPress, and a CMS for staff
- **Contact:** a form that sends messages through [Formspree](https://formspree.io)

## Tech

- Plain HTML, CSS and JavaScript on top of the [Start Bootstrap "Agency"](https://startbootstrap.com/theme/agency) theme (v6.0.2, MIT licence)
- Bootstrap 4, jQuery and Font Awesome, loaded from CDNs
- Hosted on GitHub Pages: https://mihir13.github.io/new-website/

## Running it

There is no build step. Open `index.html` in a browser, or serve the folder:

```bash
python3 -m http.server 8000
```

## Project structure

```
index.html     the whole page
css/           theme styles
js/            theme scripts (smooth scrolling, navbar behaviour)
img/           photos, portfolio images and logos
mail/          the theme's original PHP mailer and form validation
```

## Known leftovers

- The `mail/contact_me.php` mailer comes from the original theme. It can't run on GitHub Pages and isn't used: the live form posts to Formspree.
- The portfolio cards are still headed "Project 1" to "Project 6" from the template.

## Status

Archived. It isn't maintained.
