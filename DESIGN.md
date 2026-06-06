---
name: Industrial Precision
colors:
  surface: '#f8f9fa'
  surface-dim: '#d9dadb'
  surface-bright: '#f8f9fa'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f3f4f5'
  surface-container: '#edeeef'
  surface-container-high: '#e7e8e9'
  surface-container-highest: '#e1e3e4'
  on-surface: '#191c1d'
  on-surface-variant: '#44464f'
  inverse-surface: '#2e3132'
  inverse-on-surface: '#f0f1f2'
  outline: '#757780'
  outline-variant: '#c5c6d1'
  surface-tint: '#475d93'
  primary: '#001949'
  on-primary: '#ffffff'
  primary-container: '#172f63'
  on-primary-container: '#8398d3'
  inverse-primary: '#b1c5ff'
  secondary: '#4a5f81'
  on-secondary: '#ffffff'
  secondary-container: '#c0d5fd'
  on-secondary-container: '#475c7e'
  tertiary: '#151d26'
  on-tertiary: '#ffffff'
  tertiary-container: '#2a323c'
  on-tertiary-container: '#929aa6'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#dae2ff'
  primary-fixed-dim: '#b1c5ff'
  on-primary-fixed: '#001847'
  on-primary-fixed-variant: '#2f457a'
  secondary-fixed: '#d5e3ff'
  secondary-fixed-dim: '#b2c7ef'
  on-secondary-fixed: '#021c3a'
  on-secondary-fixed-variant: '#324768'
  tertiary-fixed: '#dbe3f0'
  tertiary-fixed-dim: '#bfc7d4'
  on-tertiary-fixed: '#141c25'
  on-tertiary-fixed-variant: '#3f4752'
  background: '#f8f9fa'
  on-background: '#191c1d'
  surface-variant: '#e1e3e4'
typography:
  display-lg:
    fontFamily: Manrope
    fontSize: 48px
    fontWeight: '700'
    lineHeight: 56px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Manrope
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
    letterSpacing: -0.01em
  headline-lg-mobile:
    fontFamily: Manrope
    fontSize: 28px
    fontWeight: '600'
    lineHeight: 36px
  headline-md:
    fontFamily: Manrope
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
  label-md:
    fontFamily: JetBrains Mono
    fontSize: 14px
    fontWeight: '500'
    lineHeight: 20px
    letterSpacing: 0.02em
  label-sm:
    fontFamily: JetBrains Mono
    fontSize: 12px
    fontWeight: '500'
    lineHeight: 16px
    letterSpacing: 0.05em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base: 4px
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  2xl: 48px
  3xl: 64px
  grid-columns: '12'
  grid-gutter: 24px
  grid-margin: 32px
---

## Brand & Style

The design system is anchored in **Industrial Precision**, a style that merges high-end corporate stability with the clean, functional aesthetics of modern engineering. It targets professionals in finance, technology, and industrial sectors who value reliability, clarity, and a sense of institutional permanence.

The visual narrative is built on a **Modern Corporate** foundation, utilizing structured layouts, significant whitespace, and a disciplined application of depth. The emotional response should be one of "quiet confidence"—never flashy, but deeply competent. Surfaces are treated with subtle tonal shifts rather than aggressive shadows, ensuring the UI feels grounded and intentional.

## Colors

The palette is dominated by **Navy Precision (#172F63)**, a deep, authoritative blue that serves as the primary anchor for the brand. This color is used for key actions, brand-critical headers, and high-emphasis states.

- **Primary (#172F63):** Used for primary buttons, active navigation states, and bold icon accents.
- **Secondary (#5C7194):** A muted slate blue used for supporting information, secondary icons, and lower-priority interactive elements.
- **Surface & Backgrounds:** We use a hierarchy of cool greys and whites to maintain an industrial feel. The main background is a crisp neutral, while containers use subtle tonal variances to establish depth.
- **Contrast:** Ensure all text on primary backgrounds meets WCAG AA standards. Text on #172F63 must always be pure white (#FFFFFF).

## Typography

This design system utilizes a tiered typographic approach to balance modern aesthetics with technical legibility. 

**Manrope** is used for headings to provide a refined, slightly geometric character that feels contemporary yet stable. **Inter** handles the bulk of body copy for its exceptional clarity and neutral tone. For technical data, status labels, and code snippets, **JetBrains Mono** is employed to evoke an industrial, precise feel.

For mobile, large displays scale down to ensure readability within the viewport while maintaining the tight letter-spacing that defines the brand's premium look.

## Layout & Spacing

The layout follows a **Fixed-Fluid Hybrid** model. On desktop, content is contained within a 1280px max-width 12-column grid. On smaller devices, the grid transitions to 4 columns (mobile) and 8 columns (tablet) with fluid margins.

The spacing rhythm is strictly based on a **4px baseline grid**. All component heights, padding, and margins must be multiples of this base unit. This ensures a mathematical rigor to the layout that reinforces the industrial narrative. Use `lg` (24px) for most container padding and `md` (16px) for internal element spacing.

## Elevation & Depth

Hierarchy is established through **Tonal Layering** and **Soft Precision Shadows**. 

Instead of heavy blurs, we use low-opacity, multi-layered shadows that suggest a surface is only slightly raised from the background. 
- **Level 0 (Base):** Neutral background (#F8F9FA).
- **Level 1 (Cards/Surface):** Pure White (#FFFFFF) with a 1px hair-line border in a lightened version of the secondary color (#E2E8F0).
- **Level 2 (Hover/Overlay):** A soft shadow (0px 4px 12px rgba(23, 47, 99, 0.08)) that incorporates the primary navy color into the shadow tint for a more natural, cohesive feel.

## Shapes

The design system adopts a **Soft (0.25rem)** shape language. This subtle rounding removes the harshness of 90-degree angles while maintaining a professional, structured silhouette. 

- **Standard Elements:** 4px (0.25rem) border radius for buttons and inputs.
- **Large Elements:** 8px (0.5rem) border radius for cards and modals.
- **Full Rounding:** Only reserved for status "pills" or tags to differentiate them from interactive buttons.

## Components

### Buttons
- **Primary:** Background #172F63, text #FFFFFF. Sharp 4px corners. Hover state is a subtle 10% lighten of the primary color.
- **Secondary:** Border 1px #172F63, text #172F63, transparent background.
- **Ghost:** No border, text #5C7194. Used for utility actions.

### Input Fields
Inputs use a white background with a 1px border (#D1D9E6). On focus, the border transitions to #172F63 with a 2px thickness or a soft outer glow. Labels use the `label-sm` (JetBrains Mono) style for a "form-as-data" aesthetic.

### Cards
Cards are white with a subtle 1px border. No shadow is applied unless the card is interactive. Headers within cards should use the #172F63 color for the title to maintain brand presence.

### Chips & Tags
Small, 2px rounded containers. For status, use a very light tint of the primary color (5% opacity) with #172F63 text to ensure the navy blue remains the dominant visual thread.