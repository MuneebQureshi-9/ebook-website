# Plan: eBook Publishing Agency Website - PHP + Laravel + Neo Brutalism

## TL;DR
Build a professional eBook publishing agency website using **PHP + Laravel** with a **Neo Brutalism aesthetic** adapted to the color scheme shown in the guides (dark navy blue + vibrant purple/magenta accent). Design will feature bold typography, geometric shapes, sharp edges, and high contrast for visual impact while maintaining business professionalism. The website will serve 11 pages targeting authors seeking publishing, marketing, writing, and audiobook services.

---

## 🚀 QUICK START FOR AGENTS

**GOLDEN RULE**: All content comes from the **Content Framework & Mapping** section (see below). Use EXACT client copy from PDF for all pages. Do NOT modify or rephrase client testimonials, service descriptions, or CTAs.

### What to Do Right Now:

1. **First**: Read the entire "Content Framework & Mapping" section below to understand all content
2. **Then**: Read "Content-to-Code Mapping" to see exactly where content goes in Blade files
3. **Start Phase 1**: Use `project-setup-info-local` skill to initialize Laravel with folder structure
4. **Execute Phases**: Follow the 7 phases in order, using skills as specified
5. **Verify**: Use `web-design-guidelines` skill after every UI phase

### Content Sources (In Priority Order):

1. **PRIMARY**: Content Framework & Mapping section (client PDF content)
2. **SECONDARY**: Content-to-Code Mapping (shows where things go)
3. **TERTIARY**: Database seeding templates (for structure)
4. **GENERATE**: Only generate content that's not in PDF (follow style guide)

### Skills You MUST Use:

| Phase | Skill | Action |
|-------|-------|--------|
| 1-2 | `project-setup-info-local` | Initialize + setup |
| 2-3 | `ui-ux-pro-max` | Design components + homepage |
| 2-3 | `web-design-guidelines` | Audit accessibility ✅ REQUIRED |
| 4-6 | `keyword-research` | SEO keywords for services |
| 7 | `web-design-guidelines` | Final WCAG AA audit ✅ REQUIRED |

### Critical Checkpoints:

✅ Phase 1: Verify /home, /services, /contact routes work  
✅ Phase 2: Run web-design-guidelines audit before moving to Phase 3  
✅ Phase 3: Verify homepage loads all sections + Lighthouse >85  
✅ Phase 4: All service pages use exact copy from framework  
✅ Phase 5: Form submission saves to database + emails work  
✅ Phase 6: Meta tags visible in page source (view-source in browser)  
✅ Phase 7: Final Lighthouse score ≥85 + WCAG AA compliance verified  

---

## Design System & Color Palette

**Primary Color Palette:**
- **Primary Navy**: #0F1928 (deeper than current #212529 for stronger Neo Brutalism feel)
- **Accent Purple/Magenta**: #D946A6 (from color guide images)
- **Secondary Navy**: #1E3A5F (for subtle variations)
- **White**: #FFFFFF (clean backgrounds)
- **Off-white/Cream**: #F8F7F3 (secondary backgrounds)
- **Dark Text**: #0F1928 (same as primary)
- **Border/Divider**: #2D3E52 (muted secondary navy)

**Neo Brutalism Applied:**
- Sharp, 90-degree corners on cards and sections (minimal border-radius: 0-4px max)
- Bold, oversized typography with strong hierarchy
- High contrast between elements
- Geometric layouts with visible grid/structure
- Raw, industrial borders (1-2px solid) on cards
- Stark color blocks - no gradients

**Typography:**
- **Heading Font**: Inter Bold or Poppins Bold (700-900 weight) - modern, geometric, strong
- **Accent/Display**: Space Mono or JetBrains Mono (monospace for headlines) - raw, technical feel
- **Body Font**: Inter Regular or Poppins Regular (400-500 weight) - clean, readable
- **Font Sizes**: 16px base, 12px min, scale up to 48px+ for hero headings

**Spacing & Layout:**
- Base grid: 8px
- Card padding: 24px-32px
- Section spacing: 64px-80px (generous vertical rhythm)
- Container max-width: 1200px

---

## Pages & Structure (11 Pages)

1. **Homepage** - Hero + Value Props + 5-Step Journey + Testimonials + Services Overview + FAQ
2. **Services**
   - Book Publishing Service
   - Book Marketing Service
   - Book Writing/Ghostwriting Service
   - Audiobook Services
   - Book Editing Service
   - Author Website Development
   - Book Printing Service
   - Podcast Services
3. **Contact Page** - Form + Free Consultation CTA
4. **About Page** (implied - add if needed)
5. **Blog/Resources** (implied - add if needed)
6. **Footer** - Links + CTA

**Navigation Structure:**
```
Home | Services ▼ | About | Contact | Blog
      ├─ Book Publishing
      ├─ Book Marketing
      ├─ Book Writing
      ├─ Audiobook Services
      ├─ Book Editing
      ├─ Author Website
      ├─ Book Printing
      └─ Podcast Services
```

---

## Tech Stack

- **Backend**: PHP 8.1+ with Laravel 11
- **Frontend**: Blade templates with Alpine.js (for interactivity)
- **Styling**: Tailwind CSS with custom Neo Brutalism overrides
- **Database**: MySQL/PostgreSQL for leads, testimonials, FAQs
- **Forms**: Laravel Validation + Livewire (for dynamic forms) or Vue.js
- **Deployment**: Laravel Forge/Envoyer or simple shared hosting with PHP
- **SEO**: Laravel SEO package + Meta tags per page

---

## Folder Structure

