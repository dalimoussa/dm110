#!/bin/bash

zip `date +%Y%m%d%H%M%S`.zip -r ./public_html \
-x public_html/__pma\* \
-x public_html/__trash\* \
-x public_html/_notes\* \
-x public_html/AnAnalyzer\* \
-x public_html/dm110hp\* \
-x public_html/cgi-bin\* \
-x public_html/*bk150420\* \
