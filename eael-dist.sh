#! /bin/bash
PLUGINSLUG="essential-addons-for-elementor-lite"
BUILDSLUG="essential-addons-elementor-free"

echo "Remove old file"
rm -rf ../${BUILDSLUG}
rm -rf ../${BUILDSLUG}.zip
cp -r ../${PLUGINSLUG} ../${BUILDSLUG}

echo "Starting remove unnecessary file/folder"

# remove unnecessary file
cd ../
rm -rf ${BUILDSLUG}/node_modules
rm -rf ${BUILDSLUG}/.git
rm -rf ${BUILDSLUG}/.babelrc
rm -rf ${BUILDSLUG}/.gitignore
rm -rf ${BUILDSLUG}/package.json
rm -rf ${BUILDSLUG}/src
rm -rf ${BUILDSLUG}/package-lock.json
rm -rf ${BUILDSLUG}/postcss.config.js
rm -rf ${BUILDSLUG}/webpack.config.js
rm -rf ${BUILDSLUG}/eael-dist.sh

echo "Start zip process"
#zip folder
zip -rq ${BUILDSLUG}.zip ${BUILDSLUG}/*
#remove build folder
echo "Complete zip process"
echo "Remove temp folder"
rm -rf ${BUILDSLUG}