```
ebook-website/
├── app/
│   ├── Http/Controllers/
│   │   ├── PageController.php
│   │   ├── ServiceController.php
│   │   ├── ContactController.php
│   │   └── LeadController.php
│   ├── Models/
│   │   ├── Lead.php
│   │   ├── Testimonial.php
│   │   └── Service.php
│   └── Mail/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   ├── app.blade.php (main layout)
│   │   │   └── components/ (reusable components)
│   │   │       ├── navbar.blade.php
│   │   │       ├── footer.blade.php
│   │   │       ├── hero-section.blade.php
│   │   │       ├── cta-button.blade.php
│   │   │       ├── service-card.blade.php
│   │   │       ├── testimonial-card.blade.php
│   │   │       ├── faq-accordion.blade.php
│   │   │       └── contact-form.blade.php
│   │   ├── pages/
│   │   │   ├── home.blade.php
│   │   │   ├── services/
│   │   │   │   ├── publishing.blade.php
│   │   │   │   ├── marketing.blade.php
│   │   │   │   ├── writing.blade.php
│   │   │   │   ├── audiobook.blade.php
│   │   │   │   ├── editing.blade.php
│   │   │   │   ├── author-website.blade.php
│   │   │   │   ├── printing.blade.php
│   │   │   │   └── podcast.blade.php
│   │   │   ├── contact.blade.php
│   │   │   ├── about.blade.php
│   │   │   └── blog.blade.php
│   ├── css/
│   │   ├── app.css (Tailwind + custom Neo Brutalism)
│   │   └── brutalism.css (custom border, spacing, raw styles)
│   └── js/
│       ├── app.js
│       └── components/ (Alpine.js components)
├── routes/
│   ├── web.php
│   └── api.php
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── images/
│   ├── icons/
│   └── fonts/
├── config/
│   └── services.php (site config)
└── .env.example (with placeholders)
```

---

## Skills Integration & Automation

**Skill Mapping for Each Phase:**

This project leverages the following AI skills to accelerate development and ensure quality:

### 🎨 **UI/UX Design Phase** → `ui-ux-pro-max`
**Applies to**: Phase 2 (Component Library) & Phase 3 (Homepage) & Phase 7 (Polish & Optimization)

