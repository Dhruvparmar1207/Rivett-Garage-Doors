You are working directly inside my local project/codebase.

I have:

* A **reference/referral website** containing the content I want to use.
* A **new website** in the current local project, with its own existing design, layout, components, styling, and structure.

Your job is to take the **content from the reference website** and implement/update it directly inside the **new website's local codebase**.

## CORE RULE

The reference website is used for **CONTENT ONLY**.

The new website's existing project is the source of truth for:

- Layout
- Design
- UI
- Components
- Styling
- Typography
- Colors
- Spacing
- Responsive behavior
- Navigation
- Header
- Footer
- Page structure
- Technical architecture

**DO NOT copy the reference website's layout or design.**

---

# PAGE LAYOUT TEMPLATE REQUIREMENT

When creating or updating residential garage door pages, use:

`\rivett\commercial-overhead-doors.php`

as the **MASTER PAGE LAYOUT/TEMPLATE**.

The new page must follow the layout and structure of `commercial-overhead-doors.php`, including where applicable:

- Overall page structure
- Section structure
- PHP structure
- Existing components
- Header and footer
- CSS/classes
- Typography
- Spacing
- Buttons and CTA patterns
- Image/content containers
- Responsive behavior

**Do not copy the page-specific content from `commercial-overhead-doors.php` unless specifically requested.**

Use `commercial-overhead-doors.php` for the **NEW WEBSITE'S LAYOUT**.

Use the reference URL for the **CONTENT**.

Therefore:

**commercial-overhead-doors.php = PAGE LAYOUT/TEMPLATE**

**Reference website = CONTENT SOURCE**

**Local destination folder = FINAL IMPLEMENTATION**

If the existing `commercial-overhead-doors.php` layout can be reused directly, reuse its structure/components rather than creating a completely different layout.

If you need to create a new component, it must visually and structurally match the existing `commercial-overhead-doors.php` page.

---

Instead, understand the content from the reference website and fit that content naturally into the new website's existing layout and design.

---

## WHEN I GIVE YOU URLS

I will normally provide only URLs after this instruction.

For example:

Reference website:
https://www.rwdoors.com/

New site folder website:
http://localhost/rivett/


When I provide the URLs:

1. Open and inspect the reference website.
2. Inspect all relevant pages and sections of the reference website.
3. Identify the useful/required content.
4. Inspect the current local new-site project thoroughly.
5. Understand its existing page structure, components, routing, styling, and design system.
6. Determine where the reference content belongs in the new site's existing structure.
7. Update/create the required files directly in the local project.
8. Make the new pages/content look native to the new website.
9. Preserve the new website's existing design language.
10. Run/build/check the project where possible.
11. Fix any errors caused by your changes.
12. Do not merely give me code in the chat — **actually modify the files in the local project.**

---

# CONTENT RULES

The reference website provides the source content.

Keep the reference content as close to the original as possible.

Do NOT:

* Rewrite content unnecessarily
* Change the meaning
* Remove important sections
* Invent information
* Add unsupported claims
* Copy the reference site's visual design
* Copy its page layout
* Copy its CSS
* Copy its components
* Copy its HTML structure when it conflicts with the new site's architecture

The main allowed content modification is replacing the reference site's brand/business name with the new site's brand/business name where appropriate.

If a sentence must be adjusted because it refers specifically to the old website, old domain, old brand, old navigation, or old service structure, adapt only that part so it correctly refers to the new website.

---

# NEW SITE DESIGN RULE

The new site's existing design always has priority.

For example, if the reference website has:

* Hero section
* 3-column cards
* Large CTA
* Testimonials
* FAQ
* Feature sections

but the new website uses a completely different layout, **do not recreate the reference layout**.

Instead:

Reference content:
→ understand the information

New website:
→ determine the best existing component/section/layout for that information

Then implement the content using the new site's components and design system.

If an appropriate component does not exist, create a new component that visually matches the new website.

---

# LOCAL CODEBASE RULES

Before editing anything:

1. Inspect the project structure.
2. Identify the framework.
3. Identify the routing system.
4. Identify reusable components.
5. Identify the styling system.
6. Identify existing page templates.
7. Identify the relevant page(s) that should contain the new content.
8. Reuse existing components whenever possible.

Do not unnecessarily rewrite the project architecture.

Do not replace working components when they can be reused.

Do not introduce a new framework or styling system unless absolutely necessary.

Keep the implementation clean, maintainable, and consistent with the existing codebase.

---

# CONTENT MAPPING

Map reference-site content into the new site intelligently.

For example:

Reference:
Hero content
→ New site's existing hero component

Reference:
Features
→ New site's existing feature/card components

Reference:
FAQ
→ New site's existing FAQ component

Reference:
About content
→ New site's existing About section/page

Reference:
CTA
→ New site's existing CTA component

Reference:
Footer information
→ New site's existing footer structure

If the new site does not have an equivalent section, create one that matches the new site's design.

---

# BRAND REPLACEMENT

Detect the reference site's brand name automatically.

Detect the new site's brand name automatically from:

* Existing project configuration
* Existing UI
* Logo
* Metadata
* Domain
* Existing content
* package/config files where appropriate

Replace the old brand with the new brand where the content requires it.

Do not accidentally leave references to the old brand/domain in the new site's user-facing content.

---

# IMAGES AND ASSETS

If the reference website uses images or other assets that are essential to understanding the content:

* Identify what the asset represents.
* Check whether an equivalent asset already exists in the new project.
* Prefer existing new-site assets where appropriate.
* If a new asset is required and can legally/technically be used, add it appropriately.
* Do not copy the reference site's entire visual identity.

Make sure images are responsive and fit the new site's existing design.

---

# SEO

Preserve important SEO information from the reference content where appropriate, including:

* Page titles
* Meta descriptions
* Headings
* Relevant keywords
* Structured content

However, adapt SEO information so it correctly represents the new website and brand.

Do not copy the old site's domain, brand, canonical URL, or other site-specific information into the new site.

---

# RESPONSIVE DESIGN

All changes must work with the new website's existing responsive behavior.

Check:

* Desktop
* Tablet
* Mobile

Do not create a layout that only works at one screen size.

---

# QUALITY CHECK

After implementing the content:

1. Check for broken imports.
2. Check for broken routes.
3. Check for syntax/type errors.
4. Check for missing assets.
5. Check for old-brand references.
6. Check for incorrect old-domain references.
7. Check that the content fits naturally into the new layout.
8. Check responsive behavior.
9. Build/test the project if available.
10. Fix any issues you find.

---

# IMPORTANT BEHAVIOR

Do not stop after analyzing the websites.

Do not just tell me what files should be changed.

**Make the changes directly in the local project.**

Do not ask for permission before making normal implementation changes.

Only ask me a question if you encounter a genuine ambiguity that cannot reasonably be resolved from the project and websites.

Otherwise, make the best implementation decision yourself.

---

# FUTURE INPUT

After this master instruction, I will normally send only URLs.

Example:

https://reference-site.com
https://new-site.com

Treat the first URL as the reference site and the second URL as the new site unless I explicitly say otherwise.

Your task is to inspect the reference site's content and then directly implement/update that content inside the local new-site project while preserving the new site's existing layout and design.

**Reference site = content source.**

**Local new site = design, layout, codebase, and implementation source.**

Do not copy the reference site's layout.

IMPORTANT: This project is the destination/new website. Never modify the reference website. The reference website is used only as a content source. When I provide URLs, inspect the reference URL for content and then directly modify the files in this project to add/update that content using this project's existing layout, components, styling, and architecture.
