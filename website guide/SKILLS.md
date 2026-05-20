# Professional Book Writing Services

## Mission
Create implementation-ready, token-driven UI guidance for Professional Book Writing Services that is optimized for consistency, accessibility, and fast delivery across marketing site.

## Brand
- Product/brand: Professional Book Writing Services
- URL: https://www.bookwritingmaestros.com/
- Audience: authenticated users and operators
- Product surface: marketing site

## Style Foundations
- Visual style: clean, functional, implementation-oriented
- Main font style: `font.family.primary=-apple-system`, `font.family.stack=-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji`, `font.size.base=16px`, `font.weight.base=400`, `font.lineHeight.base=24px`
- Typography scale: `font.size.xs=11px`, `font.size.sm=12px`, `font.size.md=14px`, `font.size.lg=16px`, `font.size.xl=17px`, `font.size.2xl=18px`, `font.size.3xl=20px`, `font.size.4xl=21px`
- Color palette: `color.text.primary=#212529`, `color.text.secondary=#ffffff`, `color.border.muted=#333333`, `color.surface.base=#000000`, `color.surface.raised=#901114`, `color.surface.strong=#f0f0f0`
- Spacing scale: `space.1=2px`, `space.2=3px`, `space.3=5px`, `space.4=6px`, `space.5=7px`, `space.6=8px`, `space.7=10px`, `space.8=12px`
- Radius/shadow/motion tokens: `radius.xs=3px`, `radius.sm=10px`, `radius.md=25px`, `radius.lg=30px`, `radius.xl=50px` | `shadow.1=rgba(0, 0, 0, 0.31) 0px 14px 29px 0px`, `shadow.2=rgba(0, 0, 0, 0.31) 0px 24px 19px -20px` | `motion.duration.instant=150ms`, `motion.duration.fast=200ms`, `motion.duration.normal=300ms`, `motion.duration.slow=400ms`, `motion.duration.slower=1500ms`

## Accessibility
- Target: WCAG 2.2 AA
- Keyboard-first interactions required.
- Focus-visible rules required.
- Contrast constraints required.

## Writing Tone
Concise, confident, implementation-focused.

## Rules: Do
- Use semantic tokens, not raw hex values, in component guidance.
- Every component must define states for default, hover, focus-visible, active, disabled, loading, and error.
- Component behavior should specify responsive and edge-case handling.
- Interactive components must document keyboard, pointer, and touch behavior.
- Accessibility acceptance criteria must be testable in implementation.

## Rules: Don't
- Do not allow low-contrast text or hidden focus indicators.
- Do not introduce one-off spacing or typography exceptions.
- Do not use ambiguous labels or non-descriptive actions.
- Do not ship component guidance without explicit state rules.

## Guideline Authoring Workflow
1. Restate design intent in one sentence.
2. Define foundations and semantic tokens.
3. Define component anatomy, variants, interactions, and state behavior.
4. Add accessibility acceptance criteria with pass/fail checks.
5. Add anti-patterns, migration notes, and edge-case handling.
6. End with a QA checklist.

## Required Output Structure
- Context and goals.
- Design tokens and foundations.
- Component-level rules (anatomy, variants, states, responsive behavior).
- Accessibility requirements and testable acceptance criteria.
- Content and tone standards with examples.
- Anti-patterns and prohibited implementations.
- QA checklist.

## Component Rule Expectations
- Include keyboard, pointer, and touch behavior.
- Include spacing and typography token requirements.
- Include long-content, overflow, and empty-state handling.
- Include known page component density: cards (248), links (130), buttons (94), inputs (26), lists (20), tables (4), navigation (2).

- Extraction diagnostics: Audience and product surface inference confidence is low; verify generated brand context.

## Quality Gates
- Every non-negotiable rule must use "must".
- Every recommendation should use "should".
- Every accessibility rule must be testable in implementation.
- Teams should prefer system consistency over local visual exceptions.
