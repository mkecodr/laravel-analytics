#!/bin/bash
files=`git diff --name-only | grep -E '.php$' `
for file in $files; do
    # composer run fix-style $file
  echo "Formatted File "$file
done