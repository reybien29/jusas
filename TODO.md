# Task: Fix Vite/TailwindCSS enhanced-resolve error

## Plan Steps (Tailwind v4 fix):
- [ ] 1. Create tailwind.config.js with content paths
- [ ] 2. Update vite.config.js: Add resolve alias for 'tailwindcss'
- [ ] 3. Test: npm install &amp;&amp; npm run build
- [ ] 4. If fails, cleanup public/build &amp; retry
- [ ] 5. Test dev server: npm run dev
- [ ] 6. Complete task

## Progress:
- [x] 1. Create tailwind.config.js ✓
- [x] 2. Update vite.config.js: Add resolve alias ✓
- [ ] 3. Test: npm install &amp;&amp; npm run build → Failed (v4 unstable)

**Progress (v3 stable):**
- [x] 4. Update package.json ✓
- [x] 5. npm install ✓
- [x] 6. Update vite.config.js (remove leftover tailwindcss() call) ✓
- [x] 7. Create postcss.config.js ✓
- [x] 8. Update resources/css/app.css to v3 syntax ✓
- [x] 9. Test npm run build → Success!
- [x] 10. Test npm run dev → Success! (dev server running on http://localhost:5174/, Laravel on 8000)

**Complete!** Vite/Tailwind build fixed by switching to stable Tailwind v3 + PostCSS.
Tailwind warning normal (no utilities in scanned files yet; add classes to views to resolve).


- [ ] 5. npm install
- [ ] 6. Update vite.config.js: Remove v4 plugin/alias, add PostCSS
- [ ] 7. Create postcss.config.js
- [ ] 8. Update resources/css/app.css to v3 syntax
- [ ] 9. Test npm run build
- [ ] 10. npm run dev test

Current: Step 4


