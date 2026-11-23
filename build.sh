#!/bin/sh

rm -rf out/
mkdir out/
cp -r * out/

# Execute each .php file and save its output as .html
find out -type f -name '*.php' | while read file; do
    out_file=$(echo "$file" | sed -e 's/\.php$/.html/')
    mkdir -p "$(dirname "$out_file")"
    (cd "$(dirname "$file")" && php -f "$(basename "$file")") > "$out_file"
done

# Remove raw .php files from the output folder
find out -type f -name '*.php' -delete

# Other cleanup
rmdir out/out/
rm out/build.sh
rm -r out/includes/
