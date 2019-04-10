DGC
===

Hi.

Development
---------------
You will find a "build" folder, this is where you will find all the good things like a home for SASS, JS and a sprinkle of GULP.

Build Folders:
- CSS: When SASS is compiled it will output in this folder.
- JS: Currently not used.
- Node_modules: NPM packages get installed here, not committed to GitHub.
- SASS: Home to all the SASS files.

Requirements:
You will need SASS and GULP installed on your development machine, some handy link:
- SASS:	https://sass-lang.com/
- GULP:	https://gulpjs.com/
If you are new to GULP, I suggest reading - https://css-tricks.com/gulp-for-beginners/

Gulp Tasks Included:
- Gulp SASS: Allows you to compile SASS to css.
- GULP Auto prefixer: Add browser specific support.
- GULP Minify: Minifies files to help reduce load time.
- GULP Watch: Watches for changes and performs tasks.
Each task has a link to the npm package with install instructions (if needed).

Dev Time:
Once you have gulp running, you just need to run 'gulp watch' from the cmd promot while in the build folder. Now you can make changes and everything will recompile.

Credits
- _s is the base theme by Automattic - https://underscores.me/