**Use Cases**:
- Generate Neo Brutalism design system with sharp corners, geometric layouts, bold typography
- Validate color palette contrast ratios (Navy #0F1928 + Purple #D946A6 on white backgrounds)
- Font pairing recommendations: Poppins Bold for headings + Inter Regular for body text
- Review responsive design (375px mobile, 768px tablet, 1200px desktop breakpoints)
- Create reusable component styles (cards, buttons, testimonial cards, CTA sections)
- Accessibility audit: WCAG 2.2 AA compliance for color contrast, button sizes, focus states

**Commands to use**:
```
"Generate Neo Brutalism design system for eBook agency website"
"Review UI code for accessibility and design compliance"
"Create responsive component library using Tailwind CSS"
```

---

### ✅ **Web Design Guidelines & Accessibility** → `web-design-guidelines`
**Applies to**: Phase 2 (Component validation) & Phase 7 (Final audit)

**Use Cases**:
- Audit component code against Web Interface Guidelines
- Verify keyboard navigation (Tab through all interactive elements)
- Check color contrast ratios for WCAG AA/AAA compliance
- Validate form accessibility (labels, error messages, focus indicators)
- Review responsive design implementation
- Ensure proper heading hierarchy (H1, H2, H3 semantic structure)

**Commands to use**:
```
"Review UI code for Web Interface Guidelines compliance"
"Audit accessibility of contact form and CTA buttons"
"Check Lighthouse scores for accessibility and performance"
```

---

### 🚀 **Project Setup** → `project-setup-info-local`
**Applies to**: Phase 1 (Foundation & Setup)

**Use Cases**:
- Initialize Laravel 11 project with full folder structure
- Generate folder hierarchy matching the plan
- Set up Tailwind CSS configuration with custom Neo Brutalism overrides
- Create initial Blade layout templates
- Configure routing structure (web.php)
- Set up database schema (migrations for Lead, Testimonial, Service models)

**Commands to use**:
```
"Set up Laravel 11 eBook website with full project structure"
"Create folder hierarchy and initial Blade templates"
"Configure Tailwind CSS with Neo Brutalism design system"
```

---

### 📊 **SEO & Keyword Research** → `keyword-research`
**Applies to**: Phase 4-5 (Blog/Content strategy) & Phase 6 (SEO implementation)

**Use Cases**:
- Research high-value keywords for eBook publishing services
- Identify search volume and keyword difficulty for target topics:
  - "Book publishing services"
  - "Ghost writing services"
  - "Book marketing agency"
  - "Self-publishing guide"
  - "Audiobook production"
- Create topic clusters for blog content
- Identify long-tail keywords for each service page
- Determine content intent (informational vs transactional)

**Commands to use**:
```
"Research SEO keywords for eBook publishing agency blog"
"Find topic clusters and keyword opportunities for book services"
"Analyze keyword difficulty for publishing-related terms"
```

---

## 📄 Content Framework & Mapping (From Client PDF)

**CRITICAL**: All content in this section comes directly from the client-provided website content PDF. This is the authoritative source for copy, messaging, and structure.

### Homepage Content Structure

#### Hero Section
```
Headline: "Publish Your Book. Get It Seen."
Subheading: "Helping authors Write, Publish, Market and Scale their Books 
Without Wasting Time or Money, From Idea To Income."
CTA Buttons: 
- Primary: "Get a free strategy call"
- Secondary: "Request a quote"
```

#### Value Proposition Section
```
Title: "Stop Guessing Your Way Through Publishing"
Intro: "We give you a clear, done-for-you path to:"
- Launch your book Like a pro
- Reach the right audience
- Turn your book into a long-term asset
```

#### 5-Step Publishing Journey Section
```
Title: "Your Publishing Journey Starts Here"

Step 1: Book Strategy Call (Free)
Description: "We understand your idea, goals, and target audience."

Step 2: Custom Execution Plan
Description: "A clear roadmap for writing, publishing, and marketing."

Step 3: Content Creation & Production
Description: "We handle writing, editing, design, and formatting."

Step 4: Publishing & Distribution
Description: "Your book goes live on major platforms."

Step 5: Growth & Promotion
Description: "We help you gain visibility, traction, and sales."

CTA Button: "Get a free strategy call"
```

#### Testimonials Section
```
Title: "What our Customer say"

Testimonial 1:
Quote: "I had no idea where to start. They guided me step by step and got my book 
published quickly. It actually started getting visibility."
Author: James Carter

Testimonial 2:
Quote: "This wasn't just publishing, they helped position my book as a business asset. 
I've already generated leads."
Author: Emma Richardson

Testimonial 3:
Quote: "My book wasn't selling before. Their marketing strategy improved visibility 
and conversions."
Author: Daniel Brooks

Testimonial 4:
Quote: "They helped me expand into audiobooks and podcasting. It opened a new audience."
Author: Olivia Bennett
```

#### Services Overview Section
```
Title: [Generate matching headline]

Services Grid (3 columns):
1. Book Publishing
2. Book Marketing
3. Audiobook Production
4. Book Illustration & Design
5. Book Editing
6. Book Writing
7. Author Website Development
8. Book Printing
9. Podcast Production

[Note: Use actual service names from PDF]
```

#### FAQ Accordion Section
```
Title: "FREQUENTLY ASKED QUESTIONS"

Q1: How do I publish a book if I have no experience?
A1: "You don't need prior experience. We guide you through the entire process from 
idea validation to publishing and marketing, so you don't feel lost at any stage."

Q2: How much does it cost to publish a book?
A2: "Costs vary depending on services like writing, editing, and marketing. We provide 
a customized plan based on your goals, so you only pay for what you actually need."

Q3: Can you help if I only have a rough idea and not a manuscript?
A3: "Yes. Our ghostwriting service helps turn your idea into a professionally written 
book ready for publishing."

Q4: Why isn't my self-published book getting sales?
A4: "Most books fail due to poor positioning, weak visibility, or lack of marketing. 
We fix this by planning targeted strategies, platform optimization, and 
audience-focused Marketing."

Q5: How long does it take to publish and launch a book?
A5: "It depends on the project, but most books are completed and launched within a 
few weeks to a few months."

Q6: Do I need an author website to succeed?
A6: "If you want long-term success and credibility, yes. An author website helps 
you build authority, collect leads, and promote your work effectively."

Q7: Can you convert my book into an audiobook?
A7: "Yes. We provide full audiobook production including narration, editing, and 
distribution setup."

Q8: What makes your service different from freelancers or platforms?
A8: "We don't just deliver tasks, we provide a complete strategy, execution, and growth 
system focused on real results, not just publishing."

CTA Button at end: "Get a free consultation"
```

---

### SERVICE PAGES CONTENT

#### Book Publishing Service Page
```
Title: "Publish Your Book Professionally Without Stress"
Subtitle: "Publishing a book is not just uploading files, it's about making your book 
market-ready, visible to your audience."

Description: "We ensure your book is properly formatted, published, and distributed 
across major platforms."

WHAT YOU GET:
• Amazon Kindle Publishing
• Paperback & Print Publishing
• ISBN Setup
• Professional Formatting
• Meta data Optimization for Visibility
• Global Distribution Support

WHY AUTHORS CHOOSE US:
• No technical confusion
• Professional publishing standards
• Faster launch process
• Optimized for sales visibility

CTA Button: "Publish My Book"
```

#### Book Marketing Service Page
```
Title: "Book Marketing"
Headline: "If Your Book Isn't Visible, It Won't Sell"
Subtitle: "Most books fail not because of quality, but because of poor marketing."
Description: "We help your book reach the right readers using data-driven marketing strategies."

OUR MARKETING SERVICES INCLUDE:
• Amazon SEO Optimization
• Book Listing Enhancement
• Social Media Promotion
• Paid Advertising Campaigns
• Audience Targeting Strategy
• Author Branding Support

WHAT YOU GET:
• Increased visibility
• Higher engagement
• Better sales potential
• Strong author presence

CTA Buttons: "Increase My Book Sales" | "Get a Marketing Strategy"
```

#### Book Writing (Ghostwriting) Service Page
```
Title: "Book Writing"
Headline: "Turn Your Idea Into a Professionally Written Book"
Subtitle: "You don't need to write a single word, we do it for you."
Description: "Our professional writers turn your ideas into structured, engaging, 
publish-ready books."

WHAT'S INCLUDED:
• Full Book Writing
• Research & Structuring
• Editing & Refinement
• Industry-Standard Formatting
• Publishing Readiness

CTA Buttons: "Request a Quote" | "Consult with Expert"
```

#### Audiobook Services Page
```
Title: "Audiobook Services"
Headline: "Turn Your Book Into a Powerful Audio Experience"
Subtitle: "Audiobooks help you reach readers who prefer listening over reading."
Description: "We create high-quality, professionally narrated audiobooks."

WHAT WE OFFER:
• Professional Voice Narration
• Audio Editing & Mastering
• Audiobook Formatting
• Distribution Setup

CTA Buttons: "Create My Audiobook" | "Expand My Audience"

Secondary Section:
Title: "Polish Your Manuscript to Perfection"
Description: "We refine your book so it reads clearly, professionally, and engagingly."

EDITING INCLUDES:
• Grammar Correction
• Structure Improvement
• Flow Enhancement
• Proofreading

CTA Button: "Request a quote"
```

#### Author Website Development Service Page
```
Title: "Author Website Development"
Headline: "Build Your Personal Author Brand Online"
Subtitle: "An author website builds credibility and helps you connect with readers globally."

FEATURES:
• Custom Author Website
• SEO Optimization
• Mobile Responsive Design
• Lead Capture Forms

CTA Button: "Request a Quote"
```

#### Podcast Services Page
```
Title: "Podcast Services"
Headline: "Expand Your Reach Beyond Books"
Subtitle: "Turn your book or ideas into engaging podcast content."

SERVICES INCLUDE:
• Podcast Setup
• Audio Editing
• Publishing Support
• Episode Structuring

CTA Buttons: "Launch My Podcast" | "Request a quote" | "Consult an Expert"
```

---

### CONTACT PAGE CONTENT

```
Title: "Contact Page"
Headline: "Let's Bring Your Book to Life"
Description: "Tell us about your project, and we'll give you a clear, actionable plan 
to write, publish, and grow your book."

FORM FIELDS:
• Full Name
• Email Address
• Phone Number
• Message or share you Idea

CTA Button: "Book a Free Consultation"
```

---

### FOOTER CONTENT

```
About Section:
"We help authors to turn ideas into published and profitable books with complete 
end-to-end solutions."

Services List:
• Book Publishing
• Book Marketing
• Audiobook Production
• Book Illustration
• Book Editing
• Book Writing
• Author Website Development
• Book Printing
• Podcast Production

Quick Links:
• Home
• About
• Blog
• Contact
• FAQs

Contact Info:
Email: support@yourbrand.com
Phone: +1 XXX XXX XXXX
Locations: London, UK | New York, USA

Legal Links:
• Terms & Conditions
• Privacy Policy
• Refund Policy

Final CTA: "Book free Strategy Call"
```

---

### Content Integration Notes

**For Agent Implementation:**
- Use exact copy from this framework for all primary pages
- Maintain the tone: Professional, benefit-focused, authority-building
- All CTAs should link to contact form or booking page
- Testimonials should display with client name and avatar placeholder
- All service descriptions should emphasize "done-for-you" positioning
- FAQ answers should be comprehensive but scannable
- Use the exact terminology: "strategy call", "book free consultation", "request quote"

**Content That Needs Generation (Match PDF Style):**
1. Additional testimonials (generate 2-3 more similar to existing 4)
2. Blog article titles and summaries (SEO-focused, authority topics)
3. About page: Company story, founder background, values
4. Service page meta descriptions
5. Email sequences for leads

**Style Guide for Generated Content:**
- Professional but conversational tone
- Focus on author pain points and solutions
- Emphasize results and outcomes (not just features)
- Use power words: "professional", "clarity", "visibility", "growth", "strategic"
- Short paragraphs and bullet points for scannability
- Action-oriented CTAs with clear next steps
- Numbers/stats when relevant (e.g., "Published 100+ books", "Generated X leads")

---

## 🎯 Content-to-Code Mapping (Blade Templates)

**This section shows agents exactly where to place content in the code:**

### Homepage (`resources/views/pages/home.blade.php`)
```
Hero Section → hero-section.blade.php
├─ Headline: "Publish Your Book. Get It Seen."
├─ Subheading: Use exact PDF text
└─ CTAs: "Get a free strategy call" (primary), "Request a quote" (secondary)

Value Props → Use component: value-props-section.blade.php
├─ Title: "Stop Guessing Your Way Through Publishing"
└─ Bullet points: Use exact PDF text

5-Step Journey → journey-timeline.blade.php
├─ Loop through 5 steps array from database or hardcoded
├─ Display: Step number, title, description
└─ Include CTA at bottom

Testimonials Carousel → testimonial-carousel.blade.php
├─ Display 4 testimonials from testimonials table
├─ Show: Avatar, quote, author name, rating
└─ Auto-rotate testimonials

Services Grid → services-grid.blade.php
├─ Display 9 services in 3-column layout
├─ Each card: Icon, title, description, link
└─ Links to individual service pages

FAQ Accordion → faq-accordion.blade.php
├─ Display 8 FAQ items
├─ Use Alpine.js for toggle functionality
└─ All copy from Content Framework above

Final CTA Banner → cta-banner.blade.php
└─ Text: "Get a free consultation"
```

### Service Pages Template (`resources/views/pages/services/{service}.blade.php`)
```
Each service page follows same structure:

Hero Section → service-hero.blade.php
├─ Service title
├─ Tagline/headline
└─ Subheading

Service Description → Use exact PDF content for that service

Benefits Section → benefits-list.blade.php
├─ "What You Get" section with bullet points
└─ All bullets from Content Framework

CTA Button → cta-button.blade.php
├─ Context-specific CTA ("Publish My Book", "Launch My Podcast", etc.)
└─ Link to contact form with service pre-filled
```

### Contact Page (`resources/views/pages/contact.blade.php`)
```
Page Structure:
├─ Headline: "Let's Bring Your Book to Life"
├─ Description: Use exact PDF text
├─ contact-form.blade.php component
│  ├─ Full Name field (required)
│  ├─ Email field (required, email validation)
│  ├─ Phone field (required)
│  ├─ Message/Idea textarea
│  └─ Submit button
└─ Success message display
```

### Footer (`resources/views/layouts/components/footer.blade.php`)
```
Footer Structure (4 columns):

Column 1: About
├─ "We help authors to turn ideas..."
└─ Services list (all 9 services)

Column 2: Quick Links
├─ Home, About, Blog, Contact, FAQs

Column 3: Contact Info
├─ Email, Phone, Locations

Column 4: Legal
├─ Terms, Privacy, Refund Policy

Bottom: "Book free Strategy Call" CTA Button
```

### Database Seeding Structure

**Testimonials Table** (`database/seeders/TestimonialSeeder.php`):
```php
[
    'client_name' => 'James Carter',
    'quote' => 'I had no idea where to start...',
    'service' => 'Book Publishing',
    'rating' => 5,
    'avatar_url' => '/images/testimonials/james-carter.jpg'
],
// ... repeat for Emma, Daniel, Olivia
```

**FAQs Table** (`database/seeders/FAQSeeder.php`):
```php
[
    'question' => 'How do I publish a book if I have no experience?',
    'answer' => 'You don\'t need prior experience...',
    'category' => 'publishing',
    'order' => 1
],
// ... repeat for all 8 FAQs
```

**Services Table** (`database/seeders/ServiceSeeder.php`):
```php
[
    'slug' => 'book-publishing',
    'name' => 'Book Publishing',
    'description' => 'Publish Your Book Professionally...',
    'icon' => 'book-open',
    'url' => '/services/publishing'
],
// ... repeat for all 9 services
```

---

## Implementation Phases

### Phase 1: Foundation & Setup (Day 1)
1. Initialize Laravel project with full folder structure
2. Set up database schema (migrations for Leads, Testimonials, FAQs, Services)
   - **Seed data from Content Framework**: 4 testimonials, 8 FAQs, 9 services
3. Configure Tailwind CSS + custom Neo Brutalism CSS
4. Create base layout (app.blade.php)
5. Set up routing structure (routes/web.php)
   - Routes: /, /services, /services/{slug}, /about, /contact, /blog

**Content Deliverables**:
- ✅ Database populated with all testimonials from Content Framework
- ✅ All 9 services in database with descriptions from PDF
- ✅ All 8 FAQs seeded into database
- ✅ Routes configured and accessible

**Deliverable**: Working Laravel project with routes, database seeded with client content

---

### Phase 2: Component Library (Day 1-2)
1. Build reusable components using content from Content Framework:
   - `navbar.blade.php` - Navigation menu with service dropdown
   - `footer.blade.php` - Use exact footer content from framework
   - `hero-section.blade.php` - "Publish Your Book. Get It Seen." hero
   - `service-card.blade.php` - Display service with icon + title + description from DB
   - `testimonial-card.blade.php` - Show testimonial with client quote + name from DB
   - `faq-accordion.blade.php` - Display FAQ questions/answers from DB with Alpine.js toggle
   - `cta-button.blade.php` - Primary/secondary variants for CTAs
   - `contact-form.blade.php` - Form with validation (Name, Email, Phone, Message)

2. Create value prop components:
   - `value-props-section.blade.php` - "Stop Guessing..." section
   - `journey-timeline.blade.php` - 5-step publishing journey

3. Apply Neo Brutalism styling to all components:
   - Sharp corners (border-radius: 0-2px), solid borders (1-2px)
   - High contrast Navy (#0F1928) + Purple (#D946A6)
   - Bold typography: Poppins Bold for headings, Inter Regular for body

**Content Implementation**:
- Testimonials pulled from database (4 total from PDF)
- All CTAs use exact text from Content Framework
- Form fields match contact page specification

**Deliverable**: Component library with all content framework integrated

---

### Phase 3: Homepage (Day 2-3)
Build homepage (`resources/views/pages/home.blade.php`) with all sections:

1. **Hero Section**
   - Headline: "Publish Your Book. Get It Seen." (from Content Framework)
   - Subheading: Exact text from PDF
   - CTAs: "Get a free strategy call" + "Request a quote"

2. **Stop Guessing Value Props**
   - Use value-props-section component
   - 3 bullet points from Content Framework

3. **5-Step Publishing Journey**
   - Use journey-timeline component
   - Steps 1-5 with descriptions from Content Framework
   - CTA: "Get a free strategy call"

4. **Testimonials Section**
   - Use testimonial-carousel component
   - Display 4 testimonials from database (seeded in Phase 1)
   - Auto-rotate using Alpine.js

5. **Services Overview**
   - Use services-grid component (3 columns)
   - Display all 9 services from database
   - Each card links to /services/{slug}

6. **FAQ Section**
   - Use faq-accordion component
   - Display 8 FAQs from database
   - Toggle functionality with Alpine.js

7. **Final CTA Banner**
   - Headline: "Get a free consultation" (from Content Framework)

**Content Sources**:
- All text from "Content Framework & Mapping" section above
- Testimonials from Testimonials table
- FAQs from FAQs table
- Services from Services table

**Neo Brutalism Design**:
- Bold Navy headlines (Poppins Bold 32-48px)
- Sharp-edged cards with 1-2px borders
- High contrast Navy/White backgrounds
- Purple CTAs with no hover gradients (use darker purple instead)
- Geometric layout with visible grid structure

**Deliverable**: Fully functional, Neo-Brutalism styled homepage with all client content

---

### Phase 4: Service Pages (Day 3-4)
Create service pages using the template pattern (`resources/views/pages/services/{service}.blade.php`):

**Service Pages to Build (9 total)**:
1. Book Publishing - "Publish Your Book Professionally Without Stress"
2. Book Marketing - "If Your Book Isn't Visible, It Won't Sell"
3. Book Writing/Ghostwriting - "Turn Your Idea Into a Professionally Written Book"
4. Audiobook Services - "Turn Your Book Into a Powerful Audio Experience"
5. Book Editing - "Polish Your Manuscript to Perfection"
6. Author Website Development - "Build Your Personal Author Brand Online"
7. Book Printing - "Expand Your Reach Beyond Books" [Note: Map to similar content from PDF]
8. Podcast Production - "Expand Your Reach Beyond Books"
9. Book Illustration & Design - [Generate matching style from existing content]

**Each Service Page Structure** (use Content-to-Code Mapping):
1. Service hero with title and tagline from Content Framework
2. Service description (exact copy from PDF)
3. "What You Get" section with bullet points (from PDF for that service)
4. "Why Authors Choose Us" section with benefits
5. CTA button contextual to service (e.g., "Publish My Book", "Create My Audiobook")
6. Link to contact form with service pre-selected

**Content Implementation**:
- Use exact copy from "SERVICE PAGES CONTENT" section in Content Framework above
- For services not in PDF (Book Printing, Book Illustration), generate matching tone/style
- All CTAs link to /contact with service parameter: /contact?service=book-publishing

**Design Elements**:
- Consistent layout across all service pages
- Neo Brutalism styling (sharp borders, high contrast, bold typography)
- Service icon in hero section
- Trust badges: "Professional standards", "Faster launch", "Optimized results"

**Deliverable**: 8-9 service pages with consistent layout, Neo Brutalism design, client content

---

### Phase 5: Contact & Lead Capture (Day 4)
Build contact page (`resources/views/pages/contact.blade.php`) with lead database storage:

**Page Content** (from Content Framework):
```
Headline: "Let's Bring Your Book to Life"
Description: "Tell us about your project, and we'll give you a clear, actionable plan 
to write, publish, and grow your book."
```

**Contact Form** (`resources/views/components/contact-form.blade.php`):
- Full Name field (required)
- Email Address field (required, email validation)
- Phone Number field (required)
- Message/Idea textarea (required)
- Service dropdown (pre-filled from query param if /contact?service=book-publishing)
- CSRF token protection
- Submit button: "Book a Free Consultation"

**Backend Implementation** (`app/Http/Controllers/ContactController.php`):
1. Validate all form fields:
   - Name: required, min 2 chars
   - Email: required, valid email format
   - Phone: required, valid phone format
   - Message: required, min 10 chars
   
2. Store Lead in database:
   - Create `app/Models/Lead.php`
   - Fields: name, email, phone, message, service, source_page, created_at
   - Add validation rules
   
3. Send email notification to admin:
   - New lead email with all form data
   - Use Laravel Mail with Mailable: `app/Mail/NewLeadNotification.php`
   - Email template in `resources/views/emails/new-lead.blade.php`

4. Send confirmation email to user:
   - Thank you message
   - Next steps: "We'll contact you within 24 hours"
   - Link to book consultation: "Book Your Free Call"

5. Return success response:
   - Display success message on contact page
   - Redirect to thank you page after 2 seconds: /thank-you
   - Clear form after submission

**Database Migration** (`database/migrations/create_leads_table.php`):
```php
Schema::create('leads', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->string('phone');
    $table->text('message');
    $table->string('service')->nullable();
    $table->string('source_page')->nullable();
    $table->timestamps();
});
```

**Deliverable**: Working contact form with lead capture, validation, emails, database storage

---

### Phase 6: SEO & Meta Tags (Day 4-5)
Implement comprehensive SEO optimization for all pages:

**1. Dynamic Meta Tags** (add to `app.blade.php` layout):
```html
<meta name="title" content="{{ $page_title ?? 'Publish Your Book - Professional Publishing Services' }}">
<meta name="description" content="{{ $page_description ?? 'We help authors write, publish, market, and scale their books.' }}">
<meta name="keywords" content="{{ $page_keywords ?? 'book publishing, ghostwriting, audiobook production' }}">

<!-- Open Graph Tags -->
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $page_title }}">
<meta property="og:description" content="{{ $page_description }}">
<meta property="og:image" content="{{ $page_image ?? '/images/og-default.jpg' }}">
<meta property="og:url" content="{{ url()->current() }}">
```

**2. Meta Tags Per Page**:

Homepage:
- Title: "Publish Your Book. Get It Seen. - Professional Publishing Services"
- Description: "Helping authors write, publish, market and scale their books. Free strategy call + 5-step publishing journey."
- Keywords: book publishing, ghostwriting, book marketing, audiobook production, author services

Services Main:
- Title: "Publishing & Author Services | Book Publishing Agency"
- Description: "Professional book publishing, marketing, writing, audiobook production, editing, and author website development."

Each Service Page:
- Title: "[Service Name] | Professional Publishing Services"
- Description: Service-specific description from Content Framework

Contact Page:
- Title: "Contact Us - Free Book Publishing Consultation"
- Description: "Book a free consultation with our publishing experts. Let's turn your book idea into reality."

**3. Structured Data & Schema Markup** (add to layout):
- LocalBusiness schema (company info)
- Service schema (each service page)
- FAQ schema (homepage FAQ section)
- Add to `resources/views/components/schema-markup.blade.php`

Example LocalBusiness Schema:
```json
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Publishing Agency Name",
  "image": "/images/logo.jpg",
  "description": "Professional book publishing and author services",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "London, UK | New York, USA",
    "addressCountry": "US/UK"
  },
  "telephone": "+1-XXX-XXX-XXXX",
  "priceRange": "$$$"
}
```

**4. XML Sitemap** (`public/sitemap.xml`):
- Include all pages: homepage, 9 services, contact, about, blog index
- Auto-generate in controller or command

**5. Robots.txt** (`public/robots.txt`):
```
User-agent: *
Allow: /
Disallow: /admin
Disallow: /contact/thank-you

Sitemap: https://yourdomain.com/sitemap.xml
```

**6. Canonical URLs**:
- Add to every page to prevent duplicate content
- `<link rel="canonical" href="{{ url()->current() }}">`

**7. SEO Configuration** (`config/seo.php`):
```php
return [
    'site_name' => 'Publishing Agency',
    'site_description' => 'We help authors write, publish, market and scale their books',
    'default_image' => '/images/og-default.jpg',
    'social_media' => [
        'facebook' => 'https://facebook.com/...',
        'twitter' => 'https://twitter.com/...',
        'linkedin' => 'https://linkedin.com/...',
    ]
];
```

**Deliverable**: SEO-optimized structure with meta tags, schema markup, sitemap, robots.txt

---

### Phase 7: Polish & Optimization (Day 5)
Final audit and optimization to production-readiness:

**1. Design & Accessibility Audit** (use `web-design-guidelines` skill):
- [ ] Color contrast verified (Navy/White 15.5:1 ✅, Purple/White 6.2:1 ✅)
- [ ] All CTAs are 44px+ tap target size (mobile-friendly)
- [ ] Keyboard navigation works (Tab through all interactive elements)
- [ ] Focus indicators visible on all buttons
- [ ] Form labels properly associated with inputs
- [ ] Heading hierarchy correct (H1, H2, H3 semantic)
- [ ] WCAG 2.2 AA compliance verified
- [ ] No horizontal scroll on any breakpoint

**2. Responsive Design Audit**:
- [ ] Mobile (375px): Hamburger menu, stacked layout, readable text
- [ ] Tablet (768px): 2-column grids where applicable
- [ ] Desktop (1200px): Full 3-column grids, optimal spacing
- [ ] All images scale correctly
- [ ] Touch-friendly buttons on mobile
- [ ] Navigation dropdown works on touch devices

**3. Performance Optimization**:
- [ ] CSS minified and compiled (npm run build)
- [ ] JavaScript bundles optimized
- [ ] Images optimized and lazy-loaded
- [ ] Web fonts loaded efficiently (Google Fonts async)
- [ ] Cache headers configured
- [ ] Gzip compression enabled
- [ ] Remove unused CSS (PurgeCSS)

**4. Cross-Browser Testing**:
- [ ] Chrome/Chromium (latest)
- [ ] Firefox (latest)
- [ ] Safari (latest)
- [ ] Mobile Safari (iOS)
- [ ] Chrome Mobile (Android)

**5. Content Verification**:
- [ ] All text from Content Framework present and accurate
- [ ] All testimonials from PDF displayed correctly
- [ ] All 9 services visible and linked
- [ ] All 8 FAQs functional
- [ ] CTA buttons functional and link correctly
- [ ] Form submission working and saving to database

**6. Lighthouse Score Verification** (use `web-design-guidelines` skill):
- [ ] Performance: ≥85
- [ ] Accessibility: ≥90
- [ ] Best Practices: ≥90
- [ ] SEO: ≥90

Run: `npm install -g lighthouse`
Then: `lighthouse https://yoursite.com --view`

**7. Email & Notifications Testing**:
- [ ] Admin receives notification when form submitted
- [ ] Lead confirmation email sent to user
- [ ] Email formatting correct (no broken images, links)
- [ ] Test with spam filters (SpamAssassin)

**8. Database & Data Quality**:
- [ ] All testimonials in database with correct fields
- [ ] All FAQs in database with correct questions/answers
- [ ] All services properly indexed and searchable
- [ ] Sample lead data visible in database

**9. Analytics & Tracking Setup**:
- [ ] Google Analytics configured (if required by client)
- [ ] Contact form tracking setup (track submissions)
- [ ] CTA button click tracking
- [ ] Service page view tracking

**10. Security Checklist**:
- [ ] CSRF token on all forms (Laravel default)
- [ ] SQL injection protection (Laravel Eloquent)
- [ ] XSS protection (Blade escaping)
- [ ] Rate limiting on contact form
- [ ] .env file not committed to version control
- [ ] Database backups configured

**11. Final Content Polish**:
- [ ] Proofread all copy for typos/grammar
- [ ] Verify all client names in testimonials
- [ ] Check all CTA button text matches framework
- [ ] Ensure consistent capitalization/punctuation
- [ ] Verify all links work (404 check)

**12. Documentation & Handover**:
- [ ] README.md with setup instructions
- [ ] Database schema documented
- [ ] API endpoints documented (if any)
- [ ] Environment variables documented (.env.example)
- [ ] Deployment instructions for hosting

**Deliverable**: Production-ready website with Lighthouse >85, WCAG AA compliance, all content verified

---

## Relevant Files & Architecture

**Database Models** (to create in Phase 1):
- `Lead.php` - Store form submissions
- `Testimonial.php` - Manage customer testimonials
- `Service.php` - Store service details

**Controllers** (logic):
- `PageController.php` - Render homepage, about, blog
- `ServiceController.php` - Render individual service pages
- `ContactController.php` - Handle form submissions

**Views** (Blade templates):
- Base layout in `resources/views/layouts/app.blade.php`
- Component partials in `resources/views/components/`
- Page views in `resources/views/pages/`

**Styling**:
- Tailwind CSS config: `tailwind.config.js`
- Custom Neo Brutalism overrides in `resources/css/brutalism.css`

---

## Verification Steps

### Phase 1 Verification
- [ ] Laravel project runs without errors
- [ ] Database schema created and migrations applied
- [ ] Routes are accessible (test /home, /services, /contact)

### Phase 2 Verification
- [ ] All components render correctly
- [ ] Responsive on mobile (375px), tablet (768px), desktop (1200px)
- [ ] Neo Brutalism styling applied (sharp corners, bold text, high contrast)
- [ ] Accessibility: WCAG AA contrast ratios met

### Phase 3 Verification
- [ ] Homepage loads all sections
- [ ] CTA buttons navigate correctly
- [ ] FAQ accordion toggles on click
- [ ] Testimonials carousel auto-rotates
- [ ] Mobile responsive (hamburger menu on <768px)

### Phase 4 Verification
- [ ] All 8 service pages exist and load
- [ ] Service content is consistent in layout
- [ ] CTAs redirect to contact form

### Phase 5 Verification
- [ ] Form validates (required fields, email format)
- [ ] Form submission saves to database
- [ ] Admin receives email notification
- [ ] User sees success message
- [ ] Spam protection (CSRF token) works

### Phase 6 Verification
- [ ] Meta tags visible in page source (view-source in browser)
- [ ] OG tags work (test with Facebook Open Graph Debugger)
- [ ] Sitemap.xml is valid
- [ ] Schema markup validated (Google Structured Data Tester)

### Phase 7 Verification
- [ ] Lighthouse score >85 (performance, SEO, accessibility)
- [ ] Mobile-first design: no horizontal scroll
- [ ] All fonts loaded (check Network tab in DevTools)
- [ ] Images lazy-load correctly
- [ ] Keyboard navigation works (Tab through all interactive elements)

---

## Color Decisions

✅ **Chosen Palette**: Navy + Purple
- **Why**: Matches brand colors from design guide, creates high contrast for Neo Brutalism
- **Primary Use**: Navy for backgrounds, text, borders
- **Accent Use**: Purple for CTAs, highlights, hover states
- **Contrast Ratio**: Navy text on white = 15.5:1 (AAA compliant), Purple CTA on white = 6.2:1 (AA compliant)

---

## Typography Decisions

✅ **Chosen Fonts**:
1. **Headings**: Poppins or Inter Bold (geometric, modern) + Space Mono for display headlines (raw, technical)
2. **Body**: Inter or Poppins Regular (clean, readable, 16px base)
3. **Why**: Poppins/Inter are modern and geometric (fits Neo Brutalism), Space Mono adds raw technical feel for headers

**Font Pairing Example**:
- H1 Hero: Space Mono Bold 48px
- H2 Section: Poppins Bold 32px
- Body: Inter Regular 16px
- Small text: Inter Regular 14px

---

## Key Decisions & Scope

**Included:**
- ✅ 11 pages (HomePage + 8 Services + Contact + About + Blog structure)
- ✅ Lead capture form with database storage
- ✅ Testimonials section
- ✅ FAQ accordion
- ✅ Mobile responsive
- ✅ Neo Brutalism design applied
- ✅ SEO meta tags & schema markup
- ✅ Email notifications on form submission
- ✅ WCAG 2.2 AA accessibility compliance

**Excluded (Phase 2 potential):**
- ❌ Blog post management system (structure ready, content not yet)
- ❌ Lead management dashboard
- ❌ Payment/order system (out of scope for lead gen site)
- ❌ Advanced analytics
- ❌ Multi-language support

---

## Technical Notes

1. **PHP Version**: Ensure PHP 8.1+ on hosting
2. **Laravel Version**: 11.x (latest stable)
3. **Hosting**: Can run on shared hosting (GoDaddy, Hostinger, Bluehost) or VPS
4. **Database**: SQLite for dev, MySQL for production
5. **Email**: Configure SMTP or use Mailtrap for testing
6. **Asset Compilation**: Use Laravel Mix or Vite for CSS/JS compilation

---

## 🤖 Agent Execution Guide

**When implementing this project, the agent MUST follow this skill usage pattern:**

### Phase 1: Foundation & Setup
1. **First**: Use `project-setup-info-local` to initialize Laravel project with full folder structure
2. **Then**: Use `ui-ux-pro-max` to generate Tailwind CSS configuration with Neo Brutalism overrides

### Phase 2: Component Library
1. **First**: Use `ui-ux-pro-max` to design and generate component styles (cards, buttons, forms, etc.)
2. **Then**: Use `web-design-guidelines` to audit component code for accessibility compliance
3. **Validate**: Ensure all components meet WCAG 2.2 AA standards

### Phase 3: Homepage Development
1. **Design**: Use `ui-ux-pro-max` to design homepage sections with Neo Brutalism aesthetic
2. **Audit**: Use `web-design-guidelines` to review responsive design and accessibility
3. **Verify**: Check Lighthouse scores (>85) and color contrast ratios

### Phase 4-5: Service Pages & Content Strategy
1. **Research**: Use `keyword-research` to identify SEO keywords for each service page
2. **Content**: Structure pages around high-value keywords and search intent
3. **Review**: Use `web-design-guidelines` for consistency and accessibility

### Phase 6-7: SEO & Polish
1. **Keywords**: Use `keyword-research` for blog content planning and topic clusters
2. **Accessibility**: Use `web-design-guidelines` for final WCAG AA audit
3. **Performance**: Optimize images, CSS, and JavaScript (Lighthouse >85)

---

## 📋 Quick Reference: Which Skill to Use When

| Task | Skill | Trigger |
|------|-------|---------|
| Design UI components with Neo Brutalism | `ui-ux-pro-max` | "Design component", "Create card styles", "Generate color system" |
| Validate accessibility & Web guidelines | `web-design-guidelines` | "Audit accessibility", "Check WCAG compliance", "Review UI guidelines" |
| Initialize project structure | `project-setup-info-local` | "Set up project", "Create folder structure", "Initialize Laravel" |
| Research keywords for content/SEO | `keyword-research` | "Research keywords", "Find content topics", "Identify search terms" |

---

## 🚀 How Agent Should Use Skills

**Example Workflow During Phase 3 (Homepage Development):**

```
Agent: "I'll now build the homepage using the design system."

1. Call ui-ux-pro-max skill:
   "Design homepage sections with Neo Brutalism: 
   - Hero section with 48px Space Mono bold headline
   - 3-column service grid with sharp borders
   - FAQ accordion with high contrast
   - CTA buttons in purple #D946A6"

2. After building HTML/CSS, call web-design-guidelines skill:
   "Audit homepage for accessibility:
   - Check color contrast (navy/white = 15.5:1, purple/white = 6.2:1)
   - Verify responsive design (375px, 768px, 1200px)
   - Validate keyboard navigation"

3. Then fix any issues and re-verify until Lighthouse score ≥85
```

**Critical Rule**: DO NOT skip the `web-design-guidelines` audit. Every UI deliverable must be verified for accessibility and compliance before marking Phase as complete.

---

## Files & Commands Reference

**Design System Reference**:
- Tailwind Config: `tailwind.config.js` (extend with custom Neo Brutalism theme)
- Brutalism CSS: `resources/css/brutalism.css` (sharp corners, raw borders, stark colors)
- Font Setup: Include Poppins, Inter, Space Mono from Google Fonts

**Database Seeding** (for testing):
```bash
php artisan migrate
php artisan db:seed
```

**Development Server**:
```bash
npm run dev  # Watch CSS/JS
php artisan serve  # Start Laravel dev server
```

**Deployment Checklist**:
```bash
npm run build  # Compile production CSS/JS
php artisan optimize  # Cache configuration
php artisan config:cache  # Cache config files
```
